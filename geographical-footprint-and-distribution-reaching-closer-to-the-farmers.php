<!DOCTYPE html>
<html lang="en" class="">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Geographic footprint and distribution</title>
	<?php  require("include/header-links.php"); ?>
</head>
<body class="mainhomePage">
	<div class="pagenav" id="pagenav">
		<a href="highlights-of-the-year-reflecting-a-year-of-achievements-expansion-and-progress.php ">
			<span>Highlights of the year-Reflecting a year of <br>achievements,expansion and progress</span>
			<img src="images/left-arrow.svg">
		</a>
		<a href="elevating-farm-productivity-with-a-superior-portfolio.php">
			<span>Product Portfolio -Elevating farm productivity <br>with a superior portfolio</span>
			<img src="images/right-arrow.svg">
		</a>	
	</div> 
	<?php  require("include/header.php"); ?>
	<div id="wrapper">
		
			<section class="inside-banner">
				<div class="reachingsldr owl-carousel owl-theme">
					<div class="item">
						<img src="images/reachingbnr1.png" class="img-fluid">
					</div>
					<div class="item">
						<img src="images/reachingbnr2.png" class="img-fluid">
					</div>
				</div>
			<!-- <div class="container">
				<div class="row">
					<div class="col-xl-6">
						<div class="inside-banner-text">
							<h6 class="small-head wow fadeInUp">Geographic footprint and distribution</h6>
							<h1 class="hm-head wow fadeInUp">Reaching closer to <span>the farmers</span></h1>
						</div>
					</div>
					<div class="col-xl-6">
						<div class="inside-banner-img wow zoomIn"><img class="img-fluid" src="images/geo-banner-img.webp"></div>
					</div>
				</div>
			</div> -->
		</section>


		<section class="breadTxt">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">     
						<div class="breadTxtLink">
							<a href="index.php">Home</a> &gt;
							<a href="#">Geographic footprint and distribution</a> 
						</div>
					</div>
				</div>
			</div>
		</section>

		
		<section class="inside-banner-btm">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<h5 class="wow fadeInUp" data-wow-offset="200">Urea production in India has typically been concentrated in the western and northern states. At Matix, we are changing the game, having set up the first-ever, largest single-train urea plant along with an extensive distribution targeting primarily the eastern and northeastern regions of India as well as the northern regions. A significant milestone, this venture has also opened the potential to expand the product range in non-urea fertilisers, and agri-related products and services.</h5>
						
					</div>
				</div>
			</div>
		</section>

		<div class="img-zoom-container">
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-7 col-12">
						<img id="myimage-new" src="images/map-2.svg" width="100%" height="100%" alt="map">
					</div>
					<div class="col-xl-5 col-lg-5 col-12">
<p class="selectstate">Select State</p>
<select name="area-select" id="area-select">
  <option value="area1">Assam </option>
  <option value="area2">Bihar </option>
  <option value="area3">Mumbai</option>
  <option value="area4">Odisha</option>
  <option value="area5">Punjab</option>
  <option value="area6">Uttar Pradesh</option>
  <option value="area7">West Bengal</option>
</select>
<div class="showmaparea">
<div class="area1">
	<img src="images/mapimg1.svg">
</div>
<div class="area2">
	<img src="images/mapimg2.svg">
</div>
<div class="area3">
	<img src="images/mapimg3.svg">
</div>
<div class="area4">
	<img src="images/mapimg4.svg">
</div>
<div class="area5">
	<img src="images/mapimg5.svg">
</div>
<div class="area6">
	<img src="images/mapimg6.svg">
</div>
<div class="area7">
	<img src="images/mapimg7.svg">
</div>
</div>
						<!-- <div id="myresult" class="img-zoom-result"></div> -->
					</div>
				</div>
			</div> 
		</div>

		<section class="further-reading">
			<div class="container">
				<div class="row">
					<div class="col-xl-12">
						<h3 class="hm-head">Further Reading</h3>
					</div>
					<div class="col-xl-4">
						<a href="elevating-farm-productivity-with-a-superior-portfolio.php">
							<h5>Product Portfolio -Elevating <span>farm productivity with</span> a superior</h5>
							<div class="f-arrow"><img src="svg/right-arrow.svg"></div>
						</a>
					</div>
					<div class="col-xl-4">
						<a href="cornerstones-of-our-enduring-success.php">
							<h5>Advantage Matix -Cornerstones <span>of our enduring success</span></h5>
							<div class="f-arrow"><img src="svg/right-arrow.svg"></div>
						</a>
					</div>
					<div class="col-xl-4">
						<a href="world-class-manufacturing-for-exceptional-quality-and-efficiencies.php">
							<h5>Manufacturing Competencies -<span>World-class manufacturing for</span> exceptionalquality and efficiencies</h5>
							<div class="f-arrow"><img src="svg/right-arrow.svg"></div>
						</a>
					</div>
				</div>
			</div>
		</section>



		<?php  require("include/footer.php"); ?>
	</div>
	<?php  require("include/footer-links.php"); ?>
	<script type="text/javascript">
const areaSelect = document.getElementById('area-select');
const showMapArea = document.querySelector('.showmaparea');

areaSelect.addEventListener('change', function() {
  const selectedArea = areaSelect.value;
  const allAreas = showMapArea.querySelectorAll('div');

  allAreas.forEach(function(area) {
    area.style.display = 'none';
  });

  const selectedAreaElement = document.querySelector(`.${selectedArea}`);
  if (selectedAreaElement) {
    selectedAreaElement.style.display = 'block';
  }
});

	</script>
</body>
</html>

