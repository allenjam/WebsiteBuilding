<?php
//Processing  of information from front-end.
$first=filter_input(INPUT_POST,'email');
$second=filter_input(INPUT_POST,'fName');
$third =filter_input(INPUT_POST,'lName');
$fourth=filter_input(INPUT_POST,'address');
$fifth=filter_input(INPUT_POST,'city');
$sixth =filter_input(INPUT_POST,'state');
$seventh=filter_input(INPUT_POST,'code');
$eighth=filter_input(INPUT_POST,'phone');
 
?> 
 <!DOCTYPE html>
  <html lang="en">
     <head>
	      <meta  charset="utf-8">
          <meta name="description"  content="A  shrtened version of an order  form">
		  <meta name="keywords"     content="order form,,member information">
          <title>San Joaquin Requisition form | order form</title>
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
         <main>
		         <h3>E-mail: <?php echo  htmlspecialchars($first);?></h3>
				 <h3>FIRST-NAME: <?php echo  htmlspecialchars($second);?></h3>
				 <h3>LAST-NAME: <?php echo  htmlspecialchars($third);?></h3>
				 <h3>ADDRESS: <?php echo  htmlspecialchars($fourth);?></h3> 
				 <h3>CITY: <?php echo  htmlspecialchars($fifth);?></h3>
				 <h3>STATE: <?php echo  htmlspecialchars($sixth);?></h3>
				 <h3>ZIP CODE: <?php echo  htmlspecialchars($seventh);?></h3>
				 <h3>PHONE NUMBER: <?php echo  htmlspecialchars($eighth);?></h3>
         </main>
         <footer>
		      <p>&copy;2015,San Joaquin Town Hall,Fresno CA 937355</p>
		  </footer>
     </body>
  </html>