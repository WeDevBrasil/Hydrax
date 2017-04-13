<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = ['name', 'size','price','quantity','company_id'];
    
    
    public function provider()
    {
        return $this->belongsToMany(Provider::class);
    }
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
