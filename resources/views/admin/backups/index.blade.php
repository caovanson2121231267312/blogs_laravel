@extends('layouts.admin')

@section('title')
    <title>
        {{ __('messages.backup') }}
    </title>
    <meta name="description" content="Cao Sơn" />
    <meta name="keywords" content="Cao Sơn">
    <meta name="author" content="{{ config('setting.author') }}" />
@endsection

@section('body')
    <div class="content-wrapper">
        <x-breadcrumb name="Backups" />

        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">

                        <div class="card card-outline card-info">
                            <div class="card-header">
                                <h3 class="card-title">DataTable with default features</h3>
                            </div>
                            {{--  --}}
                            <div class="card-body">
                                <div class="flex flex-between">
                                    <div>
                                        <a href="{{ route('backup.create') }}" class="btn btn-outline-primary"
                                            type="button" data-tippy-content="{{ __('messages.backup') }}">
                                            <i class="fas fa-plus"></i>
                                        </a>
                                    </div>
                                </div>

                                <div class="table-responsive">
                                    <table class="mt-3 mb-3 table table-hover table-border">
                                        <thead>
                                            <tr>
                                                <th>
                                                    *
                                                </th>
                                                <th>File name</th>
                                                <th>File size</th>
                                                <th class="text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($data as $key => $value)
                                                <tr>
                                                    <td>{{ $key }}</td>
                                                    <td>
                                                        <div>{{ $value['name'] }}</div>
                                                    </td>
                                                    <td>
                                                        <div>{{ $value['size'] }}</div>
                                                    </td>
                                                    <td>
                                                        <div class="d-flex justify-content-center">
                                                            <a href="{{ route('backup.download', $value['name']) }}"
                                                                class="btn btn-primary me-2">
                                                                <i class="fas fa-download"></i>
                                                                {{ __('messages.download') }}</a>
                                                            @can('role-delete')
                                                                <form class="inlie-block" method="POST"
                                                                    action="{{ route('backup.delete', $value['name']) }}">
                                                                    @csrf
                                                                    @method('DELETE')
                                                                    <button type="submit" class="btn btn-danger"
                                                                        onclick="return confirm('Bạn có chắc chắn muốn xóa bản sao lưu này?')">
                                                                        <i class="fas fa-trash-alt"></i>
                                                                        {{ __('messages.destroy') }}
                                                                    </button>
                                                                </form>
                                                            @endcan
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>


                                </div>

                            </div>

                            {{--  --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
