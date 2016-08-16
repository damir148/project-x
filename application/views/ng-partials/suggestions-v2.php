<div id="live-chat" ng-click="showChat=true">
	<i class="comment icon"></i>
</div>

<div id="chat-wrapper" ng-show="showChat">
	<div id="chat-container">
		<div class="header">LiveChat Support <i class="angle down icon" ng-click="showChat=false"></i></div>
		<div class="body">
			<div class="messageGroup">
				<div class="messageGroup__date">16 August 2016</div>
				<div class="messageGroup__time">11:30 PM</div>
				<div class="messageGroup__wrapper">
					<div class="messageGroup__innerWrapper"></div>
					<div class="messageGroup__innerWrapper">
						<div class="messageGroup__messages">
							<div class="message message--bot message--undefined">
								<div class="message__content">
									<div class="message__textContainer">
										<div>
											<div class="message__innerContainer ">
												<span class="Linkify">
													<div class="message__text">Hi, we are LiveChat Support.</div>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="message message--bot message--undefined">
								<div class="message__content">
									<div class="message__textContainer">
										<div>
											<div class="message__innerContainer ">
												<span class="Linkify">
													<div class="message__text">How may we assist you today?</div>
												</span>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /body -->
		<div class="footer">
			<div class="footer_innerContainer">
				<div class="footer_content">
					<div class="messageInputWrapper">
						<div class="messageInput ">
							<div class="messageInput__container">
								<div class="messageInput__innerContainer">
									<div class="messageInput__content">
										<textarea class="messageInput__input" maxlength="3000" placeholder="Ask a question here..." style="height: 26px;"></textarea>
									</div>
									<div class="messageInput__buttonWrapper">
										<button class="messageInput__button messageInput__button--disabled">Send</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> <!-- /footer -->
	</div>
</div>

<div class="suggestions-v2">	
	<div class="callout suggestions-hero row">
		<div class="small-8 columns">
			<h3>Here's what we found!</h3>
			<p>We think these solutions best meet your business' needs.</p>
		</div>
		<div class="small-4 columns text-right fix-my-search-position">
			<i class="search icon huge"></i>
		</div>
	</div>

	<hr />
	
	<div class="free-listing-section">
		<div class="callout row">
			<div class="small-7 columns">
				<h5 class="product-title">Free Listing</h5>
				<p><strong>$0 per month</strong></p>
				<p>Be found for free with your basic listing.</p>
			</div>
			<div class="small-5 columns relative">	
				<a href="#/step/1" class="callout-clickable text-center">Select product now<i class="angle right icon"></i></a>
				<div class="right-angle">
					<i class="caret left icon huge"></i>
				</div>
			</div>
		</div>
		<div class="columns about" ng-show="showFree" ng-class="{'do-animate':showFree}">
			<h6 class="product-about">About Free listings</h6>
			<p>Business name, address and phone number will appear in the Yellow Pages and White Pages, both in the book and online.</p>
			<p>Your email address and website will also appear on Yellow Pages online.</p>
		</div>
		<div class="column">
			<button ng-hide="showFree" ng-click="showFree=true">Learn more<i class="angle down icon"></i></button>
			<button ng-show="showFree" ng-click="showFree=false">Show less<i class="angle up icon"></i></button>
		</div>
	</div>

	<hr />

	<div class="get-found-listing-section">
		<div class="callout product-get-found row">
			<div class="small-7 columns">
				<h5 class="product-title">Get Found</h5>
				<p><strong>$51 per month</strong></p>
				<p>Get found where your customers are looking.</p>
			</div>
			<div class="small-5 columns relative">
				<a href="#/step/1" class="callout-clickable text-center">Select product now<i class="angle right icon"></i></a>
				<div class="right-angle">
					<i class="caret left icon huge"></i>
				</div>
			</div>
		</div>
		<div class="columns about" ng-show="showFound" ng-class="{'do-animate':showFound}">
			<h6 class="product-about">About Get Found</h6>
			<ul>
				<li>Get found where your customers are looking</li>
				<li>Strong presence in print and digital</li>
				<li>Track your ROI across all media</li>
				<li>Drive more leads to your business</li>
			</ul>
		</div>
		<div class="column">
			<button ng-hide="showFound" ng-click="showFound=true">Learn more<i class="angle down icon"></i></button>
			<button ng-show="showFound" ng-click="showFound=false">Show less<i class="angle up icon"></i></button>
		</div>
	</div>

	<hr />

	<div class="extend-reach-listing-section">
		<div class="callout product-extend-reach row">
			<div class="small-7 columns">
				<h5 class="product-title">Extend Reach</h5>
				<p><strong>$175 per month</strong></p>
				<p>Put your business in front of a wider audience.</p>
			</div>
			<div class="small-5 columns relative">
				<a href="#/step/1" class="callout-clickable text-center">Select product now<i class="angle right icon"></i></a>
				<div class="right-angle">
					<i class="caret left icon huge"></i>
				</div>
			</div>
		</div>
		<div class="columns about" ng-show="showReach" ng-class="{'do-animate':showReach}">
			<h6 class="product-about">About extend reach</h6>
			<ul>
				<li>Put your business in front of a wider audience</li>
				<li>Attract customers outside your regular areas</li>
				<li>Enjoy a prominent listing across our digital network</li>
				<li>Get a free call tracked phone number to measure your advertising performance</li>
			</ul>
		</div>
		<div class="column">
			<button ng-hide="showReach" ng-click="showReach=true">Learn more<i class="angle down icon"></i></button>
			<button ng-show="showReach" ng-click="showReach=false">Show less<i class="angle up icon"></i></button>
		</div>
	</div>

	<hr />

	<div class="extra-info-stuff">
		<h3>After something a little different?</h3>
		<p>Perhaps try searching with different options selected or maybe we should have a chat.</p>
	</div>

	<a class="expanded button" href="#/bna"><i class="search icon"></i>Search again</a>
	<a class="expanded button speak-to-aspeacialist-btn" href="tel:1800000000"><i class="call icon"></i>Speak to a specialist</a>
</div>
	