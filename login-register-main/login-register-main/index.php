<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>User Dashboard</title>
</head>
<body>
    
<!DOCTYPE html>
<html lang="en">

<head>
	
	<!-- Google Tag Manager -->
	<script>
		(function(w, d, s, l, i) {
			w[l] = w[l] || [];
			w[l].push({
				'gtm.start': new Date().getTime(),
				event: 'gtm.js'
			});
			var f = d.getElementsByTagName(s)[0],
				j = d.createElement(s),
				dl = l != 'dataLayer' ? '&l=' + l : '';
			j.async = true;
			j.src =
				'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
			f.parentNode.insertBefore(j, f);
		})(window, document, 'script', 'dataLayer', 'GTM-T85P9FK');
	</script>
	<!-- End Google Tag Manager -->

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="author" content="vocasia" />

			<title> cecut</title>
	
	<meta name="facebook-domain-verification" content="e5a4ai5l0wde818uc05krvxbt470pi" />

	
			<meta name="keywords" content="vocasia, kursus, courses, vokasia, vokasi, edutech, belajar online,kursus online" />
		
	
	
	<meta name="google-site-verification" content="Q-ohtlJR5QgrO6l5NrHvstihgEgdMr9ZE7VkGJgaYHM" />
<!-- <link rel="favicon" href=""> -->
<link rel="apple-touch-icon" href="https://vocasia.id/assets/frontend/default/img/icons/vocasia_icon1.png">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/jquery.webui-popover.min.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/select2.min.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/slick.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/slick-theme.css">
<link href="https://vocasia.id/assets/backend/css/vendor/responsive.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="https://vocasia.id/assets/backend/css/vendor/buttons.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="https://vocasia.id/assets/backend/css/app.min.css" rel="stylesheet" type="text/css" />
<link href="https://vocasia.id/assets/backend/css/icons.min.css" rel="stylesheet" type="text/css" />
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

<!-- font awesome 5 -->
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/fontawesome-all.min.css">

<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/bootstrap.min.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/bootstrap-tagsinput.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/main.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/responsive.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/google-font.css" rel="stylesheet">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/jquery.nestable.css" rel="stylesheet">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/jquery-listslider.css" rel="stylesheet">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/splide-sea-green.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://vocasia.id/assets/global/toastr/toastr.css">
<script src="https://vocasia.id/assets/backend/js/jquery-3.3.1.min.js"></script>
<link href="https://vocasia.id/assets/backend/css/vendor/dataTables.bootstrap4.css" rel="stylesheet" type="text/css" />
<link href="https://cdn.datatables.net/buttons/1.2.4/css/buttons.dataTables.min.css" rel="stylesheet"/>
<link href="https://vocasia.id/assets/backend/css/vendor/summernote-bs4.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/sqp.css">
<link rel="stylesheet" href="https://vocasia.id/assets/frontend/default/css/star-rating.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/lozad/dist/lozad.min.js"></script>
<style>
    .score {
        /* display: block; */
        font-size: 16px;
        position: relative;
        overflow: hidden;
    }

    .score-wrap {
        display: inline-block;
        position: relative;
        height: 19px;
    }

    .score .stars-active {
        color: #EEBD01;
        position: relative;
        z-index: 10;
        display: inline-block;
        overflow: hidden;
        white-space: nowrap;
    }

    .score .stars-inactive {
        color: grey;
        position: absolute;
        top: 0;
        left: 0;
        -webkit-text-stroke: initial;
        /* overflow: hidden; */
    }
</style>
	<link rel="canonical" href="https://vocasia.id"></head>

<body class="gray-bg" style="padding-bottom: unset;">

	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T85P9FK" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<section class="menu-area">
  <div class="" style="margin: auto; padding: 0 20px;">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

        

         

          <div class="main-nav-wrap">
  <div class="mobile-overlay"></div>

  <ul class="mobile-main-nav">
    <!-- <div class="mobile-menu-helper-top"></div> -->

   

    <li class="has-children">
      <a href="">
        <i class="fas fa-th d-inline"></i>
        <span>Program lainnya</span>
        <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
      </a>

      <ul class="category corner-triangle top-left is-hidden">
        <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
        <li><a href="index.html">about us</a></li>
        <li><a href="New Text Document.html">class</a></li>
        <li><a href="searchengine.html">Jobseekers</a></li>
        <li><a href="jobseker.html">seminar</a></li>
        <li><a href="#">Community</a></li>
        
        <li class="has-children">
          <a href="">
            <span>Bootcamp</span>
            <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
          </a>
          <ul class="sub-category is-hidden">
            <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
            <li>
              <a href="https://bit.ly/DMVocasia">
                Digital Marketing Specialist
              </a>
              <a href="https://vocasia.id/home/course/intensive-bootcamp-fullstack-web-development/538">
                Full Stack Web Development
              </a>
              <a href="https://vocasia.id/home/course/intensive-bootcamp-data-science-copy/588">
                Data Science
              </a>
              <a href="https://vocasia.id/home/course/intensive-full-stack-cloud-engineer/589">
                Full Stack Cloud Engineer
              </a>
            </li>
          </ul>
        </li>
        <!-- <li class="has-children">
          <a href="">
            <span>Seminar</span>
            <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
          </a>
          <ul class="sub-category is-hidden">
            <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
            <li>
              <a href="#">
                FREE Seminar Kiat Sukses Ekspansi Perusahaan Melalui IPO
              </a>
            </li>
            <li>
              <a href="#">
                FREE Seminar Python Profit Sukses Investasi Saham Di Pasar Modal Amerika
              </a>
            </li>
          </ul>
        </li> -->
    </li>
  </ul>
  </li>

  <div class="mobile-menu-helper-bottom"></div>

  </ul>
</div>
                      <div class="cart-logout-menu"></div>
          
          <!-- <div class="main-nav-wrap" style="margin: 0 30px 0 0">
            <div class="mobile-overlay"></div>
            <ul class="mobile-main-nav">
              <div class="mobile-menu-helper-top"></div>
              <li class="has-children">
                <a href="" style="width: 120px"> -->
          <!-- <i class="fas fa-th d-inline"></i> -->
          <!-- <span>Program Lainnya</span>
                  <span class="has-sub-category"><i class="fas fa-angle-right"></i></span>
                </a>
                <ul class="category corner-triangle top-left is-hidden">
                  <li class="go-back"><a href=""><i class="fas fa-angle-left"></i>Menu</a></li>
                  <li class="all-category">
                    <a href="https://vocasia.id/home/prakerja">Kursus Prakerja</a>
                    <a href="http://workshop.vocasia.id/">Workshop</a>
                    <a href="#">UMKM</a>
                  </li>
                </ul>
              </li>
              <div class="mobile-menu-helper-bottom"></div>
            </ul>
          </div> -->

          <form class="inline-form" action="https://vocasia.id/home/search" method="get" style="width: 100%;">
            <div class="input-group search-box mobile-search">
              <input type="text" name='query' class="form-control" placeholder="Cari kursus">
              <div class="input-group-append">
                <button class="btn" type="submit"><i class="fas fa-search"></i></button>
              </div>
            </div>
          </form>

          <div class="cart-box menu-icon-box" id="cart_items">
            <div class="icon">
	<a href="javascript::" onclick="showCartPage()"><i class="fas fa-shopping-cart"></i></a>
	<span class="number">0</span>
