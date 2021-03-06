<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="row">
        <div class="col-md-5">
            <div class="card">
                <div class="card-header bg-white border-light border-bottom">
                    <strong>Tambah Kategori</strong>
                </div>
                <div class="card-body">
                    <form wire:submit.prevent="simpan">
                        <div class="form-group mb-2">
                            <label for="">Nama Kategori <span class="text-danger">*</span></label>
                            <input wire:model="nama_kategori" type="text" class="form-control" name="" id="" placeholder="Masukan nama kategori">
                            <x-error-message error="nama_kategori"/>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Deskripsi Kategori</label>
                            <textarea wire:model="deskripsi" name="" class="form-control" placeholder="Masukan deskripsi" id="" cols="30" rows="10"></textarea>
                            <x-error-message error="deskripsi"/>

                        </div>

                        <div class="form-group mb-2">
                            <button class="btn btn-dark">Simpan Kategori</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
