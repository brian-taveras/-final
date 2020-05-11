<?php

  $user = 'root';
  $pass = '';
  $db = 'final';

  $db = new mysqli('localhost', $user, $pass, $db) or die("unable to connect");


  echo "Hello wordls!!!";


 ?>