</div>
<!-- Cart Dropdown goes here -->
<div class="dropdown course-list-dropdown corner-triangle top-right"> <!-- Just remove the display none from the css to make it work -->
	<div class="list-wrapper">
		<div class="item-list">
			<ul>
							</ul>
		</div>
		<div class="dropdown-footer">
			<div class="cart-total-price clearfix">
				<span>Total:</span>
				<div class="float-right">
					<span class="current-price"></span>
					<!-- <span class="original-price">$94.99</span> -->
				</div>
			</div>
			<a href = "https://vocasia.id/home/shopping_cart">Keranjang Belanja</a>
		</div>
	</div>
	<div class="empty-box text-center d-none">
		<p>Keranjangmu Kosong.</p>
		<a href="">Keep Shopping</a>
	</div>
</div>


<script type="text/javascript">
function showCartPage() {
	window.location.replace("https://vocasia.id/home/shopping_cart");
}
</script>
          </div>

          <span class="signin-box-move-desktop-helper"></span>
          <div class="sign-in-box btn-group">

            <a href="login-register-main/login-register-main/login.php" class="btn btn-sign-in">Masuk</a>
                          <a href="login-register-main/login-register-main/login.phps" class="btn btn-sign-up">Daftar</a>
            
            <!-- <a href="" class="btn btn-sign-up"></a> -->

          </div> <!--  sign-in-box end -->
        </nav>
      </div>
    </div>
  </div>
</section><style>
    label.percent_disc {
        background-color: #A00F23;
        padding: 3px 5px;
        border-radius: 5px;
        color: white;
        font-size: 11px
    }

    .load-more {
        text-align: center;
        margin: 0 auto;
    }
</style>
<div class="" style="max-width: 1933px; margin-left: auto; margin-right: auto;">
    <div class="row mt-3 mb-4">
        <div class="col-12 col-md-10 offset-md-1">
            <div id="banner" class="carousel slide banner" data-ride="carousel">
                <!-- Indicators -->
                <ul class="carousel-indicators">
                                            <li data-target="#banner" data-slide-to="0" class="active"></li>
                                            <li data-target="#banner" data-slide-to="1" class=""></li>
                                            <li data-target="#banner" data-slide-to="2" class=""></li>
                                           
                                            
                                    </ul>

                <!-- The slideshow -->
                <div class="carousel-inner">
                                            <div class="carousel-item active">
                            <a href="https://vocasia.id/">
                                <img src="Desain Header CECUT/DH.png" class="img img-responsive website-img" style="max-height: 400px; width: 100%;">
                                <!-- <img src="http://via.placeholder.com/400x480/FFFF00/000000?Text=WebsiteBuilders.com" class="img img-responsive mobile-img" style="max-height: 480px; width: 100%;display:none"> -->
                                <img src="" class="img img-responsive mobile-img" style="height: 480px; width: 100%;display:none">
                                <!-- <div class="mobile-img" style="background-color: red;display:none;height:400px"></div> -->
                            </a>
                        </div>
                                            <div class="carousel-item ">
                            <a href="https://vocasia.id/content/digital-marketing-specialist/">
                                <img src="Desain Header CECUT/IC.png" class="img img-responsive website-img" style="max-height: 400px; width: 100%;">
                                <!-- <img src="http://via.placeholder.com/400x480/FFFF00/000000?Text=WebsiteBuilders.com" class="img img-responsive mobile-img" style="max-height: 480px; width: 100%;display:none"> -->
                                <img src="https://vocasia.id/uploads/system/mobile_5209507.jpg" class="img img-responsive mobile-img" style="height: 480px; width: 100%;display:none">
                                <!-- <div class="mobile-img" style="background-color: red;display:none;height:400px"></div> -->
                            </a>
                        </div>
                                            <div class="carousel-item ">
                            <a href="https://vocasia.id/home/course/tiktok-mastery-rahasia-dapat-penghasilan-jutaan-rupiah-perbulan-dari-tiktok/491?from=search_result">
                                <img src="Desain Header CECUT/NDY.png" class="img img-responsive website-img" style="max-height: 400px; width: 100%;">
                                <!-- <img src="http://via.placeholder.com/400x480/FFFF00/000000?Text=WebsiteBuilders.com" class="img img-responsive mobile-img" style="max-height: 480px; width: 100%;display:none"> -->
                                <img src="https://vocasia.id/uploads/system/mobile_39686568.jpg" class="img img-responsive mobile-img" style="height: 480px; width: 100%;display:none">
                                <!-- <div class="mobile-img" style="background-color: red;display:none;height:400px"></div> -->
                            </a>
                        </div>
                                   
                <!-- Left and right controls -->
                <a class="carousel-control-prev" href="#banner" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" href="#banner" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-12 col-md-10 offset-md-1">
            <section class="course-crousel-area content_top_after_load">
                <div class="row">
                    <div class="col">
                        <ul class="category-slider">
                                                            <li>
                                    <a href="https://vocasia.id/home/courses/personal-development">
                                        <div class="card shadow-sm cat-card">
                                            <div class="card-body">
                                                <div class="category-slick-item">
                                                    <div class="cat-name">
                                                        Class                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="searchengine.html">
                                        <div class="card shadow-sm cat-card">
                                            <div class="card-body">
                                                <div class="category-slick-item">
                                                    <div class="cat-name">
                                                        job seeeker                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                            <li>
                                    <a href="jobseker.html">
                                        <div class="card shadow-sm cat-card">
                                            <div class="card-body">
                                                <div class="category-slick-item">
                                                    <div class="cat-name">
                                                       seminar                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                            <li>
                                   
                             
                                </li>
                                                            <li>
                                    <a href="https://vocasia.id/home/courses/teknik">
                                        <div class="card shadow-sm cat-card">
                                            <div class="card-body">
                                                <div class="category-slick-item">
                                                    <div class="cat-name">
                                                        Comunity                                                 </div>
                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                                    </ul>
                    </div>
                </div>
        </div>
        </section>
    </div>
