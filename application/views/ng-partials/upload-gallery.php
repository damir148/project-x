<h3>Create an image gallery.</h3>
<p>Listing with images get more customer enquiries and views</p>

<hr />

<div ng-controller="UploadController" class="upload-image-container">
	<input type="file" ng-file-select="onFileSelect($files)" id="init-upload" hidden>
	<img class="upload-container" ng-src="{{imageSrc}}" ng-class="{'has-image':imageSrc}" ng-click="initUpload();" />
</div>

<div class="input-group">
	<a class="expanded button main-btn" href="#/step/5">Next</a>
</div>