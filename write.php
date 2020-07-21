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
    <div id="writep">
      <form action="/process.php" method="post">
        <p class="writeTool">글 제목:
          <input type="text" name="title"/>
        </p>
        <p class="writeTool">작성자명:
          <input type="text" name="author"/>
        </p>
        <div class="wrtieTool" id="bContent">글 내용:</div>
        <div><textarea name="content" cols="40" rows="10"></textarea></div>
        <input type="submit" value="작성완료"></button>
      </form>
  </div>
    <button type="button" class="btn btn-primary btn-lg" onclick="document.getElementById('body').className='white'">white</button>
    <button type="button" class="btn btn-primary btn-lg" onclick="document.getElementById('body').className='black'">black</button
  </article>
</div>
</body>
