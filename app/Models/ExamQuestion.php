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
class ExamQuestion extends Model
{

    use HasFactory;

    public $table = 'exam_questions';

    const CREATED_AT = 'created';
    const UPDATED_AT = 'modified';



}
