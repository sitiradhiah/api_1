<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    use HasFactory;
    // protected $fillable = ['name', 'detail', 'price', 'stock', 'discount'];
    protected $guarded = []; // Allows all fields to be mass assignable (for dev/testing)

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }
}
