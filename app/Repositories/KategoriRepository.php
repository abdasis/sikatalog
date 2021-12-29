<?php

namespace App\Repositories;

use App\Models\Kategori;
use Dotenv\Util\Str;

class KategoriRepository implements KategoriRepositoryInterface
{
    public function tambah($data) : array
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $data['nama_kategori'];
        $kategori->slug = \Str::slug($data['nama_kategori']);
        $kategori->deskripsi = $data['deskripsi'];
        $kategori->dibuat_oleh = \Auth::id();
        $kategori->diupdate_oleh = \Auth::id();
        $kategori->dihapus_oleh = \Auth::id();
        $kategori->save();

        return $data;

    }

    public function sunting($kategoriId, array $data)
    {
        $kategori = Kategori::find($kategoriId);
        $kategori->nama_kategori = $data['nama_kategori'];
        $kategori->slug = \Str::slug($data['nama_kategori']);
        $kategori->deskripsi = $data['deskripsi'];
        $kategori->dibuat_oleh = \Auth::id();
        $kategori->diupdate_oleh = \Auth::id();
        $kategori->dihapus_oleh = \Auth::id();
        $kategori->save();

        return $data;

    }

    public function tabel()
    {
        return Kategori::query()->latest();
    }

    public function hapus($kategoriId)
    {
        $kategori = Kategori::find($kategoriId);
        $kategori->delete();
        return $kategori;
    }

}
