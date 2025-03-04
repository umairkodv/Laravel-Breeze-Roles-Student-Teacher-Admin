<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index(): View
    {
        return view('admin.users');
    }
}
