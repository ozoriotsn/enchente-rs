<?php

namespace App\Http\Controllers\Auth\Admin;

use function view;
use App\Models\Pet;
use App\Models\Person;
use function redirect;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class LoginAdminController extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $persons = count(Person::all());
        $personsActive = count(Person::all()->where('active', 1));
        $pets = count(Pet::all()->where('donation', 0));
        $petsActive = count(Pet::all()->where('active', 1));
        $petsDonation = count(Pet::all()->where('donation', 1));
        $petsActiveDonation = count(Pet::all()->where('active', 1)->where('donation', 1));
        $voluntaries = count(User::all()->where('role_id', 2));
        return view('admin.auth.home',
        [
        'user'=>$user,
        'persons'=>$persons,
        'personsActive'=>$personsActive,
        'pets'=>$pets,
        'petsActive'=>$petsActive,
        'petsDonation'=>$petsDonation,
        'petsActiveDonation'=>$petsActiveDonation,
        'voluntaries'=>$voluntaries
    ]);
    }

    public function login()
    {
        return view('admin.auth.login');
    }

    public function handleLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($request->only(['email', 'password']))) {
            return redirect()->intended('admin');
        }
        return redirect()->back()->with('error', 'Opa suas credenciais são invalidas');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
