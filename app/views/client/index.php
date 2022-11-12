<?php require APP_ROOT . '/views/inc/header.php' ?>
<?php flash('client_message'); ?>
<div class="row align-items-center">
    <div class="col-md-6">
        <div class="mb-3">
            <h5 class="card-title">Lista de Clientes</h5>
        </div>
    </div>
    <div class="col-md-6">
        <div class="d-flex flex-wrap align-items-center justify-content-end gap-2 mb-3">
            <div>
                <a href="<?php echo URL_ROOT; ?>/client/add" class="btn btn-primary">
                    <i class="fa fa-user-plus"></i> Adicionar cliente
                </a>
            </div>
        </div>
    </div>
</div>
<div class="table-responsive">
    <table class="table project-list-table table-nowrap align-middle table-borderless">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Data de aniversário</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Ações</th>
            </tr>
        </thead>
        <tbody class="table-group-divider"> <?php foreach($data['clients'] as $client) : ?>
            <tr>
                <td> <?php echo $client->name; ?> </td>
                <td> <?php echo date_format(date_create($client->birth_date), 'd/m/Y'); ?> </td>
                <td> <?php echo $client->cpf; ?> </td>
                <td> <?php echo $client->phone; ?> </td>
                <td>
                    <div class="wrapper">
                        <form id="delete-button" class="me-1" action="<?php echo URL_ROOT; ?>/client/<?php echo $client->id; ?>/delete" method="post">
                            <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
                        </form>
                        <a id="edit-button" href="<?php echo URL_ROOT; ?>/client/<?php echo $client->id; ?>/edit/" class="btn btn-warning btn-sm">
                            <i class="fa fa-pencil"></i>
                        </a>
                        <a id="address-button" href="<?php echo URL_ROOT; ?>/client/<?php echo $client->id; ?>/address" class="btn btn-dark btn-sm">
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