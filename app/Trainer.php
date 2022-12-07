<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Trainer extends Model
{
    protected $fillable = ["name", "apellido", "avatar"];
    use Searchable;
}
