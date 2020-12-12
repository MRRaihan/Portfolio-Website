<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['abouts'] = About::orderBy('created_at', 'DESC')->paginate(20);
        $data['serial'] = 1;
        return view('admin.about.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');

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
            'title'=>'required',
            'description'=>'required',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:8192',
            'file' => 'required|mimes:pdf|max:10000',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/about';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

        }
        if ($request->hasFile('file')){
            $file = $request->file('file');
            $path ='file/cv';
            $file_name = $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['file']= $path.'/'. $file_name;

        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        About::create($data);
        session()->flash('success', 'About Create Successfully');
        return redirect()->route('about.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
        $data['about']=$about;
        return view('admin.about.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'image' => 'image|mimes:jpeg,png,jpg|max:8192',
            'file' => 'mimes:pdf|max:10000',
            'status' => 'required',

        ]);

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $path ='images/about';
            $file_name = time() . $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['image']= $path.'/'. $file_name;

            if (file_exists($about->image)){
                unlink($about->image);
            }
        }

        if ($request->hasFile('file')){
            $file = $request->file('file');
            $path ='file/cv';
            $file_name = $file->getClientOriginalName();
            $file->move($path, $file_name);
            $data['file']= $path.'/'. $file_name;

            if (file_exists($about->file)){
                unlink($about->file);
            }
        }

        $data['title'] = $request->title;
        $data['description'] = $request->description;
        $data['status'] = $request->status;

        $about->update($data);
        session()->flash('success', 'About Update Successfully');
        return redirect()->route('about.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        if($about){
            if(file_exists(($about->image))){
                unlink($about->image);
            }
            if(file_exists(($about->file))){
                unlink($about->file);
            }

            $about->delete();
            session()->flash('success', 'About deleted successfully');
        }

        return redirect()->route('about.index');
    }
}
