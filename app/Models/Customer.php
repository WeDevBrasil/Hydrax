<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'customers';
    protected $fillable = ['name','limit_buy'];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
