<?php

namespace App\Http\Controllers;

use App\Models\Problem;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $problem = Problem::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(12);
        $problem = Problem::orderBy('id','DESC')->paginate(12);
        return view('frontend.index')->with('problems', $problem);
    }

    public function single(Problem $problem)
    {
        return view('frontend.single')->with([
            'problem' => $problem,
            'solutions' => Solution::where('problem_id', $problem->id)->where('user_id', Auth::id())->latest()->get(),
        ]);
    }
}
