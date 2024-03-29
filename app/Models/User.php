<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
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
        'name','email','password','email_verified_at','is_admin','is_staff','phone','twofactor_type',
    ];
    public function permissions(){
        return $this->belongsToMany(Permission::class);
    }
    public function roles(){
        return $this->belongsToMany(Role::class);
    }
    public function hasRole($roles){
        return !! $roles->intersect($this->roles)->all();
    }
    public function hasPermission($permission){
        /*return !! auth()->user()->permissions()->find($permission);*/
        dd($this->permissions->contains('name',$permission->name) || $this->hasRole($permission->roles));
    }
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
}
