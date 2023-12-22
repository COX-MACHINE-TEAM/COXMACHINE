<!DOCTYPE html>
<html style="font-size: 16px" lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta charset="utf-8" />
    <meta name="keywords" content="COX MACHINE" />
    <meta name="description" content="" />
    <title>Sign In</title>
    <link rel="stylesheet" href="css/nicepage.css" media="screen" />
    <link rel="stylesheet" href="css/Sign-In.css" media="screen" />
    <script class="u-script" type="text/javascript" src="{{ asset('js/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('js/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 5.19.3, nicepage.com" />
    <link
      id="u-theme-google-font"
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,500,500i,600,600i,700,700i,800,800i"
    />

    <script type="application/ld+json">
      {
        "@context": "http://schema.org",
        "@type": "Organization",
        "name": "",
        "sameAs": [
          "https://facebook.com/name",
          "https://twitter.com/name",
          "https://instagram.com/name"
        ]
      }
    </script>
    <meta name="theme-color" content="#478ac9" />
    <meta name="twitter:site" content="@" />
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Sign In" />
    <meta name="twitter:description" content="" />
    <meta property="og:title" content="Sign In" />
    <meta property="og:type" content="website" />
    <meta data-intl-tel-input-cdn-path="intlTelInput/" />
    <style>
      body {
          font-family: Arial, sans-serif;
          background-color: #f4f4f4;
          margin: 0;
          padding: 0;
      }
      .container {
          width: 50%;
          margin: auto;
          overflow: hidden;
      }
      #contact-form {
          background: #fff;
          padding: 20px;
          margin-top: 50px;
          border-radius: 5px;
      }
      label {
          display: block;
          margin: 15px 0;
      }
      input, textarea {
          width: 100%;
          padding: 8px;
          margin: 8px 0;
          display: inline-block;
          border: 1px solid #ccc;
          box-sizing: border-box;
      }
      button {
          background: #333;
          color: #fff;
          padding: 10px 15px;
          border: none;
          border-radius: 5px;
          cursor: pointer;
      }
      button:hover {
          background: #555;
      }
  </style>
  </head>
  <body
    data-path-to-root="./"
    class="u-body u-overlap u-overlap-contrast u-overlap-transparent u-xl-mode"
    data-lang="en"
  >
    <header
      class="u-box-shadow u-clearfix u-header u-sticky u-sticky-ae83 u-header"
      id="sec-e415"
    >
      <div class="u-clearfix u-sheet u-sheet-1">
        <div
          class="u-opacity u-opacity-50 u-shape u-shape-circle u-white u-shape-1"
        ></div>
        <nav class="u-menu u-menu-one-level u-offcanvas u-menu-1">
          <div
            class="menu-collapse"
            style="font-size: 1rem; letter-spacing: 0px; font-weight: 700"
          >
            <a
              class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
              href="#"
            >
              <svg class="u-svg-link" viewBox="0 0 24 24">
                <use
                  xmlns:xlink="http://www.w3.org/1999/xlink"
                  xlink:href="#menu-hamburger"
                ></use>
              </svg>
              <svg
                class="u-svg-content"
                version="1.1"
                id="menu-hamburger"
                viewBox="0 0 16 16"
                x="0px"
                y="0px"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                xmlns="http://www.w3.org/2000/svg"
              >
                <g>
                  <rect y="1" width="16" height="2"></rect>
                  <rect y="7" width="16" height="2"></rect>
                  <rect y="13" width="16" height="2"></rect>
                </g>
              </svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1">
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                  href="/"
                  style="padding: 10px 20px"
                  >Home</a
                >
              </li>
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                  href="{{ url('/about') }}"
                  style="padding: 10px 20px"
                  >About</a
                >
              </li>
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                  href="{{ url('/contact') }}"
                  style="padding: 10px 20px"
                  >Contact</a
                >
              </li>
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                  href="{{ url('/about') }}"
                  style="padding: 10px 20px"
                  >sign in</a
                >
              </li>
              <!-- <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                  href="products/products.html"
                  style="padding: 10px 20px"
                  >Store</a
                >
              </li>
              <li class="u-nav-item">
                <a
                  class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base"
                  href="blog/blog.html"
                  style="padding: 10px 20px"
                  >Blog</a
                >
              </li> -->
            </ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div
              class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav"
            >
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul
                  class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"
                >
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="Home.html"
                      >Home</a
                    >
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="{{ url('/about') }}">About</a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="#">Contact</a>
                  </li>
                  <li class="u-nav-item">
                    <a class="u-button-style u-nav-link" href="Sign-In.html"
                      >sign in</a
                    >
                    <!-- </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="products/products.html">Store</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="blog/blog.html">Blog</a> -->
                  </li>
                </ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
        <img
          class="u-image u-image-contain u-image-default u-image-1"
          src="images/LogoUpscallednobg.png"
          alt=""
          data-image-width="564"
          data-image-height="484"
        />
        <h2 class="u-text u-text-default u-text-1">COX MACHINE</h2>
      </div>
      <style class="u-sticky-style" data-style-id="ae83">
        .u-sticky-fixed.u-sticky-ae83:before,
        .u-body.u-sticky-fixed .u-sticky-ae83:before {
          borders: top right bottom left !important;
        }
      </style>
    </header>
    <section
      class="u-clearfix u-shading u-uploaded-video u-video u-section-1"
      id="sec-80be"
    >
      <div class="u-background-video u-expanded" style="">
        <div class="embed-responsive">
          <video
            class="embed-responsive-item"
            data-autoplay="1"
            loop=""
            muted="1"
            autoplay="autoplay"
            playsinline=""
          >
            <source
              src="files/mixkit-two-scientist-checking-lab-instruments-24077-medium.mp4"
              type="video/mp4"
            />
            <p>Your browser does not support HTML5 video.</p>
          </video>
        </div>
        <div
          class="u-video-shading"
          style="
            background-image: linear-gradient(
              0deg,
              rgba(0, 0, 0, 0.4),
              rgba(0, 0, 0, 0.4)
            );
          "
        ></div>
      </div>
      <div class="u-clearfix u-sheet u-sheet-1">
        <div
          class="u-align-center u-container-style u-custom-border u-group u-opacity u-opacity-90 u-radius-30 u-shape-round u-uploaded-video u-white u-group-1"
        >
          <div class="u-container-layout u-container-layout-1">
            <img
              class="u-image u-image-contain u-image-default u-image-1"
              src="images/LogoUpscallednobg.png"
              alt=""
              data-image-width="564"
              data-image-height="484"
            />
            <h2 class="u-text u-text-custom-color-1 u-text-default u-text-1">
              Contact-us
            </h2>
            <form id="contact-form" action="#" method="post">
              <label for="name">Your Name:</label>
              <input type="text" id="name" name="name" required>
      
              <label for="email">Your Email:</label>
              <input type="email" id="email" name="email" required>
      
              <label for="message">Your Message:</label>
              <textarea id="message" name="message" rows="4" required></textarea>
      
              <button type="submit">Submit</button>
          </form>
      </div>
          </div>
        </div>
      </div>
    </section>

    <!-- <section class="u-backlink u-clearfix u-grey-80">
      <a
        class="u-link"
        href="https://nicepage.com/website-templates"
        target="_blank"
      >
        <span>Website Templates</span>
      </a>
      <p class="u-text">
        <span>created with</span>
      </p>
      <a class="u-link" href="" target="_blank">
        <span>Website Builder Software</span> </a
      >.
    </section> -->
  </body>
</html>
