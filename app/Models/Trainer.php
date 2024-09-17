<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Trainer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'phone', 'date_of_birth', 'specialization', 'certification', 
        'experience_years', 'profile_image', 'status', 'address'];


        public function fitnessClasses()
        {
            return $this->hasMany(FitnessClass::class);
        }


}
