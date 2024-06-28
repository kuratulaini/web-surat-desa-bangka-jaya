<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;

use App\Http\Requests\Dashboard\Profile\UpdateProfileRequest;
use App\Http\Requests\Dashboard\Profile\UpdateDetailProfileRequest;

use Illumninate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

use File;
use Auth;

use App\Models\User;
use App\Models\DetailUser;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();

        return view('pages.dashboard.profile', compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProfileRequest $request_profile, UpdateDetailProfileRequest $request_detail_user)
    {
        $data_profile = $request_profile->all();
        $data_detail_user = $request_detail_user->all();

        //get photo profile
        $get_photo = User::where('id', Auth::user()->id)->first();


        //delete photo from storage
        if(isset($data_profile['profile_photo_path'])){
            $data = 'storage/'.$get_photo['profile_photo_path'];

            if(File::exists($data)){
                File::delete($data);
            }else{
                File::delete('storage/app/public/'.get_photo['profile_photo_path']);
            }
        }

        //store to storage
        if(isset($data_profile['profile_photo_path'])){
            $data_profile['profile_photo_path'] = $request_profile->file('profile_photo_path')->store(
                'assets/photo', 'public'
            );
        }

        //proses save to user
        $user = User::find(Auth::user()->id);
        $user->update($data_profile);

        //proses save to detail user
        $detail_user = DetailUser::find($user->detail_user->id);
        $detail_user->update($data_detail_user);

        toast()->success('Perubahan berhasil di simpan');
        return back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(404);
    }

    public function delete()
    {
        //get user
        $get_user_photo = User::where('id', Auth::user()->id)->first();
        $path_photo = $get_user_photo['profile_photo_path'];

        //update value in table value
        $data = User::find($get_user_photo['id']);
        $data->profile_photo_path = NULL;
        $data->save();

        //delete file photo
        $data = 'storage/'.$path_photo;
        if (File::exists($data)) {
            File::delete($data);
        }else{
            File::delete('storage/app/public/'.$path_photo);
        }

        toast()->success('Foto berhasil di hapus');
        return back();
    }
}
