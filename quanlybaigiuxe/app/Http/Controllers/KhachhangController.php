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
        $khachhang = Khachhang::paginate(5);
        return view('index', compact('khachhang'))->with('i', (request()->input('page', 1) -1) *5);
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
        return redirect()->route('khachhang.index')->with('thongbao', 'Thêm thành công!');
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
    public function edit(string $id)
    {
        return view('edit', compact('khachhang'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Khachhang $khachhang)
    {
        $khachhang->update($request->all());
        return redirect()->route('khachhang.index')->with('thongbao', 'Cập nhật thành công!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Khachhang $khachhang)
    {
        $khachhang->delete();
        return redirect()->route('khachhang.index')->with('thongbao', 'Xóa thành công!');
    }
}
