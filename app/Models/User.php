<?php

namespace App\Models;

use Illuminate\Contracts\Auth\Authenticatable as AuthAuthenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;
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

    public static function create(array $request){
        return new User($request);
    }


    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    

    public static function find(array $requestData){
        $response = DB::table('users')->where('username',$requestData['username'])->first();
        return $response;
    }

    public static function findBy(array $keyValueArray){
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
