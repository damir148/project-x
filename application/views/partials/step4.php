<h3>Give some more detail about your business and services</h3>
<p>The more content you add, the more it can help your listing sit higher in the search results.</p>

<hr>

<form>
  <label>What is your slogan?
    <input type="text" placeholder="It's cool to be geek">
  </label>
  <label>How would you sum up your business in one sentence?
    <textarea ng-model="oneSentence" maxlength="100" rows="3"></textarea>
    <p class="text-right char-limit">{{100 - oneSentence.length}}</p>
  </label>
 <label>Tell us about your unique selling points that sets your business apart from the competition?
   <textarea ng-model="comp" maxlength="100" rows="3"></textarea>
   <p class="text-right char-limit">{{100 - comp.length}}</p>
 </label>
 <label>What are the key points in the history of your business?
   <textarea ng-model="history" maxlength="100" rows="3"></textarea>
   <p class="text-right char-limit">{{100 - history.length}}</p>
 </label>
  <label>What services do you specialise in?
    <textarea ng-model="service" maxlength="100" rows="3"></textarea>
    <p class="text-right char-limit">{{100 - service.length}}</p>
  </label>
  <label>What accreditations do you have?
    <textarea ng-model="accreditations" maxlength="100" rows="3"></textarea>
    <p class="text-right char-limit">{{100 - accreditations.length}}</p>
  </label>
  <label>Tell us about any package deals you offer.
    <textarea ng-model="packageDeal" maxlength="100" rows="3"></textarea>
    <p class="text-right char-limit">{{100 - packageDeal.length}}</p>
  </label>
  
  <div class="input-group">
    <a class="expanded button" href="#/keywords">Next</a>
	<a class="expanded button secondary" href="#step/3">Previous</a>
  </div>
</form>

<div class="progress-container">
	<div class="secondary progress" role="progressbar" tabindex="0" aria-valuenow="40" aria-valuemin="0" aria-valuetext="40 percent" aria-valuemax="100">
	  <span class="progress-meter" style="width: 40%">
	    <p class="progress-meter-text">40%</p>
	  </span>
	</div>
</div>

<style>
  textarea {
    margin-bottom: 0;
  }
  .char-limit {
    color: #7f8c8d;
  }

  .input-group {
    margin-top: 15px;
  }
</style>