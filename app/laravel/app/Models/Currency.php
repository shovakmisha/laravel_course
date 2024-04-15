<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    use HasFactory;

    //protected $table = 'test'; // На випадок, якщо мені треба буде іншу таблицю БД
    protected $primaryKey = 'uuid'; // На випадок, якщо мій primaryKey в таблиці має назву не id
}
