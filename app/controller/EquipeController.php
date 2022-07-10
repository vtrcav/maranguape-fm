<?php

    class EquipeController
    {
        public function index()
        {
                $loader = new \Twig\Loader\FilesystemLoader('app/view');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('equipe.html');

                $conteudo = $template->render();
                echo $conteudo;
            
        }
    }
?>