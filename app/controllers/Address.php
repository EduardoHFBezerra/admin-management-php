<?php


class Address extends Controller
{
    private $addressModel;

    public function __construct()
    {
        $this->addressModel = $this->model('AddressModel');
    }

    public function index($lastResource, $clientId)
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        $adresses = $this->addressModel->getAdressesByClient($clientId);

        $data = [
            'clientId' => $clientId,
            'adresses' => $adresses,
        ];
        return $this->view('address/index', $data);
    }

    private function validateFieldsForRegistration()
    {
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

        $data = [
            'description' => trim($_POST['description']),
            'cep' => trim($_POST['cep']),
            'street' => trim($_POST['street']),
            'number' => trim($_POST['number']),
            'neighborhood' => trim($_POST['neighborhood']),
            'city' => trim($_POST['city']),
            'state' => trim($_POST['state']),
            'country' => trim($_POST['country']),
            'description_err' => '',
            'street_date_err' => '',
            'number_err' => '',
            'neighborhood_err' => '',
            'city_err' => '',
            'state_err' => '',
            'country_err' => ''
        ];

        if (empty($data['description'])) {
            $data['description_err'] = 'Por favor, informe a descrição';
        }

        if (empty($data['cep'])) {
            $data['cep_err'] = 'Por favor, informe o CEP';
        }

        if (empty($data['street'])) {
            $data['street_err'] = 'Por favor, informe a rua';
        }

        if (empty($data['number'])) {
            $data['number_err'] = 'Por favor, informe o número';
        }

        if (empty($data['neighborhood'])) {
            $data['neighborhood_err'] = 'Por favor, informe o bairro';
        }

        if (empty($data['city'])) {
            $data['city_err'] = 'Por favor, informe a cidade';
        }

        if (empty($data['state'])) {
            $data['state_err'] = 'Por favor, informe o estado';
        }

        if (empty($data['country'])) {
            $data['country_err'] = 'Por favor, informe o país';
        }

        return $data;
    }

    public function add($lastResource, $clientId)
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = $this->validateFieldsForRegistration();
            $data['clientId'] = $clientId;
            if (empty($data['description_err'])
                && empty($data['cep_err'])
                && empty($data['street_err'])
                && empty($data['number_err'])
                && empty($data['neighborhood_err'])
                && empty($data['city_err'])
                && empty($data['state_err'])
                && empty($data['country_err'])) {
                if ($this->addressModel->addAddress($data)) {
                    flash('address_message', 'Endereço adicionado com sucesso!');
                    redirect($lastResource . '/' . $clientId . '/' . 'address/index');
                } else {
                    die ('Algo deu errado');
                }
            } else {
                $this->view('address/add', $data);
            }
        } else {
            $data = [
                'description' => '',
                'cep' => '',
                'street' => '',
                'number' => '',
                'neighborhood' => '',
                'city' => '',
                'state' => '',
                'country' => '',
                'description_err' => '',
                'street_date_err' => '',
                'number_err' => '',
                'neighborhood_err' => '',
                'city_err' => '',
                'state_err' => '',
                'country_err' => ''
            ];
            $this->view('address/add', $data);
        }
    }

    public function edit($lastResource, $clientId, $addressId)
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = $this->validateFieldsForRegistration();

            $data['clientId'] = $clientId;
            $data['id'] = $addressId;

            if (empty($data['description_err'])
                && empty($data['cep_err'])
                && empty($data['street_err'])
                && empty($data['number_err'])
                && empty($data['neighborhood_err'])
                && empty($data['city_err'])
                && empty($data['state_err'])
                && empty($data['country_err'])) {
                if ($this->addressModel->updateAddress($data)) {
                    flash('address_message', 'Endereço alterado com sucesso!');
                    redirect($lastResource . '/' . $clientId . '/' . 'address/index');
                } else {
                    die ('Algo deu errado');
                }
            } else {
                $this->view('address/edit', $data);
            }
        } else {
            $address = $this->addressModel->getAddressById($addressId);

            $data = [
                'id' => $addressId,
                'lastResource' => $lastResource,
                'clientId' => $clientId,
                'description' => $address->description,
                'cep' => $address->cep,
                'street' => $address->street,
                'number' => $address->number,
                'neighborhood' => $address->neighborhood,
                'city' => $address->city,
                'state' => $address->city,
                'country' => $address->country,
                'description_err' => '',
                'street_date_err' => '',
                'number_err' => '',
                'neighborhood_err' => '',
                'city_err' => '',
                'state_err' => '',
                'country_err' => ''
            ];

            $this->view('address/edit', $data);
        }
    }

    public function delete($lastResource, $clientId, $addressId)
    {
        if (!isLoggedIn()) {
            redirect('users/login');
        }
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if ($this->addressModel->deleteAddress($addressId)) {
                flash('address_message', 'O endereço foi removido com sucesso!');
                redirect($lastResource . '/' . $clientId . '/' . 'address/index');
            } else {
                flash('address_message', 'Ocorreu um erro ao tentar remover o endereço');
                redirect($lastResource . '/' . $clientId . '/' . 'address/index');
            }
        } else {
            redirect($lastResource . '/' . $clientId . '/' . 'address/index');
        }
    }

}