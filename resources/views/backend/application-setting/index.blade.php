@extends('backend.layout.master')
@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0 text-dark">Application Setting</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('home')}}">{{__('back_blade.home')}}</a></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-md-12" >
                        <!-- Custom tabs (Charts with tabs)-->
                        <div class="card" >
                            <div class="card-body">
                                <form action="{{ route('application.setting') }}"  method="post" id="myForm"   enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="mobile">Mobile</label>
                                            <input type="text" name="mobile" value="{{ get_static_option('mobile') }}" id="mobile" class="form-control">
                                            @error('mobile')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="email">Email</label>
                                            <input type="email" name="email" value="{{ get_static_option('email') }}" id="email" class="form-control">
                                            @error('email')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="facebook">Facebook</label>
                                            <input type="text" name="facebook" value="{{ get_static_option('facebook') }}" id="facebook" class="form-control">
                                            @error('facebook')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="twitter">Twitter</label>
                                            <input type="text" name="twitter" value="{{ get_static_option('twitter') }}" id="twitter" class="form-control">
                                            @error('twitter')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="linkedin">Linkedin</label>
                                            <input type="text" name="linkedin" value="{{ get_static_option('linkedin') }}" id="linkedin" class="form-control">
                                            @error('linkedin')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="google">Google</label>
                                            <input type="text" name="google" value="{{ get_static_option('google') }}" id="google" class="form-control">
                                            @error('google')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="rss">RSS</label>
                                            <input type="text" name="rss" value="{{ get_static_option('rss') }}" id="rss" class="form-control">
                                            @error('rss')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="banner_image">Banner image</label>
                                            <input type="file" name="banner_image" value="{{ get_static_option('banner_image') }}" id="banner_image" class="form-control">
                                            <div class="image">
                                                <img src="{{ asset(get_static_option('banner_image')) }}" width="100" class="img-circle elevation-2">
                                            </div>
                                            @error('banner_image')
                                            <div class="alert alert-danger" role="alert">
                                                {{ $message }}
                                            </div>
                                            @enderror
                                        </div>

                                        <div class="form-group col-md-12 text-center">
                                            <input type="submit" name="submit" value="Update" class="btn btn-primary col-6">
                                        </div>
                                    </div>
                                </form>
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </section>
                    <!-- /.Left col -->
                </div>
                <!-- /.row (main row) -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
