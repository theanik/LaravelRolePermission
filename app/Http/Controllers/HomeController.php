<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        // $role = Role::findById(3);

        // $permission = Permission::findById(1);

        // $role->givePermissionTo($permission);

        // $permission = Permission::findById(2);

        // $role->givePermissionTo($permission);

        // $permission = Permission::findById(3);

        // $role->givePermissionTo($permission);
        // $permission = Permission::findById(4);

        // $role->givePermissionTo($permission);
        // auth()->user()->givePermissionTo('add');
        // auth()->user()->givePermissionTo('edit');
        // auth()->user()->givePermissionTo('view');
        // auth()->user()->assignRole('superAdmin');

        // return auth()->user()->getPermissionsViaRoles();
        // return User::
        // return auth()->user()->permissions;
        return view('home');
    }
}
