@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Sửa thông tin khách hàng</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{url('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang')}}" class="btn btn-primary float-end">Danh sách khách hàng</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ url('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang/' . $khachhang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Mã Khách hàng</strong>
                                <input type="text" name="MaKH" value="{{$khachhang->MaKH}}" class="form-control" placeholder="Nhập mã khách hàng">
                            </div>
                            <div class="form-group">
                                <strong>Họ tên</strong>
                                <input type="text" name="HoTen" value="{{$khachhang->HoTen}}" class="form-control" placeholder="Nhập họ tên">
                            </div>
                            <div class="form-group">
                                <strong>Ngày sinh</strong>
                                <input type="date" name="NgaySinh" value="{{$khachhang->NgaySinh}}" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <strong>Giới tính</strong>
                                <select name="GioiTinh" class="form-select">
                                    <option selected>Chọn giới tính</option>
                                    <option value="Nam" {{$khachhang->GioiTinh == "Nam" ? 'selected' : ''}}>Nam</option>
                                    <option value="Nữ" {{$khachhang->GioiTinh == "Nữ" ? 'selected' : ''}}>Nữ</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Biển số</strong>
                                <input type="text" name="BienSo" value="{{$khachhang->BienSo}}" class="form-control" placeholder="Nhập biển số xe">
                            </div>
                            <div class="form-group">
                                <strong>Loại xe</strong>
                                <select name="LoaiXe" class="form-select">
                                    <option selected>Chọn loại xe</option>
                                    <option value="Xe đạp" {{$khachhang->LoaiXe == "Xe đạp" ? 'selected' : ''}}>Xe đạp</option>
                                    <option value="Xe máy" {{$khachhang->LoaiXe == "Xe máy" ? 'selected' : ''}}>Xe máy</option>
                                    <option value="Ô tô" {{$khachhang->LoaiXe == "Ô tô" ? 'selected' : ''}}>Ô tô</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <strong>Số điện thoại</strong>
                                <input type="text" name="SDT" value="{{$khachhang->SDT}}" class="form-control" placeholder="Nhập số điện thoại">
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-success mt-2">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
@endsection