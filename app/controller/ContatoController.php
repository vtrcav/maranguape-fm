<?php

    class ContatoController
    {
        public function index()
        {
                $loader = new \Twig\Loader\FilesystemLoader('app/view');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('contato.html');

                $conteudo = $template->render();
                echo $conteudo;
            
        }
    }
?>