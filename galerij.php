<!DOCTYPE html>
<html lang="en">
<?php include 'header.html' ;?>

<style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      .b-example-divider {
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }
</style>
<body> 
<main>

  <section class="py-5 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="fw-light">photo's</h1>
      </div>
    </div>
  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <img src="assets/img_6927.jpg"class="bd-placeholder-img card-img-top" >
            <div class="card-body">
              <p class="card-text">mijn kat </p>
              <div class="d-flex justify-content-between align-items-center">
                <div >
                  <a href="assets/img_6927.jpg" class="btn btn-primary" role="button">test</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card shadow-sm">
          <iframe class="bd-placeholder-img card-img-top" src="https://youtube.com/shorts/FgufaWDeDrY"></iframe> 
            <div class="card-body">
              <p class="card-text">it shuld be a vido generated whit AI (see the link below ) </p>
              <div class="d-flex justify-content-between align-items-center">
                <div >
                  <a href="https://youtube.com/shorts/FgufaWDeDrY?feature=share" class="btn btn-primary" role="button">test</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
    </div>
  </div>

</main>







<?php include 'onder.html' ;?>
</body>