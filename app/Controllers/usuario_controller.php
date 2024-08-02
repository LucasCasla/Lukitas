<?php

namespace App\Controllers;

use App\Models\UsuarioModel;
use CodeIgniter\Controller;

class UsuarioController extends Controller
{
    public function __construct()
    {
        helper(['form', 'url']);
    }

    public function index()
    {
        $model = new UsuarioModel();
        $data['usuarios'] = $model->findAll();
        echo view('back/usuario/index', $data);
    }

    public function edit($id)
    {
        $model = new UsuarioModel();
        $data['usuario'] = $model->find($id);
        echo view('back/usuario/edit', $data);
    }

    public function update($id)
    {
        $model = new UsuarioModel();
        $data = [
            'nombre' => $this->request->getPost('nombre'),
            'apellido' => $this->request->getPost('apellido'),
            'usuario' => $this->request->getPost('usuario'),
            'email' => $this->request->getPost('email'),
        ];
        if ($this->request->getPost('pass')) {
            $data['pass'] = password_hash($this->request->getPost('pass'), PASSWORD_DEFAULT);
        }
        $model->update($id, $data);
        return redirect()->to('/admin');
    }

    public function delete($id)
    {
        $model = new UsuarioModel();
        $model->delete($id);
        return redirect()->to('/admin');
    }
}


