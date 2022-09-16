<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    public function guest()
    {
        return $this->hasOne(Guest::class);
    }
    public function courseType()
    {
        return $this->hasOne(Course::class);
    }
}
