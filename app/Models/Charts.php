<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charts extends Model
{
    use HasFactory;

    public static function sendDummy(){
        return [30, 40, 35, 50, 49, 60, 70, 91, 125];
    }
}
