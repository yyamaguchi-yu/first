<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Product extends Model
{
    use HasFactory;

    public $timestamps = false;

    // protected $table = 'products';

    protected $fillable = 
    [   
        'id',
        'image',
        'name',
        'price',
        'company_id',
        'stock',
        'comment',
    ];


    public function companies(){
        return $this->belongsTo('App\Models\Company', 'company_id');
    }
}
