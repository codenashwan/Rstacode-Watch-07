<?php include 'includes/nav.php';?>

<div class="row justify-content-center no-gutters m-4 position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="upload/6.jpeg" class="w-100 radius-20">
  </div>
  <div class="col-md-4 mb-md-0 p-md-4 text-center radius-20 position-static">
    <h1>Astro Blue - Series - 47mm</h1>
    <p class="mb-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Inventore commodi dolores, aperiam maxime
      ad alias amet fuga ipsum rem exercitationem mollitia aut beatae, sit itaque voluptatem voluptate, quibusdam et
      vel.</p>
    <table class="table table-white">
      <tbody>
        <tr class="text-center">
          <td><img src="assets/img/color/black.svg" width="30" alt=""></td>
          <td><img src="assets/img/color/gold.svg" width="30" alt=""></td>
          <td><img src="assets/img/color/silver.svg" width="30" alt=""></td>
        </tr>
        <tr class="text-center mt-5">
          <td>44(MM)</td>
          <td>47(MM)</td>
        </tr>
      </tbody>
    </table>
    <div class="d-flex">
    <a href="#" class="btn btn-light w-100 radius-20 shadow-none">بکڕە</a>
    <a href="#" class="btn btn-light w-100 radius-20 shadow-none">زیاتر بزانە</a>
    <a href="#" class="btn btn-light w-100 radius-20 shadow-none">ڤیدۆ</a>
    </div>
  </div>
</div>


<hr>

<div class="m-5 ">
  <div class="row">
    <div class="col-sm-2 text-center">
      <img src="assets/img/new.svg" width="100">
      <br>
      <h4>نوێترین بەرهەم</h4>
      <hr>
      <a href="" class="btn bg-gradient-darker text-white w-100 rounded-0">بازاڕ بکە</a>
    </div>
    <div class="col-sm">
      <div class="row mt-3 justify-content-center">
        <?php
        for($i = 1 ; $i< 5 ; $i++){?>
        <div class="card m-3 border-0 shadow-sm--hover text-center" style="width: 18rem ; max-width:300px">
          <img src="upload/<?php echo $i;?>.jpeg" class="card-img-top">
          <img src="assets/img/view.svg" class="view" width="30" alt="">
          <b class="price">400 $</b>
          <p class="title">Daniel Wellington LightPink</p>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
</div>


<hr>


<div class="">
<div class="row justify-content-center text-center no-gutters m-4 position-relative">
  <div class="col-md-3  mb-md-0 p-md-3">
    <img src="upload/8.jpeg" class="shadow-lg--hover w-100 p-2">
  </div>
  <div class="col-md-3 mb-md-0 p-md-3">
  <img src="upload/9.jpeg" class="w-100 shadow-lg--hover p-2">
  </div>
  <div class="col-md-3  mb-md-0 p-md-3">
    <img src="upload/8.jpeg" class="shadow-lg--hover w-100 p-2">
  </div>
  <div class="col-md-3 mb-md-0 p-md-3">
  <img src="upload/9.jpeg" class="w-100 shadow-lg--hover p-2">
  </div>
</div>
</div>

<hr>

<div class="p-2 text-white h3 text-center rounded-0 bg-gradient-darker">زۆرترین داواکاری</div>
<div class="row m-5 justify-content-center">
        <?php
        for($i = 1 ; $i< 5 ; $i++){?>
        <div class="card border-0 m-3 shadow-sm--hover text-center" style="width: 18rem ; max-width:300px">
          <img src="upload/<?php echo $i;?>.jpeg" class="card-img-top">
          <img src="assets/img/view.svg" class="view" width="30" alt="">
          <b class="price">400 $</b>
          <p class="title">Daniel Wellington LightPink</p>
        </div>
        <?php } ?>
      </div>

      
   


<?php include 'includes/footer.php';?>