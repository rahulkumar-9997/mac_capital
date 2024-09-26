@php 
use App\Models\BlogImages;
@endphp
@extends('frontend.layouts.master')
@section('title','MAC Capital Services (P) LTD')
@section('description', 'MAC Capital is a boutique corporate financial advisory firm with a strong focus on the middle market sector in India.')
@section('keywords', 'MAC Capital')

@section('main-content')
<!--===============PAGE CONTENT==============-->
<div id="content" class="site-content">
   <!---slider-->
   <section class="slider style_four nav_position_one">
      <div class="owl-carousel owl_nav_block owl_dots_none theme_carousel owl-theme"
         data-options='{"loop": true, "margin": 0, "autoheight":true, "lazyload":true, "nav": true, "dots": true, "autoplay": true, "autoplayTimeout": 7000, "smartSpeed": 1800, "responsive":{ "0" :{ "items": "1" }, "768" :{ "items" : "1" } , "1000":{ "items" : "1" }}}'>
         <div class="slide-item-content">
            <div class="slide-item content_left">
               <div class="image-layer" style="background-image:url({{asset('fronted/mac-image/banner/banner-new-2.jpg')}})">
               </div>
               <div class="slider-overlay"></div>
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="slider_content pd_top_180 pd_bottom_180">
                           <!-- <h6 class="animate_up d-inline-block"> Our Vision to Grow Better </h6> -->
                           <h1 class="animate_left"> Your Growth,<br> Our Priority </h1>
                           <p class="description animate_right"> Expert Financial Advice for Your Business<br> -Helping you make the right financial moves.
                           </p>
                           <!-- <div class="button_all animate_down">
                              <a href="#" target="_blank" rel="nofollow" class="theme-btn one  animated">Read
                              More</a>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item-content">
            <div class="slide-item content_center">
               <div class="image-layer" style="background-image:url({{asset('fronted/mac-image/banner/banner-new-3.jpg')}})">
               </div>
               <div class="slider-overlay"></div>
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="slider_content pd_top_180 pd_bottom_180">
                           <!-- <h6 class="animate_up d-inline-block"> Hire the Best </h6> -->
                           <h1 class="animate_left"> Expert Guidance, <br>Proven Results</h1>
                           <p class="description animate_right">Focused on Your Business Growth - Strategic <br>solutions to grow your company.
                           </p>
                           <!-- <div class="button_all animate_down">
                              <a href="#" target="_blank" rel="nofollow" class="theme-btn one  animated">Read
                              More</a>
                           </div> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="slide-item-content">
            <div class="slide-item content_right">
               <div class="image-layer" style="background-image:url({{asset('fronted/mac-image/banner/banner-new-1.jpg')}})">
               </div>
               <div class="slider-overlay"></div>
               <div class="auto-container">
                  <div class="row">
                     <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">
                        <div class="slider_content pd_top_180 pd_bottom_180">
                           <!-- <h6 class="animate_up d-inline-block"> Our Vision to Grow Better </h6> -->
                           <h1 class="animate_left animated _zoomOut"> Focused on Your <br>Financial Future.</h1>
                           <p class="description animate_right">Your Partner in Financial Success <br>-Personalized advice for better business outcomes.
                           <!-- <a href="#" target=_blank rel=nofollow class="theme-btn one  animated _zoomIn"> Read
                           More </a> -->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!---slider-end--->
   <!---about us-->
   <section class="about_us_section" id="about">
      <!--===============spacing==============-->
      <div class="pd_top_70"></div>
      <!--===============spacing==============-->
      <div class="container pd_zero">
         <div class="row">
            <div class="col-xl-6 col-lg-12">
               <div class="title_all_box style_one dark_color">
                  <div class="title_sections left">
                     <div class="before_title"> Strategic  </div>
                     <h1> Welcome to MAC Capital</h1>
                     <p> At MAC Capital, our power of choice is unrestricted, and we take pride in offering the best financial advisory services to suit your needs. Nothing holds us back from delivering innovative solutions to the middle market sector in India.
                     </p>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_20"></div>
               <!--===============spacing==============-->
               <div class="process_box style_one dark_color">
                  <div class="process_box_outer">
                     <div class="icon">
                        <span class=" icon-line-chart"></span>
                        <div class="number"> 01 </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow">Commitment to Clients</a>
                        </h2>
                        <p> MAC Capital is a boutique corporate financial advisory firm with a strong focus on the middle market sector in India. We, at MAC, specialize in providing finance and advisory solutions to middle-market public limited companies in India.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="process_box style_one dark_color">
                  <div class="process_box_outer">
                     <div class="icon">
                        <span class=" icon-line-chart"></span>
                        <div class="number"> 02 </div>
                     </div>
                     <div class="content_box">
                        <h2>
                           <a href="#" target="_blank" rel="nofollow"> Expert Solutions Always </a>
                        </h2>
                        <p> MAC has been able to create a niche for itself as arrangers of capital through some of the most innovative financial structuring and funding solutions.
                        </p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="pd_bottom_30"></div>
               <!--===============spacing==============-->
               <div class="signature_wrapper">
                  <div class="row gutter_15px">
                     <div class="col-lg-4 col-md-12">
                        <div class="theme_btn_all color_one mobile-center">
                           <a href="{{route('about-us')}}" class="theme-btn two">Read More</a>
                        </div>
                     </div>
                     
                  </div>
               </div>
               <div class="pd_bottom_30"></div>
               
            </div>
            <div class="col-xl-6 col-lg-12">
               <div class="service_wrapper">
                  <div class="move_image_absolute">
                     <img src="{{asset('fronted/mac-image/home/home-image_circle.png')}}" class="class-fluid" alt="image" />
                  </div>
                  <div class="row">
                     <div class="col-lg-6 col-md-6">
                        <div class="service_box style_one dark_color">
                           <div class="service_content">
                              <div class="image ">
                                 <img src="{{asset('fronted/images/service-illu-1.png')}}" class="img-fluid"
                                    alt="Service Image" />
                              </div>
                              <div class="content_inner">
                                 <h2>
                                    <a href="{{route('financial-services')}}"> Financial Services </a>
                                 </h2>
                                 <p> MAC Capital connects Indian businesses with Western investors, offering deal structuring guidance and practical financial advice for growth.
                                 </p>
                                 <a href="{{route('financial-services')}}" class="read_more"> Read more </a>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-lg-6 col-md-6">
                        <!--===============spacing==============-->
                        <div class="pd_top_100 mobile_pd_top_30"></div>
                        <div class="pd_top_100 d_md_none"></div>
                        <!--===============spacing==============-->
                        <div class="service_box style_one dark_color last">
                           <div class="service_content">
                              <div class="image ">
                                 <img src="{{asset('fronted/images/service-illu-1.png')}}" class="img-fluid"
                                    alt="Service Image" />
                              </div>
                              <div class="content_inner">
                                 <h2>
                                    <a href="{{route('corporate-advisory')}}"> Corporate Advisory </a>
                                 </h2>
                                 <p>MAC Capital provides expert corporate advisory services, specializing in mergers, capital structuring, valuations, and project finance for businesses.
                                 </p>
                                 <a href="{{route('corporate-advisory')}}" class="read_more"> Read more </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_80"></div>
      <!--===============spacing==============-->
   </section>
   <!---about us end-->
   <!---service--->
   <section class="service_section bg_light_1" id="service">
      <!--===============spacing==============-->
      <div class="pd_top_80"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="title_all_box style_one text-center dark_color">
               <div class="title_sections">
                  <div class="before_title">Empowerment</div>
                  <h2>Financial Solutions</h2>
                  <p>We work with your business to create custom financial plans, find new opportunities, and help you grow steadily.
                  </p>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="pd_bottom_20"></div>
            <!--===============spacing==============-->
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two ">
                     <div class="content_inner"
                        style="background-image:url({{asset('fronted/mac-image/financial-service/multi-faceted-style.jpg')}})">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{asset('fronted/mac-image/financial-service/financial_icon/multi.png')}}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2>
                              <a href="{{route('multi-facetedstyle')}}">Multi Faceted Style</a>
                           </h2>
                           <p>While MAC Capital routinely raises finance to drive clients’ initiatives towards fruition, the value,</p>
                           <ul>
                              <li>Ideation & Advice</li>
                              <li>Execution</li>
                              
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="{{route('multi-facetedstyle')}}">
                        <i class="icon-right-arrow"></i>
                        </a>
                     </div>
                     <div class="overlay_content">
                        <h2>
                           <a href="{{route('multi-facetedstyle')}}">Multi Faceted Style</a>
                        </h2>
                        <p>While MAC Capital routinely raises finance to drive clients’ initiatives towards fruition, the value,</p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two  active_ser">
                     <div class="content_inner"
                        style="background-image:url({{asset('fronted/mac-image/financial-service/capital-raising.jpg')}})">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{asset('fronted/mac-image/financial-service/financial_icon/multi.png')}}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2>
                              <a href="{{route('capital-raising')}}">Capital Raising</a>
                           </h2>
                           <p>The core MAC Capital competency lies in the raising of international capital.</p>
                           <ul>
                              <li>
                                 International Private Equity
                              </li>
                              <li>
                                 International Debt
                              </li>
                              <li>
                                 International M&A Finance
                              </li>
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="{{route('capital-raising')}}">
                        <i class="icon-right-arrow"></i>
                        </a>
                     </div>
                     <div class="overlay_content">
                        <h2>
                           <a href="{{route('capital-raising')}}">Capital Raising</a>
                        </h2>
                        <p>The core MAC Capital competency lies in the raising of international capital.
                        </p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12 col-xs-12">
               <div class="service_box style_two dark_color">
                  <div class="service_content_two ">
                     <div class="content_inner"
                        style="background-image:url({{asset('fronted/mac-image/financial-service/international-debt-solutions.jpg')}})">
                        <div class="content_inner_in">
                           <div class="icon_image">
                              <img src="{{asset('fronted/mac-image/financial-service/financial_icon/international-debt.png')}}" class="img-fluid"
                                 alt="Service Image" />
                           </div>
                           <h2>
                              <a href="{{route('internationaldebt-solution')}}">International Debt Solutions</a>
                           </h2>
                           <p>MAC Capital specializes in syndicating high value placements of corporate  </p>
                           <ul>
                              <li>
                                 M&A financing
                              </li>
                              <li>
                                 Structured Debt
                              </li>
                              
                           </ul>
                        </div>
                     </div>
                     <div class="ovarlay_link">
                        <a href="{{route('internationaldebt-solution')}}">
                        <i class="icon-right-arrow"></i>
                        </a>
                     </div>
                     <div class="overlay_content">
                        <h2>
                           <a href="{{route('internationaldebt-solution')}}">International Debt Solutions</a>
                        </h2>
                        <p>MAC Capital specializes in syndicating high value </p>
                     </div>
                  </div>
               </div>
               <!--===============spacing==============-->
               <div class="mr_bottom_20"></div>
               <!--===============spacing==============-->
            </div>
            <div class="text-center mt-4">
               <a href="{{route('financial-services')}}"  class="theme-btn one">View All <i class="icon-right-arrow"></i>
               </a>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_70"></div>
      <!--===============spacing==============-->
   </section>
   <!---service end-->
   <!---expertise--->
   <!-- <section class="expertise">
      <div class="area_of_expertise">
         <div class="simpleParallax">
            <img src="{{asset('fronted/images/areaof-ecp-1.jpg')}}" class="cover-parallax" alt="image">
         </div>
         <div class="title_and_video">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="video_box text-center">
                        <a href="https://www.youtube.com/embed/-VK0axfge4A" class="lightbox-image"><i
                           class="icon-play"></i></a>
                     </div>
                  </div>
                  <div class="col-lg-2"></div>
                  <div class="col-lg-6">
                     <div class="title_all_box style_one text-end">
                        <div class="title_sections">
                           <h2>Create Meaningful Experiences for employees</h2>
                           <p>Our power of choice is untrammelled and when nothing prevents our able to do what
                              we like best every pleasure is to be welcomed and occur that pleasures have to be
                              repudiated.
                           </p>
                        </div>
                        <div class="theme_btn">
                           <a href="service-default.html" class="theme-btn one">Read more</a>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="expertise">
            <div class="auto-container">
               <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                     <div class="step_number">
                        <h1>01.</h1>
                     </div>
                     <h2 class="title"><a href="#">Payroll Management</a>
                     </h2>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                     <div class="step_number">
                        <h1>02.</h1>
                     </div>
                     <h2 class="title">
                        <a href="#">Employee Compensation</a>
                     </h2>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 expertise_box">
                     <div class="step_number">
                        <h1>03.</h1>
                     </div>
                     <h2 class="title">
                        <a href="#">Benefits Management</a>
                     </h2>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section> -->
   <!---expertise-end--->
   <!---process--->
   <section class="service-section-two">
   <!--===============spacing==============-->
   <div class="pd_top_80"></div>
   <!--===============spacing==============-->
   <div class="container pd_zero">
      <div class="row">
         <div class="col-lg-12">
            <div class="title_all_box style_one text-center  dark_color">
               <div class="title_sections">
                  <div class="before_title"> Making What’s </div>
                  <h2>Corporate Advisory</h2>
               </div>
            </div>
         </div>
         <!--===============spacing==============-->
         <div class="mr_bottom_70"></div>
         <!--===============spacing==============-->
      </div>
      <div class="row gutter_15px">
         <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
            <div class="service_box style_three dark_color">
               <div class="service_content">
                  <div class="content_inner">
                     <span class="icon-dollar"><i></i></span>
                     <small class="nom">01</small>
                     <h2><a href="{{route('mergers')}}">Mergers and Aquisitions</a></h2>
                     <p>MAC Capital can enhance the precision of your growth strategy by assisting with a single acquisition.</p>
                     <a href="{{route('mergers')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_30"></div>
            <!--===============spacing==============-->
         </div>
         <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
            <div class="service_box style_three dark_color">
               <div class="service_content">
                  <div class="content_inner">
                     <span class="icon-pharmacy"><i></i></span>
                     <small class="nom">02</small>
                     <h2><a href="{{route('capital-structuring')}}">Capital Structuring Advisory</a></h2>
                     <p>MAC Capital provides capital structuring advisory services to help achieve your growth trajectory. </p>
                     <a href="{{route('capital-structuring')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_30"></div>
            <!--===============spacing==============-->
         </div>
         <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
            <div class="service_box style_three dark_color">
               <div class="service_content">
                  <div class="content_inner">
                     <span class="icon-service"><i></i></span>
                     <small class="nom">03</small>
                     <h2><a href="{{route('indications-of-value')}}">Indications of Value</a></h2>
                     <p>MAC Capital undertakes valuation mandates for clients who are seeking fair value assessments</p>
                     <a href="{{route('indications-of-value')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_30"></div>
            <!--===============spacing==============-->
         </div>
         <div class="col-xl-3 col-lg-6 col-md-12 col-sm-12 col-xs-12 mo-mb-50">
            <div class="service_box style_three dark_color">
               <div class="service_content">
                  <div class="content_inner">
                     <span class=" icon-dollar"><i></i></span>
                     <small class="nom">04</small>
                     <h2><a href="{{route('project-structured-finance')}}">Project & Structured Finance</a></h2>
                     <p>MAC Capital offers advisory services in the provision of domestic and international project and</p>
                     <a href="{{route('project-structured-finance')}}" class="read_more">Read more <i class="icon-right-arrow"></i></a>
                  </div>
               </div>
            </div>
            <!--===============spacing==============-->
            <div class="mr_bottom_30"></div>
            <!--===============spacing==============-->
         </div>
      </div>
      <div class="text-center mt-4">
         <a href="{{route('corporate-advisory')}}" class="theme-btn one">View All <i class="icon-right-arrow"></i>
         </a>
      </div>
   </div>
   <!--===============spacing==============-->
   <div class="pd_bottom_50"></div>
   <!--===============spacing==============-->
</section>
   
   
   
</div>
<!--===============PAGE CONTENT END==============-->
@endsection