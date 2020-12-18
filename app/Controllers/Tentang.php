<?php

namespace App\Controllers;

class Tentang extends BaseController
{
    public function index()
    {
        $data = [
            'uris' => $this->uris(),
        ];

        return view('tentang', $data);
    }

    //--------------------------------------------------------------------

}
