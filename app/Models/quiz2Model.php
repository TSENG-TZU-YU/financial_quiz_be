<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class quiz2Model extends Model
{
    protected $table = "quiz2";

    protected $fillable = [
        'id',
        'name',
    ];
}
