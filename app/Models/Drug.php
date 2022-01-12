<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $guarded = [];
    public $timestamps = false;


    public function dosage() {
        return $this->belongsTo(Dosage::class);
    }


    public function form() {
        return $this->belongsTo(Form::class);
    }

    public function dci() {
        return $this->belongsTo(Dci::class);
    }
    public function laboratory() {
        return $this->belongsTo(Laboratory::class);
    }
}
