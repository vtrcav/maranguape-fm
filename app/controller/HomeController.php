<?php

    class HomeController
    {
        public function index()
        {
            $loader = new \Twig\Loader\FilesystemLoader('app/view');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('home.html');

                $conteudo = $template->render();
                echo $conteudo;
            
            }
        }
    ?>