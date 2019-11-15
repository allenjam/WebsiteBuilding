<!DOCTYPE html>
  <html  lang="en">
     <head>
	     <meta  charset="utf-8">
		 <meta  name="description"   content="this is  the  response  page to list  manager">
		 <meta  name="keywords"      content="add,delete">
		 <title>Task List Manager</title>
		 <link rel="shortcut icon"  href="favicon.ico">
		 <link rel="stylesheet"  href="index1.css">
		 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	 </head>
	 <body>
	   <header>
	       <img  src="town_hall_logo.gif" alt="Logo for website">
		   <h1>TASK  LIST MANAGER</h1>
	   </header>
	   <nav>
	   </nav>
	   <main>
	          
	       <h2>Tasks:</h2> 
		   <?php if(count($storage)>0): ?>
		       <ol>
			       <?php foreach($storage  as $key => $item):  ?>
				     <li><?php echo $key+1.'.'.$item; ?></li>
				   <?php  endforeach; ?>	 
			      
			   </ol>
			<?php  endif; ?>
		   
		   <h2>ADD TASK:</h2>
		   <form action="./indexA.php"  method="post">
		   <input type="hidden" name="action" value="add">
		    <label>Tas<u>k</u>:</label>
			<input type="text" name="task"  accesskey="k" title="Task">
			<input type="submit"  value="SUBMIT"><br>
		   </form>
		   <?php if(isset($result[0])):?>
		        <p>echo  htmlspecialchars($result[0]);</p>
		   <?php endif;  ?>      
		   <h2>DELETE TASK:</h2>
		   <form action="./indexA.php"  method="post">
		       <input type="hidden" name="action" value="delete">
		      <label><u>T</u>ASK:</label>
			  <input type="text"  name="taskid"  accesskey="T"  title="Task"><br>
              <input  type="submit" value="SUBMIT"><br>			  
		   </form>
		   </php if( isset($result[1])):  ?>
		        <p>echo  htmlspecialchars($result[1]);</p>
		   <?php  endif; ?>
	   </main>
	   <footer>
	          <address>
			           This website was created by<br>
                       James  Allen. contact number :<br>
                        647-342-4239.<br>
                        email:james.allen.esq@gmail.com<br>						
			  </address>
	   </footer>
	 </body>
 </html>