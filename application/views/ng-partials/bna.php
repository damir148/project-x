<h3 id="scrollTo">Let's get started.</h3>
<p>Tell us a bit about your business and we'll find the right products for you.</p>

<hr />

<form>
	<label>Which industry does your business operate in?
		<select ng-model="selectedName" ng-options="x for x in ['Accounting','Automotive', 'Building Materials', 'Civil Engineering', 'Commercial Real Estate', 'Computer & Network Security', 'Construction', 'Consumer Goods', 'Driving Schools', 'Educational Consultants', 'Electrical Manufacturing', 'Financial Services', 'Finance Mortgage & Loans', 'Food & Beverages']">
			<option value="">Select an option</option>
		</select>
	</label>

	<label>Do you have a website?<br />
		<input type="radio" value="yes" name="a" id="yes"><label for="yes">Yes</label>
		<input type="radio" value="no" name="a" id="no"><label for="no">No</label>
	</label>

	<label>What other advertising do you use?
		<div ng-repeat="n in ['Television', 'Radio', 'Print', 'Internet', 'Product placement', 'Mobile devices']">
			<input type="checkbox" value="{{n}}" id="{{n}}"><label for="{{n}}">{{n}}</label>
		</div>
	</label>

	<!-- <label>What locations do you offer your services?
		<div ng-repeat="n in ['National', 'States', 'Metro', 'Regional', 'Local', 'Postcode']">
			<input type="checkbox" value="{{n}}" id="{{n}}"><label for="{{n}}">{{n}}</label>
		</div>
	</label>

	<label>In which postcodes do you offer your services?
		<input type="text" placeholder="Enter suburb or postcode" />
	</label> -->
		
	<?php $this->load->view('ng-partials/postcode'); ?>

	<div ng-show="showRecommendation">
		<label>We found the top 4 Yellow Pages listings in your area and industry, which do you consider to be your competitors?
			<div ng-repeat="n in ['Moorabbin Oral Surgery', 'Bayside Oral Surgery', 'Lifestyle Smiles Dental Clinic', 'New Millenium Dental']">
				<span class="expanded button text-left-important selectable-button"
				   ng-class="{'is-selected':isSelected}"
				   ng-click="isSelected= !isSelected">{{ n }}</span>
			</div>
		</label>
	</div>
	<input ng-click="maybeRedirect('suggestions/v2')"
			ng-disabled="!showRecommendation"
			name="submit"
			id="submit"
			class="submit button"
			type="submit" 
			value="Next" />
</form>

<style>
	input[type=submit] {
		width: 100%;
	}
	input:disabled {
		background-color: black;
	}
</style>