@extends('layouts.admin')

@section('title', 'Add Style')
@section('javascript')

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Add Style</h3>
                </div>
            </div>
            <br>
            <div class="">
                <br>
                <form role="form" action="{{route('admin_style_store')}}" method="post">
                    @csrf
                    <div class="">
                        <br>
                        <div class="form-group">
                            <label>Title</label>
                            <input type="text" id="title" name="title" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Keywords</label>
                            <input type="text" name="keywords" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" name="description" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Detail</label>
                            <textarea id="detail" name="detail"></textarea>
                            <script>
                                $(document).ready(function () {
                                    $('#detail').summernote();
                                });
                            </script>
                        </div>

                        <div class="form-group">
                            <label>Slug</label>
                            <input type="text" name="slug" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control select2" name="status" style="width: 100%;">
                                <option selected="selected">False</option>
                                <option>True</option>
                            </select>
                        </div>

                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Add Style</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
