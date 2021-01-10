<?php

namespace App\Console\Commands;

use App\Models\ExamQuestion;
use App\Models\ExamScores;
use Illuminate\Console\Command;

class generateResult extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:result';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $all = ExamQuestion::all()->groupBy('user_id','exam_id','quiz_id');
       foreach ($all as $eachPack){
           $counter = 0;
           $examSco = new ExamScores();
           foreach ($eachPack as $que){
               $examSco->user_id = $que->user_id;
               $examSco->exam_id = $que->exam_id;
               $examSco->quiz_id = $que->quiz_id;
               if($que->exam_answer == $que->user_answer){
                   $counter ++;
               }
           }
           $examSco->scores =$counter ;
           $examSco->save();
       }
        dd('End');
    }
}
