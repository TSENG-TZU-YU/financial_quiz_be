<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz1Model extends Model
{
    protected $table = "quiz1";

    protected $fillable = [
        'id',
        'name',
    ];
}
