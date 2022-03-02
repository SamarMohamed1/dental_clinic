<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class finalBill extends Model
{
    
    public $timestamps=false;
    public $table = "bill_of_visit_procedures";
    use HasFactory;

    protected $fillable=[
        'visitId',
        'procedureName',
        'billId'
    ];

    public function visitInfo(){
        return $this->hasOne(Visit::class,'visitId');
    }
}
