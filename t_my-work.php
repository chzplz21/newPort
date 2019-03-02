<?php
    /*
    Template Name: My Work
    */
 get_header();

?>

<h1 id = "allSites">
All sites/applications listed below were developed solely by myself unless otherwise noted.
</h1>


<div class = "mainContainerContact">
	<div class = "smallBoxesContainer">
		
	    <a href = "https://greatprocessservers.com/" target = "blank">
			<div class = "smallBox">
				<div class = "littleImageHolder" id = "gps">
				</div>
				<div class = "textbelow">
					<p>Visit greatprocessservers.com</p>
				</div>
			</div>
		</a>

		<a href = "https://weservecorporations.com/" target = "blank">
			<div class = "smallBox">
				<div class = "littleImageHolder" id = "weserve">
				</div>
				<div class = "textbelow">
					<p>Visit weservecorporations.com</p>
				</div>
			</div>
		</a>

		<a href = "https://www.notarywide.com/" target = "blank">
			<div class = "smallBox">
				<div class = "littleImageHolder" id = "notary">
				</div>
				<div class = "textbelow">
					<p>Visit notarywide.com</p>
				</div>
			</div>
		</a>

		<a href = "https://www.nationwidedoorknockers.com/" target = "blank">
			<div class = "smallBox">
				<div class = "littleImageHolder" id = "doorknocker">
				</div>
				<div class = "textbelow">
					<p>Visit nationwidedoorknockers.com</p>
				</div>
			</div>
		</a>

		
	</div>
 
	<div class = "rightSide" id ="aMVC">
		<div class = "textContainer" >
		<h1 class = "webTitle">Suite of Legal Service Web Apps utilizing a single, custom MVC Framework</h1>
		While working for A.C.E. Inc, a private legal process serving company based in South Florida, I 
		developed a suite of web apps which all utilized a single, custom PHP MVC framework.
		<br><br>
		Each of the web sites listed to the left instantiate a unique Class and unique MySQL table. Each of those Classes inherit 
		from a common Parent Class, forming the backbone of the framework. Yes, these sites do look similar, but they each
		contain unique data and have slightly different functionality.
		<br><br>
		The main search field on the landing page uses the JQuery UI autocomplete plugin. Users can search by location 
		and navigate to pages for every city, county, zip code, and state in America.
		<br><br>
		The exception is weservcorporations.com which contains data for Florida companies instead of locations.


		</div>
		
		<div class = "buttonsContainer">
			<a href = "https://github.com/chzplz21/MVC" target="_blank">
				<div class = "Button" id = "sourceContainer">
						View GitHub Repository
						
				</div>
			</a>
		</div>
		
	</div>
 
</div>


<div class = "mainContainerContact">
	<a href = "http://www.wearesimilar.com" target="_blank">
		<div class = "screenShotContainer" id = "wearesimilar">
		</div>
	</a>
 
	<div class = "rightSide">
		<div class = "textContainer">
		<h1 class = "webTitle">We Are Similar, Made with Laravel</h1>
		<b>Note: This is a Demo Web App. All info/images on this site are dummy data pulled in from API's which provide such dummy data.</b>
		<br><br>
		Wearesimilar.com is a web app I made with Laravel based on the concept of connecting people based on 
		specific things that they like, ie. "motorcycles", "football", "computers". So, a user can type in a series of things
		they like, seperated by commas, and everyone else in the DB who likes those things is selected and shown to the user, in order 
		of commonality.
		<br><br>
		The app makes use of Laravel's authentication classes and has full CRUD functionality.
		
		
		</div>
		
		<div class = "buttonsContainer">
			<a href = "http://www.wearesimilar.com" target="_blank">
				<div class = "Button" id = "viewButton">
						View Site
				</div>
			</a>
			<a href = "https://github.com/chzplz21/profiles" target="_blank">
				<div class = "Button" id = "sourceContainer">
						View GitHub Repository
						
				</div>
			</a>
		</div>
		
	</div>
 
</div>

<div class = "mainContainerContact">
	<a href = "http://www.rothkopfwebworks.com/Coupons/" target="_blank">
		<div class = "screenShotContainer" id = "coupons">
		</div>
	</a>
 
	<div class = "rightSide">
		<div class = "textContainer">
		<h1 class = "webTitle">Miami International Airport Holiday Coupons</h1>
		While working for Sleon Productions, I was tasked with developing an application 
		for the Miami International Airport which would allow shoppers to print out, as well 
		as use their phones to display coupons throughout the airport during the holiday season. 
		The site utitlizes Javascript browser cacheing capabilities, allowing users to click on as many 
		coupons as they like, save them, and print them out. Alternatively they can just use their phones 
		to show their saved coupons. Also, this application allows users to filter their coupon search by airport terminal and store type.
		</div>
		
		<div class = "buttonsContainer">
			<a href = "http://www.rothkopfwebworks.com/Coupons/" target="_blank">
				<div class = "Button" id = "viewButton">
						View Site
				</div>
			</a>
			<a href = "https://github.com/chzplz21/CouponsOfficial" target="_blank">
				<div class = "Button" id = "sourceContainer">
						View GitHub Repository
						
				</div>
			</a>
		</div>
		
	</div>
 
</div>




<div class = "mainContainerContact">
	<a href = "http://repoisitory.com/" target="_blank">
		<div class = "screenShotContainer" id = "repoisitory">
		</div>
	</a>
 
	<div class = "rightSide">
		<div class = "textContainer">
		<h1 class = "webTitle">Repoisitory.com built with Laravel</h1>
		Repoisitory.com is a site I made with Laravel with the mission of centralizing Youtube video tutorials on Poi tricks.
		If you've never heard of Poi,  <a href = "https://www.youtube.com/watch?v=ifj-uDY7Kbc" target = "blank">here's a cool video of a guy doing it. </a> I'm not a fraction
		as good as that dude, by the way. And I have yet to spin actual fire.
		<br><br>
		Anyway, what's happening in this app is that when a user clicks on a link for a particular trick, that trick name is added to the URL.
		An Eloquent Query is made based on the trick name, and all trick videos with that name are fetched from the DB. Nothing too
		crazy here.

		</div>
		
		<div class = "buttonsContainer">
			<a href = "http://repoisitory.com/" target="_blank">
				<div class = "Button" id = "viewButton">
						View Site
				</div>
			</a>
			<a href = "https://github.com/chzplz21/poitricks" target="_blank">
				<div class = "Button" id = "sourceContainer">
						View GitHub Repository
						
				</div>
			</a>
		</div>
		
	</div>
 
</div>
    
    



