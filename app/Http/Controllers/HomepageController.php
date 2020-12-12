<?php

namespace App\Http\Controllers;

use App\Homepage;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['homepages'] = Homepage::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.homepage.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.homepage.create');
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
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:8192',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/homepage';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }

        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        Homepage::create($data);
        session()->flash('success', 'Homepage Create Successfully');
        return redirect()->route('homepage.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function show(Homepage $homepage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function edit(Homepage $homepage)
    {
        $data['homepage']=$homepage;
        return view('admin.homepage.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Homepage $homepage)
    {
        $request->validate([
            'name'=>'required',
            'title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:8192',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/homepage';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($homepage->image)){
                unlink($homepage->image);
            }
        }

        $data['name'] = $request->name;
        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $homepage->update($data);
        session()->flash('success', 'Homepage Update Successfully');
        return redirect()->route('homepage.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Homepage  $homepage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Homepage $homepage)
    {
        if($homepage){
            if(file_exists(($homepage->image))){
                unlink($homepage->image);
            }

            $homepage->delete();
            session()->flash('success', 'Homepage deleted successfully');
        }

        return redirect()->route('homepage.index');
    }
}
