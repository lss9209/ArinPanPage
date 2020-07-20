<!DOCTYPE>
<head>
  <meta charset="utf-8">
  <title>아린아린</title>
  <link rel="stylesheet" href="/style.css">
  <link rel="stylesheet" href="/bootstrap-4.5.0-dist/css/bootstrap.css">
</head>
<body id="body">
  <header>
    <div id="mains" class="row text-center">
      <h1><a href="/index.php">린이월드</a></h1>
      <img src="/img/ArinPicture1.png" alt="아린사진1">
    </div>
  </header>
  <div class = "row">
  <nav class = "col-md-3">
    <?php
      echo file_get_contents("nav.txt");
     ?>
  </nav>
  <article class = "col-md-9">
    <?php
      if(empty($_GET['id']) == false) {
        echo file_get_contents($_GET['id'].".txt");
      }
     ?>
    <button type="button" class="btn btn-primary btn-lg" onclick="document.getElementById('body').className='white'">white</button>
    <button type="button" class="btn btn-primary btn-lg" onclick="document.getElementById('body').className='black'">black</button>
  </article>
</div>
</body>
