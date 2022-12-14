<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'payment_id',
        'invoice',
        'nominal',
        'status',
        'last_updated_status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
