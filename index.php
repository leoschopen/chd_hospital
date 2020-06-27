<?php
include_once './inc/config.inc.php';
include_once './inc/mysql.inc.php';
include_once './inc/header2.inc.php';

$link = connect();
$sql = 'select id from bingren';
$result = execute_sql($link,$sql);
$num_pati = mysqli_num_rows($result);

$sql = 'select id from doctor';
$result = execute_sql($link,$sql);
$num_doc = mysqli_num_rows($result);

$sql = 'select id from operation';
$result = execute_sql($link,$sql);
$num_ope = mysqli_num_rows($result);

$sql = 'select id from nurse';
$result = execute_sql($link,$sql);
$num_nur = mysqli_num_rows($result);
?>

 	<div class="hero-area">
 		<div class="hero-area-content text-center">
 			<div class="container">
 				<div class="row">
 					<div class="col-lg-12 wow fadeInUp animated" data-wow-delay=".3s">
 						<h6>CHD HOSPITAL 1.0</h6>
 						<h1>Let Hospital Management <br /> <b>Easier</b> </h1>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<!-- About Area-->

 	<div class="about-area section-padding">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-6">
 					<div class="about-left">
 						<img class="lazy-image loaded" src="assets/img/about-bg.jpg" alt="">
 					</div>
 				</div>
 				<div class="col-lg-6">
 					<div class="about-content">
 						<div class="section-title">
 							<h6>校医院简介</h6>
 							<h2>我们致力于为长大学子提供 <br><b>更好的服务</br></h2>
 						</div>

 						<a href="http://www.chd.edu.cn/" class="main-btn">Discover More</a>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<!-- Feature Area -->

 	<div class="feature-area">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-4 col-md-6 col-sm-6">
 					<div class="single-feature-item">
 						<div class="feature-icon">
 							<i class="flaticon-organization"></i>
 						</div>
 						<h5>简单的人员管理</h5>
 						<p>Easy staff management</p>

 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 col-sm-6">
 					<div class="single-feature-item">
 						<div class="feature-icon">
 							<i class="flaticon-money"></i>
 						</div>
 						<h5>便捷的信息查询</h5>
 						<p>Convenient information query</p>

 					</div>
 				</div>

 				<div class="col-lg-4 col-md-6 col-sm-6">
 					<div class="single-feature-item">
 						<div class="feature-icon">
 							<i class="flaticon-charity"></i>
 						</div>
 						<h5>精细化的服务方式</h5>
 						<p>Refined service methods</p>

 					</div>
 				</div>
 			</div>
 		</div>
 	</div>



 	<!-- Acheivement Area -->

 	<div class="achievement-area">
 		<div class="container">
 			<div class="row">
 				<div class="col-lg-3 col-md-3 col-sm-6">
 					<div class="single-counter-box">
 						<p class="counter-number"><span><?php echo $num_doc?></span></p>
 						<h6>在职医生</h6>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-3 col-sm-6">
 					<div class="single-counter-box">
 						<p class="counter-number"><span><?php echo $num_nur?></span></p>
 						<h6>在职护士</h6>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-3 col-sm-6">
 					<div class="single-counter-box">
 						<p class="counter-number"><span><?php echo $num_pati?></span></p>
 						<h6>今日病人</h6>
 					</div>
 				</div>
 				<div class="col-lg-3 col-md-3 col-sm-6">
 					<div class="single-counter-box">
 						<p class="counter-number"><span><?php echo $num_ope?></span></p>
 						<h6>待做手术</h6>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>

 	<div class="testimonial-slider-bg section-padding">
 		<div class="container">
 			<div class="row">
 				<div class="col-md-12">
 					<div class="team-carousel owl-carousel">


<?php
$sql = "SELECT * from doctor where date=CURRENT_DATE";
$result = execute_sql($link,$sql);
while($array=mysqli_fetch_assoc($result)){
print<<<a

						<div class="single-team-item">
						<h5>今日值班医生</h5>
                            <img src="assets/img/{$array['photo']}" alt="">
                            <div class="team-desc">
                                <i class="las la-quote-left"></i>
                                <p>{$array['description']}</p>
                            </div>
                            <div class="author-name">{$array['Name']}<span>{$array['education']}</span></div>
                        </div>
a; 
}                        
?>
 					</div>
 				</div>
 			</div>
 		</div>
 	</div>


 	<!-- Footer Area -->

 	<footer class="footer-area">
 		<div class="container">
 			<div class="footer-up">
 				<div class="row">
 					<div class="col-lg-3 col-md-6 col-sm-12">
 						<div class="logo">
 							<a class="navbar-brand" href="#"><img src="assets/img/logo-white.png" alt=""></a>
 						</div>
 						<p>长安大学校医院管理系统<br>CHD Hospital 1.0</p>

 						<div class="contact-info">
 							<h5>联系我们</h5>
							 <p>地址:中国西安市南二环路中段 <br> 61105120 </p>
 						</div>
 					</div>

 				</div>
 			</div>
 			<div class="footer-bottom">
 				<div class="row justify-content-center align-items-center">
 					<div class="col-lg-6 col-md-6 col-sm-12">
 						<p class="copyright-line">Copyright &copy; 2020.LEO WeiKeCai All rights reserved.</p>
 					</div>
 					<div class="col-lg-6 col-md-6 col-sm-12">
 						<p class="privacy"></p>
 					</div>
 				</div>
 			</div>
 		</div>
 	</footer>

 	<!-- Scroll Top Area -->

 	<a href="#top" class="go-top" style="display: block;"><i class="fa fa-angle-up"></i></a>


 	<!-- Popper JS -->
 	<script src="assets/js/popper.min.js"></script>
 	<!-- Bootstrap JS -->
 	<script src="assets/js/bootstrap.min.js"></script>
 	<!-- Wow JS -->
 	<script src="assets/js/wow.min.js"></script>
 	<!-- Way Points JS -->
 	<script src="assets/js/jquery.waypoints.min.js"></script>
 	<!-- Counter Up JS -->
 	<script src="assets/js/jquery.counterup.min.js"></script>
 	<!-- Owl Carousel JS -->
 	<script src="assets/js/owl.carousel.min.js"></script>
 	<!-- Isotope JS -->
 	<script src="assets/js/isotope-3.0.6-min.js"></script>
 	<!-- Magnific Popup JS -->
 	<script src="assets/js/magnific-popup.min.js"></script>
 	<!-- Sticky JS -->
 	<script src="assets/js/jquery.sticky.js"></script>
 	<!-- Progress Bar JS -->
 	<script src="assets/js/jquery.barfiller.js"></script>
 	<!-- Main JS -->
 	<script src="assets/js/main.js"></script>

 </body>

 </html>

