<?php

namespace App\Http\Livewire\Produk;

use App\Models\Kategori;
use App\Models\Produk;
use App\Repositories\ProdukRepositoryInterface;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;
use Livewire\WithFileUploads;

class Tambah extends Component
{
    use WithFileUploads;
    use LivewireAlert;

    public $gambar_unggulan, $nama_produk, $kategori_produk, $deskripsi, $status;

    private $produk;

    protected $rules = [
        'gambar_unggulan' => 'mimes:jpg,png',
        'nama_produk' => 'required|unique:produks,nama_produk',
        'status' => 'required',
        'kategori_produk' => 'required',
    ];

    public function boot(ProdukRepositoryInterface $produkRepository)
    {
        $this->produk = $produkRepository;
    }

    public function simpan()
    {

        $this->validate();
        $data = [
            'nama_produk' => $this->nama_produk,
            'kategori_produk' => $this->kategori_produk,
            'deskripsi' => $this->deskripsi,
            'status' => $this->status,
            'gambar_unggulan' => $this->gambar_unggulan,
        ];

        $this->produk->simpan($data);

        $this->alert('success', 'Berhasil', ['text' => 'Data berhasil disimpan']);

    }

    public function render()
    {
        return view('livewire.produk.tambah',[
            'data_kategori' => Kategori::latest()->get(),
        ]);
    }
}
