<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainingSchedule extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function training() {
        return $this->belongsTo(Training::class)->withDefault();
    }
}
