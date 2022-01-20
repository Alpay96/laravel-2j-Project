<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    protected $fillable = [
        'style_id',
        'user_id',
        'IP',
        'subject',
        'review',
        'rate'
    ];
    public function style()
    {
        return $this->belongsTo(Style::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
