<html>
<head>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos.css">
  <title>formulario encargado</title>
<style>
#main-header {
	background: #333;
	color: white;
	height: 80px;
}	
	#main-header a {
		color: white;
	}

/*
 * Logo
 */
#logo-header {
	float: left;
	padding: 15px 0 0 20px;
	text-decoration: none;
}
	#logo-header:hover {
		color: #0b76a6;
	}
	
	#logo-header .site-name {
		display: block;
		font-weight: 700;
		font-size: 1.2em;
	}
	
	#logo-header .site-desc {
		display: block;
		font-weight: 300;
		font-size: 0.8em;
		color: #999;
	}
	

/*
 * Navegación
 */
nav {
	float: right;
}
	nav ul {
		margin: 0;
		padding: 0;
		list-style: none;
		padding-right: 20px;
	}
	
		nav ul li {
			display: inline-block;
			line-height: 80px;
		}
			
			nav ul li a {
				display: block;
				padding: 0 10px;
				text-decoration: none;
			}
			
				nav ul li a:hover {
					background: #0b76a6;
				}

#main-content {
	background: white;
	width: 90%;
	max-width: 800px;
	margin: 20px auto;
	box-shadow: 0 0 10px rgba(0,0,0,.1);
}

	#main-content header,
	#main-content .content {
		padding: 40px;
	}

#main-footer {
	background: #333;
	color: white;
	text-align: center;
	padding: 20px;
	margin-top: 40px;
             }

	#main-footer p {
		margin: 0;
	}
	
	#main-footer a {
		color: white;
	}




  form{
   
    background: white;
	width: 90%;
	max-width: 800px;
	margin: 20px auto;
	box-shadow: 0 0 10px rgba(0,0,0,.1);

      
  }
  form.appear{
      background-color: #eee;
  }
  form h2{
      color: #666;
      font-weight: 900;
      font-size: 25px;
      margin-top: 0;
      margin-bottom: 15px;
  }

  form input[type="text"],
  form input[type="password"] {
    padding: 10px;
    display: block;
    margin-bottom: 20px
  }
form p{
  color: #666;
  font-weight: 100;
  font-size: 20px;
  margin-left: 100px;
  margin-bottom: 15px;
}
form input[type="submit"] {
    background-color: forestgreen;
    margin-left: 200px;
    margin-top: 40px;
    margin-bottom: 40px;
    width: 123px;
    height: 40px;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Verdana, sans-serif;
    color: gainsboro;
    font-size: 15px;
}
form input[type="text"] ,input[type="file"] {
   margin-left: 125px;
}
</style>




</head>
<body>
	@include('banner')
    <header id="main-header">
		
		<a id="logo-header" href="#">
			<span class="site-name">Módulo de documentación</span>
			<span class="site-desc">Comodidad / rapidez / Seguridad</span>
		</a> <!-- / #logo-header -->

		<nav>
			<ul>
				<li><a href="#">Inicio</a></li>
			
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->

	
	
    <form>
        <h2 style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Riesgos psicosociales</h2>
        <p>Cargar certificado de los riesgos psicosociales PDF</p>
        <input type="file" name="Riesgos" id="riesgos" required/>
        <br>
        <input class="cant-submit" type="submit" value="Guardar" />
     </form>







</body>


</html>