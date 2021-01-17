<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Enums\RoleEnum;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'country_id',
        'role_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        
    ];
    public function role() {return $this->belongsTo(Role::class); }

    public function country() {return $this->belongsTo(Country::class); }
    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    public function followers(){
        return $this->belongsToMany(User::class,'followers','user_id');
    }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    public function isAdmin() { return $this->role_id === RoleEnum::ADMIN; } 
    public function isUser() { return $this->role_id === RoleEnum::USER; } 
    public function isGuest() { return $this->role_id === RoleEnum::GUEST; } 
}
