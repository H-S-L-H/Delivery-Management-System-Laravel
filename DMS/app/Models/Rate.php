<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;
    public function branch()
    {
        return $this->belongsTo('App/Branch', ['id', 'from_location', 'to_location', 'price'], ['id', 'branch_name', 'branch_phone', 'branch_address']);
    }
}
