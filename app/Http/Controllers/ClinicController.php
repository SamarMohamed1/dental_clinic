<?php

namespace App\Http\Controllers;

use App\Http\Resources\BillResource;
use App\Http\Resources\ScheduleResource;
use App\Models\Assessment;
use App\Models\Bill;
use App\Models\ClinicSchedual;
use App\Models\finalBill;
use App\Models\Procedure;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Nette\Utils\Json;
use PHPUnit\Util\Json as UtilJson;

class ClinicController extends Controller
{
    public function display(){
       
        $visits= ClinicSchedual::all();

         return view('clinic.schedule',[
           'visits'=>(ScheduleResource::collection($visits))
         ]); 

    }

    public function addProcedure(Request $request){
          $input=$request->all();

          Procedure::create($input);
    }


    public function addAssessment(Request $request,$visitId){
      Assessment::create([
        'diagnosis'=>$request->diagnosis,
        'prescription'=>$request->prescription,
        'lab_radTests'=>$request->lab_radTests,
        'visitId'=>$visitId
      ]);
    }

    public function firstBill($visitId){
     Bill::create(['id']);
      $lastBill=Bill::select('id')->last();
     $procedures= Procedure::all();

      return view('clinic.procedureBill',[
           'visit'=>$visitId,
           'procedures'=>$procedures,
           'billId'=>$lastBill
      ]);
    }

    public function getProcedure(){
     $data= Procedure::all();
        return view('clinic.showProcedure',[
            'data'=>$data
        ]);
    }

    public function finalBill(Request $request,$visitId,$billId){
      $bill=Bill::all();
       finalBill::create([
             'visitId'=>$visitId,
             'procedureName'=>$request->input('procedure'),
             'billId'=>$billId
            
       ]);
       $visitBill=finalBill::where('visitId',$visitId)->get();
       $price=Procedure::where('name',$request->input('procedure'))->get();
      return view('clinic.finalBill',[
           'data'=>new BillResource($visitBill)
      ]);

    }
}
