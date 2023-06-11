<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DelayReason extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function preseance()
    {
        return $this->hasMany(Preseance::class);
    }
}
