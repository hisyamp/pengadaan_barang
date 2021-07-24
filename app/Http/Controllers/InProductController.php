<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\InProductRequest;
use App\inProduct;
use App\Product;
use App\Unit;
use App\Kind;
use App\Supplier;


class InProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = inProduct::paginate(10);

        return view('admin.transaksi_masuk.index',compact('items'));
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
        $data = 'TRX-' . mt_rand(10000,99999) . mt_rand(100,999);

        return view('admin.transaksi_masuk.create',compact('data','products','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(InProductRequest $request)
    {
        $data = $request->all();
        $jumlah_masuk = $request->jumlah_masuk;
        
        InProduct::create($data);
        
          // dd($coba);
        $products = Product::findOrFail($request->barang_id);
        $products->stok += $request->jumlah_masuk;
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
        $suppliers = Supplier::all();
        $products = Product::all();
        $inproducts = InProduct::findOrFail($id);

        return view('admin.transaksi_masuk.edit',compact('suppliers','products','inproducts'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(InproductRequest $request, $id)
    {
        $data = $request->all();
        // dd($data);
        $item = Product::FindOrFail($id);
        $item->update($data);

        $products = Product::findOrFail($request->barang_id);
        $products->stok += $request->jumlah_masuk;
        $products->save();

        return redirect()->route('inproducts.index')->with('success','Data berhasil disimpan!');
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
        return redirect()->route('inproducts.index')->with('success','Data berhasil dihapus!');    
    }
}
