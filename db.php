﻿<?php 
require 'libs/rb.php';
R::setup( 'mysql:host=127.0.0.1;dbname=dostavka','root', '' ); 
 
if ( !R::testConnection() )
{
        exit ('Нет соединения с базой данных');
}

