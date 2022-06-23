<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{

    public function index()
    {
        $users=user::all();
        return view('users.index',compact('users'));
    }


    public function create()
    {
        return view('users.create');
    }


    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'confirmed|required',
            'birth_date' => 'required|date',
            'phone' => 'required'
        ]);

        $data = $request->all();
        $data['password']     = Hash::make($request->password);

        $new_user = User::create($data);

        session()->flash('success', 'You created new user successfully');
        return redirect()->route('users.index');
    }

    public function show($id)
    {
        $target_user = User::find($id);

        if (!isset($target_user)) {
            session()->flash('danger', 'User not found !!');
            return redirect()->route('users.index');
        }

        return view('users.show', compact('target_user'));
    }


    public function edit($id)
    {
        $target_user = User::find($id);

        if (!isset($target_user)) {
            session()->flash('danger', 'User not found !!');
            return redirect()->route('users.index');
        }

        return view('users.edit', compact('target_user'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|unique:users,email',
            'password' => 'confirmed|required',
            'birth_date' => 'required|date',
            'phone' => 'required'
        ]);

        $target_user = User::find($id);

        if (!isset($target_user)) {
            session()->flash('danger', 'User not found !!');
            return redirect()->route('users.index');
        }


        if (!isset($request->password)) {
            $data = $request->except('password');
        } else {
            $data = $request->all();
            $data['password']     = Hash::make($request->password);
        }

        $target_user->update($data);

        session()->flash('warning', 'You updated "' . $target_user->name . '" account successfully');
        return redirect()->route('users.index');
    }

    public function destroy($id)
    {
        $target_user = User::find($id);
        isset($target_user) ? $target_user->delete() :  null;

        session()->flash('danger', 'You deleted "' . $target_user->name . '" account successfully');
        return redirect()->route('users.index');
    }
}
