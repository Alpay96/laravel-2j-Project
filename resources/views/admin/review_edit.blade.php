<html>
<head>
    <title>Review</title>
    <!-- Bootstrap -->
    <link href="{{ asset('assets')}}/admin/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset('assets')}}/admin/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{ asset('assets')}}/admin/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{ asset('assets')}}/admin/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
    <style>
        body {
            margin-left: 15px;
            margin-right: 15px
        }
    </style>


</head>
<body>


<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Review Detail</h3>
                @include('home.message')
            </div>
        </div>
        <br>
        <div class="">
            <br>
            <form role="form" action="{{route('admin_review_update', ['id'=>$data->id])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="">
                    <br>
                    <table id="datatable" class="table table-striped table-bordered">
                        <tr>
                            <th>Id</th>
                            <td>{{$data->id}}</td>
                        </tr>
                        <tr>
                            <th>Name</th>
                            <td>{{$data->user->name}}</td>
                        </tr>
                        <tr>
                            <th>Style</th>
                            <td>{{$data->style->title}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Review</th>
                            <td>{{$data->review}}</td>
                        </tr>
                        <tr>
                            <th>Rate</th>
                            <td>{{$data->rate}}</td>
                        </tr>
                        <tr>
                            <th>IP</th>
                            <td>{{$data->IP}}</td>
                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->created_at}}</td>
                        </tr>

                        <tr>
                            <th>Updated Date</th>
                            <td>{{$data->updated_at}}</td>
                        </tr>

                        <tr>
                            <th>Status</th>
                            <td>
                                <select name="status">
                                    <option selected>{{$data->status}}</option>
                                    <option>True</option>
                                    <option>False</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Update Review</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
