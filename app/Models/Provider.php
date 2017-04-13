<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $fillable = ['cnpj', 'name', 'company_id'];
    
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
    
}
