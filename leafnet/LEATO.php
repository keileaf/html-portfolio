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
        background-color: #f2f2f2;
      }

      h1 {
        text-align: center;
        margin-top: 20px;
        margin-bottom: 20px;
      }

      #container {
        width: 500px;
        margin: auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
      }

      label {
        display: block;
        margin-bottom: 10px;
      }

      input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
      }

      button {
        display: block;
        margin: auto;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #4caf50;
        color: #fff;
        font-size: 16px;
        cursor: pointer;
      }

      button:hover {
        background-color: #3e8e41;
      }

      #number {
        text-align: center;
        font-size: 40px;
        margin-top: 50px;
        margin-bottom: 50px;
      }

      table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 50px;
      }

      th,
      td {
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
      }

      th {
        background-color: #f2f2f2;
      }

      td:nth-child(1) {
        font-weight: bold;
      }

      td:nth-child(2) {
        font-size: 20px;
      }

      td:nth-child(3) button {
        background-color: #f44336;
      }

      td:nth-child(3) button:hover {
        background-color: #c62828;
      }
  </style>
</head>


<body>

<div class="p-5 bg-primary text-white text-center">
  <h1>Generador de numeros aleatorios</h1>

</div>

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="./index.php">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./aleatorio.php">Voz</a>
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

<div class="container mt-5">
<div id="container">
      <form>
        <label for="min">Valor mínimo:</label>
        <input type="number" id="min" name="min" />

        <label for="max">Valor máximo:</label>
        <input type="number" id="max" name="max" />

        <button type="button" onclick="generateNumber()">Generar número</button>
      </form>

      <div id="number"></div>

      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Número generado</th>
            <th>Eliminar</th>
        </thead>
        <tbody id="history"></tbody>
      </table>

      <button type="button" onclick="resetHistory()">Reiniciar historial</button>
    </div>

    <script>
      var minInput = document.getElementById("min");
      var maxInput = document.getElementById("max");
      var numberDiv = document.getElementById("number");
      var historyBody = document.getElementById("history");
      var numbersGenerated = [];

      function generateNumber() {
        var min = parseInt(minInput.value);
        var max = parseInt(maxInput.value);

        if (max <= min) {
          alert("El valor máximo debe ser mayor que el valor mínimo");
          return;
        }

        if (numbersGenerated.length == (max - min + 1)) {
          alert("Se han generado todos los números posibles");
          return;
        }

        var number;
        do {
          number = Math.floor(Math.random() * (max - min + 1)) + min;
        } while (numbersGenerated.includes(number));

        numbersGenerated.push(number);

        var newRow = document.createElement("tr");
        newRow.innerHTML =
          "<td>" +
          numbersGenerated.length +
          "</td><td>" +
          number +
          "</td><td><button onclick='removeNumber(" +
          number +
          ")'>Eliminar</button></td>";

        historyBody.appendChild(newRow);

        numberDiv.innerHTML = number;
      }

      function removeNumber(number) {
        var index = numbersGenerated.indexOf(number);
        if (index !== -1) {
          numbersGenerated.splice(index, 1);
        }

        var rows = historyBody.getElementsByTagName("tr");
        for (var i = 0; i < rows.length; i++) {
          var row = rows[i];
          var rowNumber = parseInt(row.getElementsByTagName("td")[1].innerHTML);
          if (rowNumber === number) {
            historyBody.removeChild(row);
            break;
          }
        }
      }

      function resetHistory() {
        numbersGenerated = [];
        historyBody.innerHTML = "";
      }
    </script>
</div>


<div class="mt-5 p-4 bg-secondary text-green text-center">
  <p>Footer</p>
</div>

</body>
</html>
