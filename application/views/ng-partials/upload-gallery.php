<h3>Create an image gallery.</h3>
<p>Listing with images get more customer enquiries and views</p>

<hr />

<div ng-controller="UploadController" class="upload-image-container">
	<input type="file" ng-file-select="onFileSelect($files)" id="init-upload" hidden>
	<img class="upload-container" ng-src="{{imageSrc}}" ng-class="{'has-image':imageSrc}" ng-click="initUpload();" />
</div>

<div class="input-group">
	<a class="expanded button main-btn" href="#/step/5">Next</a>
	<a class="expanded button secondary" href="#upload/hero" style="margin-top:10px;">Previous</a>
</div>

<div class="progress-container">
	<div class="secondary progress" role="progressbar" tabindex="0" aria-valuenow="70" aria-valuemin="0" aria-valuetext="70 percent" aria-valuemax="100">
	  <span class="progress-meter" style="width: 70%">
	    <p class="progress-meter-text">70%</p>
	  </span>
	</div>
</div>