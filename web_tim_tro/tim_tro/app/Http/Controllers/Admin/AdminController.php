<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    
    public function index()
    {
        // trả về màn hình trang chủ của admin
        return view('admin.dashboard');
    }
}
