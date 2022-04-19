<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Media;
use App\Models\Problem;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ProblemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $problem = Problem::where('user_id', Auth::user()->id)->orderBy('id','DESC')->paginate(10);
        return view('admin.problem.index')->with('problems', $problem);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.problem.create')->with([
            'categories'    => Category::where('user_id', Auth::id())->orderBy('name','ASC')->get(),
            'tags'          => Tag::where('user_id', Auth::id())->orderBy('name','ASC')->get(),
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
            'name'        => ['required', 'string', 'max:255'],
            'visibility'  => ['required', 'not_in:none'],
            'category_id' => ['required', 'not_in:none'],
        ]);

        $problem = Problem::create([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'visibility'  => $request->visibility,
            'user_id'     => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        $problem->tags()->attach($request->tags);

        if (!empty($request->file('thumbnail'))) {
            foreach ($request->thumbnail as $thumbnail) {
                $thumbnail_name = time() . $thumbnail->getClientOriginalName();
                $thumbnail->storeAs("public/uploads", $thumbnail_name);
                Media::create([
                    'name'       => $thumbnail_name,
                    'problem_id' => $problem->id,
                    'user_id'    => Auth::id()
                ]);
            }
        }

        return redirect()->route('problem.index')->with('success','Created Successfully');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function show(Problem $problem)
    {
        return view('admin.problem.show')->with([
            'problem' => $problem,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function edit(Problem $problem)
    {
        return view('admin.problem.edit')->with([
            'problem'    => $problem,
            'categories' => Category::where('user_id', Auth::id())->orderBy('name','ASC')->get(),
            'tags'       => Tag::where('user_id', Auth::id())->orderBy('name','ASC')->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Problem $problem)
    {
        $request->validate([
            'name'        => ['required', 'string', 'max:255'],
            'visibility'  => ['required', 'not_in:none'],
            'category_id' => ['required', 'not_in:none'],
        ]);

        $problem->update([
            'name'        => $request->name,
            'slug'        => Str::slug($request->name),
            'description' => $request->description,
            'visibility'  => $request->visibility,
            'user_id'     => Auth::id(),
            'category_id' => $request->category_id,
        ]);

        if (!empty($request->file('thumbnail'))) {
            foreach ($request->thumbnail as $thumbnail) {
                $thumbnail_name = time() . $thumbnail->getClientOriginalName();
                $thumbnail->storeAs("public/uploads", $thumbnail_name);
                Media::create([
                    'name'       => $thumbnail_name,
                    'problem_id' => $problem->id,
                    'user_id'    => Auth::id()
                ]);
            }
        }

        // $problem->tags()->detach();
        // $problem->tags()->attach($request->tags);

        $problem->tags()->sync($request->tags);

        return redirect()->route('problem.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Problem  $problem
     * @return \Illuminate\Http\Response
     */
    public function destroy(Problem $problem)
    {
        $problem->tags()->detach();
        $problem->delete();
        return redirect()->route('problem.index')->with('success','Deleted Successfully');
    }
}
