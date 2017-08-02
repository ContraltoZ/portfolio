<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Proj;
use App\Comment;

class ProjController extends Controller
{
    public function index()
    {
    	
        $projList = Proj::all();
        $comments = Comment::orderBy('id', 'desc')->take(3)->get();

    	return view('profile.index' ,compact('projList') ,compact('comments'));
    }

    public function projects()
    {
        $projList = Proj::all();
        return view('profile.projects',compact('projList'));
    }

	public function projDetail($id)
    {
    	$proj = Proj::find($id);
    	return view('profile.projDetail',compact('proj'));
    }

    public function fullProfile()
    {
        return view('profile.fullProfile');
    }

    public function contact()
    {
        return view('profile.contact');
    }

    public function store()
    {
        $this -> validate(request(),[

            'name'=> 'required|min:3',
            'email'=> 'required|min:5',
            'content'=> 'required|min:10'

            ]);

       Comment::create(request(['name','email','content']));

        //redirect to homepage
        return redirect('/');
        
    }
}
