<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class UserSetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 
        'preferences', 
        'notifications', 
        'historique',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
