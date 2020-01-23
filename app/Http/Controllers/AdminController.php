<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UploadImgRequest;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.index', ['users' => $users]);
    }

    public function users()
    {
        $users = User::all();

        return view('admin.users', ['users' => $users]);
    }

    public function inspirationen()
    {
        return view('admin.inspirationen.index');
    }

    public function inspirationenType($type)
    {
        $imgs = \Storage::files($type);
        return view("admin.inspirationen.show", [
            'imgs' => $imgs,
            'type' => $type,
        ]);
    }

    public function uploadImgs(UploadImgRequest $request)
    {

        $type = $request->get('type');
        foreach ($request->images as $image) {
            $image->store($type);
        }

        return redirect()->route('admin.inspirationenType', ['type' => $type]);
    }

    public function deleteImage(Request $request)
    {
        $filename= base64_decode($request->get('img'));
       
        
        return [
            'success' => \Storage::delete( $filename )
        ];
    }
}
