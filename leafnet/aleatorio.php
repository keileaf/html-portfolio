<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap 5  Example</title>
  <meta charset="utf-Website8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <style>
  .fakeimg {
    height: 200px;
    background: #aaa;
  }
  <style>
		body {
			font-family: Arial, sans-serif;
			margin: 0;
			padding: 0;
		}

		header {
			background-color: #3f51b5;
			color: white;
			padding: 20px;
			text-align: center;
		}

		main {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			height: calc(100vh - 300px);
			padding: 20px;
		}

		input[type="text"] {
			padding: 10px;
			margin-bottom: 20px;
			border: none;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
			width: 100%;
			max-width: 500px;
			font-size: 1.2em;
		}

		button {
			background-color: #4caf50;
			color: white;
			padding: 10px 20px;
			border: none;
			border-radius: 5px;
			box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
			font-size: 1.2em;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
		}

		button:hover {
			background-color: #388e3c;
		}

		@media screen and (max-width: 600px) {
			main {
				height: auto;
			}

			input[type="text"] {
				font-size: 1em;
			}

			button {
				font-size: 1em;
			}
		}
  </style>
</head>


<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Sintentizador de voz </h1>
</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="./index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./LEATO.php">Aleatorio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Peliculas</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Cartoon</a>
      </li>
    </ul>
  </div>
</nav>

<!--new code -->

  <main> 
  	<label for="texto">Escribe lo que quieres que se pronuncie:</label>
		<input type="text" id="texto">
		<button onclick="leerTexto()">Pronunciar</button>
  </main>
	<script>
		function leerTexto() {
			var texto = document.getElementById("texto").value;
			var utterance = new SpeechSynthesisUtterance(texto);
			utterance.lang = 'es-AR';
			window.speechSynthesis.speak(utterance);
		}
	</script>

</div> </div> </div>







<div class="mt-5 p-4 bg-secondary text-green text-center">
  <p>Footer</p>
</div>

</body>
</html>
