<!DOCTYPE html>
<html lang="es">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./img/Logo Mexicano.png">
    <!-- <link rel="stylesheet" href="css/estilo_pedido.css" /> -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <script src="js/pedido_carrito.js" async></script>
    <script src="https://kit.fontawesome.com/233d4e0a24.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <title> Pedido </title>
    <style>
        .error-mesa {
            color: red;
            font-size: 1em;
        }
    </style>


</head>

<body>

<header>

<nav class="navbar navbar-expand-lg navbar-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="pedido.php">Pedido</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link " aria-current="page" href="index.html">Home</a>
        <a class="nav-link" href="menu_Entrada.html">Menú</a>
        
      </div>
    </div>
  </div>
</nav>




</header> 


<form action="script_pedido.php" method="POST">

<div class="container">

<div class="table-responsive">

<table class="table table-borderless table-sm tablaPedidos">
  <thead>
    <tr class = "headerCarrito"> 
      <th scope="col">Plato</th>
      <th scope="col">Valor </th>
      <th scope="col">Cantidad</th>
      <th scope="col">Opciones</th>
    </tr>
  </thead>
 
  
</table>
    
</div>

</div>

                <!-- <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'noPlatos' || $_GET['error'] == 'ninguno') {
                        echo '<div class="cart-item cart-column"><span class="cart-item-title" name="plato">NO HAY PLATOS</span></div>';
                    }
                }
                ?> -->

                <div class="contedorMesaPrecio">  
         
            <div class="cart-table cart-quantity">


<div class="container">
            <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">

  <div class="col-sm-2">
    <label for="mesa" class="form-label">Número de mesa</label>
    <input type="number" class="number-table form-control" id="numeroMesa" name="mesa" placeholder="Ingrese el número">
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'noMesa' || $_GET['error'] == 'ninguno') {
                        echo '<p class = "error-mesa" >Ingrese Numero de Mesa</p>';
                    }
                }
                ?>
  </div>
     
  <div class="d-grid gap-2 d-sm-block ">
  <br>
<button class="botonBorrarPedidos btn  btn-sm" type="button"> Vaciar pedido </button>
  </div>
  </li>
 
  <li class="list-group-item d-flex justify-content-between align-items-center secondItem">


  <div class="cart-total">
               <div> <strong class="cart-total-title">Total</strong> </div>
                
                <div class="cart-total-price" name="total">$0</div>
                <input type="number" class="inputTotal" hidden name="total">
            </div>
 

  </li>

  <li class="list-group-item d-flex justify-content-between align-items-center thirdItem" >

  <div class="d-grid gap-2 col-4 mx-auto">
  <input class="btn btn-primary btn-purchase" type="submit" value="Pedir">
  </div>
  </li>

</ul>

</div>

               
            </div>

          

            

            </div>

            

            </form>

            

        
        <footer>

        <div class="card text-center">
 
  <div class="card-body">
  <img
						src="img/logo mexicano footer.jpg"
						alt="logoMexicano"
						width="330"
						height="115"
						class="logoMexicanoFooter"
					/>
    <p class="card-text"></p>
    <div class="contenedorRedes">
						<a
							href="https://www.instagram.com/mexicanocafebariloche/"
							class="fab fa-instagram"
							id="iconoInstagram"
							target="blank"
						>
						</a>
						<a
							href="https://www.facebook.com/elmexicanobariloche"
							target="blank"
							class="fab fa-facebook-f"
							id="iconoFacebook"
						>
						</a>
						<a
							href="https://api.whatsapp.com/send?phone=5492944958019&text=&source=&data=&app_absent="
							target="blank"
							class="fab fa-whatsapp"
							id="iconoWhatsApp"
						>
						</a>
					</div> 
  </div>
  <div class="card-footer text-muted">
  <span class="text-light">®mexicanocafe - 2021 </span> 
  </div>
</div>

        </footer>
   
</body>

<style>


body{

  margin: 0;
  padding: 0;
  min-height: 100vh;
  flex-wrap: wrap;
}

footer {

line-height: 4;
  margin-top: 30px;
  width: 100%;
 
 
}

.navbar{

    background-color: #717beb;

}

.secondItem{

  justify-content: flex-end!important;
 
}

.thirdItem{

  border: none!important;

justify-content: center!important;
}

.botonBorrarPedidos{

 
    border: 0.1em solid gray;
    /* margin: 0em 2em; */
    border-radius: 0.12em;
    box-sizing: border-box;
    text-decoration: none;
    font-weight: 300;
    color: #000000;
    background-color: #ffc530;
    text-align: center;
    transition: all 0.2s;
    letter-spacing: 1px;
   
} 

.botonBorrarPedidos:hover{

  background-color: #ffac30;
  color: whitesmoke;
}

.btn-purchase{

  padding: 0.35em 1.3em;
  margin-top: 30px;
    border: 0.1em solid gray;
    /* margin: 0em 2em; */
    border-radius: 0.12em;
    box-sizing: border-box;
    text-decoration: none;
    font-weight: 300;
    color: #000000;
    background-color: #77dd77;
    text-align: center;
    transition: all 0.2s;
    letter-spacing: 1px;
}

.btn-purchase:hover{

  background-color: #268b26;
}

.inputCantidad{

  text-align: center;
}

.table  .inputQuitar {

    
    border: 0.1em solid gray;
    border-radius: 0.12em;
    color: black;
    background-color: red;
  
    letter-spacing: 1px;
}

.inputQuitar:hover{

color: white;
background-color: #c51f1b;

}

.card-body{

    background-color: #f9f9f9;
}

a {
	text-decoration: none;
	font-size: 1.1em;
	color: grey;
}

#iconoInstagram {
	
	color: rgb(45, 45, 45);
}
#iconoInstagram:hover {
	
	color: #f62e29 /*#ffea7f*/;
}

#iconoFacebook {
	
	color: rgb(45, 45, 45);
	
}

#iconoFacebook:hover {
	
	color: #efce16 ;
}

#iconoWhatsApp {
	
	color: rgb(45, 45, 45);
}

#iconoWhatsApp:hover {
	
	color: #89e077;
}

.card-footer{

    background-color: #717beb;
}

</style>

<script> 

document.addEventListener("DOMContentLoaded", function () { 

  let inputCantidad = document.getElementById("inputDeCantidad");
  let numeroDeMesa = document.getElementById("numeroMesa");



if(window.matchMedia("(max-width: 568px)").matches){
 
    inputCantidad.style.width = "54%";
    numeroDeMesa.placeholder = "Ingrese n°";
    numeroDeMesa.style.width = "55%";
    
} 
 
});



</script>



</html>