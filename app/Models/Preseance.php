<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Preseance extends Model
{
    use HasFactory;

    protected $fillable = ['week_from', 'week_to', 'arriving_time', 'departure_time'];

    public function delay_reasons()
    {
        return $this->belongsTo(DelayReason::class);
    }
}
