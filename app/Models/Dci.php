<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dci extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;
    protected $appends = ['title'];

    public function getTitleAttribute() // Accessor
    {
        return $this->name;
    }

    public function drugs()
    {
        return $this->hasMany(Drug::class);
    }
}
