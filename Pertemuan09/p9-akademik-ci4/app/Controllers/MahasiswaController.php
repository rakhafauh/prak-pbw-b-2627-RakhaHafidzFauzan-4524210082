<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\MahasiswaModel;
use CodeIgniter\HTTP\ResponseInterface;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->findAll();

        return view('mahasiswa/index', $data);
    }

    public function create()
    {
        return view('mahasiswa/create');
    }

    public function store()
    {
        $model = new MahasiswaModel();
        $data = [
            'nim'   => $this->request->getPost('nim'),
            'nama'  => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'prodi' => $this->request->getPost('prodi'),
            'angkatan' => $this->request->getPost('angkatan'),
            'ipk'   => $this->request->getPost('ipk'),
        ];
        $model->insert($data);
        return redirect()->to('/mahasiswa');
    }
}