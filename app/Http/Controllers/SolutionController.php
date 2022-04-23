<?php

namespace App\Http\Controllers;

use App\Models\Media;
use App\Models\Problem;
use App\Models\Solution;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SolutionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $solution = Solution::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('admin.solution.index')->with('solutions', $solution);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.solution.create')->with([
            'problems'  => Problem::where('user_id',Auth::id())->orderBy('name','ASC')->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'solution' => ['required'],
        ]);

        $solution = Solution::create([
            'content'    => $request->solution,
            'user_id'    => Auth::id(),
            'problem_id' => $request->problem_id,
        ]);

        if (!empty($request->file('thumbnails'))) {
            foreach ($request->thumbnails as $thumbnail) {
                $thumbnail_name = time() . $thumbnail->getClientOriginalName();
                $thumbnail->storeAs("public/uploads", $thumbnail_name);
                // Storage::put("public/uploads", $thumbnail_name);

                Media::create([
                    'name'        => $thumbnail_name,
                    'solution_id' => $solution->id,
                    'user_id'     => Auth::id()
                ]);
            }
        }

        // Activity Event Fire

        return redirect()->route('solution.index')->with('success','New Solution Created Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function show(Solution $solution)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function edit(Solution $solution)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Solution $solution)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Solution  $solution
     * @return \Illuminate\Http\Response
     */
    public function destroy(Solution $solution)
    {
        //
    }
}
