<!DOCTYPE html>
<html>
<head>
<title>Demo Menu Dropdown CSS3</title>
<style type="text/css">

.menu {
	width: 100%;
	margin: 0;
	padding: 0;
	list-style: none;
	background: -moz-linear-gradient(#0FF #0FF);
	background: linear-gradient(#444, #333);
	border-radius: 10px;
	
	transition: 1s ease-in-out;
	-moz-transition: 1s ease-in-out;
}
.menu li {
	float: left;
	padding: 0;
	position: relative;
}
.menu a {
	float: left;
	padding: 10px 20px 7px 20px;
	color: #999;
	text-transform: uppercase;
	text-decoration: none;
	text-shadow: 0 1px 0 #000;
}
.menu li:hover > a {
	color:#90F;
}
.menu li:hover > ul {
	display: block;
}
.menu:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}


.menu ul {
	list-style: none;
	margin: 0;
	padding: 0;
	display: none;
	position: absolute;
	top: 35px;
	left: 0;
	z-index: 9999;
	background: #0F0;
	background: -moz-linear-gradient(#444, #333);
	background: linear-gradient(#444, #333);
	border-radius: 10px;
	box-shadow: 0 2px 1px #9c9c9c;
}
.menu ul li {
	float: none;
	margin: 0;
	padding: 0;
	display: block;
	box-shadow: 0 1px 0 #111, 0 2px 0 #777;
}
.menu ul a {
	padding: 10px;
	height: auto;
	display: block;
	white-space: nowrap;
	float: none;
	text-transform: none;
}



.menu ul a:hover {
	background: #0F0;
	background: -moz-linear-gradient(#04acec, #0186ba);
	background: linear-gradient(#04acec, #0186ba);
}
.menu ul li:first-child a {
	border-radius: 5px 5px 0 0;
}
.menu ul li:first-child a:after {
	content: " ";
	position: absolute;
	left: 30px;
	top: -8px;
	width: 0;
	height: 0;
	border-left: 5px solid transparent;
	border-right: 5px solid transparent;
	border-bottom: 8px solid #333;
}
.menu ul li:first-child a:hover:after {
	border-bottom-color: #04acec;
}
.menu ul li:last-child {
	box-shadow: none;
}
.menu ul li:last-child a {
	border-radius: 0 0 5px 5px;
}
</style>
</head>
<body>
<article class="utama">
<ul class="menu">
	<li><a href="#">Dashboard</a></li>
	<li><a href="#">Services</a>
		<ul>
	<li><a href="#">Web Development</a></li>
	<li><a href="#">Web Consulting</a></li>
	<li><a href="#">Desktop Programming</a></li>
		</ul>	
	</li>
	<li><a href="#">Profile</a></li>
	<li><a href="#">Account</a></li>
	<li><a href="#">Logout</a></li>
</ul>
<section class="bersih">&nbsp;</section>

</article>
</body>
</html>