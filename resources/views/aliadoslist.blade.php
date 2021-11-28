<html>
<head>

    <link rel="stylesheet"
		href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<script
		src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script 
		src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script 
		src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	
        <link rel="stylesheet"
		href="https://use.fontawesome.com/releases/v5.0.8/css/solid.css">
	<script src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>

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
				<li><a href="#">Formulario</a></li>
			</ul>
		</nav><!-- / nav -->

	</header><!-- / #main-header -->

	
	
    <form>
        <div class="table-responsive">
            <table id="userList" class="table table-bordered table-hover table-striped">
                <thead class="thead-light">
                <tr>
                    <th scope="col">Nit</th>
                    <th scope="col">Nombre Proveedor</th>
                    <th scope="col">Cartificado ARL</th>
                    <th scope="col">Documento seguridad social</th>
                    <th scope="col">Ficha de seguridad</th>
                    <th></th>
                </tr>
                </thead>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="list" role="tabpanel" aria-labelledby="list-tab">
                        <div class="card">
                            <div class="card-header">
                                <h4>Lista de Aliados</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table id="userList" class="table table-bordered table-hover table-striped">
                                        <thead class="thead-light">
                                        <tr>
                                            <th scope="col">Nit</th>
                                            <th scope="col">Nombre Proveedor</th>
                                            <th scope="col">Cartificado ARL</th>
                                            <th scope="col">Documento seguridad social</th>
                                            <th scope="col">Ficha de seguridad</th>
                                            <th></th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Transporte</td>
                                            <td><a href="#">arlSertificado</a></td>
                                            <td><a href="#">DocumentoSeguridadSocial</a></td>
                                            <td><a href="#">FichaSeguridad</a></td>
                                            <td>
                                                <a href="#"><i class="fas fa-edit"></i></a> | <a href="#"><i class="fas fa-user-times"></i></a>
                                            </td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
        
                            </div>
                        </div>
                    </div>
    </form>







</body>


</html>