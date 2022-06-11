<?php

    class Core
    {
       

        public function start($request)
        {
            $acao = 'index'; 
                                        
            if(isset($request['p'])){
                $controller = ucfirst($request['p'].'Controller');           
            }
            else{
                $controller = 'HomeController';
            }

            if(!class_exists($controller)){
                $controller = 'HomeController';
            }
            
            call_user_func_array(array(new $controller, $acao), array());
            
            
        }

      

    }

?>