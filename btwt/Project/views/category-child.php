<?php require_once('layouts/header.php'); ?>
    <!-- END header -->


    <section class="site-section pt-5">
      <div class="container">
        <div class="row mb-4">
          <div class="col-md-6">
            <h2 class="mb-4">Category: Food</h2>
          </div>
        </div>
        <div class="row blog-entries">
          <div class="col-md-12 col-lg-8 main-content">
            <div class="row mb-5 mt-5">

              <div class="col-md-12">

                <?php foreach ($posts_inct as $post_inct ){ ?>
                      
                <div class="post-entry-horzontal">
                  <a href="blog-single.html">
                    <div class="image element-animate" data-animate-effect="fadeIn" style="background-image: url(public/images/img_10.jpg);"></div>
                    <span class="text">
                      <div class="post-meta">
                        <span class="author mr-2"><img src="public/images/person_1.jpg" alt="Colorlib"> Colorlib</span>&bullet;
                        <span class="mr-2">March 15, 2018 </span> &bullet;
                        <span class="mr-2">Food</span> &bullet;
                        <span class="ml-2"><span class="fa fa-comments"></span> 3</span>
                      </div>
                      <h2><?= $post_inct['title']?></h2>
                    </span>
                  </a>
                </div>
                <!-- END post -->
                 <?php } ?> 

              </div>
            </div>

            <div class="row mt-5">
              <div class="col-md-12 text-center">
                <nav aria-label="Page navigation" class="text-center">
                  <ul class="pagination">
                    <li class="page-item  active"><a class="page-link" href="#">&lt;</a></li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">&gt;</a></li>
                  </ul>
                </nav>
              </div>
            </div>

            

          </div>

          <!-- END main-content -->

          <div class="col-md-12 col-lg-4 sidebar">
            <div class="sidebar-box search-form-wrap">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <!-- END sidebar-box -->
            <div class="sidebar-box">
              <div class="bio text-center">
                <img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid">
                <div class="bio-body">
                  <h2> </h2>
                  <p>Cậu bé nọ học việc trong một tiệm sửa xe đạp. Một ngày, có người khách đem đến một chiếc xe đạp hư. Cậu không những sửa lại cho thật tốt, mà còn lau chùi cho chiếc xe cho sạch đẹp.Những người học việc khác cười nhạo cậu bé dại dột, đã chẳng được thêm chút tiền công nào lại còn tốn sức.Hai ngày sau, người khách trở lại, thấy chiếc xe đạp vừa tốt vừa đẹp như mới mua, liền đưa cậu bé về hãng của ông ta để làm việc với mức lương cao.</p>
                  <p><a href="#" class="btn btn-primary btn-sm rounded">Read my bio</a></p>
                  <p class="social">
                    <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
                    <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
                  </p>
                </div>
              </div>
            </div>
            <!-- END sidebar-box -->  
           <?php require_once('layouts/sidebar.php'); ?>
   <?php require_once('layouts/footer.php'); ?>