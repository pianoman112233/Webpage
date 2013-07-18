	<div id="menucontainer">
		<div id="menu">
			<div class="linkcontainer">
				<a class="menulink"	 href="<?php echo $root;?>">Home</a>
				<a class="menulink"	 href="/Users.php">Users</a>
				<a class="menulink"	 href="/Forum">Forum</a>
				<a class="menulink"	 href="/About.php">About</a>
			</div>
		</div>
	</div>
	<?php
	if(1==1){
		echo '<div id="msg" class="msg">Notice Here.</div>';
	}else{
		echo '<div class="fill"></div>';
	}
	if($v==1){
		echo '<div id="errdoc" class="output"></div>';
	}
	?>