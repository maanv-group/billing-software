<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


    public static function find($requestData){
        $response = DB::table('users')->where('username',$requestData['username'])->first();
        return $response;
    }

    public static function findBy($keyValueArray){
        $response = [];
        foreach ($keyValueArray as $key => $value) {
            array_push($response, DB::table('users')->where($key, $value)->get()->toArray());
        }
        return $response;
    }

    public static function updateUserStatus($id){
        $affected = DB::table('users')->where('id', $id)->update([
            'updated_at' => DB::raw('CURRENT_TIMESTAMP')
        ]);
        return $affected;
    }
}
