@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
    </div>
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <a href="/dashboard/posts" class="text-decoration-none">
                <div class="text-xs font-weight-bold text-primary text-uppercase mb-2">Jumlah Postingan</div>
                <div class="h5 mb-0 font-weight-bold text-dark">{{ $posts->count() }} Posting</div>
                </a>
              </div>
              {{-- <div class="col-auto">
                <i class="fas fa-laptop-code fa-stack-2x"></i>
              </div> --}}
            </div>
          </div>
        </div>
    </div>

@endsection