<?php require_once 'include/header.html.php' ?>
<!-- featured post -->
<section>
  <div class="container p-sm-0">
    <div class="row featured-post-slider tb container" >
      <?php
       $tab=$dataAll->SuperMethod(" * ", "ouvrage", "1  ORDER BY dateOuvr DESC");
        foreach($tab as $data){
          $color="text-primary";
      ?>
      <div class="col-lg-3 col-sm-6  mb-lg-0 px-1 ">
        <article class="card  text-center text-white border-0 rounded-0" >
          <img class="card-img rounded-0 w-100 " src="imageSave/<?=$data['photoOuvr'] ?>"  alt="post-thumb" style="height:40vh;">
          <div class="card-img-overlay">
            <div class="card-content">  
              <p class="text-uppercase "><?= $data['domaineOuvr'] ?> </p>
              <h4 class="card-title mb-4"><a class="text-white" href="imageSave/<?=$data['fichierOuvr'] ?>"><?= $data['titreOuvr'] ?></a></h4>
            </div>
          </div>
          <form action="" method="post" class="d-flex justify-content-around ">
            <button class="btn b mt-1 border border-primary rounded mb-1 btn-outline-white"><i class="fa fa-thumbs-up     <?=$color?>"></i><span class="fw-lighter">100</span></button>
            <a class="btn mt-1 mb-1 border border-primary rounded btn-outline-white" href="Commentaires.php"><i class="fa-solid fa-comment <?=$color?>"></i><span class="fw-lighter">290</span></a>   
          </form>
        </article>
      </div>
      <?php 
        }
     ?>
      </div>
    </div>
  </div>
</section>
<!-- /featured post -->

<!-- blog post -->
<section class="section">
  <div class="container">
    <div class="row masonry-container">
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-1.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-2.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-3.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-4.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-5.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-6.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-7.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-8.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-9.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-10.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-11.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-13.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
      <div class="col-lg-4 col-sm-6 mb-5">
        <article class="text-center">
          <img class="img-fluid mb-4" src="../../assets/images/masonary-post/post-12.jpg" alt="post-thumb">
          <p class="text-uppercase mb-2">TRAVEL</p>
          <h4 class="title-border"><a class="text-dark" href="blog-single.html">Charming Evening Field</a></h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
            dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex
            ea commodo consequat.</p>
          <a href="blog-single.html" class="btn btn-transparent">read more</a>
        </article>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <nav>
          <ul class="pagination justify-content-center align-items-center">
            <li class="page-item">
              <span class="page-link">&laquo; Previous</span>
            </li>
            <li class="page-item"><a class="page-link" href="login.php">01</a></li>
            <li class="page-item active">
              <span class="page-link">02</span>
            </li>
            <li class="page-item"><a class="page-link" href="#">03</a></li>
            <li class="page-item"><a class="page-link" href="#">04</a></li>
            <li class="page-item"><a class="page-link" href="#">05</a></li>
            <li class="page-item"><a class="page-link" href="#">06</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next &raquo;</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- /blog post -->

<!-- instagram -->
<section>
  <div class="container-fluid px-0">
    <div class="row no-gutters instagram-slider" id="instafeed" data-userId="4044026246"
      data-accessToken="4044026246.1677ed0.8896752506ed4402a0519d23b8f50a17"></div>
  </div>
</section>
<!-- /instagram -->

<?php require_once 'include/footer.html.php' ?>