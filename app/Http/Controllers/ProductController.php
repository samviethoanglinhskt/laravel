<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function listPro()
    {
        $pro = DB::table('products')->get();
        return view('admins.product.listProduct',compact('pro'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function createPro()
    {
        return view('admins.product.createProduct');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePro(Request $request)
    {
        if($request->hasFile('images')) {
            $url = Storage::put('products', $request->file('images'));
        } else {
            $url = '';
        }
        DB::table('products')->insert([

            'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
            'name' => $request->name,
            'images' => $url,
            'describe' => $request->describe,
            'category_id' => $request->category_id,
            'price' => $request->price

        ]);
        return redirect()->route('admins.listPro');
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
    public function editPro(string $id)
    {
        $model = DB::table('products')->where('id',$id)->first();
        return view('admins.product.editProduct',compact('model'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePro(Request $request, string $id)
    {
        $data = $request->except('images','_token','_method');
        if($request->hasFile('images')) {
            $data['images'] = Storage::put('products', $request->file('images'));
        } else {
            $url = '';
        }
        DB::table('products',$id)->where('id',$id)->update(
            $data
        );
        return redirect()->route('admins.listPro');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroyPro(string $id)
    {
        DB::table('products')->where('id', $id)->delete();
        return back();
    }
}
