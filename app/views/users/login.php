<?php require APP_ROOT . '/views/inc/header.php' ?>
<main class="form-signin w-100 m-auto text-center">
    <?php flash('register_success'); ?>
    <h3>Entrar</h3>
    <p>Por favor, preencha suas credenciais para entrar</p>
    <form action="
		<?php echo URL_ROOT; ?>/users/login" method="post">
        <div class="form-floating">
            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>" id="floatingInput" placeholder="E-mail" value="<?php echo $data['email']; ?>">
            <label for="floatingInput">E-mail</label>
            <span class="invalid-feedback">
                <?php echo $data['email_err']; ?>
            </span>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" id="floatingPassword" placeholder="Senha" value="<?php echo $data['password']; ?>">
            <label for="floatingPassword">Senha</label>
            <span class="invalid-feedback">
                <?php echo $data['password_err']; ?>
            </span>
        </div>
        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
    </form>
</main>
<?php require APP_ROOT . '/views/inc/footer.php' ?>