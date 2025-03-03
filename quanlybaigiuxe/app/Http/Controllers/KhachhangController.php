<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Khachhang;

class KhachhangController extends Controller
{
    /**
     * Display a listing of the resource.
     * 
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $khachhang = Khachhang::orderBy('MaKH', 'asc')->get();
        return view('index', compact('khachhang'))->with('i', 0);
    }    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Khachhang::create($request->all());
        return redirect(url('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang'))->with('thongbao', 'Thêm thành công!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $khachhang = Khachhang::findOrFail($id);
        return view('edit', compact('khachhang'));
    }    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Khachhang $khachhang)
    {
        $khachhang->fill($request->all())->save();
        return redirect(url('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang'))->with('thongbao', 'Cập nhật thành công!');
    }    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Khachhang $khachhang)
    {
        $khachhang->delete();
        return redirect(url('https://literate-eureka-jjj6497p7wj35g4v-8000.app.github.dev/khachhang'))->with('thongbao', 'Xóa thành công!');
    }
}
