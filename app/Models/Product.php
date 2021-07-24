<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'nama', 'stok', 'satuan_id', 'jenis_id'
    ];
    protected $hidden = [
    	
    ];
    
}
