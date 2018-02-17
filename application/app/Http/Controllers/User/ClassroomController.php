<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Classroom;
use Illuminate\Support\Facades\Auth;

class ClassroomController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function showClassroom(Classroom $classroom)
    {
    	if($classroom->grade_id == Auth::user()->grade->id)
    		{
    			return view('user.classroom', ['classroom' => $classroom]);
    		}
    	else
    	{
    		abort(404);
    	}
    }
}
