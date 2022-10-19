<?php


class Client extends Controller
{
    private $clientModel;

    public function __construct()
    {
        $this->clientModel = $this->model('ClientModel');
    }

    public function index()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $clients = $this->clientModel->getClients();
        $data = [
            'clients' => $clients
        ];
        return $this->view('client/index', $data);
    }

    private function validateFieldsForRegistration($action)
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'name' => trim($_POST['name']),
            'birth_date' => $_POST['birth_date'],
            'CPF' => trim($_POST['CPF']),
            'phone' => trim($_POST['phone']),
            'name_err' => '',
            'birth_date_err' => '',
            'CPF_err' => '',
            'phone_err' => ''
        ];

        if (empty($data['name'])) {
            $data['name_err'] = 'Por favor, informe o nome do cliente';
        }

        if (empty($data['birth_date'])) {
            $data['birth_date_err'] = 'Por favor, informe a data de aniversário do cliente';
        }

        if (empty($data['CPF'])) {
            $data['CPF_err'] = 'Por favor, informe o CPF do cliente';
        }

        if (empty($data['phone'])) {
            $data['phone_err'] = 'Por favor, informe o telefone do cliente';
        }

        return $data;
    }

    public function add()
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->validateFieldsForRegistration('add');

            if (empty($data['name_err']) && empty($data['birth_date_err']) && empty($data['CPF_err']) && empty($data['phone_err'])) {
                $data['birth_date'] = DateTime::createFromFormat('d/m/Y', $data['birth_date'])->format('Y-m-d');
                if ($this->clientModel->addClient($data)) {
                    flash('client_message', 'Cliente inserido com sucesso!');
                    redirect('client/index');
                } else {
                    die ('Algo deu errado');
                }
            } else {
                $this->view('client/add', $data);
            }
        } else {
            $data = [
                'name' => '',
                'birth_date' => '',
                'CPF' => '',
                'phone' => '',
                'name_err' => '',
                'birth_date_err' => '',
                'CPF_err' => '',
                'phone_err' => ''
            ];
            $this->view('client/add', $data);
        }
    }

    public function edit($id)
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $_POST = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
            $data = $this->validateFieldsForRegistration('edit');

            if(!empty($id)){
                $data['id'] = $id;
            } else {
                $data['id'] = $_POST['id'];
            }

            if (empty($data['name_err']) && empty($data['birth_date_err']) && empty($data['CPF_err']) && empty($data['phone_err'])) {
                $data['birth_date'] = DateTime::createFromFormat('d/m/Y', $data['birth_date'])->format('Y-m-d');
                $data['id'] = $id;
                if ($this->clientModel->updateClient($data)) {
                    flash('client_message', 'Cliente alterado com sucesso!');
                    redirect('client/index');
                } else {
                    die ('Algo deu errado');
                }
            } else {
                $this->view('client/edit', $data);
            }
        } else{
            $client = $this->clientModel->getClientById($id);

            $birthDate = null;
            if(!empty($client->birth_date)) {
                $birthDate = DateTime::createFromFormat('Y-m-d', $client->birth_date)->format('d/m/Y');
            }

            if(!empty($id)){
                $data['id'] = $id;
            } else {
                $data['id'] = $_POST['id'];
            }

            $data = [
                'id' => $data['id'],
                'name' => $client->name,
                'birth_date' => $birthDate,
                'CPF' => $client->cpf,
                'phone' => $client->phone,
                'name_err' => '',
                'birth_date_err' => '',
                'CPF_err' => '',
                'phone_err' => ''
            ];

            $this->view('client/edit', $data);
        }

    }

    public function delete($id)
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->clientModel->deleteClient($id)) {
                flash('client_message', 'O cliente foi removido com sucesso!');
                redirect('client');
            } else {
                flash('client_message', 'Ocorreu um erro ao tentar remover o cliente');
                redirect('client');
            }
        } else {
            redirect('client');
        }
    }
}