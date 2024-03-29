<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bmasuk extends Model
{
    use HasFactory;
    public function Stock()
    {
        return $this->belongsTo(Stock::class);
    }
    public function Supplier()
    {
        return $this->belongsTo(Supplier::class);
    }
}
