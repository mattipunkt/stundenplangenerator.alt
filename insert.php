<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="main.css" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Generator</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="index.html">StundenplanGenerator</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Generieren</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Warum das ganze?</a>
              </li>
              <!-- 
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Dropdown
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
              </li>
            </ul>
            <form class="d-flex">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Search</button>
            </form>-->
          </div>
        </div>
      </nav>
    


    <!-- ENDE DER NAVBAR -->
    <!-- DER MAIN PART STARTET HIER -->

    <div class="main">
    <div class="alert alert-primary" role="alert">
    <?php
include_once 'db.php';
if(isset($_POST['submit']))
{    
     $vorname = $_POST['vorname'];
     $sql = "INSERT INTO schueler (vorname)
     VALUES ('$vorname')";
     if (mysqli_query($conn, $sql)) {
        echo "Sch??ler " . $vorname . " wurde erfolgreich hinzugef??gt!";
     } else {
        echo "Error: " . $sql . ":-" . mysqli_error($conn);
     }
     mysqli_close($conn);
}
?>
</div>
    
        <h1>Hier den Stundenplan generieren</h1>
        <p> Der Stundenplangenerator kann f??r jeden Sch??ler einen pers??nlichen Stundenplan erstellen, ohne dass sich der Sch??ler den Kopf zerbrechen muss, in welchem Kurs er ist, wann dieser ist und ohne auf un??bersichtliche Gesamt??bersichten zu gucken.</p>
        <div class="wrapper">
          <div class="container-fluid">
              <div class="row">
                  <div class="col-md-12">
                      <div class="page-header">
                          <h2>Sch??ler erstellen</h2>
                      </div>
                      <form action="insert.php" method="post">
                          <div class="form-group">
                              <label>Vorname</label>
                              <input type="text" name="vorname" class="form-control">
                          </div>
                          <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                      </form>
                  </div>
              </div>        
          </div>
      </div>
    </div>
    




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

