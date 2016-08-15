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