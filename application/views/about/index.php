<?php foreach ($site as $s) : ?>
  <section class="site-hero inner-page overlay" style="background-image: url(<?= base_url(); ?>/assets/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row site-hero-inner justify-content-center align-items-center">
        <div class="col-md-10 text-center" data-aos="fade">
          <h1 class="heading mb-3">About Us</h1>
          <ul class="custom-breadcrumbs mb-4">
            <li><a href="<?= base_url('Home') ?>">Home</a></li>
            <li>&bullet;</li>
            <li>About</li>
          </ul>
        </div>
      </div>
    </div>

    <a class="mouse smoothscroll" href="#next">
      <div class="mouse-icon">
        <span class="mouse-wheel"></span>
      </div>
    </a>
  </section>
  <!-- END section -->

  <section class="py-5 bg-light" id="next">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 ml-auto order-lg-2 position-relative mb-5" data-aos="fade-up">
          <figure class="img-absolute">
            <img src="<?= base_url(); ?>/assets/images/food-1.jpg" alt="Free Website Template by Templateux" class="img-fluid">
          </figure>
          <img src="<?= base_url(); ?>/assets/images/img_1.jpg" alt="Image" class="img-fluid rounded">
        </div>
        <div class="col-md-12 col-lg-4 order-lg-1" data-aos="fade-up">
          <h2 class="heading"><?= $s['section_heading'] ?></h2>
          <p class="mb-4"><?= $s['section_text'] ?></p>
          <p><a href="#" class="btn btn-primary text-white py-2 mr-3">Learn More</a> <span class="mr-3 font-family-serif"><em>or</em></span> <a href="https://vimeo.com/channels/staffpicks/93951774" data-fancybox class="text-uppercase letter-spacing-1">See video</a></p>
        </div>

      </div>
    </div>
  </section>

  <div class="container section">

    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7 mb-5">
        <h2 class="heading" data-aos="fade-up"><?= $s['leadership_heading'] ?></h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
        <div class="block-2">
          <div class="flipper">
            <div class="front" style="background-image: url(<?= base_url(); ?>/assets/images/person_3.jpg);">
              <div class="box">
                <h2><?= $s['leadership_name_1'] ?></h2>
                <p><?= $s['leadership_title_1'] ?></p>
              </div>
            </div>
            <div class="back">
              <!-- back content -->
              <blockquote>
                <p>&ldquo;<?= $s['leadership_text_1'] ?>&rdquo;</p>
              </blockquote>
              <div class="author d-flex">
                <div class="image mr-3 align-self-center">
                  <img src="<?= base_url(); ?>/assets/images/person_3.jpg" alt="">
                </div>
                <div class="name align-self-center"><?= $s['leadership_name_1'] ?> <span class="position"><?= $s['leadership_title_1'] ?></span></div>
              </div>
            </div>
          </div>
        </div> <!-- .flip-container -->
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
        <div class="block-2"> <!-- .hover -->
          <div class="flipper">
            <div class="front" style="background-image: url(<?= base_url(); ?>/assets/images/person_1.jpg);">
              <div class="box">
                <h2><?= $s['leadership_name_2'] ?></h2>
                <p><?= $s['leadership_title_2'] ?></p>
              </div>
            </div>
            <div class="back">
              <!-- back content -->
              <blockquote>
                <p>&ldquo;<?= $s['leadership_text_2'] ?>&rdquo;</p>
              </blockquote>
              <div class="author d-flex">
                <div class="image mr-3 align-self-center">
                  <img src="<?= base_url(); ?>/assets/images/person_1.jpg" alt="">
                </div>
                <div class="name align-self-center"><?= $s['leadership_name_2'] ?> <span class="position"><?= $s['leadership_title_2'] ?></span></div>
              </div>
            </div>
          </div>
        </div> <!-- .flip-container -->
      </div>

      <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
        <div class="block-2">
          <div class="flipper">
            <div class="front" style="background-image: url(<?= base_url(); ?>/assets/images/person_2.jpg);">
              <div class="box">
                <h2><?= $s['leadership_name_3'] ?></h2>
                <p><?= $s['leadership_title_3'] ?></p>
              </div>
            </div>
            <div class="back">
              <!-- back content -->
              <blockquote>
                <p>&ldquo;<?= $s['leadership_text_3'] ?>&rdquo;</p>
              </blockquote>
              <div class="author d-flex">
                <div class="image mr-3 align-self-center">
                  <img src="<?= base_url(); ?>/assets/images/person_2.jpg" alt="">
                </div>
                <div class="name align-self-center"><?= $s['leadership_name_3'] ?> <span class="position"><?= $s['leadership_title_3'] ?></span></div>
              </div>
            </div>
          </div>
        </div> <!-- .flip-container -->
      </div>
    </div>
  </div>
  <!-- END .block-2 -->

  <section class="section slider-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7">
          <h2 class="heading" data-aos="fade-up"><?= $s['slider_heading'] ?></h2>
          <p data-aos="fade-up" data-aos-delay="100"><?= $s['slider_text'] ?></p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="home-slider major-caousel owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">
            <div class="slider-item">
              <a href="<?= base_url(); ?>/assets/images/<?= $s['slider_img1'] ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url(); ?>/assets/images/<?= $s['slider_img1'] ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?= base_url(); ?>/assets/images/<?= $s['slider_img2'] ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url(); ?>/assets/images/<?= $s['slider_img2'] ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?= base_url(); ?>/assets/images/<?= $s['slider_img3'] ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url(); ?>/assets/images/<?= $s['slider_img3'] ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?= base_url(); ?>/assets/images/<?= $s['slider_img4'] ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url(); ?>/assets/images/<?= $s['slider_img4'] ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?= base_url(); ?>/assets/images/<?= $s['slider_img5'] ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url(); ?>/assets/images/<?= $s['slider_img5'] ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?= base_url(); ?>/assets/images/<?= $s['slider_img6'] ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url(); ?>/assets/images/<?= $s['slider_img6'] ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
            <div class="slider-item">
              <a href="<?= base_url(); ?>/assets/images/<?= $s['slider_img7'] ?>" data-fancybox="images" data-caption="Caption for this image"><img src="<?= base_url(); ?>/assets/images/<?= $s['slider_img7'] ?>" alt="Image placeholder" class="img-fluid"></a>
            </div>
          </div>
          <!-- END slider -->
        </div>

      </div>
    </div>
  </section>
  <!-- END section -->

  <div class="section">
    <div class="container">

      <div class="row justify-content-center text-center mb-5">
        <div class="col-md-7 mb-5">
          <h2 class="heading" data-aos="fade"><?= $s['history_heading'] ?></h2>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="timeline-item" date-is='2019' data-aos="fade">
            <h3><?= $s['heading_1'] ?></h3>
            <p><?= $s['heading_text_1'] ?></p>
          </div>

          <div class="timeline-item" date-is='2011' data-aos="fade">
            <h3><?= $s['heading_2'] ?></h3>
            <p>
              <?= $s['heading_text_2'] ?>
            </p>
          </div>

          <div class="timeline-item" date-is='2008' data-aos="fade">
            <h3><?= $s['heading_3'] ?></h3>
            <p>
              <?= $s['heading_text_3'] ?>
            </p>
          </div>
        </div>
      </div>


    </div>
  </div>
<?php endforeach; ?>