<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="shortcut icon" href="https://developer.chrome.com/favicon.ico">
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
        <meta property="og:title" content="Video" />
        <meta property="og:description" content="" />
        <?php if($putimage == true){ ?>
        <meta property="og:image" content="<?php echo $imagelink; ?>" />
        <meta property="og:image:width" content="560" />
        <meta property="og:image:height" content="315" />
        <?php } ?>
        <title>Video</title>
    </head>

    <body>
        <h1><?php echo generate_name(rand(12,30)); ?></h1>
        <ul>
        <?php for($i=0;$i<rand(12,25);$i++){ ?>
            <li><?php echo generate_name(rand(10,25)); ?></li>
        <?php } ?>
        <ul>
        <div class="<?php echo $randomclass; ?>">
        
        </div>
        <footer>
            <?php echo generate_name(rand(5,8)); ?> © 2015
        </footer>
    </body>
</html>
