<html>
	<head>
		<title>Sensis</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../static/css/normalize.css">
		<style>
			/** {
				margin: 0;
				padding: 0;
				outline: 1px solid lightgreen;
			}*/
			
			body {
				top: 0;
				bottom: 0;
				left: 0;
				right: 0;
				background: url('iphone_6.png') no-repeat;
				background-position: center 0;
				padding: 0;
				margin: 0;
			}
			
			#container {
				max-width: 512px;
				height: 1053px;
				margin: 0 auto;
				position: relative;
				left: 0;
				top: 0;
				overflow: hidden;
			}
			
			#inner {
				margin: 170px 33px 0 37px;
				width: 457px;
				height: 751px;
			}	
			
			#right-cover {
				position: absolute;
				top: 125px;
				right: 14px;
				width: 20px;
				background: #dcdfe6;
				height: 810px;
				z-index: 9999;
			}
		</style>
	</head>
	<body>
		<div id="container">
			<iframe id="inner" src="<?php echo $_GET['url']; ?>" frameborder="0"></iframe>
			<div id="right-cover"></div>
		</div>
	</body>
</html>