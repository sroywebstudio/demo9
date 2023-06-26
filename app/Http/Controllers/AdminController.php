<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Http\Request;
use App\Mail\AdminCreatedMail;
use App\Http\Requests\AdminRequest;
use App\Jobs\UserMailJob;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function index(){
        $admins = Admin::get();
        
        return view('admin.index', [
            'admins' => $admins
        ]);
    }

    public function create(){
        return view('admin.create');
    }

    public function store(AdminRequest $request){
        $admin = new Admin();

        $admin->firstname = $request->firstname;
        $admin->lastname = $request->lastname;
        $admin->email = $request->email;
        $admin->dob = $request->dob;

        $admin->save();

        $name = $request->firstname. ' ' .$request->lastname;

        dispatch(new UserMailJob ($name, $request->email, $request->dob));

        return redirect()->route('admin.all')->with('admin-status', 'Admin Created');
        
    }
}