</div>

    <div class="row">
        <div class="col-12 col-md-10 offset-md-1">
            <!-- top -->
            <section class="course-carousel-area content_top_after_load">
                <div class="row">
                    <div class="col">
                        <h2 class="course-carousel-title">Fitur unggulan</h2>
                        <div class="course-carousel">
                                                            <div class="course-box-wrap">
                                    <a href="uhuy.html" class="has-popover">
                                        <div class="course-box">
                                            <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                            <div class="course-image">
                                                <img data-src="1.png" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                            </div>
                                            <div class="course-details">
                                                <h3 class="title">ADHA PROMO ABIEZZ!!! || BIM Course .</h3>
                                                <p class="instructors">
                                                    Detria Cindy                                       </p>
                                                <div class="rating">
                                                                                                                                                                        <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                <span class="d-inline-block average-rating">5</span>
                                                </div>
                                                                                                                                                        <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp25.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp.50.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                50% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                        <!-- <p class="price text-left" style="padding-bottom: 43px;">Rp10.000,-</p> -->
                                                                                                                                                </div>
                                        </div>
                                    </a>

                                    <div class="webui-popover-content">
                                        <div class="course-popover-content">
                                                                                            <div class="last-updated">Update terakhir ,7-Jun-2024</div>
                                            
                                            <div class="course-title">
                                                <a href="uhuy.html">ADHA PROMO ABIEZZ!!! || BIM Course.</a>
                                            </div>
                                            <div class="course-meta">
                                                <span class=""><i class="fas fa-play-circle"></i>
                                                    5 Pelajaran                                                </span>
                                                <span class=""><i class="far fa-clock"></i>
                                                    01:57:47 Jam                                                </span>
                                                <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                            </div>
                                            <div class="course-subtitle">Kursus ini akan memperkenalkan Anda pada Building Information Modeling (BIM), sebuah metode canggih yang digunakan dalam industri konstruksi untuk meningkatkan efisiensi dan kolaborasi. Anda akan belajar bagaimana membuat model digital yang mendetail dan cara mengelolanya sepanjang siklus hidup proyek konstruksi. </div>
                                            <div class="what-will-learn">
                                                <ul>
                                                                                                            <li>Mampu mengoprasikan dalam pembuatan maupun perancanaan sofware BIM </li>
                                                                                                    </ul>
                                            </div>
                                          
                                        </div>
                                    </div>
                                </div>
                                                            <div class="course-box-wrap">
                                    <a href="uhuy2.html" class="has-popover">
                                        <div class="course-box">
                                            <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                            <div class="course-image">
                                                <img data-src="2.png" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                            </div>
                                            <div class="course-details">
                                                <h3 class="title">ADHA PROMO ABIEZZ!!!|| Tender Course </h3>
                                                <p class="instructors">
                                                    Noviandri Ananda                                                </p>
                                                <div class="rating">
                                                                                                                                                                        <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                <span class="d-inline-block average-rating">5</span>
                                                </div>
                                                                                                                                                        <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp30.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp60.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                50% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                        <!-- <p class="price text-left" style="padding-bottom: 43px;">Rp10.000,-</p> -->
                                                                                                                                                </div>
                                        </div>
                                    </a>

                                    <div class="webui-popover-content">
                                        <div class="course-popover-content">
                                                                                            <div class="last-updated">Update terakhir Thu, 01-Dec-2022</div>
                                            
                                            <div class="course-title">
                                                <a href="uhuy2.html">ADHA PROMO ABIEZZ!!! || Tander crouse</a>
                                            </div>
                                            <div class="course-meta">
                                                <span class=""><i class="fas fa-play-circle"></i>
                                                    4 Pelajaran                                                </span>
                                                <span class=""><i class="far fa-clock"></i>
                                                    01:40:58 Jam                                                </span>
                                                <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                            </div>
                                            <div class="course-subtitle">Pelajari proses lengkap tender dalam industri konstruksi, mulai dari persiapan dokumen tender hingga strategi memenangkan proyek. Kelas ini dirancang untuk memberikan pemahaman mendalam tentang prosedur, hukum, dan etika dalam proses tender. </div>
                                            <div class="what-will-learn">
                                                <ul>
                                                                                                            <li> dapat mengatahui apa saja yg harus di lakukan di lapangan</li>
                                                                                                    </ul>
                                            </div>
                                            <div class="popover-btns">
                                                                                                                                                            <button type="button" class="btn-add add-to-cart-btn  big-cart-button-424" id="424" onclick="handleCartItems(this)">
                                                            Tambahkan ke keranjang                                                        </button>
                                                        <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="424"><i class="fas fa-heart"></i></button>
                                                                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="course-box-wrap">
                                    <a href="uhuy3.html" class="has-popover">
                                        <div class="course-box">
                                            <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                            <div class="course-image">
                                                <img data-src="3.png" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                            </div>
                                            <div class="course-details">
                                                <h3 class="title">ADHA PROMO ABIEZZ!!! || DED Course</h3>
                                                <p class="instructors">
                                                    Riza Aditya                                                </p>
                                                <div class="rating">
                                                                                                                                                                        <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                <span class="d-inline-block average-rating">5</span>
                                                </div>
                                                                                                                                                        <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp60.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp120.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                50% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                        <!-- <p class="price text-left" style="padding-bottom: 43px;">Rp10.000,-</p> -->
                                                                                                                                                </div>
                                        </div>
                                    </a>

                                    <div class="webui-popover-content">
                                        <div class="course-popover-content">
                                                                                            <div class="last-updated">Update terakhir , 07-jun-2024</div>
                                            
                                            <div class="course-title">
                                                <a href="uhuy3.html">ADHA PROMO ABIEZZ!!! ||DED Course </a>
                                            </div>
                                            <div class="course-meta">
                                                <span class=""><i class="fas fa-play-circle"></i>
                                                    3 Pelajaran                                                </span>
                                                <span class=""><i class="far fa-clock"></i>
                                                    01:16:48 Jam                                                </span>
                                                <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                            </div>
                                            <div class="course-subtitle"> Dalam kursus Detail Engineering Design (DED), Anda akan belajar tentang tahapan detail desain dalam proyek konstruksi. Fokus kursus ini mencakup perancangan teknis yang terperinci, pengembangan rencana kerja, dan persiapan dokumen konstruksi yang diperlukan untuk implementasi proyek. </div>
                                            <div class="what-will-learn">
                                                <ul>
                                                                                                           
                                                                                                    </ul>
                                            </div>
                                            <div class="popover-btns">
                                                                                                                                                            <button type="button" class="btn-add add-to-cart-btn  big-cart-button-437" id="437" onclick="handleCartItems(this)">
                                                            Tambahkan ke keranjang                                                        </button>
                                                        <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="437"><i class="fas fa-heart"></i></button>
                                                                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="course-box-wrap">
                                    <a href="uhuy5.html" class="has-popover">
                                        <div class="course-box">
                                            <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                            <div class="course-image">
                                                <img data-src="5.png" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                            </div>
                                            <div class="course-details">
                                                <h3 class="title">ADHA PROMO ABIEZZ!!! ||Construction and RAB Class </h3>
                                                <p class="instructors">
                                                    Nindya Syafira  Ekatiwi                                                </p>
                                                <div class="rating">
                                                                                                                                                                        <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                <span class="d-inline-block average-rating">5</span>
                                                </div>
                                                                                                                                                        <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp24.500,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp49.999,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                             50% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                        <!-- <p class="price text-left" style="padding-bottom: 43px;">Rp10.000,-</p> -->
                                                                                                                                                </div>
                                        </div>
                                    </a>

                                    <div class="webui-popover-content">
                                        <div class="course-popover-content">
                                                                                            <div class="last-updated">Update terakhir , 07-jun-2024</div>
                                            
                                            <div class="course-title">
                                                <a href="uhuy5.html">ADHA PROMO ABIEZZ!!! || Construction and RAB Class</a>
                                            </div>
                                            <div class="course-meta">
                                                <span class=""><i class="fas fa-play-circle"></i>
                                                    2Pelajaran                                                </span>
                                                <span class=""><i class="far fa-clock">Pelajari dasar-dasar manajemen konstruksi dan penyusunan Rencana Anggaran Biaya (RAB) proyek konstruksi. Kelas ini mencakup teknik perencanaan, pengawasan, dan pengendalian proyek konstruksi serta cara menghitung dan menyusun anggaran proyek secara efektif</i>
                                                    00:29:21 Jam                                                </span>
                                                <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                            </div>
                                            <div class="course-subtitle"></div>
                                            <div class="what-will-learn">
                                                <ul>
                                                                                                            <li>Mampu Meningkatkan pemahaman dalam menghitung volumen dan merancang anggaran biaya</li>
                                                                                                    </ul>
                                            </div>
                                            <div class="popover-btns">
                                                                                                                                                            <button type="button" class="btn-add add-to-cart-btn  big-cart-button-453" id="453" onclick="handleCartItems(this)">
                                                            Tambahkan ke keranjang                                                        </button>
                                                        <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="453"><i class="fas fa-heart"></i></button>
                                                                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                            <div class="course-box-wrap">
                                    <a href="uhuy4.html" class="has-popover">
                                        <div class="course-box">
                                            <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                            <div class="course-image">
                                                <img data-src="4.png" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                            </div>
                                            <div class="course-details">
                                                <h3 class="title">ADHA PROMO ABIEZZ!!! || Hydro Class </h3>
                                                <p class="instructors">
                                                    Nayla Marinlee Auramadina                                                 </p>
                                                <div class="rating">
                                                                                                                                                                        <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                <span class="d-inline-block average-rating">5</span>
                                                </div>
                                                                                                                                                        <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp34.500,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp75.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                50% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                        <!-- <p class="price text-left" style="padding-bottom: 43px;">Rp10.000,-</p> -->
                                                                                                                                                </div>
                                        </div>
                                    </a>

                                    <div class="webui-popover-content">
                                        <div class="course-popover-content">
                                                                                            <div class="last-updated">Update terakhir , 07-jun-2024</div>
                                            
                                            <div class="course-title">
                                                <a href="uhuy4.html">ADHA PROMO ABIEZZ!!! || Hydro Class </a>
                                            </div>
                                            <div class="course-meta">
                                                <span class=""><i class="fas fa-play-circle"></i>
                                                    5 Pelajaran                                                </span>
                                                <span class=""><i class="far fa-clock"></i>
                                                    00:28:26 Jam                                                </span>
                                                <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                            </div>
                                            <div class="course-subtitle">Kelas ini memberikan pemahaman mendalam tentang prinsip-prinsip dasar hidrologi dan aplikasi praktisnya dalam proyek-proyek teknik sipil. Anda akan mempelajari tentang siklus air, pengukuran hidrologi, dan analisis data hidrologi. </div>
                                            <div class="what-will-learn">
                                                <ul>
                                                                                                            <li>Mampu menjalani interview Bahasa inggris dengan mudah</li>
                                                                                                    </ul>
                                            </div>
                                            <div class="popover-btns">
                                                                                                                                                            <button type="button" class="btn-add add-to-cart-btn  big-cart-button-609" id="609" onclick="handleCartItems(this)">
                                                            Tambahkan ke keranjang                                                        </button>
                                                        <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="609"><i class="fas fa-heart"></i></button>
                                                                                                    
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                                           
                                        </div>
                                    </div>
                                </div>
                                        </div>
                                    </div>
                                </div>
                                                    </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
