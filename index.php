<?php

    require_once 'app/core/Core.php';

    require_once 'app/controller/HomeController.php';
    require_once 'app/controller/EquipeController.php';
    require_once 'app/controller/ProgramasController.php';
    require_once 'app/controller/SobreController.php';
    require_once 'app/controller/ContatoController.php';

    require_once 'vendor/autoload.php';

    $template = file_get_contents('app/template/estrutura.html');

    ob_start();
        $core = new Core;
        $core->start($_GET);
        
        $saida = ob_get_contents();
    ob_end_clean();

    $tplPronto = str_replace('{{conteudo}}', $saida, $template);

    echo $tplPronto;

?>