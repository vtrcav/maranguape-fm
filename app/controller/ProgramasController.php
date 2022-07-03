<?php

    class ProgramasController
    {
        public function index()
        {
                $loader = new \Twig\Loader\FilesystemLoader('app/view');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('programas.html');

                $conteudo = $template->render();
                echo $conteudo;
            
        }
    }
?>