<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    public function showPublisherName(){

        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
}
