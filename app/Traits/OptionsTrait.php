<?php


namespace App\Traits;


use App\Models\Poll;
use App\Models\VoteValue;
use InfyOm\Generator\Utils\ResponseUtil;
use Response;

trait OptionsTrait
{
    function generateOptions(Poll $poll, $input)
    {
        if (!empty(@$input['options'])) {
            foreach ($input['options'] as $key => $eachOptions) {
                if (!empty($eachOptions)) {
                    $vote = VoteValue::where('name', $key)->first();
                    $poll->pollOptions()->create([
                        'name' => $key,
                        'vote_value_id' => $vote->id,
                        'value' => $eachOptions,
                        'count' => 0
                    ]);
                }

            }
        } else {

            if ($input['poll_type_id'] !== 3) {
                if ($input['poll_type_id'] === 1) {
                    $this->yesNo($poll);
                }
                if ($input['poll_type_id'] === 2) {
                    $this->stars($poll);
                }
            }
        }
    }

    function yesNo(Poll $poll)
    {
        $values = [
            'Yes' => 'Yes',
            'No' => 'No',
        ];
        foreach ($values as $each) {
            $vote = VoteValue::where('name', $each)->first();
            $poll->pollOptions()->create([
                'name' => $each,
                'vote_value_id' => $vote->id,
                'value' => $each,
                'count' => 0
            ]);
        }

    }


    function stars(Poll $poll)
    {
        $values = [
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5' => '5',
        ];
        foreach ($values as $each) {
            $vote = VoteValue::where('name', $each)->first();
            $poll->pollOptions()->create([
                'name' => $each,
                'vote_value_id' => $vote->id,
                'value' => $each,
                'count' => 0
            ]);
        }

    }
}
