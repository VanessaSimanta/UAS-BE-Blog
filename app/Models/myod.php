<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class myod extends Model
{
    use HasFactory;
    protected $table = 'myodData';
    public $timestamps = false;
}
