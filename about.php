<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

* {
	box-sizing: border-box;
}

body {
	background-image: url("./textura.jpg");
    background-size: cover;
	font-family: Montserrat, sans-serif;
	display: flex;
	align-items: center;
	justify-content: center;
	flex-direction: row;

	min-height: 100vh;
	margin: 0;
}

.logo-img{
    display:inline;
    width: 40px;

}
h3 {
	margin: 10px 0;
}

h6 {
	margin: 5px 0;
	text-transform: uppercase;
}

p {
	font-size: 14px;
	line-height: 21px;
}

.card-container {
	background-color: #010f25;
	border-radius: 5px;
	box-shadow: 0px 10px 20px -10px rgba(0,0,0,0.75);
	color: #B3B8CD;
	padding-top: 30px;
	position: relative;
	width: 250px;
	height: 387px;
    display: inline-block;
    margin: 3px;
    max-width: 100%;
    text-align: center;
    z-index: 0;
}


.card-container .round {
	border: 1px solid #03BFCB;
	border-radius: 50%;
	padding: 7px;
}


button.primary {
	background-color: #03BFCB;
	border: 1px solid #03BFCB;
	border-radius: 3px;
	color: #231E39;
	font-family: Montserrat, sans-serif;
	font-weight: 500;
	padding: 10px 25px;
}

button.primary.ghost {
	background-color: transparent;
	color: #02899C;
}

.skills {
	background-color: #044655;
	text-align: left;
	padding: 15px;
	margin-top: 30px;
	z-index: 1;
}

.skills ul {
	list-style-type: none;
	margin: 0;
	padding: 0;
}

.skills ul li {
	border: 1px solid #2D2747;
	border-radius: 2px;
	display: inline-block;
	font-size: 12px;
	margin: 0 7px 7px 0;
	padding: 7px;
}
@media screen and (max-width: 550px) {
	.contenedor {
		width: min-content;
	}
}
</style>

</head>
<body>
<div class="d-flex contenedor">
	<div class="card-container p-2">
		<img class="round" src="./about/facu.jpg" width="127px" alt="user" />
		<h3>Facundo Chiavon</h3>
		<h6>Rol</h6>
		<p>Back-end</p>
		<div class="skills">
			<ul>
				<li>HTML</li>
				<li>CSS</li>
				<li>React</li>
				<li>NodeJS</li>
				<li>MongoDB</li>
			</ul>
		</div>
	</div>
	<div class="card-container p-2">
		<img class="round" src="./about/gabi.jpg" width="116.5px" alt="user" />
		<h3>Gabriela Bustos</h3>
		<h6>Rol</h6>
		<p>Back-end</p>
		<div class="skills">
			<ul>
				<li>HTML</li>
				<li>CSS</li>
				<li>Javascript</li>
				<li>PHP</li>
				<li>MySQL</li>
			</ul>
		</div>
	</div>
	<div class="card-container p-2">
		<img class="round" src="./about/yo.jpeg" width="127px" alt="user" />
		<h3>Facundo Gardella</h3>
		<h6>Rol</h6>
		<p>Front-end</p>
		<div class="skills">
			<ul>
				<li>HTML</li>
				<li>CSS</li>
				<li>Bootstrap</li>
				<li>VueJS</li>
			</ul>
		</div>
	</div>
	<div class="card-container p-2">
		<img class="round " src="./about/mili.jpg" width="152px" alt="user" />
		<h3>Milagros Ceccoli</h3>
		<h6>Rol</h6>
		<p>Front-end - Documentacion</p>
		<div class="skills">
			<ul>
				<li>HTML</li>
				<li>CSS</li>
				<li>Bootstrap</li>
				<li>VueJS</li>
			</ul>
		</div>
	</div>
	<div class="card-container p-2">
		<img class="round" src="./about/luciana.jpg" width="98px" alt="user" />
		<h3>Luciana Manetta</h3>
		<h6>Rol</h6>
		<p>Front-end</p>
		<div class="skills">
			<ul>
				<li>HTML</li>
				<li>CSS</li>
				<li>Bootstrap</li>
				<li>VueJS</li>
			</ul>
		</div>
	</div>
</div>

</body>

</html>