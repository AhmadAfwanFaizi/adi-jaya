<?php

namespace App\Controllers;

class Produk extends BaseController
{
	public function index()
	{
		$data = [
			'uris' => $this->uris(),
		];

		return view('produk', $data);
	}

	//--------------------------------------------------------------------

}
