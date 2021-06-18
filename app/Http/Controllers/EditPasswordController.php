<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class EditPasswordController extends Controller
{
    // public function index($id)
    // {
    //     $img = User::findOrFail($id)->picuser;
    //     $item = User::findOrFail($id);

    //     return view('pages.edit-profile.edit-password', [
    //         'item' => $item,
    //         'img' => $img
    //     ]);
    // }

    public function index($id)
    {
        $item = User::findOrFail($id);

        return view('pages.edit-profile.edit-password', [
            'item' => $item
        ]);
    }
}
