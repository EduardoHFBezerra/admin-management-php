<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="<?php echo URL_ROOT;?>/client"> <?php echo SITE_NAME; ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse" aria-controls="navCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php if( isset($_SESSION['user_id'])) : ?>
        <div class="collapse navbar-collapse" id="navCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo URL_ROOT;?>/client">Início</a>
                </li>
            </ul>
            <ul class="narbar-nav mb-2 mb-md-0"">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-white" href="#" data-bs-toggle="dropdown" aria-expanded="true">
                        <i class="fa fa-user"></i> <?php echo $_SESSION['user_name'];?>
                    </a>
                    <ul class="dropdown-menu">
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
                </li>
            </ul>
        </div>
        <?php else: ?>
        <div class="text-end">
            <a class="nav-link text-white" href="<?php echo URL_ROOT;?>/users/login">Entrar</a>
        </div>
        <?php endif; ?>
    </div>
</nav>