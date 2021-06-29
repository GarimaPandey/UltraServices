<!doctype html>
<html lang="{{ app()->getLocale() }}">
       <div class="hp">
@include('layouts.header')

    <body>
    <div class="col-md-10 col-md-offset-1">
  <h2 class="text-center">Orders Placed</h2>
  @if($order)
  
   <table class="table table-striped table-bordered table hover">
     <tbody>
      <tr class="bg-info">
      <tr>
        <td>User id</td>
        <td>{{$order->user_id}}</td>
      </tr>
      <tr>
        <td>Name</td>
        <td>{{$order->name}}</td>
      </tr>
      <tr>
        <td>Address 1</td>
        <td>{{$order->address1}}</td>
      </tr>
      <tr>
        <td> address 2</td>
        <td>{{$order->address2}}</td>
      </tr>
      <tr>
        <td>address 3</td>
        <td>{{$order->address3}}</td>
      </tr>
      <tr>
        <td>Phone number</td>
        <td>{{$order->phone_number}}</td>
      </tr>
      <tr>
        <td>Task completed</td>
        <td>{{$order->task_completed}}</td>
      </tr>
     
      <tr>
        <td>Payment recieved</td>
        <td>{{$order->payment_recieved}}</td>
      </tr>
     </tbody>
  </table>
  @else
  <h1>no orders placed yet</h1>
  @endif
<a href="{{ url()->previous() }}" class="btn btn-info" id="bo_show_back">Back</a>
</div>
    
    </body>
    </div>

</html>


