<!-- <h3>Where do you offer your service?</h3> -->

<!-- <label>Where do you offer your service?
	<select ng-model="selectedArea">
		<option value="" selected="selected">Enter suburb, town, city, or postcode</option>
		<option value="melb">Melbourne</option>
		<option value="syd">Sydney</option>
	</select>
</label> -->

<label>Where do you offer your service?
	<div class="ui input fluid" style="margin-bottom: 15px;">
		<input list="areas" name="areas" placeholder="Enter suburb, town, city, or postcode" ng-model="selectedArea">
		<datalist id="areas">
			<option value="Melbourne">
			<option value="Sydney">
		</datalist>
	</div>
</label>

<div ng-show="selectedArea == 'Melbourne'">
	<p>Melbourne areas to add</a>
	<ul class="accordion suburb-accordion" data-accordion data-allow-all-closed="true" data-multi-expand="true">
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">Inner City</a>
			<div class="accordion-content" data-tab-content>
				<ul class="areas">
					<li 
						ng-repeat="suburb in [ 'Albert Park', 'Docklands', 'Flemington', 'Hotham Hill', 'Kensington' ]"
						ng-class="{'is-selected':isSelected}"
			   			ng-click="isSelected= !isSelected">{{suburb}}<i ng-class="{'outline':!isSelected}" class="check circle icon"></i></li>
				</ul>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">South East</a>
			<div class="accordion-content" data-tab-content>
				<ul class="areas">
					<li 
						ng-repeat="suburb in [ 'Bentleigh', 'Brighton', 'Birghton East', 'Elwood', 'Moorabbin' ]"
						ng-class="{'is-selected':isSelected}"
			   			ng-click="isSelected= !isSelected">{{suburb}}<i ng-class="{'outline':!isSelected}" class="check circle icon"></i></li>
				</ul>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">East</a>
			<div class="accordion-content" data-tab-content>
			  <p>East Suburbs</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">North</a>
			<div class="accordion-content" data-tab-content>
			  <p>North Suburbs</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">North East</a>
			<div class="accordion-content" data-tab-content>
			  <p>North East Suburbs</p>
			</div>
		</li>
	</ul>
</div>
