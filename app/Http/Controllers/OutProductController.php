<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OutProduct;
use App\inProduct;
use App\Product;
use App\Unit;
use App\Kind;
use App\Supplier;

class OutProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = OutProduct::paginate(10);

        return view('admin.transaksi_keluar.index',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::all();
        $suppliers = Supplier::all();
        $data = 'BMX-' . mt_rand(10000,99999) . mt_rand(100,999);

        return view('admin.transaksi_keluar.create',compact('data','products','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $jumlah_keluar = $request->jumlah_keluar;
        
        OutProduct::create($data);
        
          // dd($coba);
        $products = Product::findOrFail($request->barang_id);
        $products->stok -= $request->jumlah_keluar;
        $products->save();  



        return redirect()->route('inproducts.index')->with('success','Data berhasil dibuat!');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
