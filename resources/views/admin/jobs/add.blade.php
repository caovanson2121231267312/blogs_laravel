@extends('layouts.admin')

@section('title')
    <title>
        Add Jobs
    </title>
@endsection

@section('body')
    <div class="content-wrapper">
        <x-breadcrumb name="Freelancer" />


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
                                <form class="col-8" action="{{ route('jobs.store') }}" method="post" autocomplete="off"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tiêu đề:</label>
                                            <input type="text" class="form-control" name="title"
                                                id="exampleInputEmail1"
                                                placeholder="VD : Cần thuê 1 freelancer code web, ..." required>
                                            <small class="text-danger"> {{ $errors->first('title') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Lĩnh vực:</label>
                                            <select name="field_id" class="form-control">
                                                @foreach ($fields as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger"> {{ $errors->first('field_id') ?? '' }} </small>
                                        </div>
                                        <div class="form-group select-select2">
                                            <label for="exampleInputEmail1">Hình thức làm việc:</label>
                                            <select name="work_type" class="form-control">
                                                {{-- <option value="" disabled selected>-- Chọn thể loại --</option> --}}
                                                @foreach ($works as $value)
                                                    <option value="{{ $value->value }}">{{ $value->description }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger"> {{ $errors->first('type') ?? '' }} </small>
                                        </div>
                                        <div class="form-group select-select2">
                                            <label for="exampleInputEmail1">Hình thức trả lương:</label>
                                            <select name="pay_type" class="form-control">
                                                {{-- <option value="" disabled selected>-- Chọn thể loại --</option> --}}
                                                @foreach ($pays as $value)
                                                    <option value="{{ $value->value }}">{{ $value->description }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger"> {{ $errors->first('type') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <div class="row">
                                                <div class="col-12 col-md-6">
                                                    <label class="fs-6" for="exampleInputEmail1">Giá tối thiểu:</label>
                                                    <input type="text" class="form-control" name="min_price"
                                                        id="exampleInputEmail1" placeholder="VD : 100.000 VND" required>
                                                    <small class="text-danger"> {{ $errors->first('min_price') ?? '' }}
                                                    </small>
                                                </div>
                                                <div class="col-12 col-md-6">
                                                    <label class="fs-6" for="exampleInputEmail1">Giá tối đa:</label>
                                                    <input type="text" class="form-control" name="max_price"
                                                        id="exampleInputEmail1" placeholder="VD : 600.000 VND" required>
                                                    <small class="text-danger"> {{ $errors->first('max_price') ?? '' }}
                                                    </small>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hạn đến:</label>
                                            <input type="date" class="form-control" name="time_limit"
                                                id="exampleInputEmail1"
                                                placeholder="VD : Cần thuê 1 freelancer code web, ..." required>
                                            <small class="text-danger"> {{ $errors->first('time_limit') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Yêu cầu kỹ năng:</label>
                                            <textarea class="form-control" name="skill"></textarea>
                                            <small class="text-danger"> {{ $errors->first('skill') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả:</label>
                                            <textarea id="compose-textarea" class="form-control" name="description"></textarea>
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