<div class="row">
    <div class="col-12 col-md-10 offset-md-1">
        <!-- top -->
        <section class="course-carousel-area content_top_after_load">
            <div class="row">
                <div class="col">
                    <h2 class="course-carousel-title"></h2>
                    <div class="course-carousel">
                                                    <div class="course-box-wrap">
                                <a href="uhuy6.html" class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img data-src="drinase.jfif" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                        </div>
                                        <div class="course-details">
                                            <h3 class="title">Teknik Irigasi dan Drainase</h3>
                                            <p class="instructors">
                                                Seratus Ilmu                                            </p>
                                            <div class="rating">
                                                                                                                                                            <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                    <span class="d-inline-block average-rating">5</span>
                                            </div>
                                                                                                                                                <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp125.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp250.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                50% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                                                    </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">
                                                                                    <div class="last-updated">Update terakhir ,07-jun-2024</div>
                                        
                                        <div class="course-title">
                                            <a href="uhuy6.html">Teknik Irigasi dan Drainase</a>
                                        </div>
                                        <div class="course-meta">
                                            <span class=""><i class="fas fa-play-circle"></i>
                                                5Pelajaran                                            </span>
                                            <span class=""><i class="far fa-clock"></i>
                                                03:35:31 Jam                                            </span>
                                            <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                        </div>
                                        <div class="course-subtitle"> Kursus ini membahas teknik-teknik irigasi dan drainase yang digunakan untuk mengelola air dalam proyek-proyek pertanian dan perkotaan. Anda akan belajar tentang perencanaan, desain, dan implementasi sistem irigasi dan drainase yang efisien</div>
                                        <div class="what-will-learn">
                                            <ul>
                                                                                                    <li>Mampu mengenali basic tentang saluran irigasi maupun drinase</li>
                                                                                                    <li>Mampu menggunakan beberapa sofware untuk  perancangan di lapangan </li>
                                                                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                                                                                                                                <button type="button" class="btn-add add-to-cart-btn  big-cart-button-63" id="63" onclick="handleCartItems(this)">
                                                        Tambahkan ke keranjang                                                    </button>
                                                    <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="63"><i class="fas fa-heart"></i></button>
                                                                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="course-box-wrap">
                                <a href="uhuy7.html" class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img data-src="hidrolika.jfif" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                        </div>
                                        <div class="course-details">
                                            <h3 class="title">Hidrolika </h3>
                                            <p class="instructors">
                                                Seratus Ilmu                                            </p>
                                            <div class="rating">
                                                                                                                                                            <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                    <span class="d-inline-block average-rating">5</span>
                                            </div>
                                                                                                                                                <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp45.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp300.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                85% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                                                    </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">
                                                                                    <div class="last-updated">Update terakhir Mon, 25-Sep-2023</div>
                                        
                                        <div class="course-title">
                                            <a href="uhuy7.html">Kelas hidrolika memberikan pemahaman tentang prinsip-prinsip aliran air dan penerapannya dalam berbagai sistem teknik sipil. Anda akan mempelajari konsep dasar hidrolika, perhitungan aliran, dan aplikasi praktis dalam proyek-proyek irigasi, drainase, dan pengelolaan air lainnya.</a>
                                        </div>
                                        <div class="course-meta">
                                            <span class=""><i class="fas fa-play-circle"></i>
                                                60 Pelajaran                                            </span>
                                            <span class=""><i class="far fa-clock"></i>
                                                04:07:40 Jam                                            </span>
                                            <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                        </div>
                                        <div class="course-subtitle"> </div>
                                        <div class="what-will-learn">
                                            <ul>
                                                                                                    <li>Peserta mampu mengoperasikan  serta merancang  di lapangan</li>
                                                                                                    <li>Peserta mampu lebih memahami tools/fitur pada beberapa sofware di hidrolika</li>
                                                                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                                                                                                                                <button type="button" class="btn-add add-to-cart-btn  big-cart-button-80" id="80" onclick="handleCartItems(this)">
                                                        Tambahkan ke keranjang                                                    </button>
                                                    <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="80"><i class="fas fa-heart"></i></button>
                                                                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="course-box-wrap">
                                <a href="uhuy8.html" class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img data-src="k3l.jfif" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                        </div>
                                        <div class="course-details">
                                            <h3 class="title">SPECIAL PROMO ||  Pelatihan k3l </h3>
                                            <p class="instructors">
                                                Denis Andreas                                            </p>
                                            <div class="rating">
                                                                                                                                                            <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                    <span class="d-inline-block average-rating">5</span>
                                            </div>
                                                                                                                                                <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp100.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp200.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                50% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                                                    </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">
                                                                                    <div class="last-updated">Update terakhir Sun, 07-jun-2024</div>
                                        
                                        <div class="course-title">
                                            <a href="uhuy8.html">SPECIAL PROMO || Pelatihan k3l</a>
                                        </div>
                                        <div class="course-meta">
                                            <span class=""><i class="fas fa-play-circle"></i>
                                                18 Pelajaran                                            </span>
                                            <span class=""><i class="far fa-clock"></i>
                                                02:32:23 Jam                                            </span>
                                            <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                        </div>
                                        <div class="course-subtitle">Fokus kursus ini adalah pada pentingnya kesehatan dan keselamatan kerja dalam industri konstruksi. Anda akan mempelajari peraturan K3, identifikasi bahaya, penilaian risiko, dan penerapan praktik keselamatan untuk menciptakan lingkungan kerja yang aman. </div>
                                        <div class="what-will-learn">
                                            <ul>
                                                                                                    <li>Pekerja mamahami bahaya dan risiko dari pekerjaannya.</li>
                                                                                                    <li>Pekerja memahami tindakan pencegahan agar tidak terjadi kecelakaan.</li>
                                                                                                    <li>Pekerja memahami hak dan kewajibannya khususnya dalam peraturan terkait dengan Keselamatan dan kesehatan kerja.</li>
                                                                                                    
                                                                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                                                                                                                                <button type="button" class="btn-add add-to-cart-btn  big-cart-button-30" id="30" onclick="handleCartItems(this)">
                                                        Tambahkan ke keranjang                                                    </button>
                                                    <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="30"><i class="fas fa-heart"></i></button>
                                                                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="course-box-wrap">
                                <a href="uhuy9.html" class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img data-src="hidrologi.jfif" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                        </div>
                                        <div class="course-details">
                                            <h3 class="title">SPECIAL PROMO ||Hidrologi dan Pengolahan DAS</h3>
                                            <p class="instructors">
                                                Denis Andreas                                            </p>
                                            <div class="rating">
                                                                                                                                                            <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                    <span class="d-inline-block average-rating">5</span>
                                            </div>
                                                                                                                                                <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp25.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp200.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                87% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                                                    </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">
                                                                                    <div class="last-updated">Update terakhir 07-jun-2024</div>
                                        
                                        <div class="course-title">
                                            <a href="uhuy9.html">SPECIAL PROMO || Hidrologi dan Pengolahan DAS</a>
                                        </div>
                                        <div class="course-meta">
                                            <span class=""><i class="fas fa-play-circle"></i>
                                                25 Pelajaran                                            </span>
                                            <span class=""><i class="far fa-clock"></i>
                                                02:48:11 Jam                                            </span>
                                            <span class=""><i class="fas fa-closed-captioning"></i>English</span>
                                        </div>
                                        <div class="course-subtitle">Kursus ini menawarkan pemahaman mendalam tentang hidrologi dan pengelolaan Daerah Aliran Sungai (DAS). Anda akan belajar tentang karakteristik DAS, analisis hidrologi, dan strategi pengelolaan DAS untuk mengurangi risiko banjir dan degradasi lingkungan.</div>
                                        <div class="what-will-learn">
                                            <ul>
                                                                                                    <li>Mampu membuat das pada sebuah sofware argics</li>
                                                                                                    <li>Mampu mencari curah hujan </li>
                                                                                                    <li>Mampu  mengolah tataguna lahan</li>
                                                                                                    <li>Mampu merancang sebuah das agar tidak terjadi banjir</li>
                                                                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                                                                                                                                <button type="button" class="btn-add add-to-cart-btn  big-cart-button-38" id="38" onclick="handleCartItems(this)">
                                                        Tambahkan ke keranjang                                                    </button>
                                                    <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="38"><i class="fas fa-heart"></i></button>
                                                                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="course-box-wrap">
                                <a href="uhuy10.html" class="has-popover">
                                    <div class="course-box">
                                        <!-- <div class="course-badge position best-seller">Best seller</div> -->
                                        <div class="course-image">
                                            <img data-src="bangunan pantai.jfif" alt="" class="img-fluid img-box-courses img-responsive lozad">
                                        </div>
                                        <div class="course-details">
                                            <h3 class="title"> Bangunan Pelindung Pantai</h3>
                                            <p class="instructors">
                                                Farid Subkhan                                            </p>
                                            <div class="rating">
                                                                                                                                                            <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                                                                                <i class="fas fa-star filled"></i>
                                                                                                                                                    <span class="d-inline-block average-rating">5</span>
                                            </div>
                                                                                                                                                <!-- <div style="display: flex;justify-content:space-between ">
                                                            <div style="display: flex;justify-content:space-round"> -->
                                                    <div>
                                                        <label class="price">
                                                            Rp350.000,-                                                        </label>
                                                        <label class="price">
                                                            <small>
                                                                Rp1.250.000,-                                                            </small>
                                                        </label>
                                                    </div>
                                                                                                            <label class="price">
                                                            <label class="percent_disc">
                                                                72% OFF                                                            </label>
                                                        </label>
                                                                                                        <!-- </div>
                                                        </div> -->
                                                                                                                                    </div>
                                    </div>
                                </a>

                                <div class="webui-popover-content">
                                    <div class="course-popover-content">
                                                                                    <div class="last-updated">Update terakhir , 07-jun-2024</div>
                                        
                                        <div class="course-title">
                                            <a href="https://vocasia.id/home/course/digital-marketing/54">Bangunan Pelindung Pantai</a>
                                        </div>
                                        <div class="course-meta">
                                            <span class=""><i class="fas fa-play-circle"></i>
                                                8 Pelajaran                                            </span>
                                            <span class=""><i class="far fa-clock"></i>
                                                02:41:37 Jam                                            </span>
                                            <span class=""><i class="fas fa-closed-captioning"></i>Bahasa</span>
                                        </div>
                                        <div class="course-subtitle">Kelas ini fokus pada perancangan dan konstruksi bangunan pelindung pantai untuk mengatasi erosi dan melindungi garis pantai. Anda akan mempelajari teknik-teknik rekayasa pantai, desain struktur pelindung, dan metode implementasi yang berkelanjutan. 

                                            </div>
                                        <div class="what-will-learn">
                                            <ul>
                                                                                                    <li>mengetaui mutu dari pada sebuah bangunan pantai</li>
                                                                                                    <li>menghitung terjadinya keadaan back water</li>
                                                                                                    <li>menhitung terjadinya situasi gelombang pecah yang ber dampak pada bangunan </li>
                                                                                                    
                                                                                            </ul>
                                        </div>
                                        <div class="popover-btns">
                                                                                                                                                <button type="button" class="btn-add add-to-cart-btn  big-cart-button-54" id="54" onclick="handleCartItems(this)">
                                                        Tambahkan ke keranjang                                                    </button>
                                                    <button type="button" class="wishlist-btn " title="Add to wishlist" onclick="handleWishList(this)" id="54"><i class="fas fa-heart"></i></button>
                                                                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                                      
                                                                                                                                                        </div>
                            </div>
                        </a>
                    </div>
                        </div>
        <center>
            <div class="load-more mb-3" lastID="354" style="display: none;">
                <img src="https://vocasia.id/assets/frontend/default/img/loading.gif" />
            </div>
            <div class="btn-load-more mb-3">
                <button class="btn" style="background-color: #007791;color:white;border-radius: 20px;padding: 5px 20px" onclick="onScroll()">Lihat Lebih Banyak</button>
            </div>
        </center>
        </div>
