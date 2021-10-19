@extends('layout.master')
@section('title', 'View Testimonial | Testimonials | Sage Advisory')
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="col-md-16">
            <div class="card">
                <div class="card-header">
                                       Testimonials
                 </div>

                <div class="card-body">
                    @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                    @endif
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Description</th>
                            <th scope="col">Live</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter=1;
                            @endphp
                            @foreach($testimonials as $testimonial)
                            <tr>
                            <th scope="row">{{$counter}}</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$testimonial->name}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$testimonial->designation}}</div>
                            </td>
                            <td>
                            <div style="white-space: pre-wrap;">{{$testimonial->description}}</div>
                            </td>
                            <td>
                            @if($testimonial->is_live==0)
                             <a href="/admin/testimonials/toggle/{{$testimonial->id}}" class="btn btn-danger">No</a>
                            @else
                            <a href="/admin/testimonials/toggle/{{$testimonial->id}}" class="btn btn-success">Yes</a>
                            @endif
                            </td>
                            <td>
                            <a href="/admin/testimonials/edit/{{$testimonial->id}}" class="btn btn-primary">Edit</a>
                            <a href="/admin/testimonials/delete/{{$testimonial->id}}" class="btn btn-danger">Delete</a>
                            </td>
                            </tr>
                            @php
                            $counter++;
                            @endphp
                            @endforeach
                        </tbody>
                    </table>
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
