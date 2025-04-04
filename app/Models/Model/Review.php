<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    // protected $fillable = ['product_id', 'customer', 'review', 'star'];
    protected $guarded = []; // Allows all fields to be mass assignable (for dev/testing)

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
