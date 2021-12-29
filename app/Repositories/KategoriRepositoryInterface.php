<?php

namespace App\Repositories;

interface KategoriRepositoryInterface
{
    public function tambah($data): array;

    public function sunting($kategoriId, array $data);

    public function tabel();

    public function hapus($kategoriId);
}
