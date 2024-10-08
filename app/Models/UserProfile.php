<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model
{
    use HasFactory;

    protected $fillable = [
        'member_id',
        'qr_code',
    ];

    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
