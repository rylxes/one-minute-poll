<?php

namespace App\Models;

use Eloquent as Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;

/**
 * Class Company
 * @package App\Models
 * @version December 26, 2020, 10:40 pm UTC
 *
 * @property string $name
 * @property string $description
 * @property string $email
 * @property string $phone
 */
class ExamScores extends Model
{

    use HasFactory;

    public $table = 'exam_scores';

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';

    public $fillable = [
        'user_id',
        'quiz_id',
        'scores',
        'exam_id'
    ];


}
