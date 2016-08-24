<html>
	<head>
		<title>Sensis</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
				background-position: center -50px;
				padding: 0;
				margin: 0;
			}
			
			#container {
				max-width: 512px;
				height: 100%;
				margin: 0 auto;
				position: relative;
				left: 0;
				top: 0;
				overflow: hidden;
			}
			
			#inner {
				margin: 120px 33px 0 37px;
				width: 452px;
				height: 100%;
			}	
			
			#right-cover {
				position: absolute;
				top: 0;
				right: 23px;
				width: 10px;
				background: #dcdfe6;
				height: 100%;
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