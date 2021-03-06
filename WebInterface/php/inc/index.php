<?php
    /*
     *  OpenAudioMC
     *  Author: Mindgamesnl 
     */
?>
<html lang="en">
	<head>
		<!-- Title -->
		<title>OpenAudioMC</title>
		
		<!-- CSS -->
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
		<link href="css/styles.css" rel="stylesheet" />
		<link rel="stylesheet" type="text/css" href="css/animate.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.css" />
		<link rel="stylesheet" type="text/css" href="css/bootstrap-material-design.min.css" />
    <link rel="stylesheet" type="text/css" href="dist/sweetalert.css">
		
		<!-- META -->
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta name="viewport"  content="width=device-width, initial-scale=1, maximum-scale=1" />
		
		<!-- JS -->
		<script src="main/Soundmanager2.js"></script>
		<script src="dist/sweetalert.min.js"></script>
		<script src="main/main.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="https://www.gstatic.com/cv/js/sender/v1/cast_sender.js"></script>
		<script>
			mcname = "<?php echo htmlspecialchars(strip_tags($mcname), ENT_QUOTES, 'UTF-8'); ?>";
			wshost = "<?= htmlspecialchars(strip_tags($sport), ENT_QUOTES, 'UTF-8'); ?>";
		</script>
		
	</head>
	<body>
		<center>
			<div class="container animated bounceInDown">
			<img style="	border-radius: 150px;-webkit-border-radius: 150px;-moz-border-radius: 150px; border: 5px solid orange;outline-color: #03a9f4; color:#03a9f4; " src="https://crafatar.com/avatars/<?php echo htmlspecialchars(strip_tags($mcname), ENT_QUOTES, 'UTF-8'); ?>">
			<br /><br />
				<div class="panel panel-info">
				<div class="panel-heading"><center>
				
				<h1><div id="display_name">Hi there (loading)!</div></h1></center></div>
					<div class="panel-body ">
						<div class="row">
							<div class="col-md-12">
							
								<div id="content">
								<div id="status"></div>
								<font size="+2"><b>Change the volume</b></font><br>
								<p>Or use <b>'/volume {new volume}'</b> on the server.<br>
								<br>
								<input type="range" min="0" id="slider" max="100" value="20" oninput="client.set_volume(this.value); document.getElementById('volume').innerHTML = 'Volume: ' + this.value + '%';"/>
								<b><font size="+1" id="volume"><b>Volume: 20%</b></font><br></b><br />
								<input type="checkbox" name="EnableBrowserNotifications" id="EnableBrowserNotifications" /> Enable browser nofifications.
							</div>
						</div>
					</div>
				</div>
			</div>
			</div>


		
			<div id="LiveBox">
				<Center>
				<div class="container animated bounceInDown">
					<div class="panel panel-default col-md-6">
						<div class="panel-body">
							<b><h2 style="color:#F44336;">LIVE <img src="css/red-dot-md.png" class="animated infinite flash" style="height:20px;"></h2>
							<hr />
							<h3><div>You are listening to our awesome radio stream!</div></h3>
							<button type="button" onclick='document.getElementById("LiveBox").className = "animated bounceOutUp";soundManager.stop("live");soundManager.destroySound("live");' style="background: #C62828; color:white;" class="btn btn-primary">Stop</button>
							<button type="button" onclick='document.getElementById("LiveBox").className = "animated bounceOutUp";' style="background: #009688; color:white;" class="btn btn-primary">Close</button>
						</div>
					</div>
				</div>
				</center>
			</div>
			
			
			<div id="MessageManager">
				<Center>
				<div class="container animated bounceInDown">
					<div class="panel panel-default col-md-6">
						<div class="panel-body">
							<b><h2>Last message</h2></b>
							<hr />
							<h3><div id="messageContent">Loading...</div></h3>
							<button type="button" onclick='document.getElementById("MessageManager").className = "animated bounceOutUp";' style="background: #009688; color:white;" class="btn btn-primary">Close</button>
							
						</div>
					</div>
				</div>
				</center>
			</div>
			
			
			
	</body>
</html>