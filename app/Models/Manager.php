<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manager extends Authenticatable
{
    use HasFactory,Notifiable;

    protected $fillable=['username','email','mobile','password'];

    protected $hidden = ['password'];
    protected $guard = 'manager';
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

}
