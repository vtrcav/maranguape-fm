<?php

    class EquipeController
    {
        public function index()
        {
                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('equipe.html');

                $conteudo = $template->render();
                echo $conteudo;
            
        }
    }
?>