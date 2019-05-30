
<!DOCTYPE html>

<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Carrito</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by FreeHTML5.co" />
	<meta name="keywords" content="free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	<meta name="author" content="FreeHTML5.co" />
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">



  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic,700' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
	

	<div id="fh5co-page">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
		<aside id="fh5co-aside" role="complementary" class="js-fullheight">

			<h1 id="fh5co-logo"><a href="index.php"><img src="images/nairobi.jpeg" alt="Free HTML5 Bootstrap Website Template" height="180px" width="170px"></a></h1>
			<nav id="fh5co-main-menu" role="navigation">
            <ul>
					<li class="fh5co-active"><a href="index.php">Inicio</a></li>
					<li class="fh5co-active1"><a href="sesion.html">Iniciar sesion</a></li>
					<li class="fh5co-active1"><a href="registro.html">Registrarse</a></li>
					<li><a href="portfolio.php">Productos</a></li>
					<li class="fh5co-active"><a href="carrito.php">Carrito (0)</a></li>
					<li><a href="politicas.php">Politicas</a></li>
					<li><a href="contact.html">Contacto</a></li>
					<li class="fh5co-active"><a href="creditos.php">Creditos</a></li>
				</ul>
		
			</nav>

			<div class="fh5co-footer">
				<p><small>&copy; </span> <span><a href="http://freehtml5.co/" target="_blank"></a> </span> <span> <a href="https://themewagon.com/" target="_blank"></a></span></small></p>
				<ul>
					<li><a href=https://www.facebook.com/Nairobi-maquillaje-1039530059578478/?modal=admin_todo_tour target="_blank"><i class="icon-facebook"></i></a></li>
					<li><a href="https://www.instagram.com/nairobi_maquillaje?igshid=18heknaol85m0" target="_blank"><i class="icon-instagram"></i></a></li>
				</ul>
			</div>

		</aside>

		
		<script>
        window.onload = function () {
			producto1 = document.getElementById('producto1');
            // Variables
            let baseDeDatos = [
                {
                    id: 1,
                    nombre: 'Lipstick uvas',
                    precio: 200,
					
					
                },
                {
                    id: 2,
                    nombre: 'Pal mar',
                    precio: 180
                },
                {
                    id: 3,
                    nombre: 'Labial ternura',
                    precio: 179
                },
                {
                    id: 4,
                    nombre: 'Labial mar',
                    precio: 100
                },
				{
                    id: 5,
                    nombre: 'Sombras',
                    precio: 256
                },
				{
                    id: 6,
                    nombre: 'Bile',
                    precio: 179
                },
				{
                    id: 7,
                    nombre: 'Polvera',
                    precio: 123
                }

            ]
            let $items = document.querySelector('#items');
            let carrito = [];
            let total = 0;
            let $carrito = document.querySelector('#carrito');
            let $total = document.querySelector('#total');
            // Funciones
            function renderItems () {
                for (let info of baseDeDatos) {
                    // Estructura
                    let miNodo = document.createElement('div');
                    miNodo.classList.add('card', 'col-sm-4');
                    // Body
                    let miNodoCardBody = document.createElement('div');
                    miNodoCardBody.classList.add('card-body');
                    // Titulo
                    let miNodoTitle = document.createElement('h5');
                    miNodoTitle.classList.add('card-title');
                    miNodoTitle.textContent = info['nombre'];
                    // Precio
                    let miNodoPrecio = document.createElement('p');
                    miNodoPrecio.classList.add('card-text');
                    miNodoPrecio.textContent = '$' + info['precio']  ;
                    // Boton 
                    let miNodoBoton = document.createElement('button');
                    miNodoBoton.classList.add('btn', 'btn-primary');
                    miNodoBoton.textContent = 'Añadir al carrito';
                    miNodoBoton.setAttribute('marcador', info['id']);
                    miNodoBoton.addEventListener('click', añadirCarrito);
                    // Insertamos
                    miNodoCardBody.appendChild(miNodoTitle);
                    miNodoCardBody.appendChild(miNodoPrecio);
                    miNodoCardBody.appendChild(miNodoBoton);
                    miNodo.appendChild(miNodoCardBody);
                    $items.appendChild(miNodo);
                }
            }
            function añadirCarrito () {
                // Añadimos el Nodo a nuestro carrito
                carrito.push(this.getAttribute('marcador'))
                // Calculo el total
                calcularTotal();
                // Renderizamos el carrito 
                renderizarCarrito();

            }

            function renderizarCarrito () {
                // Vaciamos todo el html
                $carrito.textContent = '';
                // Generamos los Nodos a partir de carrito
                carrito.forEach(function (item, indice) {
                    // Obtenemos el item que necesitamos de la variable base de datos
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) { //agregar nombre de la base dde ddatos
                        return itemBaseDatos['id'] == item;
                    });
                    // Creamos el nodo del item del carrito
                    let miNodo = document.createElement('li');
                    miNodo.classList.add('list-group-item', 'text-right');
                    miNodo.textContent = ` ${miItem[0]['nombre']} - $${miItem[0]['precio']}`;
                    // Boton de borrar
                    let miBoton = document.createElement('button');
                    miBoton.classList.add('btn', 'btn-danger', 'mx-5');
                    miBoton.textContent = 'Quitar del carrito';
                    miBoton.setAttribute('posicion', indice);
                    miBoton.addEventListener('click', borrarItemCarrito);
					miBoton.style = 
                    // Mezclamos nodos
                    miNodo.appendChild(miBoton);
                    $carrito.appendChild(miNodo);
                })
            }

            function borrarItemCarrito () {
                // Obtenemos la posicion que hay en el boton pulsado
                let posicion = this.getAttribute('posicion');
                // Borramos la posicion que nos interesa
                carrito.splice(posicion, 1);
                // volvemos a renderizar
                renderizarCarrito();
                // Calculamos de nuevo el precio
                calcularTotal();
            }

            function calcularTotal () {
                // Limpiamos precio anterior
                total = 0;
                // Recorremos el array del carrito
                for (let item of carrito) {
                    // De cada elemento obtenemos su precio
                    let miItem = baseDeDatos.filter(function(itemBaseDatos) {
                        return itemBaseDatos['id'] == item;
                    });
                    total = total + miItem[0]['precio'];
                }
                // Formateamos el total para que solo tenga dos decimales
                let totalDosDecimales = total.toFixed(2);
                // Renderizamos el precio en el HTML
                $total.textContent = totalDosDecimales;
            }
            // Eventos

            // Inicio
            renderItems();
        } 
    </script>
</head>
<body>
    <div class="container">
        <div class="row">
            <!-- Elementos generados a partir del JSON -->
            <main id="items" class="col-sm-8 row"></main>
            <!-- Carrito -->
            <aside class="col-sm-4">
                <h2>Carrito</h2>
                <!-- Elementos del carrito -->
                <ul id="carrito" class="list-group"></ul>
                <hr>
                <!-- Precio total -->
				<p class="text-right">Total:$ <span id="total"></span></p>
				<button class="btn btn-primary"
							name="btnAccion"
							value= "Agregar"
							type="submit" >
							Comprar
							</button>
            </aside>
        </div>
    </div>
</body>



	</div>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- Stellar -->
	<script src="js/jquery.stellar.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Counters -->
	<script src="js/jquery.countTo.js"></script>

	<!-- MAIN JS -->
	<script src="js/main.js"></script>


</html>



    