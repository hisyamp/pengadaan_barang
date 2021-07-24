<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class inProduct extends Model
{
    protected $fillable = [
    	'id_transaksi_in', 'supplier_id', 'barang_id', 'jumlah_masuk'
    ];
    protected $hidden = [
    	
    ];
    public function units(){
    	return $this->belongsTo(Unit::class,'satuan_id','id');
    }
    public function kinds(){
    	return $this->belongsTo(Kind::class,'jenis_id','id');
    }
    public function barangs(){
        return $this->belongsTo(Product::class,'barang_id','id');
    }
    
}
