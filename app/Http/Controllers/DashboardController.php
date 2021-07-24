<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Supplier;

class DashboardController extends Controller
{
    public function index()
    {
        $products = Product::all()->count();
        $suppliers = Supplier::all()->count();
        $lastitems = Product::paginate(3);
        $allproducts = Product::all()->sum('stok');
        // dd($allproducts);

        $counts = Product::all();

        $datas = [];

        foreach ($counts as $count) {
            $jumlah_stok = $count->stok;
            $datas[] = $jumlah_stok;
        }
            // dd($datas);

        return view('admin.dashboard.index',compact('products','suppliers','allproducts','datas','lastitems'));
    }
}
