<?php
namespace App\Http\Controllers;
use App\Department;
use App\Leader;
use App\Faqs;
use App\Activity;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

class demo extends Controller
{

	public function views()
    {
     	$currentPath= Route::getFacadeRoot()->current()->uri();
     	return view('departments')->with('path', $currentPath);   
    }

    public function dept(){

    	return view('admin.dept_form');
    }
    
    public function store(Request $request){
        /** $department = new Department;
    	$department->name = $request->department;
        $department->synopsis=$request->synopsis;
       	$department->save();

       	$depts= Department::where('name','=', $request->name)->get();
       	foreach ($depts as $dept) {
       		echo $dept_id=$dept->id;**/

       	$leader = new Leader;
       	$leader->name = $request->name1;
       	$leader->role = $request->role1;
       	$leader->email = $request->email1; 
       	$leader->phone = $request->phone1;
        $leader->departments_id=0;
        $leader->save();

        $leader2 = new Leader;
        $leader2->name = $request->name2;
        $leader2->role = $request->role2;
        $leader2->email = $request->email2; 
        $leader2->phone = $request->phone2;
        $leader2->departments_id=$dept_id=0;
        $leader2->save();

        $leader3 = new Leader;
        $leader3->name = $request->name3;
        $leader3->role = $request->role3;
        $leader3->email = $request->email3; 
        $leader3->phone = $request->phone3;
        $leader3->departments_id=$dept_id=0;
        $leader3->save();
        
        //if($request->name4 || $request->name5 || $request->name6){
        if($request->name4){
        $leader4 = new Leader;
        $leader4->name = $request->name4;
        $leader4->role = $request->role4;
        $leader4->email = $request->email4; 
        $leader4->phone = $request->phone4;
        $leader4->departments_id=$dept_id=0;
        $leader4->save();
        }

        if($request->name5){
        $leader5 = new Leader;
        $leader5->name = $request->name5;
        $leader5->role = $request->role5;
        $leader5->email = $request->email5; 
        $leader5->phone = $request->phone5;
        $leader5->departments_id=$dept_id=0;
        $leader5->save();
        }

        if($request->name6){
        $leader6 = new Leader;
        $leader6->name = $request->name6;
        $leader6->role = $request->role6;
        $leader6->email = $request->email6; 
        $leader6->phone = $request->phone6;
        $leader6->departments_id=$dept_id=0;
       	$leader6->save();
        }
       }
        /**
        $Faqs = new Faqs;
        $Faqs->question = $request->question1;
        $Faqs->answer = $request->answer1;
        $Faqs->question = $request->question2;
        $Faqs->answer = $request->answer2;
        $Faqs->question = $request->question3;
        $Faqs->answer = $request->answer3;
        $Faqs->question = $request->question4;
        $Faqs->answer = $request->answer4;
        $Faqs->question = $request->question5;
        $Faqs->answer = $request->answer5;
        $Faqs->question = $request->question6;
        $Faqs->answer = $request->answer6;
        $Faqs->save();

        $activity = new Activity;
        $activity->name = $request->activity1;
        $activity->name = $request->activity2;
        $activity->name = $request->activity3;
        $activity->name = $request->activity4;
        $activity->name = $request->activity5;
        $activity->name = $request->activity6;
        $activity->save();
         **/
        //return redirect()->back();
    //}
}
/**
       	$leader->name = $request->name2;
       	$leader->role = $request->role2;
       	$leader->email = $request->email2; 
       	$leader->phone = $request->phone2;
       	$leader->departments_id=$dept_id;
       	$leader->name = $request->name3;
       	$leader->role = $request->role3;
       	$leader->email = $request->email3; 
       	$leader->phone = $request->phone3;
       	$leader->departments_id=$dept_id;
       	$leader->name = $request->name4;
       	$leader->role = $request->role4;
       	$leader->email = $request->email4; 
       	$leader->phone = $request->phone4;
       	$leader->departments_id=$dept_id;
       	$leader->name = $request->name5;
       	$leader->role = $request->role5;
       	$leader->email = $request->email5; 
       	$leader->phone = $request->phone5;
       	$leader->departments_id=$dept_id;
        $leader->name = $request->name6;
       	$leader->role = $request->role6;
       	$leader->email = $request->email6; 
       	$leader->phone = $request->phone6;
       	$leader->departments_id=$dept_id;
       	**/
