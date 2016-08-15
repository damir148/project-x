<h3>What times are you open?</h3>

<hr>

<div class="secondary progress" role="progressbar" tabindex="0" aria-valuenow="30" aria-valuemin="0" aria-valuetext="30 percent" aria-valuemax="100">
  <span class="progress-meter" style="width: 30%">
    <p class="progress-meter-text">30%</p>
  </span>
</div>

<hr>

<form class="step3">
	<ul class="accordion" data-accordion role="tablist">
	  <li class="accordion-item">
	    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
	    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Monday</a>
	    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
	    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
	      
		  <select>
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		  </select>
		  
		  <select>
			<option>00</option>
			<option>15</option>
			<option>30</option>
			<option>45</option>		
		  </select>
		  
		  <select>
			<option>AM</option>
			<option>PM</option>
		  </select>
			
	    </div>
	  </li>
	  <li class="accordion-item">
	    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
	    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Tuesday</a>
	    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
	    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
	      Panel 2. Lorem ipsum dolor
	    </div>
	  </li>
	  <li class="accordion-item">
	    <!-- The tab title needs role="tab", an href, a unique ID, and aria-controls. -->
	    <a href="#panel1d" role="tab" class="accordion-title" id="panel1d-heading" aria-controls="panel1d">Wednesday</a>
	    <!-- The content pane needs an ID that matches the above href, role="tabpanel", data-tab-content, and aria-labelledby. -->
	    <div id="panel1d" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="panel1d-heading">
	      Panel 3. Lorem ipsum dolor
	    </div>
	  </li>
	</ul>
	
  	<div class="input-group">
		<!-- <a class="expanded button alert" href="#">Skip</a> -->
		<a class="expanded button" href="#step/4">Next</a>
	</div>
</form>

<script>
	$(function(){
		// $('.accordion .accordion-item').toggleClass('is-active');
	});
</script>