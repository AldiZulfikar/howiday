<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Models\User;

class PasswordController extends Controller
{
    public function edit($id)
    {
        $item = User::findOrFail($id);
        return view(['pages.edit-profile.edit-password', 'item' => $item]);
    }
}
