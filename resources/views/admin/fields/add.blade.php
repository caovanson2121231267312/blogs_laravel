@extends('layouts.admin')

@section('title')
    <title>
        Add field
    </title>
@endsection

@section('body')
    <div class="content-wrapper">
        <x-breadcrumb name="Add fields" />

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
                                <form class="col-8" action="{{ route('fields.store') }}" method="post">
                                    @csrf
                                    <div class="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên lĩnh vực:</label>
                                            <input type="text" class="form-control" name="name"
                                                id="exampleInputEmail1" placeholder="VD : tin thể thao, ...">
                                            <small class="text-danger"> {{ $errors->first('name') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả:</label>
                                            <select class="form-select" name='parent_id' id="inputGroupSelect04"
                                                aria-label="Example select with button addon">
                                                <option selected value='0'>Choose...</option>
                                                {!! $html !!}
                                            </select>
                                            <small class="text-danger"> {{ $errors->first('parent_id') ?? '' }} </small>
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
