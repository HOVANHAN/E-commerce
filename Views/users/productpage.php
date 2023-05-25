<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Furni3dots - Home</title>
  <link rel="stylesheet" href="../Public/CSS/header.css">
  <link rel="stylesheet" href="../../Public/CSS/productlist.css">
  <link rel="stylesheet" href="../Public/CSS/footer.css">
  <!-- link bootstrap -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
  <!-- link owl carousel -->
  <link rel="stylesheet" href="owlcarousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="owlcarousel/assets/owl.theme.default.min.css">
  <!-- link icon -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
  <!-- link font -->
  <link href="https://fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
  <!-- header -->
  <?php
  include_once '../blocks/header.php';
  ?>
  <!-- body -->
  <div class="container-fluid productlist px-5">
    <div class="product py-5">
      <div id="myBtnContainer">
        <button class="btn-list active" onclick="filterSelection('all')"> Show all</button>
        <button class="btn-list" onclick="filterSelection('chair')"> Chair</button>
        <button class="btn-list" onclick="filterSelection('bed')"> Bed</button>
        <button class="btn-list" onclick="filterSelection('sofa')"> Sofa</button>
        <button class="btn-list" onclick="filterSelection('clock')"> Clock</button>
        <button class="btn-list" onclick="filterSelection('tabl')"> Table</button>
      </div>

      <!-- Portfolio Gallery Grid -->
      <div class="row">
        <div class="column chair">
          <a href="">
            <div class="item-img">
              <img src="../../Assets/img/chair-1-1.jpg" alt="Chair" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column chair">
          <a href="">
            <div class="item-img">
              <img src="../../Assets/img/chair-2-1.jpg" alt="Chair" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column chair">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/chair-3-1.jpg" alt="Chair" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column chair">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/chair-4-1.jpg" alt="Chair" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column chair">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/chair-5-1.jpg" alt="Chair" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>

        <div class="column bed">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/bed-1-1.jpg" alt="Bed" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column bed">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/bed-2-1.jpg" alt="Bed" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column bed">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/bed-3-1.jpg" alt="Bed" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column bed">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/bed-4-1.jpg" alt="Bed" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column bed">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/bed-5-1.jpg" alt="Bed" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column bed">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/bed-6-1.jpg" alt="Bed" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>

        <div class="column sofa">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/sofa-1-1.jpg" alt="Sofa" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">30 USD</h5>
            </div>
          </a>
        </div>
        <div class="column sofa">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/sofa-2-1.jpg" alt="Sofa" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column sofa">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/sofa-3-1.jpg" alt="Sofa" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>

        <div class="column clock">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/clock-1-1.jpg" alt="Clock" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column clock">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/clock-2-1.jpg" alt="Clock" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column clock">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/clock-3-1.jpg" alt="Clock" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>

        <div class="column tabl">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/table-1-1.jpg" alt="Table" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column tabl">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/table-2-1.jpg" alt="Table" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>
        <div class="column tabl">
          <a href="">
            <div class="item-img">
              <img src="../Assets/img/table-3-1.jpg" alt="Table" style="width:100%">
            </div>
            <div class="card-body items-content">
              <h5 class="card-title items-content__name">CIELO</h5>
              <h5 class="card-text items-content__price">20 USD</h5>
            </div>
          </a>
        </div>

      </div>
      <!-- END GRID -->
    </div>
  </div>

  <!--Footer-->
  <?php
  include_once '../blocks/footer.php';
  ?>

  <!-- link bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
</body>
<script src="../Public/JS/productlist.js"></script>

</html>