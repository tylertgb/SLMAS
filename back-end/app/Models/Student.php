<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    protected $guarded = [];

    protected function fullname(): Attribute
    {
        return Attribute::make(
            get: fn ($value, array $attributes) => strtoupper($value),
            set: fn ($value) => $value,
        );
    }

    protected function studentId(): Attribute
    {
        return Attribute::make(
            get: fn ($value, array $attributes) => strtoupper($value),
            set: fn ($value) => $value,
        );
    }

    public function program(): BelongsTo
    {
        return $this->belongsTo(Program::class);
    }
}
