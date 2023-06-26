<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Role;
use App\Models\User;
use App\Models\State;
use App\Models\Contact;
use App\Models\Country;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::with('userInfo.contactInfo', 'roles')->get();

        foreach ($users as $user) {
            $user->roles()->sync([1, 2]);
        }

        $users = User::with('userInfo', 'roles')->paginate(8);

        return view('user.index', [
            'users' => $users
        ]);
    }

    public function edit(Request $request, $id)
    {
        $user = User::with('userInfo.contactInfo')->find($id);

        $cities = City::all();
        $states = State::all();
        $countries = Country::all();

        return view('user.edit', [
            'user' => $user,
            'cities' => $cities,
            'countries' => $countries,
        ]);
    }

    public function update(Request $request, $id)
    {
        dd($request->all());
    }
}
