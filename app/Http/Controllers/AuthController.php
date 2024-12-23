<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthController extends Controller
{
   // Afficher le formulaire de connexion
   public function showLoginForm()
   {
       return view('login');
   }

   // Traiter la connexion de l'utilisateur
//    public function login(Request $request)
//    {
//        // Valider les entrées de l'utilisateur
//        $request->validate([
//            'email' => 'required|email',
//            'password' => 'required|string|min:8',
//        ]);

//        // Essayer de se connecter
//        if (Auth::attempt([
//            'email' => $request->input('email'),
//            'password' => $request->input('password'),
//        ])) {
//            // Connexion réussie
//            return redirect()->route('dashboard');  // Redirige vers la page du tableau de bord ou une autre page
//        } else {
//            // Connexion échouée
//            return back()->withErrors([
//                'email' => 'Les informations de connexion sont incorrectes.',
//            ]);
//        }
//    }
public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentification réussie, générer un token
            $user = Auth::user();
            $token = $user->createToken('YourAppName')->accessToken;

            return response()->json([
                'token' => $token,
            ]);
        } else {
            return response()->json(['error' => 'Unauthorized'], 401);
        }
    }
}
