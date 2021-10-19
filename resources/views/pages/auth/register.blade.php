@extends('layout.master')

@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="col-md-8" style=" margin:0 auto;">
            <div class="card">
                <div class="card-header">
                                        Add an Admin
                 </div>

                <div class="card-body">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                @if(session('fail'))
                <div class="alert alert-danger">
                       {{session('fail')}}
                </div>
               @endif
                  @if (session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                    @endif

                    <form method="post" action="/create">
                          @csrf
                          <div class="form-group">
                              <label for="name">Name</label>
                              <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
                          </div>
                          <div class="form-group">
                              <label for="email">Email</label>
                              <input type="email" class="form-control" id="email" name="email" value="{{old('email')}}" required>
                          </div>
                          <div class="form-group">
                              <label for="password">Password</label>
                              <input type="password" class="form-control" id="password" name="password" required>
                          </div>
                          <div class="form-group">
                              <label for="cpassword">Confirm Password</label>
                              <input type="password" class="form-control" id="cpassword" name="cpassword" required>
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btn btn-success" name="submit" value="Create">
                          </div>
                      </form>
                </div>
            </div>
</div>
@endsection

@push('plugin-scripts')
  <script src="{{ asset('assets/plugins/chartjs/Chart.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
  <script src="{{ asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/apexcharts/apexcharts.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/progressbar-js/progressbar.min.js') }}"></script>
@endpush

@push('custom-scripts')
  <script src="{{ asset('assets/js/dashboard.js') }}"></script>
  <script src="{{ asset('assets/js/datepicker.js') }}"></script>
@endpush