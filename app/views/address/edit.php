<?php require APP_ROOT . '/views/inc/header.php' ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h3>Editar endereço</h3>
        <form action="<?php echo URL.$_SERVER['REQUEST_URI'];?>" method="post">
           <?php require APP_ROOT . '/views/address/inputs.php'; ?>
           <input type="submit" class="btn btn-success" value="Salvar"/>
        </form>
        </div>
    </div>
</div>
<?php require APP_ROOT . '/views/inc/footer.php' ?>