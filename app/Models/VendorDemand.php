<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VendorDemand extends Model
{
    use HasFactory;
  

    protected $fillable = [
        'product',
        'demands',
        'location',
        'photo',
        'user_id', // Foreign key for the user (vendor)
        'farmer_name',
        'farmer_email',
        'destination',
        'phone',
    ];
      /**
     * Get the vendor that owns the demand.
     */
    public function vendor()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
