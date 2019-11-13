<!DOCTYPE  html>
  <html  lang="en">
	   <head>
	      <meta  charset="utf-8">
          <meta name="description"  content="This  page  demonstrates  the use of image swap">
		  <meta name="keywords"     content="order form,,member information">
          <title>San Joaquin Demonstration Page |image swap</title>
          <link  rel="shortcut icon"   href="favicon.ico">
          <link rel="stylesheet" href="style1.css">
          <script  src="http://html5shiv.googlecode.com/svn/trunk/html.js"></script>		  
     </head>
     <body>
	      <header>
		        <img src="town_hall_logo.gif" alt="Logo for website">
				<h2>San Joaquin Valley Town Hall</h2>
				<p>Celebrating our <span>75<sup>th</sup></span>Year</p> 
		 </header>
		  <nav>
		      <ul>
			     <li><a href="">HOME</a></li>
				 <li><a href=".?action=two">CONTACT</a></li>
				 <li><a href=".?action=one">forms</a></li>
				 <li  class="last"><a  href="">ABOUT US</a></li>
			  </ul>
		  </nav>
		  <main>
		       <section>
			                <h2>THIS PAGE IS AN EXERCISE TO DEMO  IMAGE-SWAP<h2>
			                <p id="exhibit1"><p>
							<figure>
							        <img  src=<?php echo htmlspecialchars($src);?> alt=<?php echo htmlspecialchars($alt);?>>
                                    <figcaption><?php echo htmlspecialchars($alt); ?></figcaption>									
							</figure>
			   </section>
		  </main>
		  <footer>
		          <address>
				           <p>James Allen<br>Apt.503- 2431-Finch  Ave.W.<br>Toronto<br></p>
						   <p>Telephone #647-342-4239</p>
				  </address>
		  </footer>
	</body>
</html>