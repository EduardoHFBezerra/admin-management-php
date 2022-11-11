<?php require APP_ROOT . '/views/inc/header.php' ?>
<div class="row">
    <div class="col-md-6 mx-auto">
        <div class="card card-body bg-light mt-5">
            <h3>Atualizar senha</h3>
            <p>Por favor, informe a sua nova senha</p>
            <form action="<?php echo URL_ROOT; ?>/users/changepassword" method="post">
                <div class="mb-3">
                    <div>E-mail: <strong><?php echo $data['email']; ?></strong></div>
                </div>
                <div class="mb-3">
                    <label for="password_old">Senha atual: <sup>*</sup></label>
                    <input type="password" name="password_old" class="form-control <?php echo (!empty($data['password_old_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['password_old']; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_old_err']; ?></span>
                </div>
                <div class="mb-3">
                    <label for="password">Nova senha: <sup>*</sup></label>
                    <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['password_err']; ?></span>
                </div>
                <div class="mb-3">
                    <label for="confirm_password">Confirmar senha: <sup>*</sup></label>
                    <input type="password" name="confirm_password" class="form-control <?php echo (!empty($data['confirm_password_err'])) ? 'is-invalid' : '';?>" value="<?php echo $data['confirm_password']; ?>">
                    <span class="invalid-feedback"><?php echo $data['confirm_password_err']; ?></span>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <input type="submit" value="Confirmar" class="btn btn-success btn-block"/>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php require APP_ROOT . '/views/inc/footer.php' ?>

