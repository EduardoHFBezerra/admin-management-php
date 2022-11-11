<header class="p-3 mb-3 border-bottom text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <a class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none" href="<?php echo URL_ROOT;?>/client"> <?php echo SITE_NAME; ?></a>
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <?php if( isset($_SESSION['user_id'])) : ?>
                <li>
                    <a class="nav-link text-secondary" href="<?php echo URL_ROOT;?>/client">Início</a>
                </li>
                <?php endif; ?>
            </ul>
            <?php if( isset($_SESSION['user_id'])) : ?>
            <div class="dropdown text-end">
                <a href="#" class="d-block text-secondary text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-user"></i> <?php echo $_SESSION['user_name'];?>
                </a>
                <ul class="dropdown-menu text-small" style="">
                    <li>
                        <a class="dropdown-item" href="<?php echo URL_ROOT;?>/users/changepassword"><i class="fa fa-key"></i> Atualizar senha</a>
                    </li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li>
                        <a class="dropdown-item" href="<?php echo URL_ROOT;?>/users/logout"><i class="fa fa-power-off"></i> Sair</a>
                    </li>
                </ul>
            </div>
            <?php else : ?>
            <div class="text-end">
                <a class="nav-link text-secondary" href="<?php echo URL_ROOT;?>/users/login">Entrar</a>
            </div>
            <?php endif; ?>
        </div>
    </div>
</header>