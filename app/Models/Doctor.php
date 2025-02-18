<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'speciality',
        'bio',
        'doctor_photo',
        'available_day',
        'start_time',
        'end_time'
    ];

    protected $casts = [
        'available_day' => 'array'
    ];


    public function appointments(): HasMany {
        return $this->hasMany(Appointment::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
