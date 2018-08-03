<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    /**
     * listing des utilisateurs grace ::all().
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function listUsers()
    {
        $users = User::all();

        return view('listUsers', ['users' => User::all()]);

    }

    /**
     * @param Request $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     *
     * Nous récupérons la Request de url via son id.
     * On va chercher le profil de la personne grace a cette id et la fonction findOrFail.
     */
    public function lookProfil(Request $id)
    {
        $profil = User::findOrFail($id);

        return view('profilUsers' , ['profil' => $profil]);
    }

    /**
     * @param Request $email
     * @return string
     */
    public function lookEmail()
    {
        $email = request('email');
        $user = User::where('email', $email)->first();
        dump($user);
        return view('profilEmail', ['user' => $user]);
    }
}
