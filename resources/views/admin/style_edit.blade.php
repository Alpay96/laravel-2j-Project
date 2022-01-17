@extends('layouts.admin')

@section('title', 'Edit Style')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Style</h3>
                </div>
            </div>
            <br>
            <div class="">
                <br>
                <form role="form" action="{{route('admin_style_update', ['id'=>$data->id])}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <br>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" id="title" name="title" value="{{$data->title}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords" value="{{$data->keywords}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" value="{{$data->description}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Image</label>
                            <input type="file" name="image" value="{{$data->image}}" class="form-control">
                            @if($data->image)
                                <img src="{{Storage::url($data->image)}}" height="130" alt="">
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="detail" name="detail">{{$data->detail}}</textarea>
                            <script>
                                CKEDITOR.replace( 'detail' );
                            </script>
                        </div>

                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" value="{{$data->slug}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2" name="status" style="width: 100%;">
                                <option selected="selected">{{$data->status}}</option>
                                <option>True</option>
                                <option>False</option>
                            </select>
                        </div>

                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Update Style</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
