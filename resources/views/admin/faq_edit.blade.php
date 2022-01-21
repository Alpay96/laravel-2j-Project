@extends('layouts.admin')

@section('title', 'Edit Frequently Asked Questions')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Frequently Asked Questions</h3>
                    @include('home.message')
                </div>
            </div>
            <br>
            <div class="">
                <br>
                <form role="form" action="{{route('admin_faq_update', ['id'=>$data->id])}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <br>
                        <div class="form-group">
                            <label>Position</label>
                            <input type="number" id="position" name="position" value="{{$data->position}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Question</label>
                            <input type="text" name="question" value="{{$data->question}}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>Answer</label>
                            <textarea id="answer" name="answer"> {!! $data->answer !!} </textarea>
                            <script>
                                CKEDITOR.replace('answer');
                            </script>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" name="status" style="width: 100%;">
                            <option selected="selected">{{$data->status}}</option>
                            <option>True</option>
                            <option>False</option>
                        </select>
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
