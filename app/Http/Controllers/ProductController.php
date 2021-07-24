<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\ProductRequest;

use App\Product;
use App\Unit;
use App\Kind;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Product::paginate(10);

        return view('admin.barang.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $units = Unit::all();
        $kinds = Kind::all();
        return view('admin.barang.create',compact('units','kinds'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductRequest $request)
    {
         $data = $request->all();
          // dd($data);
         Product::create($data);

        return redirect()->route('products.index')->with('success','Data berhasil disimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $units = Unit::all();
        $kinds = Kind::all();
        $products = Product::findOrFail($id);
        return view('admin.barang.edit',compact('units','kinds','products'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $item = Product::FindOrFail($id);
        $item->update($data);
        return redirect()->route('products.index')->with('success','Data berhasil disimpan!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $products = Product::findOrFail($id);
        $products->delete();

        return redirect()->route('products.index')->with('success','Data berhasil dihapus!');
    }
}
