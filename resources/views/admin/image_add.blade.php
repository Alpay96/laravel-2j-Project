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
        body{margin-left:15px;margin-right:15px}
    </style>


</head>
<body>

<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Add Image</h3> <br>
                <h4><font color="#ff4500"> Style : {{$data->title}}</font></h4>
            </div>
        </div>

        <div class="">
            <form role="form" action="{{route('admin_image_store', ['style_id'=>$data->id])}}" method="post"
                  enctype="multipart/form-data">
                @csrf
                <div class="">
                    <br>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" id="title" name="title" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>

                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Add Image</button>
                </div>
            </form>

            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach($images as $rs)
                    <tr>
                        <td>{{$rs->id}}</td>
                        <td>{{$rs->title}}</td>

                        <td>
                            @if($rs->image)
                                <img src="{{Storage::url($rs->image)}}" height="100" alt="">
                            @endif
                        </td>
                        <td><a href="{{route('admin_style_edit', ['id'=> $rs->id])}}"> Edit </a></td>

                        <td><a href="{{route('admin_image_delete', ['id'=> $rs->id, 'style_id'=>$data->id])}}"
                               onclick="return confirm('Record will be DELETE ! Are you sure?')">
                                <img src="{{asset('assets/admin/images')}}/delete.png" height="40"></a>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>
