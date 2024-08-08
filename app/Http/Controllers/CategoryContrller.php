<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryContrller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listCate()
    {

        $data = DB::table('categories')->get();
        return view('admins.category.listCategory',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createCate()
    {
        return view('admins.category.createCategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeCate(Request $request)
    {
//        dd($request);
        DB::table('categories')->insert([
            'name' => $request->name,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        return redirect()->route('admins.listCate');
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
    public function editCate(string $id)
    {
        $model = DB::table('categories')->where('id', $id)->first();
        return view('admins.category.editCategory', compact('model'));
    }
    /**
     * Update the specified resource in storage.
     */
    public function updateCate(Request $request, string $id)
    {
        DB::table('categories')->where('id', $id)->update([
            'name' => $request->name,
            'created_at' => Carbon::now()->format('Y-m-d H:i:s')
        ]);
        return redirect()->route('admins.listCate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        DB::table('categories')->where('id', $id)->delete();
        return back();
    }
}
