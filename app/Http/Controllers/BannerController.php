<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listBanner()
    {
        $banner = DB::table('banners')->get();
        return view('admins.banner.listBanner',compact('banner'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createBanner()
    {
        return view('admins.banner.createBanner');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeBanner(Request $request)
    {
        if($request->hasFile('image')) {
            $url = Storage::put('banners', $request->file('image'));
        } else {
            $url = '';
        }
        DB::table('banners')->insert([
            'image' => $url,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')

        ]);
        return redirect()->route('admins.listBanner');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editBanner(string $id)
    {
        $model = DB::table('banners')->where('id',$id)->first();
        return view('admins.banner.editBanner',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateBanner(Request $request, string $id)
    {

        if($request->hasFile('image')) {
            $url = Storage::put('banners', $request->file('image'));
            DB::table('banners',$id)->where('id',$id)->update([
                'image' => $url,
                'created_at' => Carbon::now()->format('Y-m-d H:i:s')

            ]);
        } else {
            $url = '';
        }

        return redirect()->route('admins.listBanner');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyBanner(string $id)
    {
        DB::table('banners')->where('id', $id)->delete();
        return back();
    }
}
