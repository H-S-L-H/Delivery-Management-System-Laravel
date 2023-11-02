<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    public function rate()
    {
        return $this->hasMany('App/Rate', ['id', 'branch_name', 'branch_phone', 'branch_address'], ['id', 'from_location', 'to_location', 'price']);
    }
}
