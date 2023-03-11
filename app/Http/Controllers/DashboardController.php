<?php

namespace App\Http\Controllers;
use \Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function home() {
        return view('dashboard.home');
    }

    public function clients() {
        return view('dashboard.clients');
    }

    public function services() {
        return view('dashboard.services');
    }

    public function users() {
        return view('dashboard.users');
    }

    public function posts() {
        return view('dashboard.posts');
    }
}
