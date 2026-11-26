<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;

class MahasiswaController extends BaseController
{
    public function index()
    {
        $model = new MahasiswaModel();
        $mahasiswa = $model->findAll();

        $data = [
            'mahasiswa' => $mahasiswa,
            'jumlahMahasiswa' => count($mahasiswa),
            'jumlahProdi' => count(array_unique(
                array_column($mahasiswa, 'prodi')
            ))
        ];

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
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'prodi' => $this->request->getPost('prodi'),
            'angkatan' => $this->request->getPost('angkatan'),
            'ipk' => $this->request->getPost('ipk')
        ];

        $model->insert($data);

        return redirect()->to('/mahasiswa')
            ->with('success', 'Data berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $model = new MahasiswaModel();
        $data['mahasiswa'] = $model->find($id);

        if (!$data['mahasiswa']) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        return view('mahasiswa/edit', $data);
    }

    public function update($id)
    {
        $model = new MahasiswaModel();

        $data = [
            'nim' => $this->request->getPost('nim'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'prodi' => $this->request->getPost('prodi'),
            'angkatan' => $this->request->getPost('angkatan'),
            'ipk' => $this->request->getPost('ipk')
        ];

        $model->update($id, $data);

        return redirect()->to('/mahasiswa')
            ->with('success', 'Data berhasil diperbarui!');
    }

    public function delete($id)
    {
        $model = new MahasiswaModel();
        $model->delete($id);

        return redirect()->to('/mahasiswa')
            ->with('success', 'Data berhasil dihapus!');
    }
}
