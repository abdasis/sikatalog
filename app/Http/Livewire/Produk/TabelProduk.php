<?php

namespace App\Http\Livewire\Produk;

use App\Repositories\ProdukRepositoryInterface;
use Illuminate\Database\Eloquent\Builder;
use Rappasoft\LaravelLivewireTables\DataTableComponent;
use Rappasoft\LaravelLivewireTables\Views\Column;

class TabelProduk extends DataTableComponent
{

    private $produk;
    public function boot(ProdukRepositoryInterface $produkRepository)
    {
        $this->produk = $produkRepository;
    }
    public function columns(): array
    {
        return [
            Column::make('Tanggal Dibuat', 'created_at')->sortable(),
            Column::make('Nama Produk', 'nama_produk')
                ->format(function ($val, $kolom, $baris){
                    $url  = route('produk.sunting', $baris->id);
                    return "<a href='{$url}'>{$val}</a>";
                })
                ->asHtml()
                ->sortable()->searchable(),
            Column::make('Kategori Produk', 'kategori')->sortable()->searchable(),
            Column::make('Deskripsi', 'deskripsi')
                ->format(function ($val){
                    return strip_tags($val);
                })
                ->sortable()->searchable(),
        ];
    }

    public function query(): Builder
    {
        return $this->produk->tabel();

    }
}
