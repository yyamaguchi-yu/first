<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $table = 'companies';

    protected $fillable = 
    [
        'company_name',
        'id',
    ];

    public function getCompany()
        {
           return $this->company_name;
        }
    
    

    public function products(){
        return $this->HasMany('App\Models\Product');
    }

}
