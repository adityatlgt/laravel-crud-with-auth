<?php

namespace App\Models;
use App\Models\EventType;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function evenType()
    {
        
        return $this->hasOne(EventType::class, 'id', 'type')->withDefault('');
    }
}
