<?php

namespace App\Controllers;

class Produk extends BaseController
{
	public function index()
	{
		$data = [
			'tittle' => 'Produk',
			'uris' => $this->uris(),
		];

		return view('produk', $data);
	}

	//--------------------------------------------------------------------

}
