<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BusinessprofileAttribute extends Model
{
    use HasFactory;
    protected $fillable = [
        'business_profile_id',
        'attribute_id',
        'selected_options',
    ];
}
