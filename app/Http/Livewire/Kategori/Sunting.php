<?php

namespace App\Http\Livewire\Kategori;

use App\Models\Kategori;
use App\Repositories\KategoriRepositoryInterface;
use Illuminate\Database\QueryException;
use Jantinnerezo\LivewireAlert\LivewireAlert;
use Livewire\Component;

class Sunting extends Component
{
    use LivewireAlert;

    public $nama_kategori, $deskripsi;
    public $kategori_id;

    protected $kategori;
    public function boot(KategoriRepositoryInterface $kategoriRepository)
    {
        $this->kategori = $kategoriRepository;
    }
    public function mount($slug)
    {
        $kategori = Kategori::where('slug', $slug)->latest()->first();
        $this->nama_kategori = $kategori->nama_kategori;
        $this->deskripsi = $kategori->deskripsi;
        $this->kategori_id = $kategori->id;
    }

    public function simpan()
    {
        $data = [
            'nama_kategori' => $this->nama_kategori,
            'deskripsi' => $this->deskripsi,
        ];

        try {

            $this->kategori->sunting($this->kategori_id, $data);
            $this->alert('success', 'Berhasil 👌', ['text' => 'Kategori berhasil diperbarui']);
        }catch (QueryException $exception){
            dd($exception->getMessage());
            $this->alert('error', 'Maaf!', ['text' => 'Terjadi kesalahaan saat melakukan update kategori']);
        }



    }
    public function render()
    {
        return view('livewire.kategori.sunting');
    }
}
