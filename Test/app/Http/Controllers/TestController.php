<?php

namespace App\Http\Controllers;
use App\Models\employee;
use App\Models\department;
use App\Models\designation;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function employeeForm(){
        $form= employee::get();
        $dept= department::get();
        $design = designation::get();
        return view('empdetailsShow',compact('form','dept','design'));
     }
     public function departmentForm(){
        $dtform= department::get();
        return view('deptShow',compact('dtform'));
     }
     public function designationForm(){
        $dsform= designation::get();
        return view('designShow',compact('dsform'));
     }

     public function employee(){
        $dept= department::get();
        $design = designation::get();
        return view('employee',compact('dept','design'));
     }

     public function employeeDetails(Request $empdetails){
        $newEmp = new employee();
       
            $newEmp->Name=$empdetails->Name; 
            $newEmp->Gender=$empdetails->Gender; 
            $newEmp->Dob=$empdetails->Dob;
            $newEmp->Address=$empdetails->Address;
            $newEmp->Mobile=$empdetails->Mobile;
            $newEmp->Email=$empdetails->Email;
            $newEmp->Department=$empdetails->Department;
            $newEmp->Designation=$empdetails->Designation;
            $newEmp->Doj=$empdetails->Doj;
            $file = $empdetails->file('image');
            $filename = time().".".$file->getClientOriginalExtension();
            $newEmp->filename=$filename;
            $file->storeAs('file',$filename,'public');
            $newEmp->save();
            return redirect('/Show'); 
    }

    public function updated($id){
        $updatedetail=employee::find($id);
        return view('updateempdetails',compact('updatedetail'));
    }
    public function  updating(request $change,$id){
        $newdetails=employee::find($id);
        $newdetails->Name=$change->Name;
        $newdetails->Gender=$change->Gender;
        $newdetails->Dob=$change->Dob;
        $newdetails->Address=$change->Address;
        $newdetails->Mobile=$change->Mobile;
        $newdetails->Email=$change->Email;
        $newdetails->Department=$change->Department;
        $newdetails->Designation=$change->Designation;
        $newdetails->Doj=$change->Doj;
        $newdetails->save();
        return redirect('/Show');
    }
    public function deleteEmp($id){
        $Empdelete = employee::find($id);
        $Empdelete->delete();
        return back();
    }


    public function dept(Request $req){
        $newdept = new department();
        $newdept->Name=$req->Name; 
        $newdept->Description=$req->Description; 
        $newdept->save();
        return redirect('/dptFormShow'); 
    }


    public function design(Request $req){
        $newdesig = new designation();
        $newdesig->Name=$req->Name; 
        $newdesig->Department=$req->Department;
        $newdesig->Description=$req->Description; 
        $newdesig->save();
        return redirect('/desFormShow'); 
    }
}
