<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;



class EditProfileController extends Controller
{
    public function edit($id)
    {
        $img = User::findOrFail($id)->picuser;
        $item = User::findOrFail($id);

        return view('pages.edit-profile.biodata', [
            'item' => $item,
            'img' => $img
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        // $data['picuser'] = $request->file('image')->store(
        //     'assets/galery',
        //     'public'
        // );

        $item = User::findOrFail($id);
        $item->update($data);
        return view('pages.edit-profile.biodata', [
            'item' => $item
        ]);
    }

    // public function store(UserRequest $request, $id)
    // {
    //     $data = $request->all();
    //     $img = User::findOrFail($id)->picuser;

    //     $data['picuser'] = $request->file('image')->store(
    //         'assets/galery',
    //         'public'
    //     );

    //     User::create($data);
    //     return view('pages.edit-profile.biodata', [
    //         'img' => $img
    //     ]);
    // }

    public function destroy($id)
    {
        $item = User::findOrFail($id)->picuser;
        $item->delete();

        // $img = User::findOrFail($id)->picuser;
        // $item = User::findOrFail($id);

        return view('pages.home');
        // return view('pages.edit-profile.biodata', [
        //     'item' => $item,
        //     'img' => $img
        // ]);
    }
}
