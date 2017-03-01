      <div class="page-header">
        <div class="notebook-background">
           <section class="slider">
               <div class="flexslider">
                 <ul class="slides">
                  <?php
                    foreach ($slider as $q_slider) {
                     ?>
                        <li>
                          <img style="width: 470px;object-fit: cover;height: 294px;" src="<?php echo base_url(); ?>assets/images/slider/<?php echo$q_slider->gambar ?>" />
                          <p class="flex-caption"><a href="#"><?php echo $q_slider->nama_slider ?></a></p>
                        </li>
                     <?php
                    }
                  ?>
                   
                 </ul>
               </div>
             </section> 
        </div>
         
      </div>
      <!--Page Body-->
      <div id="page-body" class="page-body">

         <!-- Blog-->
        <section class="page-section">
          <div class="container">
            <div class="col-md-8">
              
            </div>
          </div>
          <div class="container">
              <div class="row">
                <div class="col-md-9">

                     <header class="hr-header section-header">
                        <h2>BLOG TERBARU</h2>
                    </header>

                  <div class="blogs-terbaru">
                   <?php 
                      foreach ($blog_terbaru as $blog) {
                        ?>
                        <div class="blog">
                          <div class="card">
                            <img src="<?php echo base_url(); ?>assets/images/posting/<?php echo $blog->gambar; ?>" alt="Avatar" style="width:100%">
                            <div class="blog-kategori">Pemrograman</div>
                            <div class="container">
                              <a href="<?php echo base_url(); ?>blog/detail/<?php echo $blog->slug_posting ?>"><h4 class="judul-posting"><?php echo $blog->judul_posting ?></h4></a>
                              <div class="bottom">
                                <div class="jenis">
                                  <i class="fa fa-bookmark-o"></i>
                                  <h4><?php echo $blog->jenis_posting ?><h4>
                                </div>
                                <div class="tanggal-posting">
                                 <i class="fa fa-calendar"></i>
                                  <h4>13 Desember 2017</h4>
                                </div>
                                <div class="view">
                                   <i class="fa fa-eye"></i>
                                  <h4><?php echo $blog->view; ?></h4>
                                </div>
                                <div class="clearfix"></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php  
                      }
                    ?>
                  </div>
                </div>
                <div class="col-md-3">
                  
                </div>
              </div>

           

            <!--<div class="row">
              <div class="col-md-9">
                <div class="col-md-4 col-sm-6 col-xs-12 section-block">
                  <div class="block-blog-post-1 text-center">
                    <div class="__image mb-25"><a href="#">
                        <div class="overlay-container"><img src="http://assets.kompas.com/data/photo/2012/09/16/0611593p.jpg" alt="Blog Post Image"/>
                          <div class="overlay-hover bgc-dark-o-4"></div>
                        </div></a></div>
                    <div class="__content">
                      <div class="__title"><a href="#" class="font-heading fz-6 mb-5"> Football Manager rilis November 2012 </a></div>
                      <p class="font-serif-italic color-gray mb-0"><a href="#">May 15, 2015</a>&nbsp;/&nbsp;<a href="#">admin</a>&nbsp;/&nbsp;<a href="#">Co-working</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 section-block">
                  <div class="block-blog-post-1 text-center">
                    <div class="__image mb-25"><a href="#">
                        <div class="overlay-container"><img src="http://assets.kompas.com/data/photo/2012/09/16/0611593p.jpg" alt="Blog Post Image"/>
                          <div class="overlay-hover bgc-dark-o-4"></div>
                        </div></a></div>
                    <div class="__content">
                      <div class="__title"><a href="#" class="font-heading fz-6 mb-5">8 WAYS TO BOOST YOUR CONFIDENCE</a></div>
                      <p class="font-serif-italic color-gray mb-0"><a href="#">May 15, 2015</a>&nbsp;/&nbsp;<a href="#">admin</a>&nbsp;/&nbsp;<a href="#">Co-working</a></p>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-xs-12 section-block col-sm-offset-3 col-sm-6 col-md-offset-0">
                  <div class="block-blog-post-1 text-center">
                    <div class="__image mb-25"><a href="#">
                        <div class="overlay-container"><img src="http://assets.kompas.com/data/photo/2012/09/16/0611593p.jpg" alt="Blog Post Image"/>
                          <div class="overlay-hover bgc-dark-o-4"></div>
                        </div></a></div>
                    <div class="__content">
                      <div class="__title"><a href="#" class="font-heading fz-6 mb-5">8 SUREFIRE WAYS TO SPOT A LIAR</a></div>
                      <p class="font-serif-italic color-gray mb-0"><a href="#">May 15, 2015</a>&nbsp;/&nbsp;<a href="#">admin</a>&nbsp;/&nbsp;<a href="#">Co-working</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-3">
                
              </div>
              
            </div>-->
          </div>
        </section>
        <!-- End Blog-->

        <section class="page-section bgc-gray-lighter pengurus-section">
          <div class="container section-block">
            <div data-item-width='400' class="slider slide direction-nav outer-direction arrow-gray swipe-to-slide">
              <div data-wow-delay="0.3s" class="block-icon-box-vertical wow fadeInUp">
                <img class="img-responsive img-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="">
                <h4 class="__heading smb">PETRA SIHOMBING</h4>
                <p class="__caption font-serif italic">Ketua</p>
              </div>
              <div data-wow-delay="0.3s" class="block-icon-box-vertical wow fadeInUp">
                <img class="img-responsive img-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="">
                <h4 class="__heading smb">HTML5 &amp; CSS3 ANIMATION</h4>
                <p class="__caption font-serif italic">Wakil Ketua</p>
              </div>
              <div data-wow-delay="0.3s" class="block-icon-box-vertical wow fadeInUp">
                <img class="img-responsive img-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="">
                <h4 class="__heading smb">AUTOMATE YOUR WORKFLOW</h4>
                <p class="__caption font-serif italic">Bendahara</p>
              </div>
              <div data-wow-delay="0.3s" class="block-icon-box-vertical wow fadeInUp">
                <img class="img-responsive img-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="">
                <h4 class="__heading smb">NODE TEMPLATE ENGINE</h4>
                <p class="__caption font-serif italic">Sekretaris</p>
              </div>
              <div data-wow-delay="0.3s" class="block-icon-box-vertical wow fadeInUp">
                <img class="img-responsive img-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="">
                <h4 class="__heading smb">LESS PRE-PROCESSOR</h4>
                <p class="__caption font-serif italic">Ketua - Kelas 12 IPA 4</p>
              </div>
              <div data-wow-delay="0.3s" class="block-icon-box-vertical wow fadeInUp">
                <img class="img-responsive img-circle" src="https://x1.xingassets.com/assets/frontend_minified/img/users/nobody_m.original.jpg" alt="">
                <h4 class="__heading smb">FULLY RESPONSIVE</h4>
                <p class="__caption font-serif italic">Ketua - Kelas 12 IPA 4</p>
              </div>
            </div>
          </div>
        </section>

        <section class="page-section bgc-light supper-padding supper-padding-top">
          <div class="container text-center">
            <div class="col-md-8 col-md-offset-2">
              <header class="hr-header section-header">
                <h2 class="smb">OUR PORTFOLIO</h2>
                <p class="common-serif __caption">Enjoy our portfolio</p>
                <div class="separator-2-color"></div>
                <p class="__content">Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking. Don't settle. As with all matters of the heart, you'll know when you find it.</p>
              </header>
            </div>
          </div>
          <div class="group-portfolio isotope-container">
            <div class="isotope-grid remove-gutter container" style="position: relative; height: 943px;">
              <div class="grid-sizer col-md-4 col-sm-6"></div>
              <div class="grid-item col-md-8 col-sm-12" style="position: absolute; left: 0px; top: 0px;">
                <div class="block-portfolio overlay-container basic"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $portofolio[0]->gambar; ?>" alt="BY THE SEA" class="__image">
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA</a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-4 col-sm-6" style="position: absolute; left: 800px; top: 0px;">
                <div class="block-portfolio overlay-container basic"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $portofolio[1]->gambar; ?>" alt="BY THE SEA" class="__image">
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA</a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-4 col-sm-6" style="position: absolute; left: 0px; top: 314px;">
                <div class="block-portfolio overlay-container basic"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $portofolio[2]->gambar; ?>" alt="BY THE SEA" class="__image">
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA</a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-4 col-sm-6" style="position: absolute; left: 400px; top: 314px;">
                <div class="block-portfolio overlay-container basic"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $portofolio[3]->gambar; ?>" alt="BY THE SEA" class="__image">
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA</a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-4 col-sm-6" style="position: absolute; left: 0px; top: 628px;">
                <div class="block-portfolio overlay-container basic"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $portofolio[4]->gambar; ?>" alt="BY THE SEA" class="__image">
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA</a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid-item col-md-8 col-sm-12" style="position: absolute; left: 400px; top: 629px;">
                <div class="block-portfolio overlay-container basic"><img src="<?php echo base_url() ?>assets/images/portofolio/<?php echo $portofolio[5]->gambar; ?>" alt="BY THE SEA" class="__image">
                  <div class="overlay bgc-dark-o-7">
                    <div class="cell-vertical-wrapper">
                      <div class="cell-middle">
                        <h4 class="__title"><a href="#">BY THE SEA</a></h4>
                        <div class="__caption font-serif-italic">Lorem ipsum dolor sit amet</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>


      </div>
      <!--End Page Body-->