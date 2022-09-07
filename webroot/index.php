<?php
 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
 
$url = "https://el-petclinic-cicd-slack.apps.cluster-9d5n5.9d5n5.sandbox834.opentlc.com/";
$data = array(
    'empty' => array()
);
 
$options = array(
  'http' => array(
    'method'  => 'POST',
    'content' => json_encode( $data ),
    'header'=>  "Content-Type: application/json\r\n"
    )
);
 
$context  = stream_context_create( $options );
$result = file_get_contents( $url, false, $context );
$response = json_decode( $result );
 
echo "Pipeline Start\n";
 
?>
