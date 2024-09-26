@extends('frontend.layouts.master')
@section('title','MAC Capital :: About us')
@section('description', 'MAC Capital is dedicated in providing optimum solutions to its clients’ financing needs that comes with years ')
@section('keywords', 'Finance, financial, financial solutions, Mr.Ashok Agarwal, MAC mumbai, Indian stock market and economy, mac about us')

@section('main-content')
<div class="page_header_default style_one ">
   <div class="parallax_cover">
      <img src="{{asset('fronted/mac-image/home/bread-4.jpg')}}" alt="about us banner" class="cover-parallax">
   </div>
   <div class="page_header_content">
      <div class="auto-container">
         <div class="row">
            <div class="col-md-12">
               <div class="banner_title_inner">
                  <div class="title_page">
                     About Us
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="breadcrumbs creote">
                  <ul class="breadcrumb m-auto">
                     <li><a href="{{URL::to('/')}}">Home</a> </li>
                     <li class="active">About Us</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<div id="content" class="site-content">
   <!---about--->
   <section class="about-section about_section mobile-about">
      <!--===============spacing==============-->
      <div class="pd_top_90"></div>
      <!--===============spacing==============-->
      <div class="container">
         <div class="row">
            <div class="col-lg-12 mobile-col-12">
               <div class="col-xl-6 col-lg-12 about-us-image">
                  <div class="image_boxes style_two">
                     <img src="{{asset('fronted/images/shape-1.png')}}" class="background_image" alt="image">
                     <div class="image one">
                        <img src="{{asset('fronted/mac-image/about/about-1.jpg')}}" class="img-fluid" alt="image">
                     </div>
                     <div class="image two">
                        <img src="{{asset('fronted/mac-image/about/about-2.jpg')}}" class="img-fluid" alt="image">
                        
                     </div>
                     <div class="authour_quotes">
                        <i class="icon-quote"></i>
                        <h6>Empowering Growth with Tailored Financial Solutions</h6>
                        <p>/ MAC Capital</p>
                     </div>
                  </div>
               </div>
               <div class="text">
                  <div class="about_content position-relative z_99">
                     <div class="title_all_box style_one text-left  dark_color">
                        <div class="title_sections">
                           <div class="before_title">We are</div>
                           <h1>Tailored Corporate & Financial Advisory Solutions by MAC Capital</h1>
                        </div>
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_15"></div>
                     <!--===============spacing==============-->
                     
                     <!--===============spacing==============-->
                     <div class="description_box">
                        <p>
                           <strong>MAC Capital</strong> is dedicated in providing optimum solutions to its clients’ financing needs that comes with years of experience in offering client-centric solutions.
                        </p>
                        <p>
                           There is realization that every customer has its distinct financial goal broken down into unique needs and varying appetite at being exposed to investment risks. With in-depth knowledge and years of experience of the individual needs of its clients, and to implement newer strategies and solutions, <strong>MAC</strong> has excelled in providing corporate / financial advisory services to its large number of corporate clients at all stages of growth and progress.
                        </p>
                        <p>
                           Our special expertise in advising clients has helped them handle the turbulent economic environment better.
                        </p>
                        <p>
                           Despite the tough times & competition financial market, <strong>MAC</strong> still strongly believes in the Indian story.Even in these times, there a renewed for investment in stable emerging market such as India, which is clearly evident from the aggressive polices of major investors around the globe. The focus of most such investment is in the SME sector (small and medium enterprises) which are on a fast growth track. <strong>MAC</strong> believes that the future growth of the Indian stock market and economy as a whole, will be driven by mid caps.
                        </p>
                        
                        
                     </div>
                     <!--===============spacing==============-->
                     <div class="pd_bottom_25"></div>
                     <!--===============spacing==============-->
                     
                     <!-- <div class="theme_btn_all color_one">
                        <a href="#" target="_blank" rel="nofollow" class="theme-btn five">Contact us<i
                           class="icon-right-arrow"></i></a>
                     </div> -->
                  </div>
               </div>
            </div>
         </div>
         <div class="board_head">
            <div class="row">
               <div class="col-xl-6 col-lg-12 mb-md-1 mb-lg-5 mb-xl-0">
                  <div class="team_box style_one">
                     <div class="team_box_outer">
                        <div class="member_image">
                           <img src="{{asset('fronted/mac-image/about/user.jpg')}}" alt="team image">
                        </div>
                        <div class="about_member">
                           <div class="share_media">
                              <ul class="first">
                                 <li class="text">Share</li>
                                 <li><i class="fa fa-share-alt"></i></li>
                              </ul>
                              <ul>
                                 <li class="shar_alt"><i class="fa fa-share-alt"></i></li>
                                 <li><a href="#"> <i class="fa fa-facebook"> </i> </a></li>
                                 <li><a href="#"> <i class="fa fa-twitter"> </i> </a></li>
                                 <li><a href="#"> <i class="fa fa-skype"> </i> </a></li>
                                 <li><a href="#"> <i class="fa fa-instagram"> </i> </a></li>
                              </ul>
                           </div>
                           <div class="authour_details">
                              <span>Our Board Head</span>
                              <h6>Mr.Ashok Agarwal</h6>
                              <div class="button_view">
                                 <a href="#" target="_blank" rel="nofollow" class="theme-btn one"> View Profile
                                 </a>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  
               </div>
               
               <div class="col-xl-6 col-lg-12 d-flex align-items-center">
                  <div class="title_all_box style_one dark_color">
                     <div class="title_sections ">
                        <div class="before_title"> Mr.Ashok Agarwal </div>
                        <h2>Our Board Head</h2>
                        <p>
                           Our board headed by Mr.Ashok Agarwal ,has over 40 years of experience in the line of corporate finance and advisory, and is the founder-promoter of Kolkata-based Eastern Financiers Ltd (EFL). Mr. Ashok Agarwal, promoted the company in 1966, and by the turn of the millennium by which time, he thought of lending this new venture a hand , EFL had achieved an annual turnover of over Rs.1000 crores with almost 16 brands offices spread across the company.
                        </p>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <p>
                     Our fee based advisory and funding services ensures that we adopt a consultative, tailor-made approach for each client. 
                  </p>
                  <p>
                     We, at <strong>MAC</strong> , strongly believe in providing simple solutions to complex problems. 
                  </p>
               </div>
            </div>
         </div>
      </div>
      <!--===============spacing==============-->
      <div class="pd_bottom_70"></div>
      <!--===============spacing==============-->
   </section>
   <!---about end--->
</div>
    
    
@endsection