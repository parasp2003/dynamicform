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

      <div class="container mt-5">
          <h2 class="mb-4">Form List</h2>
          <table class="table table-bordered form-datatable">
              <thead>
                  <tr>
                      <th>No</th>
                      <th>From Name</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
              </tbody>
          </table>
      </div>
  </div>
</main>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">

    var table = $('.form-datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('form.list') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'form_name', name: 'form_name'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });

</script>
@endsection
