<!doctype html>
<html lang="en">
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
            <a class="navbar-brand" href="https://www.vanraam.com/nl-nl?utm_source=bing&utm_medium=cpc&utm_campaign=Website%20NL&utm_term=van%20raam&utm_content=BedrijfsnaamNL ">Van Raam</a>
          </div>
          <ul class="nav navbar-nav">
            <li><a href="bootstrap.html">Home</a></li>
            <li><a href="modellen van RAAM.html">modellen</a></li>
            <li><a href="link.html">link</a></li>   
                <input class="form-control mr-sm-2" type="text" name="kleuren" placeholder="kleuren">
                <button class="btn btn-success" type="submit">Search</button>
          </ul>
        </div>
      </form>
</nav>
  </body>
  <main>
    <section>
  <?php
  try {
    $db = new PDO("mysql:localhost=;dbname=van_raam","root","");
  }
    catch (PDOException $e) {
      echo $e;}
      $zoek=$_POST["kleuren"];
    $query = $db->prepare("SELECT soort, kleur FROM fiets WHERE kleur LIKE :kleuren" );
    $query->bindValue(':kleuren', "%$zoek%");
    $query->execute();
   if($query->rowCount()>0)
   {
   $result = $query->fetchAll(PDO::FETCH_ASSOC);
  echo '<Table class="table table-bordered table-hover tkop">';
  echo '<thead>';
  echo '<td>soort</td>';
  echo '<td>kleur</td>';
  echo '</thead>';
  foreach ($result as $rij)
  {
    echo    "<tr>";
    echo    "<td>" .$rij["soort"]."</td>";
    echo    "<td>" .$rij["kleur"]."</td>";
    echo  "</tr>";
    }
    echo "</table>";
}
else
 {
     echo "<p>deze kleur hebben we niet</p>";
 }
?>
</section>
</main>
</html>