<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function qa(){
        return $this->hasMany(QA::class);
    }
    
    public function user(){
        return $this->belongsTo(User::class);
    }
}
