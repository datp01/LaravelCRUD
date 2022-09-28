@extends('employees.layout')
@section('content')

    <div class="row">
        <div class="col-lg-12>
           <h2 style="text-align:center">Employee Management</h2>
        </div>
        <div class="col-lg-12 text-center" style="margin-top:10px; margin-bottom:10px;">
           <a class="btn btn-success " href="{{route('employees.create')}}">
             Add employee</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
      <div class="alert alert-success">
        {{$message}}
      </div>
      @endif

      @if(sizeof($employees) > 0)
       <table class="table table-bordered">
           <tr>
            <th>No</th>
            <th>Employee Name</th>
            <th>Address</th>
            <th>Phone</th>
            <th>Email</th>
            <th>Salary</th>
            <th width="280px">More</th>
           </tr>
           @foreach($employees as $employee)
              <tr>
                  <td>{{ ++$i }}</td>
                  <td>{{$employee->emp_name}}</td>
                  <td>{{$employee->emp_address}}</td>
                  <td>{{$employee->emp_phone}}</td>
                  <td>{{$employee->emp_email}}</td>
                  <td>{{$employee->emp_salary}}</td>
                <td>
                    <form action="{{ route('employees.destroy',$employee->id)}}" method="POST">
                        <a class="btn btn-info" href="{{route('employees.show',$employee->id) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('employees.edit',$employee->id) }}">Edit</a>
                        @csrf 
                        @method('DELETE')
                        <button type ="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td> 
                    
            </tr>
            @endforeach
</table>
@else
<div class="alert alert-alert">Start Adding to the Database.</div>
@endif
{!! $employees->links() !!}
@endsection
