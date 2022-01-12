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

    public function scopeFilter($query, array $filters = []) {
        $query->when(
            $filters['dci'] ?? false,
            fn ($query, $dci) => $query->whereHas(
                'dci',
                fn ($query) => $query->where('slug', $dci)
            )
        );

        $query->when(
            $filters['dosage'] ?? false,
            fn ($query, $dosage) => $query->whereHas(
                'dosage',
                fn ($query) => $query->where('slug', $dosage)
            )
        );

        $query->when(
            $filters['form'] ?? false,
            fn ($query, $form) => $query->whereHas(
                'form',
                fn ($query) => $query->where('slug', $form)
            )
        );
    }
}
