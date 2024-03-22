<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

        return view("admin.profile");
    }
}
