@extends('welcome')


@section('content')


<main>
<section class="sustanability-section">
    <div class="sustanability-img-text position-relative">
          <div class="container">
              <nav style="--bs-breadcrumb-divider: '/'" aria-label="breadcrumb">
                <ol class="breadcrumb position-absolute">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active" aria-current="page"><a href="#">Innovation lab</a></li>
                </ol>
              </nav>

              <h2 class="sustanability-text common-text " >
                Sustanability
              </h2>
          </div>

            <!-- <div class="img-sustanability"> -->
              <img src="{{ asset('images/mobile-image.webp') }}" class="img-section-mobile img-sustanability">
              <img src="{{ asset('images/banner-image.png') }}" class="img-section-desktop img-sustanability">
            <!-- </div> -->


    </div>
  </section>


  <section class="amit-singh-section">
    <div class="container amit-sing-main">
        <div class="amit-singh-text common-text">
          <h2 class="amit-singh-heading">
          Message from CEO
          </h2>

          <p class="amit-singh-desc">
          Mr. Amit Singh is the Chief Executive Officer and Co-founder of Advent. An industry veteran with more than 3 decades of experience in the Fine Chemicals industry, he has worked with Ranbaxy, Glaxo & RFCL Limited. 
          </p>

          <p class="amit-singh-desc-desktop">
          Welcome to Advent. A place where we continue to grow through solving social challenges and creating diverse values with the power of innovation and chemistry.
          </p>
          <p class="amit-singh-desc-desktop">
          I hope your stay will be delightful.:)
          </p>

        </div>
        <div class="amit-singh-img">
        <img src="{{ asset('images/amit-singh.webp') }}" class="amit-sing-img">
        <img src="{{ asset('images/amit-singtext.webp') }}" class="amit-singh-img-text">
        </div>
      </div>
  </section>

  <!-- we are on mission  -->..
  <section class="We-are-on-mission-section">
        <div class="container-fluid we-are-on-mission">
            <h2 class="container We-are-on-mission-heading ">
                We are on a mission to ensure our community and the environment are well looked after.
            </h2>
          </div>

          <div class="container-fluid we-are-on-mission-desktop">
            <h2 class="container We-are-on-mission-heading-desktop ">
                We are on a mission to ensure our community and the environment are well looked after.
            </h2>
          </div>


  </section>
  

  <!-- End of We are on mission  -->


  <section class="about-avent-section">
    <div class="container about-advent-para">
        <p class="about-advent-text">
        Advent is continuously looking for ways to reduce environmental footprint as environmental care has been a part of our core philosophy since inception and is practiced in our daily business across the value chain.
        </p>
        <p class="about-advent-text"> 
        Our aim is to bring innovation and chemistry together to provide world-class products and services to every corner of the country.
        </p>
    </div>
  </section>

  <section class="stratergy-measurability-section">
      <div class="container stratergy-measurability d-lg-flex column-gap-3">
        <div class="stratergy">
          <h2 class="stratergy-measurability-heading-text-mobile">
          Our strategy
          </h2>

          <p class="stratergy-measurability-para-text-mobile">
          Our ambition is to leverage science and technology to achieve progress for mankind. Sustainable entrepreneurship and profitable growth must go hand in hand to achieve this.
          </p>

          <p class="stratergy-measurability-para-text-desktop">
          Our aim is to bring innovation and chemistry together to provide world-class products and services to every corner of the country.
          </p>
        </div>

        <div class="measurabillity">
          <h2 class="stratergy-measurability-heading-text-mobile">
            Measuring sustainability
          </h2>
          <p class="stratergy-measurability-para-text-mobile">
          We want to create long-term added value for society. To ensure that our measures are effective, we set ourselves ambitious targets and measure our success.
          </p>

          <p class="stratergy-measurability-para-text-desktop">
          As sustainability is gaining more attention, we have more emphasis on measuring the sustainability of our specialty chemicals by assessing a program against existing best practices.
          </p>
        </div>
      </div>
  </section>

  <section class="our-impact-section">

  <div class="container main-our-impact">
          <div class="flexing-our-impact">
                    <h2 class="amit-singh-heading">
                      Our Impact
                    </h2>
          </div>
      <div class="container slider breakpoint-flex">

        <div class="slider-wrapper">
          

          <div class="second-main">
            <div class="flexing-site">
               <img src="{{ asset('images/education.png') }}" class="">
            </div>

            <div class="flexing">

                  <h3 class="our-impact-sub-heading">
                  Educational Institutes
                  </h3>
                  
                  <p class="our-impact-sub-para">
                  Our research & speciality chemicals have a huge demand in educational institutes.
                  </p>
            </div>
          </div>
        </div>

        <div class="slider-wrapper">
          <!-- <div class="flexing-our-impact">
            <h2 class="amit-singh-heading">
              Our Impact
            </h2>
          </div> -->

          <div class="second-main">
            <div class="flexing-site">
               <img src="{{ asset('images/education.png') }}" class="">
            </div>

            <div class="flexing">

                  <h3 class="our-impact-sub-heading">
                  Educational Institutes
                  </h3>
                  
                  <p class="our-impact-sub-para">
                  Our research & speciality chemicals have a huge demand in educational institutes.
                  </p>
            </div>
          </div>
        </div>

        <div class="slider-wrapper">
          <!-- <div class="flexing-our-impact">
            <h2 class="amit-singh-heading">
              Our Impact
            </h2>
          </div> -->

          <div class="second-main">
            <div class="flexing-site">
               <img src="{{ asset('images/education.png') }}" class="">
            </div>

            <div class="flexing">

                  <h3 class="our-impact-sub-heading">
                  Educational Institutes
                  </h3>
                  
                  <p class="our-impact-sub-para">
                  Our research & speciality chemicals have a huge demand in educational institutes.
                  </p>
            </div>
          </div>
        </div>

        <div class="slider-wrapper">
          <!-- <div class="flexing-our-impact">
            <h2 class="amit-singh-heading">
              Our Impact
            </h2>
          </div> -->

          <div class="second-main">
            <div class="flexing-site">
               <img src="{{ asset('images/education.png') }}" class="">
            </div>

            <div class="flexing">

                  <h3 class="our-impact-sub-heading">
                  Educational Institutes
                  </h3>
                  
                  <p class="our-impact-sub-para">
                  Our research & speciality chemicals have a huge demand in educational institutes.
                  </p>
            </div>
          </div>
        </div>
      
      </div>

  </div>
  </section>

  <section class="Key-updates-section">
      <h2 class="container amit-singh-heading">
      Key Updates
      </h2>
      <div class="container slider-key-updates">

        <div class="slider-wrapper">
          <img src="{{ asset('images/key1.png') }}" class="keys-img">
          <a href="#">
          <h3 class="key-updates-heading-link">
          Malaysia’s Carsome To List On Nasdaq At $2 Billion Valuation
          </h3></a>
          <a href="#">
          <p class="key-updates-para-link">
          by Sergio Deniel
          </p>
          </a>

          <a href="#" class="key-style">News</a>
        </div>

        <div class="slider-wrapper">
          <img src="{{ asset('images/key2.png') }}" class="keys-img">
          
          <h3 class="key-updates-heading-link">
          Malaysia’s Carsome To List On Nasdaq At $2 Billion Valuation
          </h3>
          
          <p class="key-updates-para-link">
          ReadyStream® system offers automated media preparation to conveniently provide a large volume of preheated media, eliminates five time-consuming steps.
          </p>
          
          <a href="#" class="key-style">Press Release</a>
        </div>

        <div class="slider-wrapper">
          <img src="{{ asset('images/key3.png') }}" class="keys-img">
          
          <h3 class="key-updates-heading-link">
          Malaysia’s Carsome To List On Nasdaq At $2 Billion Valuation
          </h3>
          
          <p class="key-updates-para-link">
          <svg width="15" height="20" viewBox="0 0 15 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M7.10359 20L6.72305 19.5349C6.46935 19.1966 0 11.6279 0 7.1036C0 3.17125 3.21353 0 7.10359 0C10.9937 0 14.2072 3.21354 14.2072 7.1036C14.2072 11.6279 7.73784 19.2389 7.48414 19.5349L7.10359 20ZM7.10359 0.972523C3.72093 0.972523 1.0148 3.72093 1.0148 7.06131C1.0148 10.6131 5.70824 16.6596 7.10359 18.3932C8.49894 16.6596 13.1924 10.6554 13.1924 7.06131C13.1924 3.72093 10.4863 0.972523 7.10359 0.972523Z" fill="#787878"/>
          <path d="M7.10456 9.80875C5.62465 9.80875 4.39844 8.58254 4.39844 7.10262C4.39844 5.62271 5.62465 4.39648 7.10456 4.39648C8.58448 4.39648 9.81069 5.62271 9.81069 7.10262C9.81069 8.58254 8.58448 9.80875 7.10456 9.80875ZM7.10456 5.41129C6.17433 5.41129 5.41323 6.17239 5.41323 7.10262C5.41323 8.03286 6.17433 8.79396 7.10456 8.79396C8.0348 8.79396 8.7959 8.03286 8.7959 7.10262C8.7959 6.17239 8.0348 5.41129 7.10456 5.41129Z" fill="#787878"/>
          </svg>
          Online
          </p>
          <a href="#" class="key-style"> Event</a>
        </div>

        <div class="slider-wrapper">
          <img src="{{ asset('images/key1.png') }}" class="keys-img">
          
          <h3 class="key-updates-heading-link">
          Educational Institutes
          </h3>
          
          <p class="key-updates-para-link">
          Our research & speciality chemicals have a huge demand in educational institutes.
          </p>
          <a href="#" class="key-style">News</a>
        </div>
      
      </div>
  </section>



</main>

@endsection