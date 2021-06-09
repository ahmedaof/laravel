<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clothe extends Model
{
    use HasFactory;
    public $timestamps = false;

// turn off only updated_at
const UPDATED_AT = false;
}
