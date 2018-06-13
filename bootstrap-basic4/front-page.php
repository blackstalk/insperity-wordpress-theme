<?php
/**
 * The front-page template file.
 *
 * To override home page (for listing latest post) add home.php into the theme.<br>
 * If front page displays is set to static, the index.php file will be use.<br>
 * If front-page.php exists, it will be override any home page file such as home.php, index.php.<br>
 * To learn more please go to https://developer.wordpress.org/themes/basics/template-hierarchy/ .
 *
 * @package bootstrap-basic4
 */


// begins template. -------------------------------------------------------------------------
get_header();
?>

<main id="main" class="site-main" role="main">
  <section class="top-section container">
    <div class="row">
      <div class="col-xl-9 col-lg-8">
          <!-- visible only on mobile for header sizing -->
          <div class="mobile-number d-block d-sm-none">
            <div class="cta-top">Speak to a specialist now</div>
            <div class="cta-number">
              <img alt="Speak to a specialist now" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/phone-icon.png" /> 855.677.7813
            </div>
          </div>
          <!-- end visible only on mobile for header sizing -->
          <h1>HR Outsourcing:</h1>
          <h2>A Step-by-Step Guide to Professional Employer Organizations (PEOs)</h2>
          <div class="main-lead-text">Do your money-making projects take a backseat to your HR to-dos? Discover how outsourcing your HR can free up more time to tackle your business goals.</div>
          <ul class="main-list">
            <li>
              <span class="main-list-title">Administrative overload</span>
              <span class="main-list-sub">See how you can spend less time processing payroll and employee paperwork and spend more time on growing your business.</span>
            </li>
            <li>
              <span class="main-list-title">Employee benefits trouble</span>
              <span class="main-list-sub">Find out how you can get access to affordable, comprehensive benefits for your employees that you couldn't get on your own.</span>
            </li>
            <li>
              <span class="main-list-title">Confusing government regulations</span>
              <span class="main-list-sub">Learn how you can get a team of specialists who will monitor ever-changing regulations and help you maintain compliance.</span>
            </li>
          </ul>
          <div class="main-arrow-box">
            <div class="row">
              <div class="col-lg-8 col-md-12">
                <div class="fill-form-cta">Fill out the form to download Step-by-Step Guide to Professional Employer Organizations (PEOs)</div>
              </div>
              <div class="col-lg-4 my-auto arrow-col">
                <img class="img-fluid fading-arrow" alt="Fill out the form" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/fading-arrow.png" />
              </div>
            </div>
          </div>
      </div><!--.col-->
      <div class="col-xl-3 col-lg-4">
      		<div class="ebook-box text-center">
            <div class="ebook-img-outer"><img alt="Speak to a specialist now" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/side-ebook.png" /></div>
            <div class="ebook-title">Download your free e-book</div>
            <div class="green-arrow"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/ebook-down-arrrow.png" alt="Speak to a specialist now" /></div>
          </div>
          <div class="form-box">
            <form id="ebook-form">
              <input type="hidden" name="ajax" value="ebook-pdf" />
              <div class="form-group">
                <label for="email" class="emailLabel">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="i.e. email@email.com" />
              </div>
              <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" class="form-control" id="fname" name="fname" />
              </div>
              <div class="form-group">
                <label for="fname">Last Name</label>
                <input type="text" class="form-control" id="lname" name="lname" />
              </div>
              <div class="form-group">
                <label for="fname">Company Name</label>
                <input type="text" class="form-control" id="company" name="company" />
              </div>
              <div class="form-group">
                <label for="fname">Phone</label>
                <input type="text" class="form-control" id="phone" name="phone" />
              </div>
              <button type="submit" class="btn btn-ebook btn-block">Download e-book <i class="fas fa-caret-right"></i></button>
              <div class="form-footer-text text-center">1024 e-books downloaded</div>
            </form>
            <div id="ebook-form-response"></div>
          </div><!--.form-box-->
      </div><!--.col-->
    </div><!--.row-->
  </section><!--.container-->
  <section class="about-section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 col-md-12 about-image-col">
          <img hidden alt="About Insperity" class="img-fluid" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/people-image.png" />
        </div>
        <div class="col-lg-6 col-md-12">
          <div class="about-outer">
            <h2>About Insperity</h2>
            <div class="about-lead">
              Since 1986, Insperity has provided industry-leading human resources management products and services to over 100,000 businesses. With our comprehensive PEO service your business gets access to:
            </div>
            <ul class="about-list">
              <li><span>Fortune 500-level employee benefits</span></li>
              <li><span>Stress-free payroll and HR administration</span></li>
              <li><span>HR-related government compliance</span></li>
              <li><span>Ongoing health care reform support</span></li>
              <li><span>A dedicated HR service team</span></li>
            </ul>
            <div class="about-services-link">
              <a href="#">See all of Insperity's services <i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
          </div><!--.about-outer-->
        </div><!--.col-->
      </div><!--.row-->
    </div><!--.container-->
  </section>
  <section class="clients-section">
    <div class="container text-center">
      <h3>Some of our amazing clients</h3>
      <div class="row client-logos-row">
        <div class="col-md-4">
          <img alt="JibJab" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/client-jibjab.png" />
        </div>
        <div class="col-md-4">
          <img alt="MarketingProfs" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/client-marketing-profs.png" />
        </div>
        <div class="col-md-4">
          <img alt="Ronald Regan Presidential Library and Museum" src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/client-ronald-regan.png" />
        </div>
      </div>
    </div>
  </section>
</main>
<?php
get_footer();
