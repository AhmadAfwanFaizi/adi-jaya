<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index()
    {
        $data = [
            'tittle' => 'Tentang',
            'uris' => $this->uris(),
        ];

        return view('tentang', $data);
    }

    //--------------------------------------------------------------------

}
