<?php require APP_ROOT . '/views/inc/header.php' ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h3>Editar cliente</h3>
        <form action="<?php echo URL_ROOT; ?>/client/<?php echo $data['id']; ?>/edit/" method="post">
           <?php require APP_ROOT . '/views/client/inputs.php'; ?>
           <input type="submit" class="btn btn-success" value="Salvar"/>
        </form>
        </div>
    </div>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>