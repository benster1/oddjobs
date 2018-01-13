<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Oppening;
use App\Oppening_user;

class ApplicantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
       //All Applicants seen my the recruiter
        $opp= new Oppening(); 
        $opp= $opp->where('user_id','=',Auth::user()->id)->first();
      
      $users=new User();
        $users=$users->where('type','=','Applicant')->distinct()->get();
//        $users=$opp->users()->where('type','=','Applicant')->distinct()->get();
        

        $arr=Array('user'=>$users);
        return view('Applicant.index',$arr);
    }

     public function uploadresume(Request $request)
    {// all Applicants seen by the Administrator
         $file = $request->file('resume');
   
      //Display File Name
      
      //Move Uploaded File
      $destinationPath = 'resumes';
      $file->move($destinationPath,$file->getClientOriginalName());

      $user= Auth::user();
      //$user=$user->find(Auth::User()->id)->get();
      $user->link='resumes/'.$file->getClientOriginalName();
      $user->save();

      //return 'ok';

        //$opp= new Oppening(); 
        //$opp= $opp->where('user_id','=',Auth::user()->id)->first();
      
       //$users=$opp->users()->where('type','=','Applicant')->distinct()->get();
        

        //$arr=Array('user'=>$users);
        return view('profil');  
        }

     public function myAppl()
    {// all Applicants seen by the Administrator
        $opp= new Oppening(); 
        $opp= $opp->first();
      
        $users=$opp->users()->where('type','=','Applicant')->distinct()->get();
        

        $arr=Array('user'=>$users);
        return view('Applicant.index',$arr);
    }

     public function myApplications()
    {
        //
        

        $user=new User();
        $user=$user->where('id','=',Auth::User()->id)->first();

        $arr= Array('opp'=>$user->oppenings()->get());

        return view('Applicant.myApplications', $arr);
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
