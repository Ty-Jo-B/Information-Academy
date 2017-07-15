<?php  
	include 'modular.html';
?>

<!DOCTYPE html>
<html lang='en'>
<head>
	<meta charset="utf-8">
	<title>IA Lessons</title>
	<link rel="stylesheet" type="text/css" href="IAstyle.css">
	<style type="text/css">
	#python {
		margin-left: 7.5%;
	}
	#raspberry {
		margin-left: 60%;
		margin-top: -9%;
	}
	#html{
		margin-top: 3%;
		margin-left: 5%;
	}
	#javascript {
		margin-left: 61.5%;
		margin-top: -9%;
	}
	#php {
		margin-left: 11%;
	}
	#mysql {
		margin-left: 64%;
		margin-top: -9%;
	}
	#beg {
		margin-left: 10%;
		position: absolute;
	}
	#ad {
		margin-left: 70%;
	}
	.line {
		border-right: red 2px solid;
		width: 50%;
	}
	</style>
</head>
<body>
	<center>
		<h1><u>Information Academy</u></h1>
		<h2>Lessons:</h2>
	</center>
		<div class='content'>
			<h2 id='header'>Lessons:</h2>
			<table id='beg'>
				<tr>
					<td><h2><u>Beginner</u></h2></td>
				</tr>
			</table>

			<table id='ad'>
				<tr>
					<td><h2><u>Advanced</h2></u></td>
				</tr>
			</table>

			<div class='line'>
				<table id='python'>
					<tr>
						<td><button>Python Lessons</button></td>
					</tr>
				</table>
			</div>

			<table id='raspberry'>
				<tr>
					<td><button>Raspberry Pi Lessons</button></td>
				</tr>
			</table>

			<div class='line'>
				<table id='html'>
					<tr>
						<td><button>HTML/CSS Lessons</button></td>
					</tr>
				</table>
			</div>

			<table id='javascript'>
				<tr>
					<td><button>JavaScript Lessons</button></td>
				</tr>
			</table>

			<div class='line'>
				<table id='php'>
					<tr>
						<td><button>PHP Lessons</button></td>
					</tr>
				</table>
			</div>

			<table id='mysql'>
				<tr>
					<td><button>MySQL Lessons</button></td>
				</tr>
			</table>
		</div>
	<footer>Information Academy  |  Created By: Joey Burgee</footer>
</body>
</html>
