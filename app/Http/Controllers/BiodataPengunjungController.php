<?php

namespace App\Http\Controllers;

use App\Models\BiodataPengunjung;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class BiodataPengunjungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $biodata = BiodataPengunjung::all();

        return view('biodata-pengunjung.index', compact(['biodata']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('biodata-pengunjung.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $biodata =  BiodataPengunjung::create($request->except(['_token', 'submit']));

        Alert::success('Congrats', 'Selamat Anda Berhasil Registrasi kode registrasi anda adalah = ' . $biodata->id);

        return redirect('/biodata-pengunjung/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        echo 'ok';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $biodata = BiodataPengunjung::find($id);
        return view('biodata-pengunjung.edit', compact('biodata'));
    }

    public function check($id)
    {
        $biodata = BiodataPengunjung::find($id);
        $biodata->check_in = true;
        $biodata->save();
        return redirect('/biodata-pengunjung');
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
        $biodata = BiodataPengunjung::find($id);
        $biodata->update($request->except(['_token', 'submit']));
        return redirect('/biodata-pengunjung');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $biodata = BiodataPengunjung::find($id);
        $biodata->delete();
        return redirect('/biodata-pengunjung');
    }
}
