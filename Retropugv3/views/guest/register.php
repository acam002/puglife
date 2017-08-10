<div ng-controller="Home-Controller">
    <div class="panel top-bar col-xs-12">
        <h1 align="center" style="font-size:36px;">Register</h1>
	</div>
    <div class="col-xs-12 panel" style="text-align:center;">
		<form action="http://retropugv3/php/register.php" method="post" class="form-signin" style="border-color:black;" name="register_form">
            <h2 class="form-signin-heading" align="center">Please enter account <br>information</h2>
			<input type="text" class="input-block-level" placeholder="Username" name="username">
			<input type="text" class="input-block-level" placeholder="DiscordName" name="discord_name">
			<input type="password" class="input-block-level" placeholder="Password" name="password">
			<button type="submit" name="submits" class="btn btn-group btn-primary" value="Register">Register</button>
		</form>
	</div>
</div>
<?php  include ("C:/wamp64/www/Retropugv3/php/connect_database.php"); ?>
<?php
	include ("C:/wamp64/www/Retropugv3/php/register.php");
?>
<!-- <a href="#!/guest/login"> -->
 <!-- <a class="btn btn-group btn-primary" type="submit" name="submits" href="#!/guest/login">Register</a></input> -->

<!-- Le javascript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.6.3/angular-route.js"></script>
<script src="./js/app.js"></script>