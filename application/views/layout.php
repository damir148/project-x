<?php $this->load->view('partials/header'); ?>
	
    <div class="off-canvas-wrapper">
		
		<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
			
			<div class="off-canvas position-left reveal-for-large" id="my-info" data-off-canvas data-position="left">
				<div class="row column">
					<br>
					<img class="thumbnail" src="http://placehold.it/550x350">
					<h5>myAccount</h5>
					
				    <?php //$this->load->view('partials/menu'); ?>					
				</div>
			</div>
			
			<div class="off-canvas-content" data-off-canvas-content>
				
				<!-- <div class="title-bar hide-for-large">
					<div class="title-bar-left">
						<button class="menu-icon" type="button" data-open="my-info"></button>
						<span class="title-bar-title">myAccount</span>
					</div>
				</div> -->
				
				<div class="callout primary">
					<div class="row medium-8 large-7 columns">
						<h1><img src="<?php echo base_url(); ?>/static/img/logo-2x.png" width="156" height="52"></h1>
						<!-- <h2 class="subheader">A simpler way to do things.</h2> -->
					</div>
				</div>
				
				<div id="container" class="row medium-8 large-7 columns">
					<?php //$this->load->view('partials/app'); ?>
					
					<div ng-app="project">

						<div ng-view></div>

					</div>
					
				</div> <!-- /container -->
				
			</div> <!-- /off-canvas-content -->
			
		</div> <!-- /off-canvas-wrapper-inner -->
		
    </div> <!-- /off-canvas-wrapper -->
	
<?php $this->load->view('partials/footer'); ?>