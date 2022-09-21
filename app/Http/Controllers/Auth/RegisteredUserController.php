<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'first_name' => $request->first_name,
            'age' => $request->age,
            'adresse' => $request->adresse,
            'role_id' => $request->role_id,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(RouteServiceProvider::HOME);
    }

    public function index(){
        $users = User::all();
        return view('users',compact('users'));
    }

    public function edit($id){
        $users = User::find($id);
        $roles = Role::all();

        return view('edituser', compact('users','roles'));
    }

    public function update(Request $request, $id){
        $users = User::find($id);
        $users->name = $request->name;
        $users->first_name = $request->first_name;
        $users->age = $request->age;
        $users->adresse = $request->adresse;
        $users->role_id = $request->role_id;
        $users->email = $request->email;
        $users->password = Hash::make($request->password) ;
        $users->save();
        return redirect()->back();
    }
    public function destroy($id){
        $users = User::find($id);
        $users->delete();
        return redirect('users');
    }

    public function showadmins($id){
        $users = User::find($id);
        $roles = Role::all();
        return view('showadmins', compact('users','roles'));
    }
}
