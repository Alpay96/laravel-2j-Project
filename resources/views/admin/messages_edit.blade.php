<html>
<head>
    <title>Image Gallery</title>
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
                <h3>Message Detail</h3>
                @include('home.message')
            </div>
        </div>
        <br>
        <div class="">
            <br>
            <form role="form" action="{{route('admin_message_update', ['id'=>$data->id])}}" method="post"
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
                            <td>{{$data->name}}</td>
                        </tr>
                        <tr>
                            <th>Surname</th>
                            <td>{{$data->surname}}</td>
                        </tr>
                        <tr>
                            <th>E-mail</th>
                            <td>{{$data->email}}</td>
                        </tr>
                        <tr>
                            <th>Phone</th>
                            <td>{{$data->phone}}</td>
                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>{{$data->subject}}</td>
                        </tr>
                        <tr>
                            <th>Message</th>
                            <td>{{$data->message}}</td>
                        </tr>
                        <tr>
                            <th>Admin Note</th>
                            <td><textarea id="note" name="note">{{$data->note}}</textarea></td>
                        </tr>
                    </table>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Update Message</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>
</html>
