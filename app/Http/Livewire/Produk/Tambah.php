<?php

namespace App\Http\Livewire\Produk;

use App\Models\Kategori;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;

    public $gambar_unggulan, $nama_produk, $kategori_produk, $deskripsi, $status;

    protected $rules = [
        'gambar_unggulan' => 'mimes:jpg,png',
        'nama_produk' => 'required',
        'status' => 'required',
        'kategori_produk' => 'required',
    ];

    public function simpan()
    {

        $data = [
            'nama_produk' => $this->nama_produk,
            'kategori_produk' => $this->kategori_produk,
            'deskripsi' => $this->deskripsi,
            'status' => $this->status,
            'gambar_unggulan' => $this->gambar_unggulan,
        ];

        dd($data);

    }

    public function render()
    {
        return view('livewire.produk.tambah',[
            'data_kategori' => Kategori::latest()->get(),
        ]);
    }
}
