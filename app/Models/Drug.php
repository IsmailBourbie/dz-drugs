<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    use HasFactory;

    protected $guarded = [];
    protected $hidden = [
        "dci_id",
        "laboratory_id",
        "form_id",
        "dosage_id"
    ];

    public $timestamps = false;
    protected $with = ['dci', 'form', 'dosage', 'laboratory'];


    public function dosage()
    {
        return $this->belongsTo(Dosage::class);
    }


    public function form()
    {
        return $this->belongsTo(Form::class);
    }

    public function dci()
    {
        return $this->belongsTo(Dci::class);
    }
    public function laboratory()
    {
        return $this->belongsTo(Laboratory::class);
    }
}
