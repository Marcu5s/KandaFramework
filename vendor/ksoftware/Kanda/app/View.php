<?php

/**
 * 
 * @package App
 * 
 * @copyright (c) KandaFramework
 * @access public
 * 
 */

namespace app;


use helps\Assets;

class View{


    /**
     *
     * @access public
     * 
     * @var type string
     * 
     * @description Serar guardado o title da página. Deve ser chamado no arquivo php
     * 
     * @example $this->title = 'KandaFramework';
     * 
     */
    public static $title = '';

    public static function render($render,$param=[],$layout){
 

       if(empty($render)) 
         throw new Exception("Render can not be empty", 1);
         
       if(!file_exists($layout) || !file_exists($render) )   
            throw new Exception("Not fond $layout or <br/> $render", 1);

        ob_start();
        ob_implicit_flush(false);
        extract($param, EXTR_OVERWRITE);
        require($render);

        $content = ob_get_clean();
        
        require_once $layout;

        unset($content);

    }

    public static function renderAjax($render,$param=[]){
 

       if(empty($render)) 
         throw new Exception("Render can not be empty", 404);
         
       if(!file_exists($render) ){
          throw new Exception("Not fond $render", 404);
        }             

        ob_start();
        ob_implicit_flush(false);
        extract($param, EXTR_OVERWRITE);
        require($render);

        echo $content = ob_get_clean();
        unset($content);

    }


    public static function pathView($module){

        return  WWW_ROOT.'/'.str_replace('\\','/',$module);

    }

    public function body(){}

    public function head(){}

    public static function footer(){
            
      // echo Assets::end();


    }

   
 
 
}