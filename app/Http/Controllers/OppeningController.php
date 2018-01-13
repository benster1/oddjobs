<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Oppening;
use App\Oppening_user;

class OppeningController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user= Oppening::where('user_id','=',Auth::user()->id)->get();
        $arr=Array('user'=>$user);
        return view('Oppening.myOppenings',$arr);
    }
     public function myApp()
    {
        //
        $opp= new Oppening(); 
        $opp= $opp->first();
      
        $users=$opp->users()->where('type','=','Applicant')->distinct()->get();
        

        $arr=Array('user'=>$users);
    }
    public function allOpp()
    {
        $user= Oppening::all();
        $arr=Array('user'=>$user);
        return view('Oppening.allOppenings',$arr);
        //
    }

     public function myAppl()
    {// all Applicants seen by the Administrator
        $opp= new Oppening(); //the recruiter must post an oppening'
        $opp= $opp->get();
        $users=new User();
try      {
        $users=$opp->users()->where('type','=','Applicant')->distinct()->get();
        
        }
        catch (Exception $ex)
        { 
            $users=User()::where('type','=','Applicant')->get();
        }
        $arr=Array('user'=>$users);
        return view('Applicant.index',$arr);

    }
    
    public function apply( $id)
    {
        //
        $user= Oppening::Where('id','=',$id)->first();
        $arr=Array('user'=>$user);

        return view('Oppening.viewOppening', $arr);
    }


    public function AppToOpp( $id)
    {
        //
        
        $opp=new Oppening();
        $opp=$opp->where('id','=', $id)->first();
        $arr=Array('user'=>$opp->users()->distinct()->get(), 'param'=>$opp);

       // string $param=$opp->title;
        return view('Oppening.AppToOpp', $arr);
       // return $user->oppenings()->first();//$opp;//view('Oppening.AppToOpp', $arr);
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
       $req= new Oppening_user();
        $req->oppening_id=$request->input('id') ;
        $req->user_id=Auth::user()->id;
        $req->save(); 
        
        $user= Oppening::where('user_id','=',Auth::user()->id)->get();
        $arr=Array('user'=>$user);
        return view('Oppening.index', $arr);
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
