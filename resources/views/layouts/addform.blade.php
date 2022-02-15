@extends('layouts.app')
@section('content')
<div class="container-fluid">
  <div class="row">
     <nav class="col-md-2 d-none d-md-block bg-light sidebar">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSidebar" aria-controls="navbarSidebar" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="sidebar " id="navbarSidebar">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="{{  route('form')  }}">
              <span data-feather="layers"></span>
              Froms
            </a>
          </li>
           <li class="nav-item">
              <a class="nav-link" href="{{  route('addForm')  }}">
                <span data-feather="plus-circle"></span>
                Add Froms
              </a>
            </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Reports
            </a>
          </li>
        </ul>
        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>User Submission</span>
        <a class="d-flex align-items-center text-muted" href="#">
          <span data-feather="plus-circle"></span>
        </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Users Forms
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
        <form action="{{ route('addFromField') }}" method="POST">
          @csrf
          @if ($errors->any())
          <div class="alert alert-danger">
            <ul>
              @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
              @endforeach
            </ul>
          </div>
          @endif
          @if (Session::has('success'))
          <div class="alert alert-success text-center">
            <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
            <p>{{ Session::get('success') }}</p>
          </div>
          @endif

            <h1 class="h2">Add Form</h1>
          <label for="form_name" class="sr-only">Form Name</label>
          <input type="form_name" id="form_name" name="form_name" class="form-control" placeholder="Enter Form Name" required><br>
          @error('form_name')
          <span role="alert">
            <strong>{{ $message }}</strong>
          </span>
          @enderror
          <table class="table table-bordered" id="AddFields">
            <tr>
              <th>Field Type</th>
              <th>Field Title</th>
              <th>Placeholder</th>
              <th>Min</th>
              <th>Max</th>
              <th>Is Require</th>
              <th>Action</th>
            </tr>
            <tr>
              <td><select name="field[0][field_type]" class="form-control" id="field[0][field_type]">  <option value="1">Text</option>  <option value="2">Email</option>  <option value="3">Numbers</option> </select></td>
              <td><input type="text" name="field[0][field_label]" placeholder="Enter Field Title" class="form-control" /></td>
              <td><input type="text" name="field[0][placeholder]" placeholder="Enter Placeholder" class="form-control" /></td>
              <td><input type="text" name="field[0][min]" placeholder="Enter Min" class="form-control" /></td>
              <td><input type="text" name="field[0][min]" placeholder="Enter Max" class="form-control" /></td>
              <td> <input type="checkbox" name="field[0][required]"   class="form-control" /> </td>

              <td><button type="button" name="add" id="add" class="btn btn-success">+</button></td>
            </tr>
          </table>
          <button type="submit" class="btn btn-success text-center">Save</button>
        </form>

  </div>
</main>
</div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript">
var i = 0;
$("#add").click(function(){

++i;
$("#AddFields").append('<tr><td><select class="form-control" name="field['+i+'][field_type]" id="field['+i+'][field_type]">  <option value="1">Text</option>  <option value="2">Email</option>  <option value="3">Numbers</option> </select></td><td><input type="text" name="field['+i+'][field_label]" placeholder="Enter Field Title" class="form-control" /></td><td><input type="text" name="field['+i+'][placeholder]" placeholder="Enter Placeholder" class="form-control" /></td><td><input type="text" name="field['+i+'][min]" placeholder="Enter Min" class="form-control" /></td><td><input type="text" name="field['+i+'][max]" placeholder="Enter Max" class="form-control" /></td><td> <input type="checkbox" name="field['+i+'][required]"   class="form-control" />  </td><td><button type="button" class="btn btn-danger remove-tr">Remove</button></td></tr>');
});
$(document).on('click', '.remove-tr', function(){
$(this).parents('tr').remove();
});
</script>
@endsection
