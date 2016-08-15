<h3>Where do you offer your service?</h3>

<label>Location
	<select ng-model="selectedArea">
		<option value="melb">Melbourne</option>
		<option value="syd">Sydney</option>
	</select>
</label>

<div ng-show="selectedArea == 'melb'">
	<p>Melbourne areas to add</a>
	<ul class="accordion suburb-accordion" data-accordion data-multi-expand="true">
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">Inner City</a>
			<div class="accordion-content" data-tab-content>
				<ul>
					<li 
						ng-repeat="suburb in ['Albert Park', 'Docklands', 'Flemington', 'Hotham Hill', 'Kensington' ]"
						ng-class="{'is-selected':isSelected}"
			   			ng-click="isSelected= !isSelected">{{suburb}}<span class="active-item">&#10004;</span></li>
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
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">Phillip Island</a>
			<div class="accordion-content" data-tab-content>
			  <p>Phillip Island Suburbs</p>
			</div>
		</li>
	</ul>

</div>
