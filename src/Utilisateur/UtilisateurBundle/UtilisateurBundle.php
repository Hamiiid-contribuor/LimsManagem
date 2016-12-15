<?php

namespace Utilisateur\UtilisateurBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class UtilisateurBundle extends Bundle {

    //signifie  comme  quoi ce bundle est un bundle fils  du fosUser 
    public function getParent() {
        return 'FOSUserBundle';
    }

}
