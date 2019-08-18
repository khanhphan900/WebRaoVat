<?php

namespace App\Http\Controllers;

use App\DanhMuc;
use App\KhuVuc;
use App\BatDongSan;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $danhMuc = DanhMuc::pluck('name');
        // $batDongSan = BatDongSan::paginate(3);
        $batDongSan = BatDongSan::get() ;
        $khuVuc = KhuVuc::pluck('name');
        // dd($batDongSan);
        return view('Page.tin', ['danhMuc'=>$danhMuc, 'khuVuc'=>$khuVuc, 'batDongSan'=>$batDongSan]);
    }

    // đăng tin
    public function create()
    {
        $danhMuc = DanhMuc::pluck('name');
        // $batDongSan = BatDongSan::paginate(3);
        $batDongSan = BatDongSan::get() ;
        $khuVuc = KhuVuc::pluck('name');
        return view('articles.dangTin', ['danhMuc'=>$danhMuc, 'khuVuc'=>$khuVuc, 'batDongSan'=>$batDongSan]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($name)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
