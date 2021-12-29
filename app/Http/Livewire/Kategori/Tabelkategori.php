<?php

namespace App\Http\Livewire\Kategori;

use App\Repositories\KategoriRepositoryInterface;
use App\Traits\AlertConfirm;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class Tabelkategori extends DataTableComponent
{
    use AlertConfirm;
    private $kategori;

    protected $listeners = ['dihapus'];

    public function boot(KategoriRepositoryInterface $kategoriRepository)
    {
        $this->kategori = $kategoriRepository;
    }

    public function dihapus()
    {
        $this->kategori->hapus($this->model_id);
        if ($this->kategori == true){
            $this->alert('success', 'Berhasil!', ['text' => 'Data berhasil dihapus']);
        }else{
            $this->alert('error','Oops!', ['text' => 'Terjadi kesalahaan saat hapus data']);
        }
    }
    public function columns(): array
    {
        return [
            Column::make('ID', 'id')->sortable(),
            Column::make('Kategori', 'nama_kategori')->sortable(),
            Column::make('Deskrispi', 'deskripsi')->sortable(),
            Column::make('Link', 'slug')->format(function ($slug){
                return url('/') . '/' . $slug;
            })->sortable(),
            Column::make('Option', 'slug')->format(function ($slug, $baris, $kolom){
                return view('partials.tombol-aksi',[
                    'edit' => route('kategori.sunting', $slug),
                    'hapus' => $kolom->id
                ]);
            }),
        ];
    }

    public function query(): Builder
    {
        return $this->kategori->tabel();

    }
}
