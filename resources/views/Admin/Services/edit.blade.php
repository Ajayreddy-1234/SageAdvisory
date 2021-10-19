@extends('layout.master')
@section('title', 'Edit Service | Services | Sage Advisory')
@push('plugin-styles')
  <link href="{{ asset('assets/plugins/bootstrap-datepicker/css/bootstrap-datepicker.min.css') }}" rel="stylesheet" />
@endpush

@section('content')
<div class="col-md-8" style=" margin:0 auto;">
            <div class="card">
                <div class="card-header">
                                        Edit Service
                 </div>

                <div class="card-body">
                    <form method="post" action="/admin/service/update/{{$service->id}}" enctype="multipart/form-data">
                          @csrf
                          <div class="form-group">
                              <label for="title">Title</label>
                              <input type="text" class="form-control" id="title" name="title" value="{{$service->title}}" required>
                          </div>
                          <div class="form-group">
                           <label for="description" id="">Description</label>
                           <textarea class="form-control" id="description" name="description" rows="6">{{ $service->description }}</textarea>
                          </div>
                          <div class="form-group">
                              <input type="submit" class="btn btn-success" name="submit" value="Update">
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
  {{-- <script type="text/javascript">
    tinymce.init({
      selector: '#description',
      plugins : 'advlist autolink link image lists charmap print preview',
      toolbar: "undo redo | styleselect bold italic | numlist bullist | alignleft aligncenter alignright alignjustify | link image",
    });
</script> --}}

<script>
    var editor_config = {
      path_absolute : "/",
      selector: '#description',
      relative_urls: false,
      plugins: [
        "advlist autolink lists link image charmap print preview hr anchor pagebreak",
        "searchreplace wordcount visualblocks visualchars code fullscreen",
        "insertdatetime media nonbreaking save table directionality",
        "emoticons template paste textpattern"
      ],
      toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
      file_picker_callback : function(callback, value, meta) {
        var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
        var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' + meta.fieldname;
        if (meta.filetype == 'image') {
          cmsURL = cmsURL + "&type=Images";
        } else {
          cmsURL = cmsURL + "&type=Files";
        }

        tinyMCE.activeEditor.windowManager.openUrl({
          url : cmsURL,
          title : 'Filemanager',
          width : x * 0.8,
          height : y * 0.8,
          resizable : "yes",
          close_previous : "no",
          onMessage: (api, message) => {
            callback(message.content);
          }
        });
      }
    };

    tinymce.init(editor_config);
  </script>
@endpush
