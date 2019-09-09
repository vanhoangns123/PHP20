<div class="sidebar-box">
                <h3 class="heading">Popular Posts</h3>
                <div class="post-entry-sidebar">
                  <ul>

                    <?php foreach ($posts_top as $post_top ){ ?>
                       <li>
                          <a href="index.php?mod=blogandsingle&act=singlepage&id=<?=$post_top['id']?>">
                            <img src="public/images/img_2.jpg" alt="Image placeholder" class="mr-4">
                            <div class="text">
                              <h4><?= $post_top['title'] ?></h4>
                              <div class="post-meta">
                                <span class="mr-2">March 15, 2018 </span>
                              </div>
                            </div>
                          </a>
                        </li>
                    <?php } ?>

                  </ul>
                </div>
              </div>
              <!-- END sidebar-box -->
              <div class="sidebar-box">
                <h3 class="heading">Categories</h3>
                <ul class="categories">
                  <?php foreach ($categories as $category){ ?>

                      <li><a href="#"><?= $category['name'] ?> <span> </span></a></li>
                        
                  <?php } ?>
                  
                </ul>
              </div>
            </div>
            <!-- END sidebar -->
          </div>
        </div>
      </section>
      