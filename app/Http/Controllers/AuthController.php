<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Exibe o formulário de login.
     */
    public function showLoginForm()
    {
        return view('auth.login');
    }

    /**
     * Processa o login.
     */
    public function login(Request $request)
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();
        return redirect('/'); // Redireciona para a página inicial
    }

    return back()->withErrors([
        'email' => 'As credenciais fornecidas estão incorretas.',
    ])->onlyInput('email');
}


    /**
     * Exibe o formulário de registro.
     */
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    /**
     * Processa o registro do usuário.
     */
    public function register(Request $request)
{
    // Valida os dados de entrada
    $validatedData = $request->validate([
        'name' => ['required', 'string', 'max:255'],
        'email' => ['required', 'email', 'unique:users,email'],
        'password' => ['required', 'string', 'min:8', 'confirmed'],
    ]);

    // Cria o usuário
    $user = User::create([
        'name' => $validatedData['name'],
        'email' => $validatedData['email'],
        'password' => Hash::make($validatedData['password']),
    ]);

    // Realiza o login do usuário recém-criado
    Auth::login($user);

    // Redireciona para a página inicial
    return redirect('/');
}


    /**
     * Realiza o logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
