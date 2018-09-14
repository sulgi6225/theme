<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

	<style>
		body{font-family: 'Roboto', sans-serif;}
		.wrap{width: 1200px;margin:0 auto;
			background: khaki;}
		.section{width: 950px;margin:0 auto;padding:40px 0;}
		.section:after{
			content: "";display: block;clear:both;}
		.section .section_title{
			float: left;width: 150px;}
		.section .section_contents{
			float: right;width: 800px;}

		.section .section_title h3{
			font-weight: bold;
			color: #333;
			font-size: 20px;}
		.section .section_title .more_btn{
			display: block;width: 23px;height: 23px;
			background: url(<?echo $latest_skin_url?>/img/more_btn.png) 0 -23px no-repeat;
			text-indent: -9999px;margin-top:14px;}
		.section .section_title .more_btn:hover{
			background-position: 0 0;
		}
		
		/*news list뉴스리스트*/
		.news_list:after{
			content: "";display: block;clear: both;}
		.news_list li{
			float: left;
			border-left: 1px solid lightgray;
			width: 200px;
			padding-left: 20px;}
		.news_list li:first-child{
			border-left:0;
			padding-right:30px;}
		.news_list li+li{padding-right:30px;}
		.news_list a{color:dimgray;}
		.news_list .news_title{
			font-size: 20px;
			height:84px;
			color:black;
			margin-bottom:37px;}
		.news_list .date{font-size: 15px;}
	</style>

			

<div class="wrap">
			<div class="section">
				
				<div class="section_title">
					<h3><? echo $bo_subject;?></h3>
					<a href="<?echo G5_BBS_URL ?>/board.php?bo_table=free" class="more_btn">more</a>
				</div>
				
				<div class="section_contents">
					<ul class="news_list">

					<? for($i=0;$i<count($list);$i++){ ?>
						<li><a href="<?echo $list[$i]['href'];?>">
							<h4 class="news_title">
							<? echo $list[$i]['subject'];?>
								
							</h4>
							<span class="date">
							<? echo $list[$i]['datetime2'];?>
							</span>
						</a></li>
						<?}?>
						<? if(count($list)==0){
					echo "<li>게시물이 없습니다.</li>";
					}
						?>


					</ul>
				</ul>
				</div>
			</div>
		</div>

		