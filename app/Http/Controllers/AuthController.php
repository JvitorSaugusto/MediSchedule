<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function registration(RegisterRequest $request )
    {
        $validated = $request->validated();

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'password' => Hash:make($validated['password'])
        ])

        Auth::login($user);

        return redirect()
        ->route('index')
        ->with('sucess', 'Usuario cadastrado com sucesso!');
    }

    public function login(LoginRequest $request )
    {
        $credentials = $request->validated();

        if(Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()
                ->intended('dashboard');
        }

        return back()->withErrors(['email' => 'As credenciais fornecidas estão incorretas.',])->onlyInput('email');   
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
