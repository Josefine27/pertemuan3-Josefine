<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class matkulController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private $matkul = [
                1 => ['kode'=>'SI001', 'nama'=>'Technopreneurship', 'sks'=>'3'],
                2 => ['kode'=>'SI002', 'nama'=>'Perancangan Sistem Informasi', 'sks'=>'3'],
                3 => ['kode'=>'FL001', 'nama'=>'Kewarganegaraan', 'sks'=>'2'],
                4 => ['kode'=>'FL002', 'nama'=>'Sejarah Pemikiran', 'sks'=>'4'],
                5 => ['kode'=>'SI003', 'nama'=>'Business Analysis', 'sks'=>'3']
            ];

     public function index()
    {
        return view('listMatKul')->with('matkul',$this->matkul);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createMatKul');
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
    public function show($id)
    {
        //
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