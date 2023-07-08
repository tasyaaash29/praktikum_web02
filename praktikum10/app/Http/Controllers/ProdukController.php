<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;
use App\Models\KategoriProduk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // ambil data produk dari database
        // gabungin tabelnya
        $produk = produk::join('kategori_produk', 'produk.kategori_produk_id', '=', 'kategori_produk.id')
            // tampilin data
            ->select('produk.*', 'kategori_produk.nama as nama_kategori')
            ->get();

        //kirim data ke view
        return view('admin.produk.produk', compact('produk'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::all();

        // kirim data ke view form create
        return view('admin.produk.create', compact('kategori_produk', 'produk'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Membuat tambah data / validasi tambah data
        $produk = new Produk;
        // kolom kode kita isi dengan input user kode
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        // simpan data nya
        $produk->save();
        // tampilin view produk
        return redirect('produk');
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
        $kategori_produk = KategoriProduk::all();
        $produk = Produk::where('id', $id)->get();

        // kirim data ke view form edit
        return view('admin.produk.edit', compact('kategori_produk', 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // Fitur edit data / validasi edit data
        $produk = produk::find($request->id);
        $produk->kode = $request->kode;
        $produk->nama = $request->nama;
        $produk->harga_jual = $request->harga_jual;
        $produk->harga_beli = $request->harga_beli;
        $produk->stok = $request->stok;
        $produk->min_stok = $request->min_stok;
        $produk->deskripsi = $request->deskripsi;
        $produk->kategori_produk_id = $request->kategori_produk_id;
        // simpan data nya
        $produk->save();
        // tampilin view produk
        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Fitur apus data
        $produk = Produk::find($id);
        $produk->delete();

        // balikin ke halam produk
        return redirect('produk')->with('success', "Produk berhasil di hapus");
    }
}
