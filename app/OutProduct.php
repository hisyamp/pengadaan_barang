<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OutProduct extends Model
{
    protected $fillable = [
    	'id_transaksi_out', 'barang_id', 'jumlah_keluar'
    ];
    protected $hidden = [
    	
    ];
    
    public function products(){
        return $this->belongsTo(Product::class,'barang_id','id');
    }
}
