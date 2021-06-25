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
        $data['image'] = $request->file('image')->store(
            'assets/galery',
            'public'
        );
        $item->update($data);
        return redirect()->back();
    }

    public function destroy($id)
    {
        $item = User::findOrFail($id)->picuser;
        $item->delete();

        return view('pages.home');
    }


    function crop(Request $request)
    {
        $path = ['assets/galery', 'public'];
        $file = $request->file('image');
        $new_image_name = 'UIMG' . date('Ymd') . uniqid() . '.jpg';
        $upload = $file->move(public_path($path), $new_image_name);
        if ($upload) {
            return response()->json(['status' => 1, 'msg' => 'Image has been cropped successfully.', 'name' => $new_image_name]);
        } else {
            return response()->json(['status' => 0, 'msg' => 'Something went wrong, try again later']);
        }
    }
}

// FAILED 1
// class EditProfileController extends Controller
// {
//     public function edit($id)
//     {
//         $UserInfo = User::findOrFail($id)->where('id', '=', session('LoggedUser'))->first();

//         return view('pages.edit-profile.biodata', [
//             'UserInfo' => $UserInfo,
//         ]);
//     }

//     public function update(UserRequest $request, $id)
//     {
//         $data = $request->all();

//         $UserInfo = User::findOrFail($id)->where('id', '=', session('LoggedUser'))->first();
//         $UserInfo->update($data);
//         return view('pages.edit-profile.biodata', [
//             'UserInfo' => $UserInfo
//         ]);
//     }

//     public function destroy($id)
//     {
//         $UserInfo = User::findOrFail($id)->picuser;
//         $UserInfo->delete();

//         return view('pages.home');
//     }

//     function crop(Request $request)
//     {
//         $dest = 'user_image/'; //where user image will be stored
//         $file = $request->file('_userAvatarFile');
//         $new_image_name = 'UIMG' . date('YmdHis') . uniqid() . '.jpg';
//         // Upload File
//         $move = $file->move(public_path($dest), $new_image_name);

//         if (!$move) {
//             return response()->json(['status' => 0, 'msg' => 'Something Went Wrong']);
//         } else {
//             // delete old image if exist
//             $UserInfo = User::where('id', '=', session('LoggedUser'))->first();
//             $userPhoto = $UserInfo->picuser;
//             if ($userPhoto != '') {
//                 unlink($dest . $userPhoto);
//             }
//             // Update new picture in database
//             User::where('id', session('LoggedUser'))->update(['picuser' => $new_image_name]);
//             return response()->json(['status' => 1, 'msg' => 'Your Profile picture has been updated successfully', 'name' => $new_image_name]);
//         }
//     }
// }

// TRY 2
// class EditProfileController extends Controller
// {
//     /**
//      * Display a listing of the resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function index($id)
//     {
//         $item = User::findOrFail($id);

//         return view("pages.edit-profile.biodata", [
//             'item' => $item
//         ]);
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         // $travel_packages = TravelPackage::all();

//         // return view('pages.admin.galeri-travel.create', [
//         //     'travel_packages' => $travel_packages
//         // ]);
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(UserRequest $request)
//     {
//         $data = $request->all();
//         $data['image'] = $request->file('image')->store(
//             'assets/user-pic',
//             'public'
//         );

//         User::create($data);

//         return view('pages.home');
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function show($id)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function edit($id)
//     {
//         $item = User::findOrFail($id);

//         return view("pages.edit-profile.biodata", [
//             'item' => $item,
//         ]);
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function update(UserRequest $request, $id)
//     {
//         $data = $request->all();
//         $data['image'] = $request->file('image')->store(
//             'assets/galery',
//             'public'
//         );


//         $item = User::findOrFail($id);

//         $item->update($data);

//         return redirect()->route('home');
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  int  $id
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy($id)
//     {
//         $item = User::findOrFail($id);
//         $item->delete();

//         return redirect()->route('home');
//     }
// }
