<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkoutSerieItem extends Model
{
    use HasFactory;

    public $timestamps = false;

    public function serie()
    {
        return $this->belongsTo(WorkoutSerie::class);
    }

    public function exercise()
    {
        return $this->belongsTo(Exercise::class, 'item_id');
    }
}