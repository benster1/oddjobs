<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;
use App\User;
use App\Oppening;
use App\Oppening_user;
use App\Message;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {//for Admin
        $count=0;
        $msg=new Message();
        $msg=$msg->get();

      //  $msgNewCount=$msg1->where('user_id','=',Auth::User()->id)->get();
        $msgNewCount=$msg->where('status','=',0)->count();
        $arr=Array('msg'=>$msg, 'count'=>$msgNewCount);
        //
        return view ('Message.index', $arr);
    }

    public function newMessage(Request $request)
    {
        //$user=new User();
        //user-$user->find(1)->get();
        $count=0;
        $msg1=new Message();
        $msg1->title=$request->input('title');
        $msg1->object=$request->input('object');
        $msg1->user_id=Auth::User()->id;
        $msg1->status=0;
        $msg1->save();


        $msg=$msg1->where('user_id','=',Auth::User()->id)->get();

        $msgNewCount=$msg1->where('user_id','=',Auth::User()->id)->get();
        $msgNewCount=$msg1->where('status','=',0)->count();
        $arr=Array('msg'=>$msg, 'count'=>$msgNewCount);
        //
        return view ('Message.index', $arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function newWriteMessage()
    {
        //
        return view('Message.newMessage');
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
