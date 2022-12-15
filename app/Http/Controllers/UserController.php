<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers() 
    {
        $users = User::paginate(6);
        return view('Admin.Users.index', compact('users'));
    }

    // set admin
    public function getUpdateUser($id) 
    {
        $user = User::find($id);
        $role = 1;
        $user->Quyen = $role;
        $user->save();
        return redirect()->route('user')->with("notify","Thêm quyền thành công");
    }

    public function getDestroyUser($id) 
    {   
        User::find($id)->delete();
        return redirect()->route('user')->with('notify', 'Đã xóa thành công');
    }
}