</div>
<!-- </section> -->
    </div>
</div>
<!-- </div> -->

<div class="box-candidate-instructor">
    <img data-src="https://vocasia.id/assets/frontend/default/img/icon-instructor.png" class="lozad">
    <div class="mt-3 ui-text">
        <p class="first-line"> Daftar Menjadi Pengajar</p>
        <p for="">Buat Kursus Online Pertamamu dan Mengajar Ke Seluruh Pelajar di Indonesia Bersama Vocasia, Tanpa Dipungut Biaya Apapun</p>
        <a class="btn" href="https://vocasia.id/user">Mulai Mengajar</a>
    </div>
</div>

<div class="box-apps">
    <center>
        <p class="first-line">Belajar Lebih Nyaman Lewat Aplikasi</p>
        <p class="second-line">Download Aplikasi Vocasia Sekarang!</p>
        <div class="mt-4 back">
            <img class="ss-apps lozad" data-src="https://vocasia.id/assets/frontend/default/img/ss-apps.png" alt="" style="display: none;">
            <a href="https://play.google.com/store/apps/details?id=id.vocasia.vocasia" target="_BLANK">
                <img class="google-play lozad" data-src="https://vocasia.id/assets/frontend/default/img/google-play.png" alt="">
            </a>
        </div>
    </center>
