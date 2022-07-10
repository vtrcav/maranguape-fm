<?php

    class WebcamController
    {
        public function index()
        {
                $loader = new \Twig\Loader\FilesystemLoader('app/View');
                $twig = new \Twig\Environment($loader);
                $template = $twig->load('webcam.html');

                $conteudo = $template->render();
                echo $conteudo;
            
        }
    }
?>