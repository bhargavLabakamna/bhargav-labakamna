@extends('admin.layout.main');
@section('content')
    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-6">
                <lable class="page-header" style="font-size: 50px;">Banner</lable>
            </div>
            <div class="col-lg-6 md-2" align="right">
            <button class="btn btn-success page-header" id="add_banner" data-target="banner_model_open" data-toggle="modal">Add Banner</button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                            Banner Tables
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Title</th>
                                        <th>Sub Title</th>
                                        <th>Button</th>
                                        <th>Button 2</th>
                                        <th>Date</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($banners as $item)
                                    <tr class="odd gradeX">
                                        <td>{{$item->id}}</td>
                                        <td>{{$item->title}}</td>
                                        <td>{{$item->sub_title}}</td>
                                        <td class="center">{{$item->button}}</td>
                                        <td class="center">{{$item->button_2}}</td>
                                        <td class="center">{{$item->created_at}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            <div id="getCode">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
   
    <!-- Core Scripts - Include with every page -->
    <script src="{{url('admin/assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{url('admin/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('admin/assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{url('admin/assets/plugins/pace/pace.js')}}"></script>
    <script src="{{url('admin/assets/scripts/siminta.js')}}"></script>

    <!-- CUSTOM JS -->
    <script src="{{url('admin/js/banner.js')}}"></script>

    <!-- Page-Level Plugin Scripts-->
    <script src="{{url('admin/assets/plugins/dataTables/jquery.dataTables.js')}}"></script>
    <script src="{{url('admin/assets/plugins/dataTables/dataTables.bootstrap.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#dataTables-example').dataTable();
        });
    </script>
</body>
</html>
@endsection