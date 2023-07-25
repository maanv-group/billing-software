<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charts extends Model
{
    use HasFactory;

    public static function sendDummy(){
        return ['headings'=> [1991, 1992, 1993, 1994, 1995, 1996, 1997, 1998, 1999], 'data' => [30, 40, 35, 50, 49, 60, 70, 91, 125]];
    }
}
