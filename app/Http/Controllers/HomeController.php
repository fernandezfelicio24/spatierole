<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\User;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        
        //membuat data role dan permission
        // $role = Role::create(['name' => 'mahasiswa']);
        //$permission = Permission::create(['name' => 'home']);
        return view('home');
    }

    public function product()
    {
        
     
        return view('product');
    }

    public function setting()
    {
        
        $users = User::all();
        return view('setting',compact('users'));
    }
}
