@extends('layout')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-6">
                        <h3>Thêm khách hàng</h3>
                    </div>
                    <div class="col-md-6">
                        <a href="{{route('khachhang.index')}}" class="btn btn-primary float-end">Danh sách khách hàng</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <form action="{{route('khachhang.store')}}" method="POST">
                
                </form>
            </div>
        </div>
    </div>
@endsection