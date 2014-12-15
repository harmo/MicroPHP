<?php if(!isset($user) || !$user): ?>
    <div class="jumbotron text-center">
        <h1>Rejoignez-nous!</h1>
        <a class="btn btn-lg btn-success" href="register">Inscription</a>
    </div>
<?php else: ?>
    Accueil du site
<?php endif; ?>
