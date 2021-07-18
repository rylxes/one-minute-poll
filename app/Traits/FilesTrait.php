<?php


namespace App\Traits;


use App\Models\AppModel;
use App\Models\Poll;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use InfyOm\Generator\Utils\ResponseUtil;
use Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;
use Symfony\Component\HttpFoundation\File\File;
use Illuminate\Http\UploadedFile;

trait FilesTrait
{
    private $isFileSuccess = false;
    private $hasFile = false;

    /**
     * Generic random strings generator for passkeys, pins, serials, etc
     *
     * @param int $xlenght length of character to generate
     * @param string $xters character base (NUM, ALPHA, ALNUM)
     * @return string xstring the generated string
     *
     */
    function generateRandomString($xlenght = 10, $xters = 'NUM')
    {
        //$xters can be NUM, ALPHA, ALPHANUM
        $xters_xbase = "";
        $xstring = "";

        if (strcasecmp($xters, 'NUM') == 0) {
            //Numerics only
            $xters_xbase = "123456789";
        } elseif (strcasecmp($xters, 'ALPHA') == 0) {
            //Alphabetic Only - certain xters omitted cos they look like nums e.g. S & 5
            $xters_xbase = "ABCDEFGHJKLMNPQRTUVWXY";
        } else {
            //Alpha-Numerics
            $xters_xbase = "ABCDEFGHJKLMNPQRTUVWXY" . "123456789";
        }

        $xter_xbase_len = strlen($xters_xbase);

        $xstring = "";
        for ($i = 1; $i <= $xlenght; $i++) {
            //use a random number to get a random alpha from $xters-xbase
            $xstring .= $xters_xbase[mt_rand(0, ($xter_xbase_len - 1))];
        }

        return $xstring;
    }

    public function nextCode()
    {
        $code = $this->generateRandomString(10, 'ALPHANUM');
        $poll = Poll::where('code', $code)->get();
        if (!$poll->isEmpty()) {
            return $this->nextCode();
        }
        return $code;
    }

    protected function createUser(array $data)
    {
        $user = User::where('email', $data['email'])->first();
        if (empty($user)) {
            $array = [
                'name' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
            ];
            //$role = Role::findByName($role, 'api');
            $user = User::create($array);
            // $user->assignRole($role);
            event(new Registered($user));
        }
        return $user;
    }


    function uploadMultipleFile(Request $request, AppModel $file, $collection, $fileName)
    {
        $this->isFileSuccess = false;
        if (!empty($request->input($fileName))) {
            $fileForUpload = $this->base64ToFile($request, $fileName);
            $this->deleteMultipleFile($file, $collection);
            $this->hasFile = true;
            try {
                $file->addMedia($fileForUpload)
                    ->toMediaCollection($collection);

                $this->isFileSuccess = true;
                if (empty($file->media)) {
                    DB::rollBack();
                    return $this->sendError("There was an issue uploading your file");
                }
            } catch (\Throwable $exception) {
                //dd($exception->getMessage());
                DB::rollBack();
                return $this->sendError($exception->getMessage());
            }
        }
    }


    function base64ToFile(Request $request, $fileName)
    {
        $base64File = $request->input($fileName);
        $extension = explode('/', mime_content_type($base64File))[1];
        $fileData = base64_decode(preg_replace('#^data:image/\w+;base64,#i', '', $base64File));
        $tmpFilePath = sys_get_temp_dir() . '/' . Str::uuid()->toString() . '.' . $extension;
        file_put_contents($tmpFilePath, $fileData);
        $tmpFile = new File($tmpFilePath);
        $fileForUpload = new UploadedFile(
            $tmpFile->getPathname(),
            $tmpFile->getFilename(),
            $tmpFile->getMimeType(),
            0,
            true // Mark it as test, since the file isn't from real HTTP POST.
        );
        return $fileForUpload;
    }

    function uploadOneFile(Request $request, AppModel $file, $collection, $fileName)
    {
        $this->isFileSuccess = false;

        if (!empty($request->input($fileName))) {
            $fileForUpload = $this->base64ToFile($request, $fileName);

            $this->deleteOneFile($file, $collection);
            $this->hasFile = true;
            try {
                $file->addMedia($fileForUpload)
                    ->toMediaCollection($collection);
                $this->isFileSuccess = true;
                if (empty($file->media)) {
                    DB::rollBack();
                    return $this->sendError("There was an issue uploading your file");
                }
            } catch (\Throwable $exception) {
                //dd($exception->getMessage());
                DB::rollBack();
                return $this->sendError($exception->getMessage());
            }
        }
    }


    function deleteOneFile(AppModel $file, $collection)
    {
        try {
            $mediaItem = $file->getMedia($collection)->first();
            $file->deleteMedia($mediaItem);
            // $file->delete();
        } catch (\Exception $exception) {

        }
    }

    function deleteMultipleFile(AppModel $file, $collection)
    {
        try {
            $mediaItem = $file->getMedia($collection);
            foreach ($mediaItem as $eachMedial) {
                $file->deleteMedia($eachMedial);
            }
            // $file->delete();
        } catch (\Exception $exception) {

        }
    }
}