</div>

<script type="text/javascript">
    var reff_code = '';

    function showHoverImage(id) {
        $('#' + id + '-image').hide();
        $('#' + id + '-hover').show();
        $('#' + id + '-text').css('color', '#ec5252');
    }

    function hideHoverImage(id) {
        $('#' + id + '-image').show();
        $('#' + id + '-hover').hide();
        $('#' + id + '-text').css('color', '#000');
    }

    function handleWishList(elem) {

        $.ajax({
            url: 'https://vocasia.id/home/handleWishList',
            type: 'POST',
            data: {
                course_id: elem.id
            },
            success: function(response) {
                if (!response) {
                    window.location.replace("https://vocasia.id/login");
                } else {
                    if ($(elem).hasClass('active')) {
                        $(elem).removeClass('active')
                    } else {
                        $(elem).addClass('active')
                    }
                    $('#wishlist_items').html(response);
                }
            }
        });
    }

    function handleCartItems(elem) {
        url1 = 'https://vocasia.id/home/handleCartItems';
        url2 = 'https://vocasia.id/home/refreshWishList';
        $.ajax({
            url: url1,
            type: 'POST',
            data: {
                course_id: elem.id,
                reff_code: reff_code
            },
            success: function(response) {
                $('#cart_items').html(response);
                if ($(elem).hasClass('addedToCart')) {
                    $('.big-cart-button-' + elem.id).removeClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("Tambahkan ke keranjang");
                    toastr.error('Kursus dihapus dari keranjang');
                } else {
                    $('.big-cart-button-' + elem.id).addClass('addedToCart')
                    $('.big-cart-button-' + elem.id).text("Ditambahkan ke keranjang");
                    $('.webui-popover').removeClass('in');
                    $('.webui-popover').addClass('out');
                    showAjaxModal('https://vocasia.id/modal/pop/cart_items_popup/', 'Ditambahkan ke keranjang')
                }
                $.ajax({
                    url: url2,
                    type: 'POST',
                    success: function(response) {
                        $('#wishlist_items').html(response);
                    }
                });
            }
        });
    }

    function handleEnrolledButton() {
        $.ajax({
            url: 'https://vocasia.id/home/isLoggedIn',
            success: function(response) {
                if (!response) {
                    window.location.replace("https://vocasia.id/login");
                }
            }
        });
    }
    var height = $(window).height();

    window.addEventListener('resize', setWindowSize);

    function setWindowSize() {
        if ($(this).height() != height) {
            height = $(this).height();
        }
    }

    var request;
    var top;

    function onScroll() {
        var lastID = $('.load-more').attr('lastID');
        if (lastID != 0) {
            if (request) {
                request.abort();
            }
            request = $.ajax({
                type: 'POST',
                url: 'https://vocasia.id/home/load_more_data',
                data: 'id=' + lastID,
                beforeSend: function() {
                    $('.load-more').show();
                    $('.btn-load-more').hide();
                },
                success: function(html) {
                    $('.load-more').remove();
                    $('.parent').append(html);
                    $('.load-more').hide();
                    $('.btn-load-more').show();
                }
            });
        } else {
            $('.load-more').show();
            $('.btn-load-more').hide();
            $('.load-more').remove();
        }

    }
</script><style>
    .menu-text {
        font-size: 12px;
    }

    a {
        color: #000;
    }
