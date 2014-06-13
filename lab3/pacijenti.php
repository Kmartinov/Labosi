<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8" />
  <title>ZKD</title>
  <link rel="stylesheet" href="style.css" />
  <script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.js"></script>
  <script type="text/javascript">
	$(window).load(function(){
	var $rows = $('#listaPacijenata tr');
	$('#search').keyup(function() {
		var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
		
		$rows.show().filter(function() {
			var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
			return !~text.indexOf(val);
		}).hide();
	});
	});
	</script>
</head>
<body>
<?php  
	session_start();
	
	$con = mysqli_connect("localhost","root","lozinka123","zkd");
    if (mysqli_connect_errno()) {
		echo "Ne mogu se spojiti na MySQL server: " . mysqli_connect_error();
    }
	mysqli_query($con,"SET NAMES 'utf8'");
	mysqli_query($con,"SET CHARACTER_SET 'utf8'");
					
?>

<div class="wrapper">
  <div class="header">
	<div class="logo">
		<img src="images/logo.png">
	</div>
	
	<div class="button">
	    <a href="login.html">
			<button type="button" class="btnLogout" >Odjava</button>
		</a>
	</div>
	
	<div class="user">
    	<h2> 	
			<?php 
				session_start();
				echo 'Pozdrav, '. $_SESSION['session'] .'!'; 
			?>
		</h2> 
	</div>
  </div>

<div class="content">
    <div class="menu">
		<div class="menu-item">
			<a href="pacijenti.php">Pacijenti</a>
		</div>
	  
		<div class="menu-item">
			<a href="unos-pacijenta.php">Unos pacijenta</a>
		</div>
	  
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
	  
		<div class="menu-item">
			<a href="#">Stavka</a>
		</div>
    </div>

    <div class="content-right">
		 
		<label for="search">Unesite podatke za pretragu: </label>
		
		<input type="text" id="search" name="search" />
                   <table id="listaPacijenata" border="0" width="100%">
			    
					<?php 
					
					$result = mysqli_query($con,"SELECT * FROM pacijenti");
					
					while($row = mysqli_fetch_array($result)) { 
					   echo 
					        '<tr>'.
							'<td>'. $row['ime'] .'</td>'.
                         	 '<td>'.$row['prezime'].'</td>'.		   
					         '<td>'.$row['spol'].'</td>'.
							 '<td>'.$row['datumrodenja'] .'</td>'.
							 '<td>'.$row['mobitel'] .'</td>'.
							'<td>'. $row['adresa'] .'</td>'.
							'<td>'. $row['mjesto'] .'</td>'.
							'</tr>';
					} 

					  
					mysqli_close($con);
			
			         ?>
					

				</table>
			
    </div>
</div>

<div class="site-footer">
	<p>Copyright &copy; ZKD, 2014</p>
</div>
</div>
</body>
</html>