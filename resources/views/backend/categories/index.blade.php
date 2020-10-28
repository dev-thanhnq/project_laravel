@extends('backend.layouts.master')
@section('header-content')
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Danh sách thể loại</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Danh sách thể loại</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
@endsection
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Thể loại</th>
                                <th>Số sản phẩm</th>
                                <th>Mô tả</th>
                                <th>#</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($categories as $categoty)
                                <tr>
                                    <td>{{ $categoty->id }}</td>
                                    <td>{{ $categoty->name }}</td>
                                    <td></td>
                                    <td></td>
                                    <td>
                                        <a href="">
                                            <button class="btn btn-primary">Chi tiết</button>
                                        </a>
                                        <a href="">
                                            <button class="btn btn-danger">Xóa</button>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                            </tfoot>
                        </table>
                        <br>
                        <div style="float: right">{!! $categories->links() !!}</div>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
            </div>
        </div>
    </div>
@endsection
