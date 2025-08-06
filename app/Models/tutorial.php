<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tutorial extends Model
{
    protected $fillable=['title', 'description'];
    /** @use HasFactory<\Database\Factories\TutorialFactory> */
    use HasFactory;

    public function tutors(){
        return $this->hasMany(tutor::class);
    }
}
