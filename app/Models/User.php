<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{

    // protected $table = 'users'; // en caso de que el archivo no se llame igual que la tabla.
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'dni',
        'birthdate',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public static function findByEmail($email) {
    
    	return User::where(compact('Email'))->first();
    	// igual que
    	// return static::where(compact('Email'))->first();
    }
    
    public static function isAdmin() {
    
    	//return $this::email === 'isabel@divercabodepalos.com';
        return $this->is_admin();
    }
    
    public function profession(){
        return $this->belongsTo(Profession::class);
    }
}
