<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <base href="<?php echo base_url(); ?>">
    <title>myAccount | Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	
    <!-- styles -->
    <link href="bower_components/semantic/dist/semantic.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/foundation.min.css">
    <link href="static/css/app.css?<?php echo filemtime('static/css/app.css'); ?>" rel="stylesheet">
	
	<?php if ( ! $this->agent->is_mobile()) : ?>
		<style>
			#container { padding-bottom: 120px; }
		</style>
	<?php endif; ?>
	
    <script>
      var BASE_URL = "<?php echo base_url(); ?>";
    </script>
	
  </head>

  <body>