<?php 
 
 ini_set('display_errors', 1);

 define('WWW_ROOT',dirname(__DIR__));
 define('KANDA_ROOT',dirname(__DIR__).'/vendor/kandaframework/Kanda');
 define('DS',DIRECTORY_SEPARATOR);
   
  /**
  * Configuração do Framework
  */
  
  $config=  WWW_ROOT.'/config/main.php';
 
     
  require_once ($config);
    
  /**
   * Carregando o Framework
   */



  require_once WWW_ROOT.'/vendor/autoload.php';

  require_once (WWW_ROOT.'/vendor/kandaframework/KandaFramework.php');