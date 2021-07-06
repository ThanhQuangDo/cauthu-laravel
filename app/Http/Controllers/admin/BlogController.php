<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Blog;
use App\Http\Requests\blog\CreateBlogRequest;
use App\Http\Requests\blog\UpdateBlogRequest;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if(Auth::check()){
            $blogs = Blog::orderBy('created_at', 'DESC')->paginate(3);
            return view('admin.blog.index')->with('blogs', $blogs);
        }else{
            return view('auth.login');
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateBlogRequest $request)
    {
        //
        if($request->hasFile('image')){
            $data = $request->except(['_token','_method']);
            
            $image = $request->file('image');

            $imageName = time() . $image->getClientOriginalName();
               
            $image->move('upload/user/blog_image', $imageName);
            
            $data['image'] = $imageName;
            
            Blog::create($data);
            return back()->with('status', 'create success');
        }
        return back()->with('status', 'Create blog error');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blog = Blog::find($id);
        return view('admin.blog.edit')->with('blog', $blog);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateBlogRequest $request, $id)
    {
        //
        
        $blog = Blog::findOrFail($id);

        $data = $request->except(['_token','_method', 'image']);

        if($request->hasFile('image')){
            $currentImage = $blog->image;
            // dd($currentImage);
            $imagePath = 'upload/user/blog_image/'.$currentImage;

            if(\File::delete(public_path($imagePath))){

                $image = $request->file('image');

                $imageName = time() . $image->getClientOriginalName();
                   
                $image->move('upload/user/blog_image', $imageName);
                
                $data['image'] = $imageName;
                
                Blog::where('id', $id)->update($data);
                return back()->with('status', 'update success');
            } else{
                return back()->with('status', 'update error');
            }
            
        } else{
            Blog::where('id', $id)->update($data);
            return back()->with('status', 'update success');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Blog::destroy($id);
        return back()->with('status', 'delete success');
    }
}
