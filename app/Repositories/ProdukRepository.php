<?php

namespace App\Repositories;

use App\Models\Produk;
use Carbon\Carbon;

class ProdukRepository implements ProdukRepositoryInterface
{
    public function simpan($data) : array
    {
        /*membuat gambar unggulan*/
        if (!empty($data['gambar_unggulan'])){
            $nama_gambar = \Str::slug(Carbon::now()) . '-' . \Str::slug($data['gambar_unggulan']->getClientOriginalName()) . '.' . $data['gambar_unggulan']->extension();
        }else{
            $nama_gambar = 'gambar-produk-default.png';
        }

        /*query  untuk menyimpan data produk*/
        $produk = new Produk();
        $produk->nama_produk = $data['nama_produk'];
        $produk->slug = \Str::slug($data['nama_produk']);
        $produk->deskripsi = $data['deskripsi'];
        $produk->kategori = $data['kategori_produk'];

        $produk->status = $data['status'];
        $produk->dibuat_oleh = \Auth::id();
        $produk->diupdate_oleh = \Auth::id();
        $produk->dihapus_oleh = \Auth::id();
        $produk->save();

        if ($produk){
            $data['gambar_unggulan']->storeAs('produk', $nama_gambar);
        }
        return $data;

    }

    public function terbaru()
    {
        $produk = Produk::latest()->get();

        return $produk;
    }

    public function tabel()
    {
        return Produk::query();
    }

}
