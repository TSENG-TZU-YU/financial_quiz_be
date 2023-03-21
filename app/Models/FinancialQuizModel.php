<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinancialQuizModel extends Model
{
    protected $table = "financial_quiz";

    protected $fillable = [
        'question1',
        'question2',
        'money',
        'email',
        'result',
        'created_at',
        'updated_at'
    ];
}
