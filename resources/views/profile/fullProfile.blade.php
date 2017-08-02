@extends('layouts.master')

@section('content')


	<div class="container profile">

		<div class="row col-lg-12" style="background-image: url(img/lines.png); background-size: cover; background-color: rgba(255, 102, 0, 0.07);">
			<div id="info" class="col-lg-7" >			
				<h2 class="featurette-heading">Yan Zhang</h2>
				<h5>Programmer, Web Developer</h5>
			    <p>19/30 lillimur road, Ormond</p>
			    <p>Melbourne, AU</p>
				<p>54z.yan@gmail.com</p>
			</div>
			
			<div id="photo" class="col-lg-5" >
				<img src="img/Daisy.jpg" alt="resume photo"/>
			</div>
		</div>
		
		<section id="profile">
			<h4>My History &amp; Profile</h4>
			<p>I graduated from Masters of Information Technology at Monash University, and I have applied for TR.</p> 
			<p>I am keen to apply my knowledge and key skills gained through both university study and industry experience. Web development has forever been my passion and it has highly motivated me to keep learning new technologies and languages. </p>
			<p>My interest towards web development started at 3 years ago when I first learnt it. After that, I have developed some websites using different programming languages like Java, C# and PHP. <span class="bold">With these experience, I am particularly familiar with Html/CSS, bootstrap and JavaScript/JQuery to enrich the effects of website front pages. </span></p>
			<p>From my experience in industry, I have proven to have a good communicate skills and be a good team player. I am passionate about learning and to use my energy and enthusiasm to help build something meaningful and interesting.</p>
			
		</section>
		
		<section id="skills">
			<h4>Skillset</h4>
			<div class="row col-lg-12">
				<section class="col-lg-5">
					<h6>Web Development</h6>
					<ul>
						<li>HTML5/CSS3</li>
						<li>JavaScript (React, AngularJS)&amp; JQuery</li>
						<li>SQL &amp; Oracle Databases</li>
						<li>Wordpress</li>
					</ul>
				</section>
				
				<section class="col-lg-3">
					<h6>Programming</h6>
					<ul>
						<li>Java</li>
						<li>C#,ASP.NET</li>
						<li>PHP</li>
					</ul>
				</section>

				<section class="col-lg-4">
					<h6>Software</h6>
					<ul>
						<li>Adobe Photoshop</li>
						<li>MS Office</li>
						<li>.etc</li>
					</ul>
				</section>
			</div>
		</section>
		
		<section id="education">
			<h4>Past Education</h4>
			<p><span class="bold">Masters of Information Technology
			   <span class="right"> July 2015 - July 2017</span></br>
				Monash University</span></br>
				Melbourne, Australia</br>
				Cumulative percentage: 72.615</br>
				Scored Distinction or above in all programming units
			</p>
			<p><span class="bold">Bachelor of Computer Science and Technology
				<span class="right"> Aug 2010 - June 2014</span></br>
				Shanghai electricity university</span></br>
				Shanghai, China</p>
		</section>
		
		<section id="experience">
			<h4>Work Experience</h4>
			<p>Ice Entertainment ~ Tester ~ 2015</p>
		</section>
		
		<a class="btn btn-primary content-center" href="/projects" role="button" style="position: absolute; right: 55px;">Pervious projects &raquo;</a></br>
	</div></br>

	@endsection