<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BmiHistory extends Model
{
    use HasFactory;

    protected $table = 'bmi_histories';

    protected $fillable = [
        'member_id',
        'weight',
        'height',
        'bmi',          
        'recorded_at',   
    ];

    /**
     * Get the member that owns the BMI history.
     */
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
