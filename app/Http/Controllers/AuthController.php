<?php 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:8|confirmed',
            ]);

            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password),
            ]);

            return redirect()->route('login')->with('success', 'Registration successful! Please login.');
        }

        return view('auth.register');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                return redirect()->route('dashboard');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

        return view('auth.login');
    }


    public function logout()
    {
        // Auth::logout();
        return redirect('/');
    }

    public function dashboard()
    {
        return view('dashboard');
    }

    public function profile(Request $request)
    {
        // Use the first user as an example, create a user if none exists
        $user = User::first();

        if (!$user) {
            // If no user exists, create a dummy user for testing
            $user = User::create([
                'name' => 'Test User',
                'email' => 'test@example.com',
                'phone' => '1234567890',
                'password' => bcrypt('password'),
            ]);
        }

        if ($request->isMethod('post')) {
            $validatedData = $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
                'phone' => 'required|string|max:15',
            ]);

            $user->update($validatedData);

            return redirect()->route('profile')->with('success', 'Profile updated successfully.');
        }

        return view('profile', compact('user'));
    }
}
