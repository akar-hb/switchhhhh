<?php
   $relay = $_GET['relay'];
   $action = $_GET['action'];

   $esp_ip = '192.168.29.214';

   $url = "http://$esp_ip/relay$relay/$action";

   $response = file_get_contents($url);

   echo $response;
   ?>