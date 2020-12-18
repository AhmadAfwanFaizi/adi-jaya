<?php

namespace App\Controllers;

class Kontak extends BaseController
{
    public function index()
    {
        $data = [
            'uris' => $this->uris(),
        ];

        return view('kontak', $data);
    }

    //--------------------------------------------------------------------

}
