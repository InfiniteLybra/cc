<section class="site-hero inner-page overlay" style="background-image: url(<?= base_url(); ?>/assets/images/hero_4.jpg)" data-stellar-background-ratio="0.5">
  <div class="container">
    <div class="row site-hero-inner justify-content-center align-items-center">
      <div class="col-md-10 text-center" data-aos="fade">
        <h1 class="heading mb-3">Reservation Form</h1>
        <ul class="custom-breadcrumbs mb-4">
          <li><a href="<?= base_url('Home') ?>">Home</a></li>
          <li>&bullet;</li>
          <li>Reservation</li>
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

<section class="section contact-section" id="next">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-7" data-aos="fade-up" data-aos-delay="100">
        <form action="<?= base_url('Reservation/add') ?>" method="post" class="bg-white p-md-5 p-4 mb-5 border">
          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="name">Name</label>
              <input type="text" id="name" name="name" value="<?= $this->session->userdata('full_name'); ?>" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="phone">Phone</label>
              <input type="text" id="phone" name="phone" va class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="email">Email</label>
              <input type="email" id="email" name="email" value="<?= $this->session->userdata('email'); ?>" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkin_date">Date Check In</label>
              <input type="text" id="checkin_date" name="check_in" value="<?= $reservation['check_in'] ?>" class="form-control" required>
            </div>
            <div class="col-md-6 form-group">
              <label class="text-black font-weight-bold" for="checkout_date">Date Check Out</label>
              <input type="text" id="checkout_date" name="check_out" value="<?= $reservation['check_out'] ?>" class="form-control" required>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 form-group">
              <label for="adults" class="font-weight-bold text-black">Adults</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="adults" id="adults" class="form-control">
                  <option value="<?= $reservation['adults'] ?>"><?= $reservation['adults'] ?></option>
                </select>
              </div>
            </div>
            <div class="col-md-6 form-group">
              <label for="children" class="font-weight-bold text-black">Children</label>
              <div class="field-icon-wrap">
                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                <select name="children" id="children" class="form-control">
                <option value="<?= $reservation['children'] ?>"><?= $reservation['children'] ?></option>
                </select>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="type_room">Type Rooms</label>
              <input type="message" id="type_room" name="type_room" value="<?= $reservation['type_room'] ?>" class="form-control" required>
            </div>
          </div>


          <div class="row mb-4">
            <div class="col-md-12 form-group">
              <label class="text-black font-weight-bold" for="notes">Notes</label>
              <textarea name="message" id="notes" class="form-control " cols="30" rows="8"></textarea>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 form-group">
              <button type="submit" class="btn btn-primary text-white font-weight-bold">Reserve Now</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="section testimonial-section bg-light">
  <div class="container">
    <div class="row justify-content-center text-center mb-5">
      <div class="col-md-7">
        <h2 class="heading" data-aos="fade-up">People Says</h2>
      </div>
    </div>
    <div class="row">
      <div class="js-carousel-2 owl-carousel mb-5" data-aos="fade-up" data-aos-delay="200">

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="<?= base_url(); ?>/assets/images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; Jean Smith</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="<?= base_url(); ?>/assets/images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="<?= base_url(); ?>/assets/images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>


        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="<?= base_url(); ?>/assets/images/person_1.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; Jean Smith</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="<?= base_url(); ?>/assets/images/person_2.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>
            <p>&ldquo;Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

        <div class="testimonial text-center slider-item">
          <div class="author-image mb-3">
            <img src="<?= base_url(); ?>/assets/images/person_3.jpg" alt="Image placeholder" class="rounded-circle mx-auto">
          </div>
          <blockquote>

            <p>&ldquo;When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane.&rdquo;</p>
          </blockquote>
          <p><em>&mdash; John Doe</em></p>
        </div>

      </div>
      <!-- END slider -->
    </div>

  </div>
</section>



<section class="section bg-image overlay" style="background-image: url('<?= base_url(); ?>/assets/images/hero_4.jpg');">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-12 col-md-6 text-center mb-4 mb-md-0 text-md-left" data-aos="fade-up">
        <h2 class="text-white font-weight-bold">A Best Place To Stay. Reserve Now!</h2>
      </div>
      <div class="col-12 col-md-6 text-center text-md-right" data-aos="fade-up" data-aos-delay="200">
        <a href="<?= base_url('Home') ?>" class="btn btn-outline-white-primary py-3 text-white px-5">Reserve Now</a>
      </div>
    </div>
  </div>
</section>

<footer class="section footer-section">
  <div class="container">
    <div class="row mb-4">
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="#">About Us</a></li>
          <li><a href="#">Terms &amp; Conditions</a></li>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Rooms</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5">
        <ul class="list-unstyled link">
          <li><a href="#">The Rooms &amp; Suites</a></li>
          <li><a href="#">About Us</a></li>
          <li><a href="#">Contact Us</a></li>
          <li><a href="#">Restaurant</a></li>
        </ul>
      </div>
      <div class="col-md-3 mb-5 pr-md-5 contact-info">
        <!-- <li>198 West 21th Street, <br> Suite 721 New York NY 10016</li> -->
        <p><span class="d-block"><span class="ion-ios-location h5 mr-3 text-primary"></span>Address:</span> <span> Jl. Tanimbar No.22, Kasin, Kec. Klojen, Kota Malang, Jawa Timur 65117</span></p>
        <p><span class="d-block"><span class="ion-ios-telephone h5 mr-3 text-primary"></span>Phone:</span> <span> +6285700290024</span></p>
        <p><span class="d-block"><span class="ion-ios-email h5 mr-3 text-primary"></span>Email:</span> <span> marcello.nadzir2327@gmail.com</span></p>
      </div>
      <div class="col-md-3 mb-5">
        <p>Sign up for our newsletter</p>
        <form action="#" class="footer-newsletter">
          <div class="form-group">
            <input type="email" class="form-control" placeholder="Email...">
            <button type="submit" class="btn"><span class="fa fa-paper-plane"></span></button>
          </div>
        </form>
      </div>
    </div>

    <p class="col-md-6 text-right social">
      <a href="#"><span class="fa fa-tripadvisor"></span></a>
      <a href="#"><span class="fa fa-facebook"></span></a>
      <a href="#"><span class="fa fa-twitter"></span></a>
      <a href="#"><span class="fa fa-linkedin"></span></a>
      <a href="#"><span class="fa fa-vimeo"></span></a>
    </p>
  </div>
  </div>
</footer>