<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonies extends Model
{
    use HasFactory;

    protected $table = 'testimonies';
    protected $fillable = ['nama', 'rating', 'comment'];
    public $timestamps= false;
}
