<!DOCTYPE html>
<html lang="nl">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <link rel="stylesheet" type="text/css" href="Van Raam.css">
</head>
<body>
    <div class="jumbotron text-center">
        <h1>Van Raam</h1>
        <p>Fabrikant van aangepaste & Speciale fietsen.</p> 
      </div>

      <form class="navbar-form" method="post" action="gevondenkleuren.php">
        <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
        <div class="from-group">
          <div class="navbar-header">
            <a class="navbar-brand" href="https://www.vanraam.com/nl-nl?utm_source=bing&utm_medium=cpc&utm_campaign=Website%20NL&utm_term=van%20raam&utm_content=BedrijfsnaamNL ">Van Raam</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="bootstrap.html">Home</a></li>
            <li><a href="modellen van RAAM.html">modellen</a></li>
            <li><a href="link.html">link</a></li>
          </ul>
        </div>
    </div>
</nav>
      </form>

  </body>
  <main>
    <section>
      <h1>Wanneer moet de onderhoud af zijn?</h1>
  <?php
  try {
   $db = new PDO("mysql:host=localhost;dbname=van_raam","root","");
  
 $query = $db->prepare ("SELECT klant.voornaam  AS klantvoornaam, 
 
 klant.tussenvoegsel AS klanttussenvoegsel, 
 
 klant.achternaam AS klantachternaam,

 medwerker.voornaam AS medewerkervoornaam,

  medwerker.tussenvoegsel AS medewerkertussenvoegsel,

  medwerker.achternaam AS medewerkerachternaam,
    datum FROM onderhoud 

 INNER JOIN contract ON contract.idonderhoud=onderhoud.idonderhoud 

 INNER JOIN klant ON contract.klantid=klant.klantid 

 INNER JOIN medwerker ON medwerker.idmedewerker=onderhoud.idmedewerker");
 
  $query->execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 echo "<div class='bs-example'>";
 echo '<Table class="table table-bordered table-hover tkop">';
 echo '<thead>';
 echo '<td>Voornaam</td>';
 echo '<td>Tussenvoegsel</td>';
 echo '<td>Achternaam</td>';
 echo '<td>medewerker</td>';
 echo '<td>datum</td>';
 echo '</thead>';

 foreach ($result as $data)
 {
 echo    "<tr>";
 echo    "<Td>" .$data["klantvoornaam"]."</td>";
 echo    "<Td>" .$data["klanttussenvoegsel"]."</td>";
 echo    "<Td>" .$data["klantachternaam"]."</td>";
 echo    "<Td>" .$data["medewerkervoornaam"]." " .$data["medewerkertussenvoegsel"]." " .$data["medewerkerachternaam"]."</td>";
 echo    "<Td>" .$data["datum"]."</td>";
 echo  "</tr>";
 }
 echo "</table>";
 echo "</div>";
}
 catch(PDOException $e) {
  echo $e;
}
?>
</section>


</main>
</html>