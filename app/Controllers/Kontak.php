<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Kontak',
            'uris' => $this->uris(),
        ];

        return view('kontak', $data);
    }

    //--------------------------------------------------------------------

}
