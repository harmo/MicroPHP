    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand logo" href="/<?php echo BASE_URL; ?>">Mon site</a>
            </div>

            <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <?php if(isset($user) && $user): ?>
                        <?php if($user->is_admin): ?>
                            <li>
                                <a href="/<?php echo BASE_URL; ?>admin">Administration</a>
                            </li>
                        <?php endif; ?>
                            <li>
                                <a href="/<?php echo BASE_URL; ?>logout">Déconnexion</a>
                            </li>
                    <?php else: ?>
                        <li class="<?php echo $this->template == 'user-register' ? 'active' : ''; ?>">
                            <a href="/<?php echo BASE_URL; ?>register">Inscription</a>
                        </li>
                        <li class="<?php echo $this->template == 'login' ? 'active' : ''; ?>">
                            <a href="/<?php echo BASE_URL; ?>login">Connexion</a>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>