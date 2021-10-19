@extends('layout.master')
@section('title', 'Contacts | Sage Advisory')
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="col-md-16">
            <div class="card">
                <div class="card-header">
                                        @if($id==0)
                                        <p class="lead">Customers not Contacted</p>
                                        @else
                                        <p class="lead">Customers Contacted</p>
                                        @endif
                 </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Number</th>
                            <th scope="col">Message</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                            $counter=1;
                            @endphp
                            @foreach($contacts as $contact)
                            <tr>
                            <th scope="row">{{$counter}}</th>
                            <td>
                            <div style="white-space:pre-wrap;">{{$contact->name}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$contact->email}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$contact->number}}</div>
                            </td>
                            <td>
                            <div style="white-space:pre-wrap;">{{$contact->message}}</div>
                            </td>
                            <td><a href="/admin/contact/toggle/{{$contact->id}}">
                                        @if($id==0)
                                        Mark as contacted
                                        @else
                                        Mark as not contacted
                                        @endif
                                        </a></td>
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
