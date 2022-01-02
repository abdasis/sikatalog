<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="card">
        <div class="card-header bg-white border-bottom border-light">
            <strong>Tambah Produk Baru</strong>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="simpan">
                <div class="row">
                    <div class="col-md-9">

                        <div class="form-group mb-2">
                            <label for="">Nama Produk</label>
                            <input wire:model="nama_produk" type="text" class="form-control"
                                   placeholder="Masukan nama produk" name="" id="">
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Deskripsi Produk</label>
                            <div class="inner-form" wire:ignore>
                                <textarea wire:model="deskripsi" class="form-control" name="" id="" cols="30"
                                          rows="10"></textarea>
                            </div>
                        </div>

                    </div>

                    <div class="col-md-3">
                        <div class="from-group mb-2">
                            <label for="">Status</label>
                            <select wire:model="status" name="" class="form-control" id="">
                                <option value="arsip">Draft</option>
                                <option value="publish">Published</option>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Gambar Unggulan</label>
                            <input wire:model="gambar_unggulan" type="file" class="form-control" name="" id="">
                        </div>

                        <div class="preview-gambar mb-2">
                            <div class="gambar">
                                @if($gambar_unggulan)
                                    <img class="img-fluid" src="{{ $gambar_unggulan->temporaryUrl() }}">
                                @else
                                    <img class="img-fluid" src="{{asset('admin/images/placeholder-image.png')}}" alt="">
                                @endif
                            </div>
                        </div>

                        <div class="form-group mb-2">
                            <label for="">Kategori Produk</label>
                            <select wire:model="kategori_produk" name="" id="" class="form-select">
                                <option value="">Pilih Produk</option>
                                @foreach($data_kategori as $key=>$kategori)
                                    <option value="{{$kategori->nama_kategori}}">{{$kategori->nama_kategori}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group d-grid mb-2">
                            <button type="submit" class="btn btn-dark">
                                <i class="fas fa-save mr-1"></i>
                                Simpan
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@push('js')

    <script>

        tinymce.init({
            selector: 'textarea',
            plugins: 'advlist autolink lists link image charmap print preview hr anchor pagebreak',
            toolbar_mode: 'floating',
            skin: 'bootstrap',
            icons: 'bootstrap',
            height: 500,
            plugins: [
                'advlist autolink lists link image charmap print preview anchor',
                'searchreplace visualblocks code fullscreen',
                'insertdatetime media table paste code help wordcount'
            ],
            toolbar: 'undo redo | formatselect | ' +
                'bold italic backcolor | alignleft aligncenter ' +
                'alignright alignjustify | bullist numlist outdent indent | ' +
                'removeformat | help',
            content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:14px }',
            setup: function (editor) {
                editor.on('blur', function (e) {
                    value = editor.getContent()
                })

                editor.on('init', function (e) {
                    if (value != null) {
                        editor.setContent(value)
                    }
                })

            }
        });


    </script>

@endpush
