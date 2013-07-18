<?php
//This file contains all main variables and anything that goes in the header. this must be included in every file

$root="http://0.0.0.0";//url here
$css=$root."/css/main.css";
$js=$root."/javascript";
$jq=$js."/jquery.js";

?>

<link href="<?php echo $css?>" rel="stylesheet" type="text/css">
<script src="<?php echo $jq;?>"></script>

		<?php
		
		$v=0;
		$output="";
		
		if(isset($_GET['error'])){
			$v=1;
		}
		
		$e="";
		if(isset($_GET['error'])){
		if($_GET['error']=="400"){$e="400 Bad Request.";}
		if($_GET['error']=="401"){$e="401 Authorization Required.";}

		if($_GET['error']=="403"){$e="403 Access Forbidden.";}
		if($_GET['error']=="404"){$e="404 File does not exist.";}
		
		if($_GET['error']=="500"){$e="500 Internal server error.";}
		}
		if($v==1){
		echo '
		<script>
				$( document ).ready(function() {
					$( "#errdoc" ).hide();
					$( "#errdoc" ).css({\'background-color\': \'#fbb\'});
					$( "#errdoc" ).html("'.$e.'  <a href=\"#\" id=\"errc\" class=\"outputclose\">X</a>	");
					$( "#errdoc" ).slideDown(500, function(){
				});
				
				$( "#errc" ).click(function( event ) {
					$( "#errdoc" ).slideUp();
				});
			});
		</script>';
		}
		
		?>
		
