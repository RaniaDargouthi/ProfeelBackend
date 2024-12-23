<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createUser(Request $request)
    {
     
        // Validation des données
        $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:8',
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required|string',
            'birthdate' => 'required|date',
            'phone_number' => 'nullable|string',
            'country' => 'nullable|string',
            'speciality' => 'nullable|string',
            'cin' => 'nullable|string',
            'cv' => 'nullable|string',
            'profil_picture' => 'nullable|string',
            'is_valid' => 'required|boolean',
            'role' => 'required|string',
        ]);

        // Créer une nouvelle instance de l'utilisateur
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password')); // Hachage du mot de passe
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->gender = $request->input('gender');
        $user->birthdate = $request->input('birthdate');
        $user->phone_number = $request->input('phone_number');
        $user->country = $request->input('country');
        $user->speciality = $request->input('speciality');
        $user->cin = $request->input('cin');
        $user->cv = $request->input('cv');
        $user->profil_picture = $request->input('profil_picture');
        $user->is_valid = $request->input('is_valid');
        $user->role = $request->input('role');
        // Sauvegarder l'utilisateur dans la base de données
        $user->save();

        // Retourner la réponse avec les détails de l'utilisateur créé
        return response()->json($user, 201); // Code HTTP 201 pour "créé"
    }

     

}
