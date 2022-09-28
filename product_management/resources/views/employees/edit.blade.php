@extends('employees.layout')

@section('content')
    <div class="row">
         <div class="col-lg-12">
            <h2 class="text-center">Edit Employee</h2>
</div>
    <div class="col-lg-12 text-center" style="margin-top:10px;margin-bottom:10px;">
    <a class="btn btn-primary" href="{{ route('employees.index')}}">Back</a>
</div>
</div>

     @if($errors->any())
     <div class="alert alert-danger">
        <strong>Whoops!</strong>There were some problems with your input.<br><br>
        <ul>
             @foreach ($errors->all() as $error)
               <li>{{$error}}</li>
               @endforeach
</ul>
</div>
    @endif
    <form action="{{ route('employees.update',$employee->id)}}" method="POST">
        @csrf 
        @method('PUT')

        <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Employee Name:</strong>
                 <input type="text" name="emp_name" class="form-control" placeholder="employee Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Employee Address:</strong>
                 <input type="text" name="emp_address" class="form-control" placeholder="employee Adrs">
            </div>
        </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
       <div class="form-group">
        <strong>Employee Phone:</strong>
        <input type="number" class="form-control" name="emp_phone" placeholder="employee Phone">
       </div>
     </div>
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Employee Email:</strong>
                 <input type="text" name="emp_email" class="form-control" placeholder="employee Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                 <strong>Employee Salary:</strong>
                 <input type="number" name="emp_salary" class="form-control" placeholder="employee Salary">
            </div>
        </div>
<div class="col-xs-12 col-sm-12 col-md-12 text-center">
    <button type="submit" class="btn btn-primary">Submit</button>
</div>
</div>
</form>
</form>
@endsection