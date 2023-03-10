<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Random extends Model
{
    use HasFactory;
    public function breakdowns()
    {
        return $this->hasMany(Breakdown::class);
    }
}
