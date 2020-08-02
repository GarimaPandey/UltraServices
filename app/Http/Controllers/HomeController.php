<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use User;
use App\Model\Task;
use App\Model\Order;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function user()
    {
        $id = Auth::user()->id;
        return view('user', compact('id'));
    }

    public function tasker()
    {
        return view('tasker');
    }

    public function GetTask()
    {
        $data = DB::table('tasks')->get();
        return view('task',compact('data'));
    }


    public function save_user(Request $request)
    {
        $user = Auth::user();
        $order = new Order();
        if($request){
            $order->user_id = $user->id;
            $order->name = $request->name;
            $order->address1 = $request->address1;
            $order->address2 = $request->address2;
            $order->address3 = $request->address3;
            $order->phone_number = $request->phoneNumber;
            $order->save(); 
        
            $data = DB::table('task')->get();
        return view('task',compact('data'))->with('success','your details are saved succesfully');
        }
       
    }

    public function admin()
    {
        return view('admin');
    }

    public function upload_task(Request $request)
    {

        if($file = $request->file('file'))
        { 
            $name = $file->getClientOriginalName();

            if($file->move('images',$name)){
                $task = new Task;
                $task->image = $name;
                $task->task_name = $request->task_name;
                $task->description = $request->task_description;
                $task->save();


                $data = Task::all()->toArray();
               
                return view('task', compact('data'))->with('success','your details are saved succesfully');
            }
        }
    }
}


