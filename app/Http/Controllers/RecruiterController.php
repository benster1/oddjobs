<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\User;
use App\Oppening;

class RecruiterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user= User::where('type','=','Recruiter')->get();
        $arr=Array('user'=>$user);
        return view('Recruiter.index',$arr);
        //   
    }
    public function dbAddOpp(Request $request)
    {
        $query=new Oppening();
        $query->title=$request->input('title');
        $query->description=$request->input('description');
        $query->contract=$request->input('contract');
        $query->location=$request->input('location');
        $query->user_id=Auth::user()->id;
        $query->save();

        $user= Oppening::where('user_id','=',Auth::user()->id)->get();
        $arr=Array('user'=>$user);
        return view('Oppening.myOppenings',$arr);
        //   
    }

    public function newOpp()
    {
        //   
        return view('Recruiter.newOppening');
    }
     public function myOppenings()
    {
        //   
        return view('Recruiter.newOppening');
    }
     public function myApplicants()
    {
        //   
        return view('Recruiter.newOppening');
    }
    


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
    }
}