</style>
<footer class="footer-area d-print-none" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">
    <div class="container-xl">
        <div class="row">
            <div class="col-md-7">
                <!-- <ul class="nav footer-menu" style="padding-top: 20px;">
                            <li class="nav-item">
                                <a class="nav-link" href=""><img style="margin-top: -11px !important;" src="https://vocasia.id/uploads/system/logo-dark.png" alt="" class="d-inline-block" width="110"></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://vocasia.id/" target="_blank">Copyright © 2019 Vocasia.id</a>
                            </li>
                        </ul> -->
                <div class="row">
                    <div class="col-md-6 mt-3 about-footer"> <label for="" style="color: #007791;font-weight:700;font-size:16px"> Tentang</label>
                        <div class="menu-text row">
                            <div class="col-md-6"><a href="https://vocasia.id/home/about_us"> Tentang Kami</a></div>
                            <div class="col-md-6"><a href="https://vocasia.id/home/contact"> Kontak Kami</a></div>
                        </div>
                        <div class="menu-text row">
                            <div class="col-md-6"><a href="https://vocasia.id/faq"> <?//= get_phrase('help') ?>FAQ</a></div>
                            <div class="col-md-6"><a href="#"> Karir</a></div>
                        </div>
                        <div class="menu-text row">
                            <div class="col-md-6"><a href="#"> Jadi Mitra</a></div>
                            <!-- <div class="col-md-6">Kontak Kami</div> -->
                        </div>
                    </div>
                    <div class="col-md-6 mt-3 others-footer"><label for="" style="color: #007791;font-weight:700;font-size:16px"> Lainnya</label>
                        <div class="menu-text row">
                            <div class="col-md-6"><a href="https://vocasia.id/home/terms_and_condition"> Syarat dan Ketentuan</a></div>
                            <div class="col-md-6"><a href="https://vocasia.id/blog"> Blog</a></div>
                        </div>
                        <div class="menu-text row">
                            <div class="col-md-6"><a href="https://vocasia.id/home/privacy_policy"> Kebijakan Privasi</a></div>
                            <div class="col-md-6"><a href="#"> Verifikasi Sertifikat</a></div>
                        </div>
                        <div class="menu-text row">
                            <div class="col-md-6"><a href="https://vocasia.id/home/press_kit"> Press Kit</a></div>
                            <!-- <div class="col-md-6">Kontak Kami</div> -->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <!-- <ul class="nav justify-content-md-end footer-menu" style="padding-top: 20px;">
                            <li class="nav-item">
                                <a class="nav-link" href="https://vocasia.id/home/about_us">Tentang</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://vocasia.id/home/contact">
                                    Kontak                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://vocasia.id/home/privacy_policy">Kebijakan Privasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="https://vocasia.id/home/terms_and_condition">Syarat dan Ketentuan</a>
                            </li>
                        </ul> -->
                <div class="justify-content-md-end">
                    <div class="row mt-3 footer-content">
                        <table style="text-align: center;margin: auto">
                            <tr style="height: 50px;">
                                <td><label for="" style="color: #007791;font-weight:700;font-size:16px"> Segera</label></td>
                                <td><label for="" style="color: #007791;font-weight:700;font-size:16px"> Segera</label></td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- <a href="https://play.google.com/store/apps/details?id=id.vocasia.vocasia"> -->
                                    <a href="#">
                                        <img class="lozad" data-src="https://vocasia.id/assets/frontend/default/img/google-play.png" alt="" height="50">
                                    </a>
                                </td>
                                <td>
                                    <a href="#">
                                        <img class="lozad" data-src="https://vocasia.id/assets/frontend/default/img/app-store.png" alt="" height="50">
                                    </a>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-5 cr-footer">
            <div class="col-md-6">
                &copy; 2024 Vocasia. All Rights Reserved
            </div>
            <div class="col-md-6">
                <div class="footer-content">
                    <a href="https://api.whatsapp.com/send?phone=6282211110086">
                        <img class="lozad" data-src="https://vocasia.id/assets/frontend/default/img/icon-wa.png" alt="">
                        <label style="color:black"> +62 822 1111 0086 (08:00 - 17:00)</label>
                    </a>
                    <a href="https://www.instagram.com/vocasia/">
                        <img class="lozad" style="margin-left: 5px;" data-src="https://vocasia.id/assets/frontend/default/img/icon-ig.png" height="30" alt="">
                    </a>
                    <a href="https://www.linkedin.com/company/vocasia">
                        <img class="lozad" style="margin-left: 5px;" data-src="https://vocasia.id/assets/frontend/default/img/icon-linkedin.png" height="30" alt="">
                    </a>
                </div>
            </div>
        </div>
        <!-- Load Facebook SDK for JavaScript -->
        <!-- <div id="fb-root"></div>
        <script>
            window.fbAsyncInit = function() {
                FB.init({
                    xfbml: true,
                    version: 'v9.0'
                });
            };

            (function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s);
                js.id = id;
                js.src = 'https://connect.facebook.net/id_ID/sdk/xfbml.customerchat.js';
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));
        </script> -->

        <!-- Your Chat Plugin code -->
        <!-- <div class="fb-customerchat" attribution=setup_tool page_id="296901900995347" logged_in_greeting="Halo, mau mengobrol dengan kami?" logged_out_greeting="Halo, mau mengobrol dengan kami?">
        </div> -->
</footer>

<div class="modal fade" id="paymentModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content payment-in-modal">
            <div class="modal-header">
                <p class="modal-title">Checkout!</p>
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <form action="https://vocasia.id/home/paypal_checkout" method="post">
                            <input type="hidden" class="total_price_of_checking_out" name="total_price_of_checking_out" value="">
                            <button type="submit" class="btn btn-default paypal" >Paypal</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form action="https://vocasia.id/home/stripe_checkout" method="post">
                            <input type="hidden" class="total_price_of_checking_out" name="total_price_of_checking_out" value="">
                            <button type="submit" class="btn btn-primary stripe" >Stripe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><!-- Modal -->

<!-- Modal -->
<div class="modal fade multi-step" id="EditRatingModal" tabindex="-1" role="dialog" aria-hidden="true" reset-on-close="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content edit-rating-modal">
            <div class="modal-header">
                <p class="modal-title step-1" data-step="1">Langkah 1</p>
                <p class="modal-title step-2" data-step="2">Langkah 2</p>
                <p class="m-progress-stats modal-title">
                    &nbsp;of&nbsp;<span class="m-progress-total"></span>
                </p>

                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="m-progress-bar-wrapper">
                <div class="m-progress-bar">
                </div>
            </div>
            <div class="modal-body step step-1">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-box">
                                <p class="rating-title">Bagaimana Kamu menilai kursus ini secara keseluruhan?</p>
                                <fieldset class="your-rating">

                                    <input type="radio" id="star5" name="rating" value="5" />
                                    <label class="full" for="star5"></label>

                                    <!-- <input type="radio" id="star4half" name="rating" value="4 and a half" />
                                            <label class="half" for="star4half"></label> -->

                                    <input type="radio" id="star4" name="rating" value="4" />
                                    <label class="full" for="star4"></label>

                                    <!-- <input type="radio" id="star3half" name="rating" value="3 and a half" />
                                            <label class="half" for="star3half"></label> -->

                                    <input type="radio" id="star3" name="rating" value="3" />
                                    <label class="full" for="star3"></label>

                                    <!-- <input type="radio" id="star2half" name="rating" value="2 and a half" />
                                            <label class="half" for="star2half"></label> -->

                                    <input type="radio" id="star2" name="rating" value="2" />
                                    <label class="full" for="star2"></label>

                                    <!-- <input type="radio" id="star1half" name="rating" value="1 and a half" />
                                            <label class="half" for="star1half"></label> -->

                                    <input type="radio" id="star1" name="rating" value="1" />
                                    <label class="full" for="star1"></label>

                                    <!-- <input type="radio" id="starhalf" name="rating" value="half" />
                                            <label class="half" for="starhalf"></label> -->

                                </fieldset>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id="course_thumbnail_1" alt="">
                                    <div class="card-body">
                                        <p class="card-title" class="course_title_for_rating" id="course_title_1"></p>
                                        <p class="card-text" id="instructor_details">

                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-body step step-2">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="modal-rating-comment-box">
                                <p class="rating-title">Tulis Ulasan Publik</p>
                                <textarea id="review_of_a_course" name="review_of_a_course" placeholder="Jelaskan pengalaman Kamu apa yang kamu dapatkan dari Kursus dan sorotan bermanfaat lainnya. What did the instructor do well and what could use some improvement?" maxlength="65000" class="form-control"></textarea>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="modal-course-preview-box">
                                <div class="card">
                                    <img class="card-img-top img-fluid" id="course_thumbnail_2" alt="">
                                    <div class="card-body">
                                        <p class="card-title" class="course_title_for_rating" id="course_title_2"></p>
                                        <p class="card-text">
                                            -
                                            admin vocasia                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <input type="hidden" name="course_id" id="course_id_for_rating" value="">
            <div class="modal-footer">
                <button type="button" class="btn btn-primary next step step-1" data-step="1" onclick="sendEvent(2)">Selanjutnya</button>
                <button type="button" class="btn btn-primary previous step step-2 mr-auto" data-step="2" onclick="sendEvent(1)">Sebelumnya</button>
                <button type="button" class="btn btn-primary publish step step-2" onclick="publishRating($('#course_id_for_rating').val())" id="">Terbitkan</button>
            </div>
        </div>
    </div>
