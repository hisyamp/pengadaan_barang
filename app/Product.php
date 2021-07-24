<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'nama_barang', 'stok', 'satuan_id', 'jenis_id'
    ];
    protected $hidden = [
    	
    ];
    public function units(){
    	return $this->belongsTo(Unit::class,'satuan_id','id');
    }
    public function kinds(){
    	return $this->belongsTo(Kind::class,'jenis_id','id');
    }
    
    
}
