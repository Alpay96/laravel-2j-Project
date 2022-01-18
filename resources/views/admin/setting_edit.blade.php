@extends('layouts.admin')

@section('title', 'Edit Settings')
@section('javascript')
    <script src="https://cdn.ckeditor.com/4.17.1/standard/ckeditor.js"></script>
@endsection

@section('content')
    <!-- page content -->
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="title_left">
                    <h3>Edit Settings</h3>
                </div>
            </div>
            <br>
            <div class="">
                <br>
                <form role="form" action="{{route('admin_setting_update')}}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    <div class="">
                        <br>

                        <div class="col-12 col-sm-12">
                            <div class="x_panel">
                                <div class="x_title">
                                    <h2><i class="fa fa-bars"></i> Settings </h2>
                                    <ul class="nav navbar-right panel_toolbox">
                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a></li>
                                        <li><a class="close-link"><i class="fa fa-close"></i></a></li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">


                                    <div class="" role="tabpanel" data-example-id="togglable-tabs">
                                        <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
                                            <li role="presentation" class="active"><a href="#tab_content1" role="tab"
                                            id="general_tab" data-toggle="tab" aria-expanded="true">General</a>
                                            </li>

                                            <li role="presentation" class=""><a href="#tab_content2" role="tab"
                                            id="smtp_tab" data-toggle="tab" aria-expanded="false">Smtp Settings</a>
                                            </li>

                                            <li role="presentation" class=""><a href="#tab_content3" role="tab"
                                            id="social_tab" data-toggle="tab" aria-expanded="false">Social Medias</a>
                                            </li>

                                            <li role="presentation" class=""><a href="#tab_content4" role="tab"
                                            id="aboutus_tab" data-toggle="tab" aria-expanded="false">About Us</a>
                                            </li>

                                            <li role="presentation" class=""><a href="#tab_content5" role="tab"
                                            id="contact_tab" data-toggle="tab" aria-expanded="false">Contact</a>
                                            </li>

                                            <li role="presentation" class=""><a href="#tab_content6" role="tab"
                                            id="references_tab" data-toggle="tab" aria-expanded="false">References</a>
                                            </li>
                                        </ul>

                                        <div id="myTabContent" class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade active in" id="tab_content1"
                                                 aria-labelledby="general_tab">
                                                <p>
                                                    <input type="hidden" id="id" name="id" value="{{$data->id}}" class="form-control">

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
                                                    <label>Company</label>
                                                    <input type="text" name="description" value="{{$data->description}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Address</label>
                                                    <input type="text" name="address" value="{{$data->address}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Phone</label>
                                                    <input type="text" name="phone" value="{{$data->phone}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Fax</label>
                                                    <input type="text" name="fax" value="{{$data->fax}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>E-mail</label>
                                                    <input type="text" name="email" value="{{$data->email}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Status</label>
                                                    <select class="form-control select2" name="status" style="width: 100%;">
                                                        <option selected="selected">{{$data->status}}</option>
                                                        <option>True</option>
                                                        <option>False</option>
                                                    </select>
                                                </div>
                                                </p>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab_content2"
                                                 aria-labelledby="smtp_tab">
                                                <p>
                                                <div class="form-group">
                                                    <label>SmtpServer</label>
                                                    <input type="text" name="smtpserver" value="{{$data->smtpserver}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>SmtpMail</label>
                                                    <input type="text" name="smtpmail" value="{{$data->smtpmail}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>SmtpPassword</label>
                                                    <input type="password" name="smtppassword" value="{{$data->smtppassword}}"
                                                           class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Smtpport</label>
                                                    <input type="number" name="smtpport" value="{{$data->smtpport}}" class="form-control">
                                                </div>
                                                </p>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab_content3"
                                                 aria-labelledby="social_tab">
                                                <p>
                                                <div class="form-group">
                                                    <label>Facebook</label>
                                                    <input type="text" name="facebook" value="{{$data->facebook}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Instagram</label>
                                                    <input type="text" name="instagram" value="{{$data->instagram}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Twitter</label>
                                                    <input type="text" name="twitter" value="{{$data->twitter}}" class="form-control">
                                                </div>

                                                <div class="form-group">
                                                    <label>Youtube</label>
                                                    <input type="text" name="youtube" value="{{$data->youtube}}" class="form-control">
                                                </div>
                                                </p>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab_content4"
                                                 aria-labelledby="aboutus_tab">
                                                <p>
                                                <div class="form-group">
                                                    <label>About Us</label>
                                                    <textarea id="aboutus" name="aboutus">{{$data->aboutus}}</textarea>
                                                    <script>
                                                        CKEDITOR.replace('aboutus');
                                                    </script>
                                                </div>
                                                </p>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab_content5"
                                                 aria-labelledby="contact_tab">
                                                <p>
                                                <div class="form-group">
                                                    <label>Contact</label>
                                                    <textarea id="contact" name="contact">{{$data->contact}}</textarea>
                                                    <script>
                                                        CKEDITOR.replace('contact');
                                                    </script>
                                                </div>
                                                </p>
                                            </div>

                                            <div role="tabpanel" class="tab-pane fade" id="tab_content6"
                                                 aria-labelledby="profile-tab">
                                                <p>
                                                <div class="form-group">
                                                    <label>References</label>
                                                    <textarea id="references" name="references">{{$data->references}}</textarea>
                                                    <script>
                                                        CKEDITOR.replace('references');
                                                    </script>
                                                </div>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="">
                        <button type="submit" class="btn btn-primary">Update Settings</button>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- /page content -->
@endsection
