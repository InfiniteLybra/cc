<section class="site-hero inner-page overlay" style="background-image: url(<?= base_url(); ?>/assets/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3">Rooms</h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="<?= base_url('Home') ?>">Home</a></li>
          <li>&bullet;</li>
          <li>Rooms</li>
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
<section class="section pb-4">
  <div class="container">

    <div class="row check-availabilty" id="next">
      <div class="block-32" data-aos="fade-up" data-aos-offset="-200">

        <form action="<?= base_url('Reservation/update_availability') ?>" method="post">
          <div class="row">
            <div class="col-md-6 mb-3 mb-md-0 col-lg-3">
              <div class="row">
                <div class="col-md-10 mb-3 mb-md-0">
                  <label for="category" class="font-weight-bold text-black">Category</label>
                  <div class="field-icon-wrap">
                    <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                    <select name="category" id="adults" class="form-control">
                    <?php foreach ($room as $r) : ?>
                      <option value="<?= $r['category'] ?>"><?= $r['category'] ?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-3 align-self-end">
              <button class="btn btn-primary btn-block text-white">Check Availabilty</button>
            </div>
          </div>
        </form>
      </div>


    </div>
  </div>
</section>




<section class="section">
  <div class="container">
    <div class="row">
      <?php foreach ($room as $r) : ?>
        <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up">
          <!-- <a href="<?= base_url('Reservation') ?>" class="room"> -->
          <figure class="img-wrap">
            <img src="<?= base_url(); ?>/assets/images/<?= $r['img'] ?>" alt="Free website template" class="img-fluid mb-3">
          </figure>
          <div class="p-3 text-center room-info">
            <h2><?= $r['category'] ?></h2>
            <span class="text-uppercase letter-spacing-1"><?= $r['information'] ?></span>
          </div>
          <!-- </a> -->
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<section class="section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade">Great Offers</h2>
        <p data-aos="fade">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
      </div>
    </div>

    <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="100">
      <a href="#" class="image d-block bg-image-2" style="background-image: url('<?= base_url(); ?>/assets/images/img_1.jpg');"></a>
      <div class="text">
        <span class="d-block mb-4"><span class="display-4 text-primary">$199</span> <span class="text-uppercase letter-spacing-2">/ One Night</span> </span>
        <h2 class="mb-4">Family Room</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <a href="<?= base_url('Reservation') ?>" class="room">
          <p><a href="<?= base_url('Reservation') ?>" class="btn btn-primary text-white">Book Now</a></p>
      </div>
    </div>

    <div class="site-block-half d-block d-lg-flex bg-white" data-aos="fade" data-aos-delay="200">
      <a href="#" class="image d-block bg-image-2 order-2" style="background-image: url('<?= base_url(); ?>/assets/images/img_2.jpg');"></a>
      <div class="text order-1">
        <span class="d-block mb-4"><span class="display-4 text-primary">$299</span> <span class="text-uppercase letter-spacing-2">/ One Night</span> </span>
        <h2 class="mb-4">Presidential Room</h2>
        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
        <a href="<?= base_url('Reservation') ?>" class="room">
          <p><a href="<?= base_url('Reservation') ?>" class="btn btn-primary text-white">Book Now</a></p>
      </div>
    </div>
  </div>
</section>