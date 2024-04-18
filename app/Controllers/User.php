<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\UserModel;

class User extends BaseController
{
    private $userModel;

    public function __construct() {
        $this->userModel = new UserModel();
    }

    public function index() {
        return view('users', [
            'users' => $this->userModel->paginate(10),
            'pager' => $this->userModel->pager
        ]);
    }

    public function create()
	{
		return view('form');
	}

    public function edit($id)
    {
        return view('form', [
            'user' => $this->userModel->find($id)
        ]);
    }

	public function store()
	{
		if ($this->userModel->save($this->request->getPost())) {
			return view("messages", [
				'message' => 'Usuário salvo com sucesso'
			]);
		} else {
			throw new Exception('Error');
		}
	}

    public function delete($id) {
        if ($this->userModel->delete($id)) {
            echo view('messages', [
                'message' => 'Usuário Excluído com Sucesso'
            ]);
        } else {
            throw new Exception('Error');
        }
    }
}
