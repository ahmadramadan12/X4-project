<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{

    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'date_of_birth', 'address', 'membership_type', 
        'membership_start_date', 'membership_end_date', 'status', 'profile_image', ];
  


public function fitnessclasses()
{
    return $this->belongsToMany(fitnessClass::class);
}

public function bmiHistories()
    {
        return $this->hasMany(BmiHistory::class);
    }
    
}



