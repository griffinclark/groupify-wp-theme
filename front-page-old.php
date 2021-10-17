<?php
/**
 * Homepage Template
 *
 */
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
  <div class="home">
      <div class="page-section hero-section container">
          <div class="row">
              <div class="col-lg-6 col-md-7">
                  <h1>Get back to a life full of authentic human interaction.</h1>
                  <p>With the Groupify<sub>&trade;</sub> app, you can discover exciting things to do near you and make plans with ease.</p>
                  <p>It’s time for <span class="background-text">less blue light and more sunlight.</span></p>

                  <div class="download-app-section">
                      <p class="small-text">Download the app today!</p>

                      <div class="download-app-row">
                          <a href="https://apps.apple.com/us/app/groupify-make-a-plan/id1566937955" target="_blank"><img src="../assets/appstore.png" alt="app-store-logo" /></a>
                          <!-- <a href="https://cntr.click/G7f31hG" target="_blank"><img src="../assets/googleplay.png" alt="app-store-logo" /></a> -->
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 col-md-5">
                  <img src="../assets/phones.png" class="hero-phone" alt="Phones Image" />
              </div>
          </div>
      </div>
      <div class="page-section container">
          <h3>Why Groupify?</h3>
          <p>Generation Z has been struck by mental health hardship during unparalleled times. A big factor in driving these issues has been related to <strong>loss of connection</strong> to our peers and a decline in human interaction.</p>

          <img src="../assets/friends.png" alt="Group Image" class="group-img" />

          <p>We want to <strong>rebuild relationships</strong> and get people back to doing what they love! In a world dominated by technology and centered around an app-oriented culture, <strong>Groupify makes linking up with friends simpler than ever.</strong></p>
      </div>

      <div class="how-it-work-section container">
          <h3 class="text-center">How does it work?</h3>
          <p class="text-center text-width">With our accessible and easy-to-use technology, you can immerse yourself in a world full of completely real and interesting experiences. Groupify is the app that brings people together and keeps them coming back for more</p>

          <div class="how-it-work-row row">
              <div class="col-md-4 how-it-work-single--wrapper" v-for="(hiwBox, index) in hiwBoxes" :key="index">
                  <div class="how-it-work-single">
                      <div class="hiw-number">{{ index + 1 }}</div>
                      <h3>{{ hiwBox.title }}</h3>
                      <p>{{ hiwBox.desc }}</p>
                  </div>
              </div>
          </div>
      </div>

      <div class="create-connection-section">
          <div class="create-connection-background">
              <div class="container text-center">
                  <h2>WE HELP YOU <br/><span class="blue-text">CREATE CONNECTION</span></h2>
              </div>
          </div>
          <img src="../assets/ui.png" class="phone-ui" />
      </div>

      <div class="map-section container">
          <h3>Who is this for?</h3>
          <p>Our app is focused on <strong>anyone looking to connect with friends through activities</strong>.
              Groupify is here to rectify those lost connections from 2020! They say the best products “see a need,
              and fill a need”, and we are here to fill our generation’s need for social connection.</p>

          <img src="../assets/map.png" />
      </div>
  </div>
<?php get_footer(); ?>
