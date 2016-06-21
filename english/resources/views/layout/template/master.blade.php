<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>@yield('title')</title>
	<script type="text/javascript" src="style/js/jquery-1.12.2.min.js"></script>
	<script type="text/javascript" src="style/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="style/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style/mystyle.css">
</head>
<body>
	<div id = "wrapper">
			<div id = "header">
				<div class= "marqee">
					@include('layout.template.marquee',['mar_content'=>'This is a good place to learn English.Thank you for visiting us!!!'])
				</div>
			<div class = "main-nav">
				<div class="container">
					<div class="row">
						<ul class="nav nav-pills">
							<li class="active"><a href=""><i class="glyphicon glyphicon-home"></i> Home</a></li>
							<li><a href="">Levels</a> </li>
							<li><a href="">Category</a></li>
							<li><a href="">About</a></li>
						</ul>
					</div>
				</div>
			</div>
			<div id = "sidebar">
						<div class="slider">
							<div class="container">
								<div class="row">
									<div class="col-sm-12">
									<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<!-- Indicators -->
									<ol class="carousel-indicators">
										<li data-target="#carousel-example-generic" data-slide-to="0"></li>
										<li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
										<li data-target="#carousel-example-generic" data-slide-to="2"></li>
										<li data-target="#carousel-example-generic" data-slide-to="3"></li>
									</ol>
									<!-- Wrapper for slides -->
									<div class="carousel-inner">
										<div class="item active">
											<img src="image/english1.jpg" alt="" height="200px">
										</div>
										<div class="item">
											<img src="image/english2.jpg">
										</div>
										<div class="item">
											<img src="image/english3.jpg">
										</div>
										<div class="item">
											<img src="image/english4.jpg">
										</div>
									</div>
									<!-- Controls -->
									<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
									<span class="glyphicon glyphicon-chevron-left"></span>
									</a>
									<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
									<span class="glyphicon glyphicon-chevron-right"></span>
									</a>
									</div>
									</div>
								</div>
							</div>
					</div><!-- .slider -->
				</div>	

		</div>
		<div id = "content">
			@yield('noidung')
		</div>
		<div class="footer-custom">
				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="title">
								<h3>CONTATS</h3>
								<div class="line"></div>
							</div>
							<div class="contact-us">
								<div class="item">
									<div class="icon">
										<i class="glyphicon glyphicon-map-marker"></i>
									</div>
									<div class="info">
										22 Nguyen Phi Khanh,Da Nang City,Viet Nam
									</div>
								</div>

								<div class="item">
									<div class="icon">
										<i class="glyphicon glyphicon-phone"></i>
									</div>
									<div class="info">
										+(84) 186 314 8857
									</div>
								</div>

								<div class="item">
									<div class="icon">
										<i class="glyphicon glyphicon-envelope"></i>
									</div>
									<div class="info">
										batinsttt@gmail.com
									</div>
								</div>

								<div class="item">
									<div class="icon">
										<i class="glyphicon glyphicon-user"></i>
									</div>
									<div class="info">
										LAngle
									</div>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="title">
								<h3>COLLABORATE</h3>
								<div class="line"></div>
							</div>
							<div class="content">
								<div class="info">
										<a href="">Hello Chao</a>
								</div>
								<div class="info">
										<a href="https://topica.edu.vn/">Topica</a>
								</div>
								<div class="info">
										<a href="http://langmaster.edu.vn/">LangMaster</a>
								</div>
								<div class="info">
										<a href="http://www.tienganh123.com/">TiengAnh123</a>
								</div>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="title">
								<h3>LIBRARY</h3>
								<div class="line"></div>
							</div>
							<div class="content">
								<div class="info">
										<a href="">Video</a>
								</div>
								<div class="info">
										<a href="">Image</a>
								</div>
								<div class="info">
										<a href="">Master English</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-copyright">
				<div class="container">
					<div class="row">
						<div class="col-sm-12"><a href="">COPY &copy; RIGHT 2016</a></div>
					</div>
				</div>
			</div>
	</div>
</body>
</html>