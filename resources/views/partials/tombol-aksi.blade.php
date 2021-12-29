@if(!empty($detail))
    <a href="{{$detail}}" class="action-icon"> <i class="fas fa-eye"></i></a>
@endif

@if(!empty($edit))
    <a href="{{$edit}}" class="action-icon"> <i class="fas fa-edit"></i></a>
@endif

@if(!empty($hapus))
    <a href="javascript:void(0);" wire:click.prevent="hapus({{$hapus}})" class="action-icon text-danger"> <i class="fas fa-trash-alt"></i></a>
@endif
