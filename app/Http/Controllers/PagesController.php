<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Blogcomment;
class PagesController extends Controller
{
    public function home()
     {
         $show = Blog::all();
         $show = Blog::paginate(4);
        return view('welcome',compact('show'));
     }

     
     public function addblog()
     {
        return view('addblog');
     }

     public function store()
     {
        $project = new Blog();
        $project->title = request('title');
        $project->blog = request('blog');

        $project->save();
        return redirect('/');
     }

     public function blogpage($id)
     {
        $blog=Blog::findorFail($id);
        $comment1=Blogcomment::where('blog_id', $id)->orderBy('id','DESC')->paginate(3);
        return view('blogpage', compact('blog','comment1'));
        
        
      }
      
      //$flight = Blog::find(1);

      //return view('blogpage');

        
     
     
     public function storecomment()
     {

      
        $project = new Blogcomment();
       
      $project->blog_id=request('blog_id');
        $project->name = request('name');
        $project->comment = request('comment');
        $project->email = request('email');
        $project->save();
        return back();
     }
}
