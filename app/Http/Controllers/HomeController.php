<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Auth;
use User;
use App\Model\Task;
use App\Model\Tasker;
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

    public function task()
    {
        $data = Task::all()->toArray();
        return view('task',compact('data'));
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
        
        $data = Task::all()->toArray();
        return view('task',compact('data'))->with('success','your details are saved succesfully');
        }
       
    }

    public function admin()
    {
        return view('admin');
    }

    public function admin_home()
    {
        $order = Order::all()->toArray();
        return view('admin_home',compact('order'));
    }

    public function add_tasker(Request $request){
        $tasker = new Tasker;
        $tasker->id = $request->id;
        $tasker->name = $request->name;
        $tasker->profession = $request->profession;
        $tasker->contact_no = $request->contact_no;
        $tasker->aadhar_card_no = $request->aadhar_card_no;
        $tasker->experience = $request->experience;
        $tasker->vehicle_number_name = $request->vehicle_number_name;
        $tasker->date_and_time = $request->date_and_time;

        $tasker->save();
        return view('tasker')->with('success','your details are saved succesfully');
    }

    public function detail($id){
        $i=preg_replace('/\D/', '', $id);
        $userId = Auth::user()->id;
        $task = new Task;
        $detail = DB::table('task')->where('id', $id)->first();
        $order = DB::table('order')->where('user_id',$userId)->get();
        $order_count = $order->count();
        if($order_count>1)
        $discount = true;
        else
        $discount = false; 
        $description = $detail->description;  
        $hourly_rate = $detail->hourly_rate;
             return view('taskDetail', compact('description','discount','hourly_rate'));
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
                $task->hourly_rate = $request->hourly_rate;
                $task->description = $request->task_description;
                $task->save();


                $data = Task::all()->toArray();
               
                return view('task', compact('data'))->with('success','your details are saved succesfully');
            }
        }
    }

    public function edit_task(Request $request)
        {
            $hourly_rate=$request->hourly_rate;
            $task = Task::where('id', $request->id)->first();
            if($file = $request->file('file'))
            { 
                $name = $file->getClientOriginalName();
                if($file->move('images',$name))
                {
                    Task::where('id',$request->task_id)->update(array('task_name' => $request->task_name,'image' => $name, 'hourly_rate' => $hourly_rate, 'description' => $request->task_description ));
                }
            }
                $data = Task::all()->toArray();
                return view('task',compact('data'))->with('success','your details are edited succesfully');
        }

    public function delete_task(Request $request)
    {
        Task::where('id', $request->delete_task_id)->delete();
        $data = Task::all()->toArray();
        return view('task',compact('data'))->with('success','your details are deleted succesfully');
    }

}


