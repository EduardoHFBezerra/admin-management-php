<?php require APP_ROOT . '/views/inc/header.php' ?>
<?php flash('client_message'); ?>
    <div class="row mb-3">
        <div class="col-md-6 title-subpage">
            <h3>Clientes</h3>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URL_ROOT; ?>/client/add" class="btn btn-primary pull-right">
                <i class="fa fa-pencil"></i> Adicionar cliente
            </a>
        </div>
    </div>
    <div class="card card-body mb-3">
        <div class="card-block">
            <div class="table-responsive">
                <table class="table table-sm caption-top">
                    <caption>Lista de clientes</caption>
                    <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Data de aniversário</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Ações</th>
                    </tr>
                    </thead>
                    <tbody>
            <?php foreach($data['clients'] as $client) : ?>
                    <tr>
                        <td><?php echo $client->name; ?></td>
                        <td><?php echo date_format(date_create($client->birth_date), 'd/m/Y'); ?></td>
                        <td><?php echo $client->cpf; ?></td>
                        <td><?php echo $client->phone; ?></td>
                        <td>
                            <div class="wrapper">
                                <form id="delete-button" action="<?php echo URL_ROOT; ?>/client/<?php echo $client->id; ?>/delete" method="post">
                                    <input  type="submit" value="Deletar" class="btn btn-danger btn-sm">
                                </form>
                                &nbsp;
                                <a id="edit-button" href="<?php echo URL_ROOT; ?>/client/<?php echo $client->id; ?>/edit/" class="btn btn-warning btn-sm">Editar</a>
                                <a id="address-button" href="<?php echo URL_ROOT; ?>/client/<?php echo $client->id; ?>/address" class="btn btn-dark btn-sm">Endereço</a>
                            </div>
                        </td>
                    </tr>
            <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>