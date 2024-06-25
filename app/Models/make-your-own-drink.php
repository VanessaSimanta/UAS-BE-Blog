<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MakeYourOwnDrink extends Model
{
    use HasFactory;
    protected $table = 'make-your-own-drink';
    public $timestamps = false;
}
