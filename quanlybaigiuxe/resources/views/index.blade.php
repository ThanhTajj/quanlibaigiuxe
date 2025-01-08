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
                        <a href="{{route('khachhang.create')}}" class="btn btn-primary float-end">Thêm mới</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
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
                                <td>{{++$i}}</td>
                                <td>{{$kh->MaKH}}</td>
                                <td>{{$kh->HoTen}}</td>
                                <td>{{$kh->NgaySinh}}</td>
                                <td>{{$kh->GioiTinh}}</td>
                                <td>{{$kh->BienSo}}</td>
                                <td>{{$kh->LoaiXe}}</td>
                                <td>{{$kh->SDT}}</td>
                                <td>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection