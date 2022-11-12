<?php require APP_ROOT . '/views/inc/header.php' ?>
<?php flash('address_message'); ?>
    <div class="row align-items-center">
        <div class="col-md-6">
            <div class="mb-3">
                <h5 class="card-title">Lista de Endereços</h5>
            </div>
        </div>
        <div class="col-md-6">
            <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
                <div>
                    <a href="
						<?php echo URL_ROOT ?>/client/
						<?php echo $data['clientId']?>/address/add" class="btn btn-primary">
                        <i class="fa fa-address-book-o"></i> Adicionar endereço </a>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table project-list-table table-nowrap align-middle table-borderless">
            <thead>
                <tr>
                    <th>Descrição</th>
                    <th>CEP</th>
                    <th>Rua</th>
                    <th>Número</th>
                    <th>Bairro</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                    <th>País</th>
                    <th>Ações</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                <?php foreach($data['adresses'] as $address) : ?>
                <tr>
                    <td> <?php echo $address->description; ?> </td>
                    <td> <?php echo $address->cep; ?> </td>
                    <td> <?php echo $address->street; ?> </td>
                    <td> <?php echo $address->number; ?> </td>
                    <td> <?php echo $address->neighborhood; ?> </td>
                    <td> <?php echo $address->city; ?> </td>
                    <td> <?php echo $address->state; ?> </td>
                    <td> <?php echo $address->country; ?> </td>
                    <td>
                        <div class="wrapper">
                            <form id="delete-button" class="me-1" action="<?php echo URL_ROOT; ?>/client/<?php echo $data['clientId'];?>/address/<?php echo $address->id; ?>/delete/" method="post">
                                <button type="submit" class="btn btn-danger btn-sm">
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                            <a id="edit-button" href="<?php echo URL_ROOT; ?>/client/<?php echo $data['clientId'];?>/address/<?php echo $address->id; ?>/edit/" class="btn btn-warning btn-sm">
                                <i class="fa fa-address-book"></i>
                            </a>
                        </div>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>