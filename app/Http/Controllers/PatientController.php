<?php

namespace App\Http\Controllers;

use App\Http\Requests\patientRequest;
use App\Http\Requests\VisitRequest;
use App\Http\Requests\SearchRequest;
use App\Http\Resources\ScheduleResource;
use App\Http\Resources\VisitResource;
use App\Models\ClinicSchedual;
use App\Models\Patient;
use App\Models\Visit;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use DB;

class PatientController extends Controller
{



    public function store(patientRequest $request){
         $input=$request->all();
        Patient::create($input);
        $patientId=Patient::where('phone',$input['phone'])->pluck('id');
        return view('patient.visit',[
            'patientId'=>$patientId[0]
        ]);
    }





    public function search(SearchRequest $request){
       if(Patient::where('phone',$request->input('search'))->exists()){
        $patients= Patient::where('phone',$request->input('search'))->get();

         return view('patient.searchData',[
             'flag'=>'patient',
            'patients' => $patients
        ]);
     }else{
     
        return view('patient.searchData',[
            'flag'=>'message',
            'message'=>'patient not found'
        ]);
     }
   }




   public function visit(VisitRequest $request ,$patientId){
      $input=$request->all();
     
      Visit::create([
          'date'=>$input['date'],
          'time'=>$input['time'],
          'type'=>$input['type'],
         'patientId'=>(int)$patientId,
      ]);

     $visitId= Visit::where([['date',$input['date']],['time',$input['time']]])->pluck('id');

     if(ClinicSchedual::join('visits','visits.id','=','clinic_scheduales.visit')
                            -> where([['visits.time',$input['time']],['visits.date',$input['date']]])
                            ->get()
     ){
        return view('home');

     }else{
        ClinicSchedual::create([
            'visit'=>$visitId[0]
      ]);
     $visitSchedule=ClinicSchedual::where('visit',$visitId[0])->get();
     return view('clinic.bill',[
        'data'=>new ScheduleResource($visitSchedule),
        'visitId'=>$visitId[0]
     ]);
}
    }



    


   public function toVisit(){
       return view('patient.visit');
   }
}
