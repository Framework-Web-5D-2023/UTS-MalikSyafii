<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function home(): string
    {
        $barang = $this->barangModel->getAllBarang();
        $data = [
            "title" => "home",
            "barang" => $barang
        ];
        return view('home', $data);
    }
    public function input(): string
    {
        $data = [
            "title" => "input",
        ];
        return view('create', $data);
    }
    public function create()
    {
        $nama = $this->request->getvar("nama");
        $harga = $this->request->getVar("harga");
        $produksi = $this->request->getVar("produksi");
        $data = [
            "nama"=> $nama,
            "harga" => $harga,
            "produksi" => $produksi
            ];
        $this->barangModel->create($data);
        return redirect()->to(base_url());
    }
}
