<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function trainingSchedule() {
        return $this->belongsTo(TrainingSchedule::class, 'training_schedule_id');
    }

    public function participant() {
        return $this->belongsTo(Participant::class, 'participant_id')->withDefault();
    }
}
