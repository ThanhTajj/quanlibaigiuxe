@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Quản lý bãi giữ xe</h3>
                    </div>
                    <div class="col-md-6">
                        <div class="float-end">
                            <a href="{{ url('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang/create') }}" class="btn btn-primary">Thêm mới</a>
                            <!-- Thêm nút Logout -->
                            <form action="https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/logout" method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-danger">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if (Session::has('thongbao'))
                    <div class="alert alert-success">
                        {{ Session::get('thongbao') }}
                    </div>
                @endif
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã khách hàng</th>
                            <th>Họ tên</th>
                            <th>Ngày sinh</th>
                            <th>Giới tính</th>
                            <th>Biển số</th>
                            <th>Loại xe</th>
                            <th>Số điện thoại</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($khachhang as $kh)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $kh->MaKH }}</td>
                                <td>{{ $kh->HoTen }}</td>
                                <td>{{ $kh->NgaySinh }}</td>
                                <td>{{ $kh->GioiTinh }}</td>
                                <td>{{ $kh->BienSo }}</td>
                                <td>{{ $kh->LoaiXe }}</td>
                                <td>{{ $kh->SDT }}</td>
                                <td>
                                    <form action="{{ url('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang/' . $kh->id) }}" method="POST">
                                        <a href="{{ url("https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang/{$kh->id}/edit") }}" class="btn btn-info">Sửa</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?');">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection