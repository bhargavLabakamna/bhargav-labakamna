@extends('admin.layout.main');
@section('content')
        <!--  page-wrapper -->
        <div id="page-wrapper">

            
            <div class="row">
                 <!--  page header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Contact</h1>
                </div>
                 <!-- end  page header -->
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Contact Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name</th>
                                            <th>Mobile</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($contacts as $item)
                                        
                                        <tr class="odd gradeX">
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->mobile}}</br>{{$item->email}}</td>
                                            <td class="center">{{$item->subject}}</td>
                                            <td class="center">{{$item->message}}</td>
                                            <td class="center">{{$item->created_at}}</td>
                                        </tr>
                                        
                                        @endforeach

                                    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->
    </div>
    <!-- end wrapper -->

    <!-- Core Scripts - Include with every page -->
    <script src="{{url('admin/assets/plugins/jquery-1.10.2.js')}}"></script>
    <script src="{{url('admin/assets/plugins/bootstrap/bootstrap.min.js')}}"></script>
    <script src="{{url('admin/assets/plugins/metisMenu/jquery.metisMenu.js')}}"></script>
    <script src="{{url('admin/assets/plugins/pace/pace.js')}}"></script>
    <script src="{{url('admin/assets/scripts/siminta.js')}}"></script>
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