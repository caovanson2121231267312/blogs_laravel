@extends('layouts.admin')

@section('title')
    <title>
        Add code
    </title>
@endsection

@section('body')
    <div class="content-wrapper">
        <x-breadcrumb name="Add code" />


        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body row">
                                <form class="col-8" action="{{ route('codes.store') }}" method="post"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên :</label>
                                            <input type="text" class="form-control" name="name"
                                                id="exampleInputEmail1" placeholder="VD : laravel, ...">
                                            <small class="text-danger"> {{ $errors->first('name') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Từ khóa tìm kiếm:</label>
                                            <textarea class="form-control" name="keywords"></textarea>
                                            <small class="text-danger"> {{ $errors->first('keywords') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả:</label>
                                            <textarea class="form-control" name="description"></textarea>
                                            <small class="text-danger"> {{ $errors->first('description') ?? '' }} </small>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Thêm</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
    </div>
@endsection
