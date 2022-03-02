<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    public $timestamps=false;

    
    protected $fillable = [
      'date',
      'time',
      'type',
      'patientId'
    ];

    public function patientInfo(){
      return $this->hasOne(Patient::class,'id');
    }

    public function visits(){
      return $this->hasMany(ClinicSchedual::class,'id');
    }
}



