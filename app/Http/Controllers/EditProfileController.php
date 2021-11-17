<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GalleryRequest;


class EditProfileController extends Controller
{
    public function edit($id)
    {
        $img = User::findOrFail($id)->image;
        $item = User::findOrFail($id);

        return view('pages.edit-profile.biodata', [
            'item' => $item,
            'img' => $img
        ]);
    }

    public function update(UserRequest $request, $id)
    {
        $data = $request->all();

        $item = User::findOrFail($id);
        $data = $request->all();
        if ($request->file('image') == !null) {
            $data['image'] = $request->file('image')->store('profile');
        }

        $item->update($data);
        return redirect()->back()->with('success', 'Informasi Data diri berhasil di Update');
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id)->picuser;
        $item->delete();

        return view('pages.home');
    }


    // function crop(Request $request)
    // {
    //     $path = ['profile'];
    //     $file = $request->file('image');
    //     $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.jpg';
    //     $upload = $file->move(public_path($path), $new_image_name);
    //     if ($upload) {
    //         return response()->json(['status' => 1, 'msg' => 'Image has been cropped successfully.', 'name' => $new_image_name]);
    //     } else {
    //         return response()->json(['status' => 0, 'msg' => 'Something went wrong, try again later']);
    //     }
    // }
}