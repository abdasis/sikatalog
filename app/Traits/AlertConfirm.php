<?php

namespace App\Traits;

use Jantinnerezo\LivewireAlert\LivewireAlert;

trait AlertConfirm
{
    use LivewireAlert;

    public $model_id;

    public function hapus($id)
    {
        $this->confirm('Yakin hapus data ini?', [
            'text' => 'Data yang dihapus bisa di kembalikan dari trash',
            'showCancelButton' => true,
            'cancelButtonText' => 'Tidak',
            'onDenied' => 'denied',
            'onDismissed' => 'batal',
            'onConfirmed' => 'dihapus',
        ]);

        $this->model_id = $id;
    }

}
