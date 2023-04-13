@extends('layouts.admin')

@section('title')
    <title>
        Add new product
    </title>
@endsection

@section('body')
    <div class="content-wrapper">
        <x-breadcrumb name="Add product" />


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
                                <form class="col-8" action="{{ route('products.store') }}" method="post"
                                    autocomplete="off" enctype="multipart/form-data">
                                    @csrf
                                    <div class="">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tiêu đề:</label>
                                            <input type="text" class="form-control" name="title"
                                                id="exampleInputEmail1" placeholder="VD : tin thể thao, ...">
                                            <small class="text-danger"> {{ $errors->first('name') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Ảnh:</label>
                                            <input type="file" class="form-control" name="image" accept="image/*"
                                                id="exampleInputEmail1" required>
                                            <small class="text-danger"> {{ $errors->first('image') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Link tải:</label>
                                            <input type="text" class="form-control" name="link" required>
                                            <small class="text-danger"> {{ $errors->first('link') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Link video hướng dẫn:</label>
                                            <input type="text" class="form-control" name="video" required>
                                            <small class="text-danger"> {{ $errors->first('video') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giá tiền:</label>
                                            <input type="text" class="form-control" name="price" required>
                                            <small class="text-danger"> {{ $errors->first('price') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Danh mục code:</label>
                                            <select name="code_id" class="form-control">
                                                <option value="" disabled selected>-- Chọn danh mục --</option>
                                                @foreach ($codes as $value)
                                                    <option value="{{ $value->id }}">{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger"> {{ $errors->first('code_id') ?? '' }} </small>
                                        </div>
                                        <div class="form-group select-select2">
                                            <label for="exampleInputEmail1">Type:</label>
                                            <select name="type" class="form-control">
                                                <option value="" disabled selected>-- Chọn thể loại --</option>
                                                @foreach ($types as $value)
                                                    <option value="{{ $value->value }}">{{ $value->description }}</option>
                                                @endforeach
                                            </select>
                                            <small class="text-danger"> {{ $errors->first('type') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Từ khóa cho google tìm kiếm:</label>
                                            <textarea class="form-control" name="keywords"></textarea>
                                            <small class="text-danger"> {{ $errors->first('keywords') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Cam kết:</label>
                                            <textarea class="form-control" name="commit"></textarea>
                                            <small class="text-danger"> {{ $errors->first('commit') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả:</label>
                                            <textarea class="form-control" name="description"></textarea>
                                            <small class="text-danger"> {{ $errors->first('description') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hướng dẫn cài dặt:</label>
                                            <textarea class="form-control compose-textarea" name="tutorial"></textarea>
                                            <small class="text-danger"> {{ $errors->first('tutorial') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Chi tiết:</label>
                                            <textarea class="form-control compose-textarea" name="detail"></textarea>
                                            <small class="text-danger"> {{ $errors->first('detail') ?? '' }} </small>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hiển thị lên trang chủ:</label>
                                            <input type="checkbox" value="1" name="hot"> yes
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
