<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function AdminDashboard()
    {
        return view("admin.index");
    }

    public function AdminDashboardInbox()
    {
        return view("admin.inbox");
    }

    public function AdminProfile(){


        $id = Auth::user()->id;
        $ProfileInfo = User::find($id);
        // dd($ProfileInfo);
        return view("admin.profile",[
            "user" => $ProfileInfo
        ]);
    }
}
