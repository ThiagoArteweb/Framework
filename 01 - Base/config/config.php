<?php
#Defini diretorio raiz
$pastaInterna="";
define('DIRPAGINAS',"http://{$_SERVER['HTTP_HOST']}/{$pastaInterna}");
if (substr($_SERVER['DOCUMENT_ROOT'],-1)=='/'){ define("DIRREQUIRES","{$_SERVER['DOCUMENT_ROOT']}{$pastaInterna}"); }else{ define("DIRREQUIRES","{$_SERVER['DOCUMENT_ROOT']}/{$pastaInterna}"); }



define('DIRIMAGES',DIRPAGINAS."public/img/");
define('DIRAUDIO',DIRPAGINAS."public/audio/");
define('DIRCSS',DIRREQUIRES."public/css/");
define('DIRJS',DIRREQUIRES."public/js/");



define('HOST',"localhost");
define('DB',"blog");
define('USER',"root");
define('PASS',"");