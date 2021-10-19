@extends('layout.master')
@section('title', 'View Service | Services | Sage Advisory')
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="col-md-16">
            <div class="card">
                <div class="card-header">
                                       Services
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
                            <th scope="col">Title</th>
                            <th scope="col">Description</th>
                            <th scope="col">Image</th>
                            <th scope="col">Live</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter=1;
                            @endphp
                            @foreach($services as $service)
                            <tr>
                            <th scope="row">{{$counter}}</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$service->title}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{!! $service->description !!}</div>
                            </td>
                            <td>
                            @php
                            $service->image='images/'.$service->image;
                            @endphp
                            <img src="{{asset($service->image)}}" style="width:100px;height:100px;"/></td>
                            <td>
                            @if($service->is_live==0)
                             <a href="/admin/service/toggle/{{$service->id}}" class="btn btn-danger">No</a>
                            @else
                            <a href="/admin/service/toggle/{{$service->id}}" class="btn btn-success">Yes</a>
                            @endif
                            </td>
                            <td>
                            <a href="/admin/service/edit/{{$service->id}}" class="btn btn-primary">Edit</a>
                            <a href="/admin/service/delete/{{$service->id}}" class="btn btn-danger">Delete</a>
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
