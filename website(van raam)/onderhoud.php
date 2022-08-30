<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
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
                <input class="form-control mr-sm-2" type="text" name="kleuren" placeholder="zoek kleur">
                <button class="btn btn-default" type="submit">zoek</button>
          </ul>
        </div>
    </div>
</nav>
      </form>

  </body>
  <main>
  <section>
      <h1>klant</h1>
  <?php
  try {
   $db = new PDO("mysql:host=localhost;dbname=van_raam","root","");
  
 $query = $db->prepare("SELECT * FROM onderhoud" );
 $query->execute();
 $result = $query->fetchAll(PDO::FETCH_ASSOC);
 echo "<div class='bs-example'>";
 echo '<Table class="table table-bordered table-hover tkop">';
 echo '<thead>';
 echo '<td>idonderhoud</td>';
 echo '<td>idmederwerker</td>';
 echo '<td>fietsid</td>';
 echo '<td>datum</td>';
 
 echo '</thead>';

 foreach ($result as $data)
 {
 echo    "<tr>";
 echo    "<Td>" .$data["idonderhoud"]."</td>";
 echo    "<Td>" .$data["idmedewerker"]."</td>";
 echo    "<Td>" .$data["fietsid"]."</td>";
 echo    "<td>".$data["datum"]."</td>";
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
<section>
</section>


</main>
</body>
</html>