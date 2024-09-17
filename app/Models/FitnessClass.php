<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FitnessClass extends Model
{
    protected $table = 'fitnessclasses';

    protected $fillable = [
        'name', 'description', 'trainer_id', 'category', 'duration', 'frequency',
        'start_time', 'end_time', 'location', 'status'];


    use HasFactory;

    public function trainer()
    {
        return $this->belongsTo(Trainer::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class);
    }
}

