<?php

namespace App\Http\Controllers\Home;

use App\Achievement;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Http\Request;
use App\Jobs;
use App\JobDescription;
use App\User;

class AchievementController extends Controller
{
    public function index()
    {
        if (Auth::user()->job_title == NULL) {
            toast('You cannot view this page now, Please ensure that all the staff particulars are filled', 'warning');
            return redirect()->back();
        }else{
            $user = User::where('staff_id', Auth::user()->staff_id)->first();
            $title = Jobs::where('title', $user->job_title)->first();
            $description = JobDescription::where('job_id', $title->id)->paginate(3);
            $achievements = Achievement::where('appraisee_id', $user->staff_id)->get();
            return view ('appraisee.assessments.index', compact('description', 'achievements'));
        }

    }

    public function storeTarget(Request $request, $id)
    {
        $this->validate($request,
            [
                'target' => 'required|min:30',
                'indicator' => 'required|min:30',
            ]
         );

         $target = Achievement::where('job_desc_id', $id)->where('appraisee_id', Auth::user()->staff_id)->first();
         if(!empty($target)){
            $target->min_performance_level = $request->target;
            $target->performance_indicators = $request->indicator;
            $save = $target->save();

            if($save){
                Alert::success('Success', 'Successfully updated minimum performance level');
                return redirect()->back();
            }
         }else{
             $target = new Achievement();
             $target->min_performance_level = $request->target;
             $target->performance_indicators = $request->indicator;
             $target->appraisee_id = Auth::user()->staff_id;
             $target->job_desc_id = $id;
             $save = $target->save();

                if($save){
                    Alert::success('Success', 'Successfully updated minimum performance level');
                    return redirect()->back();
                }
         }
    }

    public function resetTarget($id)
    {
        $target = Achievement::where('job_desc_id', $id)->where('appraisee_id', Auth::user()->staff_id)->first();
        $reset = $target->delete();

        if($reset){
            Alert::success('Success', 'Successfully reset minimum performance level');
            return redirect()->back();
        }

    }
}
