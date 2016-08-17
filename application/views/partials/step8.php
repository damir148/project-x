<h3 id="scrollTo">Checkout</h3>

<hr>

<form>
	<h6>Your card details</h6>
	
  <label>Card Number
    <input type="number" placeholder="Enter your Card Number">
  </label>
  <label>Name on card
    <input type="text" placeholder="Enter the name on card">
  </label>
  <label class="small-6 columns" style="padding-left:0;">Expiry Date
    <input type="number" placeholder="MM/YY" >
  </label>
  <label class="small-6 columns" style="padding-right:0;">CVV
    <input type="number">
  </label>
  
  <div class="seperator row"></div>
  
	<h6>Billing Address</h6>
	
  <label>Full Name
    <input type="text" placeholder="Enter your Full Name">
  </label>
  <label>Address
    <input type="text" placeholder="Enter address">
  </label>
  <label>City
    <input type="text" placeholder="Enter town or city">
  </label>
  <label>State
	<select ng-model="selectedName" ng-options="x for x in ['VIC', 'NSW', 'SA', 'ACT', 'WA', 'NT', 'TAS']">
		<option value="">Select an option</option>
	</select>
  </label>
  <label>Postal Code
    <input type="text" placeholder="Enter postal code">
  </label>
  <label>Phone
    <input type="text" placeholder="Enter phone number">
  </label>
  
  <div class="seperator row"></div>
  
  <label class="small-6 columns" style="text-align:left; padding-left:0;">Total</label>
  <label class="small-6 columns" style="text-align:right; padding-right:0;"><strong>$175</strong></label>
	
  <hr>
  
  <div class="input-group">
	<!-- <a class="expanded button secondary" href="#step/1">Previous</a> -->
	<a class="expanded button" href="#step/3">Next</a>
  </div>
</form>

<div class="progress-container">
	<div class="secondary progress" role="progressbar" tabindex="0" aria-valuenow="90" aria-valuemin="0" aria-valuetext="90 percent" aria-valuemax="100">
	  <span class="progress-meter" style="width: 90%">
	    <p class="progress-meter-text">90%</p>
	  </span>
	</div>
</div>