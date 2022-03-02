<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicSchedual extends Model
{
    use HasFactory;

    public $timestamps=false;
    public $table = "clinic_scheduales";


    protected $fillable = [
        'visit'
    ];

    public function patientVisit(){
        return $this->belongsTo(Visit::class,'visit');
    }
}
