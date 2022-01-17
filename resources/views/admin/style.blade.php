@extends('layouts.admin')

@section('title', 'Style List')

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3> Styles </h3>
                    <a href="{{route('admin_style_add')}}" type="button" class="btn btn-primary">Add Style</a>
                </div>

                <div class="title_right">
                    <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search for...">
                            <span class="input-group-btn">
                      <button class="btn btn-default" type="button">Go!</button>
                    </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2> Style List </h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                       role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                                    <ul class="dropdown-menu" role="menu">
                                        <li><a href="#">Settings 1</a>
                                        </li>
                                        <li><a href="#">Settings 2</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Image Gallery</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($datalist as $rs)
                                    <tr>
                                        <td>{{$rs->id}}</td>
                                        <td>{{$rs->title}}</td>

                                        <td>
                                            @if($rs->image)
                                                <img src="{{Storage::url($rs->image)}}" height="70" alt="">
                                            @endif
                                        </td>

                                        <td><a href="{{route('admin_image_add', ['style_id' =>$rs->id])}}"
                                            onclick="return !window.open(this.href, '', 'top=50 left=100 width=1100 height=700')">
                                                <img src="{{asset('assets/admin/images')}}/gallery.png" height="70"></a>
                                        </td>
                                        <td>{{$rs->status}}</td>
                                        <td><a href="{{route('admin_style_edit', ['id'=> $rs->id])}}"> Edit </a></td>
                                        <td><a href="{{route('admin_style_delete', ['id'=> $rs->id])}}"
                                               onclick="return confirm('Delete ! Are you sure?')">
                                                <a href="{{route('admin_image_add', ['style_id' =>$rs->id])}}">
                                                    <img src="{{asset('assets/admin/images')}}/delete.png" height="40"></a>
                                            </a></td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection

@section('footer')
    <!-- footer content -->

    <!-- jQuery -->
    <script src="{{ asset('assets')}}/admin/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('assets')}}/admin/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="{{ asset('assets')}}/admin/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="{{ asset('assets')}}/admin/vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="{{ asset('assets')}}/admin/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script
        src="{{ asset('assets')}}/admin/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/jszip/dist/jszip.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="{{ asset('assets')}}/admin/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{ asset('assets')}}/admin/build/js/custom.min.js"></script>

    <!-- Bootstrap -->
    <link href="{{ asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets')}}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <!-- Datatables -->
    <link href="{{ asset('assets')}}/admin/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css"
          rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css"
          rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css"
          rel="stylesheet">
    <link href="{{ asset('assets')}}/admin/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css"
          rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{ asset('assets')}}/admin//build/css/custom.min.css" rel="stylesheet">
@endsection
