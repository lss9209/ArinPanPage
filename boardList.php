<?php
  $conn = mysqli_connect("localhost","root","11111111");
  mysqli_select_db($conn,"board");
  $data = mysqli_query($conn,"SELECT id FROM board ORDER BY id DESC");
  $num = mysqli_num_rows($data);
  if(empty($_GET['page'])==true) {
    $page = 1;
  }
  else {
    $page = $_GET['page'];
  }
  $list = 5;
  $block = 3;

  $pageNum = ceil($num/$list); // 총 페이지
  $blockNum = ceil($pageNum/$block); // 총 블록
  $nowBlock = ceil($page/$block);

  if($num != 0 && $page > $pageNum) {
    header('Location: /boardList.php?page='.$pageNum);
  }

  $s_page = ($nowBlock * $block) - 2;
  if ($s_page <= 1) {
      $s_page = 1;
  }
  $e_page = $nowBlock*$block;
  if ($pageNum <= $e_page) {
      $e_page = $pageNum;
  }
  $s_point = ($page-1) * $list;
  $result = mysqli_query($conn, "SELECT * FROM board ORDER BY id DESC LIMIT $s_point,$list");
 ?>
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
    <div id="boardList">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">작성자명</th>
            <th scope="col">작성일</th>
            <th scope="col">글제목</th>
          </tr>
        </thead>
        <tbody>
            <?php
              while($row = mysqli_fetch_assoc($result)) {
                echo "<tr>
                <td>".$row['author']."</td>
                <td>".$row['date']."</td>
                <td><a href='/boardContent.php?id=".$row['id']."' style='color:blue'>".$row['title']."</a></td>
                </tr>";
              }
              ?>
        </tbody>
      </table>
        <?php
        for ($p=$s_page; $p<=$e_page; $p++) {
       ?>
       <a href="/boardList.php?page=<?=$p?>" style="color:blue"><?=$p?></a>
       <?php
        }
      ?>
      <div>
        <a href="/boardList.php?page=<?=$s_page-1?>" style="color:blue">이전</a>
        <a href="/boardList.php?page=<?=$e_page+1?>" style="color:blue">다음</a>
      </div>
    </div>
    <button type="button" class="btn btn-primary btn-lg" onclick="document.getElementById('body').className='white'">white</button>
    <button type="button" class="btn btn-primary btn-lg" onclick="document.getElementById('body').className='black'">black</button>
    <button type="button" class="btn btn-success btn-lg"><a href="/write.php">쓰기</font></a></button>
  </article>
</div>
</body>
