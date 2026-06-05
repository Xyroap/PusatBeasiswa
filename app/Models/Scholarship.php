<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scholarship extends Model
{
    protected $fillable = [
        'title',
        'provider',
        'description',
        'image',
        'deadline',
    ];
    public function applications()
    {
        return $this->hasMany(Application::class);
    }
}