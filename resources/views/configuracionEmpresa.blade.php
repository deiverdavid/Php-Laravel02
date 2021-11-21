<html>
<head>
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="css/estilos.css">
  <title>Transporte</title>
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
form input[type="text"] ,input[type="file"],input[type="number"], input[type="email"] {
    margin-left: 125px;
    padding: 10px;
    display: block;
    margin-bottom: 20px
}
form select{
    margin-left: 125px;
    padding: 10px;
    display: block;
    margin-bottom: 20px;
    width: 190px;
}

</style>




</head>
<body>
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
        <h2 style="text-align: center; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Formulario para registrar la empresa </h2>
            <p>Nombre</p>
            <input type="text" name="nombre" id="nombre" required>
            <p>Nit</p>
            <input type="text" name="Nit" id="Nit"  required/>
            <p>Georreferenciación de la empresa (dirección geolocalizada)</p>
            <input type="text" name="direccion geolocalizada" id="direccion geolocalizada" required>
            <p>Actividad economica</p>
            <input type="text" name="actividad" id="actEconomica"  required/>
            <p>Nivel de riesgo</p>
                <select name="nivel riesgo" required >
                    <option value="1">Clase I</option>
                    <option value="2">Clase II</option>
                    <option value="3">Clase III</option>
                    <option value="4">Clase IV</option>
                    <option value="5">Clase V</option>
                </select>
            <p>Cantidad de trabajadores</p>
            <input type="number" name="Cantidad trabajadores" id="cantTrabajadores"  required/>
            <p>Naturaleza juridica de la empresa</p>
            <input type="text" name="Naturaleza juridica" id="natJuridica"  required/>
            <p>Telefono de contacto</p>
            <input type="text" name="Telefono contacto" id="telContacto"  required/>
            <p>Correo electronico</p>
            <input type="email" name="Correo" id="correo"  required/>
            <p>Tipo de empresa</p>
            <select name="nivel riesgo" required >
                <option value="1">Persona Natural Comerciante</option>
                <option value="2">Empresa Unipersonal</option>
                <option value="3">Sociedad por Acciones Simplificadas (S.A.S.)</option>
                <option value="4">Sociedad Colectiva</option>
                <option value="5">Sociedad Anónima (S.A.)</option>
                <option value="6">Sociedades Limitadas (LTDA)</option>
                <option value="7">Sociedades en Comandita Simple (S. en C.)</option>
                <option value="8">Sociedad Comandita por Acciones (S. C. A.)</option>

            </select
        
        <br>
        <input class="cant-submit" type="submit" value="Guardar" />
     </form>







</body>


</html>