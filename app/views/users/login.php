<?php require APP_ROOT . '/views/inc/header.php' ?>
<style>
body {
    background-color: #0093E9;
    background-image: linear-gradient(90deg, #0093E9 0%, #80D0C7 100%);
    
}
</style>
<main class="form-signin m-auto mt-5 text-center shadow-sm rounded-4">
    <?php flash('register_success'); ?>
    <h4 class="mt-1 mb-5 pb-1">Entrar</h4>
    <form action="<?php echo URL_ROOT; ?>/users/login" method="post">
        <p>Por favor, preencha suas credenciais para entrar</p>
        <div class="form-floating">
            <input type="email" name="email" class="form-control <?php echo (!empty($data['email_err'])) ? 'is-invalid' : '';?>" placeholder="E-mail" value="<?php echo $data['email']; ?>">
            <label for="floatingInput">E-mail</label>
            <span class="invalid-feedback">
                <?php echo $data['email_err']; ?>
            </span>
        </div>
        <div class="form-floating">
            <input type="password" name="password" class="form-control <?php echo (!empty($data['password_err'])) ? 'is-invalid' : '';?>" placeholder="Senha" value="<?php echo $data['password']; ?>">
            <label for="floatingPassword">Senha</label>
            <span class="invalid-feedback">
                <?php echo $data['password_err']; ?>
            </span>
        </div>
        <div class="pt-1 mb-5 pb-1 d-grid gap-2">
            <button class="btn btn-primary btn-lg gradient-custom-2 mb-3" type="submit">ENTRAR</button>
            <a class="text-muted" href="#!">Esqueceu a sua senha?</a>
        </div>
    </form>
</main>
<?php require APP_ROOT . '/views/inc/footer.php' ?>