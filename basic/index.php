<link rel="stylesheet" href="../main/css/jquery.bxslider.css">
	<script src="../main/js/jquery-1.8.3.min.js"></script>
	<script src="../main/js/jquery.bxslider.js"></script>

<?php
define('_INDEX_', true);
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if (G5_IS_MOBILE) {
    include_once(G5_THEME_MOBILE_PATH.'/index.php');
    return;
}

include_once(G5_THEME_PATH.'/head.php');
?>

<script>
$(document).ready(function(){
	$(".slide1").bxSlider({
	
	});

});
</script>

<div class="slide1">
	<div><img src="<? echo G5_THEME_IMG_URL?>/pc01.jpg" alt="galler01"></div>
	<div><img src="<? echo G5_THEME_IMG_URL?>/pc02.jpg" alt="galler02"></div>
	<div><img src="<? echo G5_THEME_IMG_URL?>/pc03.jpg" alt="galler03"></div>
</div>
		<style>
			.gallery_wrap{width:100%;}
			.gallery_wrap>ul{width:100%;overflow:hidden;}
			.gallery_wrap>ul> li{float:left; width:25%;}
		</style>

<div class="gallery_wrap">
	<ul>
		<li>
			<?echo latest('theme/basic','gallery',5,23);?>
		</li>
		<li >
			<?echo latest('theme/basic','notice',5,23);?>
		</li>
		<li>
			<?echo latest('theme/basic','qa',5,23);?>
		</li>
		<li >
			<?echo latest('theme/basic','free',5,23);?>
		</li>
	</ul>
</div>

<div>
<? echo latest('theme/domino_notice','free' , 4, 20);?>
</div>
			





<?php
include_once(G5_THEME_PATH.'/tail.php');
?>