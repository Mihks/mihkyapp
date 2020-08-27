
<!DOCTYPE html>
<html>
<head>
	<title>essai</title>
</head>
<body>



<button>Ajax</button>

<div></div>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.1/jquery.min.js"></script>
		<script src=""https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery.ui.min.js""></script>


		<script> 
			
		$(function () {

		$("button").click(function(){
		
			$.post('ajax.php',{un:'4'},function(data){

				$('div').html(data);
			});
		
		});
			
							// body...
						}	);

		</script> 
			
</body>
</html>

