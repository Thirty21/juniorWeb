<?php

namespace App\Http\Controllers;

use App\Http\Requests\BarangRequest;
use Illuminate\Http\Request;
// use App\Http\Requests\MapelRequest;
use App\Models\Barang;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
        $datas = Barang::where('supdier_id', 'LIKE', '%' . $keyword . '%')
            ->orWhere('kategori', 'LIKE', '%' . $keyword . '%')
            ->get();

        return view('barang.index', compact('datas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Barang;
        return view('barang.create', compact('model'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BarangRequest $request)
    {
        $model = new Barang;
        $model->supdier_id = $request->supdier_id;
        $model->kategori = $request->kategori;
        $model->nama_barang = $request->nama_barang;
        $model->harga = $request->harga;
        $model->stok = $request->stok;
        $model->supplier = $request->supplier;
        $model->save();

        return redirect('barang')->with('success', "data berhasil di simpan");
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
        $model = Barang::find($id);
        return view('barang.edit', compact('model'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BarangRequest $request, $id)
    {
        $model = Barang::find($id);
        $model->supdier_id = $request->supdier_id;
        $model->kategori = $request->kategori;
        $model->nama_barang = $request->nama_barang;
        $model->harga = $request->harga;
        $model->stok = $request->stok;
        $model->supplier = $request->supplier;
        $model->save();

        return redirect('barang')->with('success', "data berhasil di ubah");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Barang::find($id);
        $model->delete();
        return redirect('barang')->with('success', "data berhasil di hapus");
    }
}
