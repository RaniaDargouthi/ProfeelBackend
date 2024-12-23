<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
    use HasApiTokens;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    // protected $fillable = [
    //     'name', 'email', 'password', 'firstname', 'lastname', 'gender', 'birthdate',
    //     'phone_number', 'country', 'speciality', 'cin', 'cv', 'profil_picture', 'is_valid', 'role',
    // ];
    protected $guarded = []; // Tous les champs sont assignables en masse
    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'birthdate' => 'date',
        'is_valid' => 'boolean',
        'role' => 'string',
    ];
//     protected function casts(): array
//     {
//         return [
//             'email_verified_at' => 'datetime',
//             'password' => 'hashed',
// //add par rania
//             'birthdate' => 'date',
//             'is_valid' => 'boolean',
//             'role' => 'string',
//         ];
//     }
}