</div><!-- Modal -->

<div class="wa-cs">
    <a href="https://web.whatsapp.com/" target="_BLANK">
        <img src="https://vocasia.id/uploads/system/cs-wa.png" style="" alt="">
    </a>
</div>


<script type="text/javascript">
    function publishRating(course_id) {
        var review = $('#review_of_a_course').val();
        var starRating = 0;
        $('input:radio[name="rating"]:checked').each(function() {
            starRating = $('input:radio[name="rating"]:checked').val();
        });

        $.ajax({
            type: 'POST',
            url: 'https://vocasia.id/home/rate_course',
            data: {
                course_id: course_id,
                review: review,
                starRating: starRating
            },
            success: function(response) {
                console.log(response);
                $('#EditRatingModal').modal('hide');
                location.reload();
            }
        });
    }
</script><script src="https://vocasia.id/assets/frontend/default/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/vendor/jquery-3.2.1.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/popper.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/bootstrap.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/slick.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/select2.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/tinymce.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/multi-step-modal.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/jquery.webui-popover.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/jwplatform.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/main.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/nestable.js"></script>
<script src="https://vocasia.id/assets/global/toastr/toastr.min.js"></script>
<!-- <script src="https://vocasia.id/assets/frontend/default/js/jquery.form.js" integrity="sha384-FzT3vTVGXqf7wRfy8k4BiyzvbNfeYjK+frTVqZeNDFl8woCbF0CYG6g2fMEFFo/i" crossorigin="anonymous"></script> -->
<script src="https://vocasia.id/assets/frontend/default/js/bootstrap-tagsinput.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/custom.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/html2canvas.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/FileSaver.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/jspdf.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/infinite-scroll.pkgd.min.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/jquery-listslider.js"></script>
<script src="https://vocasia.id/assets/frontend/default/js/splide.min.js"></script>
<script src="https://vocasia.id/assets/backend/js/vendor/summernote-bs4.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>
<script src="https://vocasia.id/assets/backend/js/vendor/jquery.dataTables.min.js"></script>
<script src="https://vocasia.id/assets/backend/js/vendor/dataTables.bootstrap4.js"></script>
<script src="https://vocasia.id/assets/backend/js/vendor/dataTables.responsive.min.js"></script>
<script src="https://vocasia.id/assets/backend/js/vendor/dataTables.buttons.min.js"></script>
<script src="https://vocasia.id/assets/backend/js/pages/datatable-initializer.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.bootstrap4.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.1.0/js/buttons.html5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="//cdn.rawgit.com/ashl1/datatables-rowsgroup/v1.0.0/dataTables.rowsGroup.js"></script>


<!-- SHOW TOASTR NOTIFIVATION -->

<script type="text/javascript">
    function showAjaxModal(url, header) {
        // SHOWING AJAX PRELOADER IMAGE
        jQuery('#modal_ajax .modal-body').html('<div style="text-align:center;margin-top:200px;"><img src="https://vocasia.id/assets/backend/images/loader.gif" height="20" /></div>');

        // LOADING THE AJAX MODAL
        jQuery('#modal_ajax').modal('show', {
            backdrop: 'true'
        });

        // SHOW AJAX RESPONSE ON REQUEST SUCCESS
        $.ajax({
            url: url,
            success: function(response) {
                jQuery('#modal_ajax .modal-body').html(response);
                jQuery('#modal_ajax .modal-title').html(header);
            }
        });
    }
</script>

<!-- (Ajax Modal)-->
<div class="modal fade" id="modal_ajax">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <p class="modal-title"></p>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>

            <div class="modal-body" style="overflow:auto;">

            </div>

            <!-- <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div> -->
        </div>
    </div>
</div>

<script type="text/javascript">
    function confirm_modal(delete_url) {
        jQuery('#alert-modal').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('update_link').setAttribute('href', delete_url);
    }
</script>

<!-- Info Alert Modal -->
<div id="alert-modal" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-information h1 text-info"></i>
                    <h4 class="mt-2">Peringatan!</h4>
                    <p class="mt-3">Kamu Yakin?</p>
                    <button type="button" class="btn btn-info my-2" data-dismiss="modal">Batal</button>
                    <a href="#" id="update_link" class="btn btn-danger my-2">Lanjutkan</a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<script type="text/javascript">
    function confirmCodeRefModal(delete_url) {
        jQuery('#modal_ajax').modal('hide');
        jQuery('#alert').modal('show', {
            backdrop: 'static'
        });
        document.getElementById('update_link').setAttribute('href', delete_url);
    }
</script>

<!-- Info Alert Modal -->
<div id="alert" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-body p-4">
                <div class="text-center">
                    <i class="dripicons-information h1 text-info"></i>
                    <h4 class="mt-4">Kode referral salah!</h4>
                    <p class="mt-3">Apakah tetap ingin melanjutkan?</p>
                    <a href=":javascript" onclick="showAjaxModal('https://vocasia.id/modal/pop/affiliate_referral_popup', 'Kode Referral')" class="btn btn-info my-2" data-dismiss="modal">Batal</a>
                    <a href="#" id="update_link" class="btn btn-danger my-2">Lanjutkan</a>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal --><script type="text/javascript">
function toggleRatingView(course_id) {
  $('#course_info_view_'+course_id).toggle();
  $('#course_rating_view_'+course_id).toggle();
  $('#edit_rating_btn_'+course_id).toggle();
  $('#cancel_rating_btn_'+course_id).toggle();
}

function publishRating(course_id) {
    var review = $('#review_of_a_course_'+course_id).val();
    var starRating = 0;
    starRating = $('#star_rating_of_course_'+course_id).val();
    if (starRating > 0) {
        $.ajax({
            type : 'POST',
            url  : 'https://vocasia.id/home/rate_course',
            data : {course_id : course_id, review : review, starRating : starRating},
            success : function(response) {
                location.reload();
            }
        });
    }else{

    }
}

// $(document).ready(function() {
//   get_notif();
// });


// function get_notif(){
//     $.ajax({
//     url: 'https://vocasia.id/home/get_notif',
//     type: 'POST',
//   })
//   .done(function(response) {
//     $('#notification').html(response);
//   });
// }

</script>
</body>
<script type="text/javascript">
	setReffCodex();

	function setReffCodex() {

		var reff_code = '';
		var urlSaveReffCode = 'https://vocasia.id/home/save_reff_code';

		if (reff_code != "") {
			$.ajax({
				url: urlSaveReffCode,
				type: 'POST',
				data: {
					reff_code: reff_code
				},
				success: function(response) {}
			})
		}
	}
</script>

</html>

        <a href="logout.php" class="btn btn-warning">Logout</a>
    </div>
</body>
</html>