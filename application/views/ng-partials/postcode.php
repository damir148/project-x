<h3>Where do you offer your service?</h3>

<label>Location
	<select ng-model="selectedArea">
		<option value="melb">Melbourne</option>
		<option value="syd">Sydney</option>
	</select>
</label>

<div ng-show="selectedArea == 'melb'">
	<p>Melbourne areas to add</a>

	<ul class="accordion" data-accordion data-multi-expand="true">
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">Inner City</a>
			<div class="accordion-content" data-tab-content>
				<ul>
					<li>Albert Park</li>
					<li>Docklands</li>
					<li>Flemington</li>
					<li>Hotham Hill</li>
					<li>Kensington</li>
				</ul>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">East</a>
			<div class="accordion-content" data-tab-content>
			  <p>Hello East</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">North</a>
			<div class="accordion-content" data-tab-content>
			  <p>Hello North</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">North East</a>
			<div class="accordion-content" data-tab-content>
			  <p>Hello North East</p>
			</div>
		</li>
		<li class="accordion-item" data-accordion-item>
			<a href="#" class="accordion-title">Phillip Island</a>
			<div class="accordion-content" data-tab-content>
			  <p>Hello Phillip Island</p>
			</div>
		</li>
	</ul>

</div>
