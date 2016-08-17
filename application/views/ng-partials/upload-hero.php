<h3>Add a few hero images</h3>
<p>These will appear at the very top of your ad.</p>

<hr />

<div ng-controller="UploadController" class="upload-image-container">
	<input type="file" ng-file-select="onFileSelect($files)" id="init-upload" hidden>
	<img class="upload-container" ng-src="{{imageSrc}}" ng-class="{'has-image':imageSrc}" ng-click="initUpload();" />
</div>

<div class="input-group">
	<a class="expanded button main-btn" href="#/upload/gallery">Next</a>
</div>

<div class="progress-container">
	<div class="secondary progress" role="progressbar" tabindex="0" aria-valuenow="60" aria-valuemin="0" aria-valuetext="60 percent" aria-valuemax="100">
	  <span class="progress-meter" style="width: 60%">
	    <p class="progress-meter-text">60%</p>
	  </span>
	</div>
</div>