<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\MemberCategory;
use App\Models\Notice;
use App\Models\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class PageController extends Controller
{
    public function __construct()
    {
        $school = School::first();
        View::share([
            'school' => $school,
        ]);
    }



    public function home()
    {
        $notices = Notice::orderBy('id','desc')->get();
        $member_categories = MemberCategory::all();
        return view('frontend.home',compact('notices','member_categories'));
    }
}
