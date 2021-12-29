<?php

namespace App\Http\Livewire\Kategori;

use App\Repositories\KategoriRepositoryInterface;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Tambah extends Component
{
    use LivewireAlert;

    public $nama_kategori, $deskripsi;

    protected $kategori;

    public function boot(KategoriRepositoryInterface $kategoriRepository)
    {
        $this->kategori = $kategoriRepository;

    }


    protected $rules = [
        'nama_kategori' => 'required|unique:kategoris,nama_kategori',
    ];

    public function simpan()
    {

        $this->validate();


        $data = [
            'nama_kategori' => $this->nama_kategori,
            'deskripsi' => $this->deskripsi,
        ];

        $this->kategori->tambah($data);

        $this->alert('success', 'Berhasil 👍', ['text' => "Kategori {$data['nama_kategori']} Berhasil ditambahkan"]);

    }
    public function render()
    {
        return view('livewire.kategori.tambah');
    }
}
