<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <style type="text/css">
            body{
                background: #e9eaed;
                text-align: center;
                margin: 0;
            }
            ul{
                list-style: none;
                margin: 0;
                padding: 0;
            }
            footer{
                position: fixed;
                bottom: 0px;
                width: 100%;
                height: 20px;
                background: rgb(<?php echo rand(0,255).",".rand(0,255).",".rand(0,255) ?>);
            }
            .<?php echo $randomclass; ?>{
                    background: rgb(<?php echo rand(0,255).",".rand(0,255).",".rand(0,255) ?>);
                    width: <?php echo rand(10,250); ?>px;
                    height: <?php echo rand(10,250); ?>px;
                    position: absolute;
                    border-radius: 100%;
                    top: <?php echo rand(10,250); ?>px;
                    left: <?php echo rand(10,250); ?>px;
            }
        </style>
        <meta property="og:title" content="" />
        <meta property="og:site_name" content="" />
        <meta property="og:description" content="" />
        <link rel="canonical" href="https://<?php echo $_SERVER["HTTP_HOST"]; ?>" />
        <meta property="og:url" content="https://<?php echo $_SERVER["HTTP_HOST"]; ?>" />
        <meta property="og:type" content="video.movie">
        <?php if($putimage == true){ ?>
        <meta property="og:image" content="https://<?php echo $_SERVER["HTTP_HOST"]; ?>/video.jpg" />
        <meta property="og:image:width" content="560" />
        <meta property="og:image:height" content="315" />
        <?php } ?>
        <title>Video</title>
    </head>
    <body></body>
</html>
