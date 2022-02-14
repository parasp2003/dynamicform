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
                <a class="nav-link" href="#">
                  <span data-feather="layers"></span>
                  Froms
                </a>
              </li>

            </ul>
          </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 pt-3 px-4">
          <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>

          </div>


        </main>
      </div>
    </div>
@endsection