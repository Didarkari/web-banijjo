<?php

namespace App\Http\Controllers\AdminController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminPanel extends Controller
{
    public function dashBoard() {
        return view('backend.adminpanel');
    }
}
