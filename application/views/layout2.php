<?php  ?>
<html>
	<head>
		<title>Sensis</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<style>
			* {
				margin: 0;
				padding: 0;
			}

			img {
				width: 100%;
				height: auto;
			}
			
			/*body {
				max-width: 420px;
				margin: 0 auto;
			}*/
				
			<?php if ( ! $this->agent->is_mobile()) : ?>
				body { margin-bottom: 100px; }
			<?php endif; ?>
		</style>
	</head>
	<body>
		<img src="<?php echo base_url(); ?>static/img/homepage_01.jpg" />
		<a href="<?php echo base_url(); ?>#/bna">
			<img src="<?php echo base_url(); ?>static/img/homepage_02.jpg" />
		</a>
	</body>
</html>