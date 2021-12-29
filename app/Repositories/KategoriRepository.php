<?php

namespace App\Repositories;

use App\Models\Kategori;

class KategoriRepository implements KategoriRepositoryInterface
{
    public function create($data) : array
    {
        $kategori = new Kategori();
        $kategori->nama_kategori = $data['kategori'];
        $kategori->slug = \Str::slug($data['kategori']);
        $kategori->deskripsi = $data['deskripsi'];
        $kategori->save();

        return  $kategori;
    }

}
