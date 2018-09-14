<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
?>

		<div class="bnr_section bnr_section" id="notice_area">
                <div class="bnr_notice">
                    <dl>
                        <dt><? echo $bo_subject;?></dt>
                        <dd>
							<ul id="noticeList">
								<li><a href="/bbs/newsView?idx=2040&amp;type=N">
									<span class="ico_notice"></span> 
								도미노피자 로그인&amp;수신동의 이벤트 당첨자 안내</a>
								</li>
								<li>
									<a href="/bbs/newsView?idx=2039&amp;type=N">
									<span class="ico_notice"></span> 
									도미노 파티카 10주년 기념 고객 대상 8월 이벤트 당첨자 안내</a>
								</li>
								<li><a href="/bbs/newsView?idx=2038&amp;type=N">
								<span class="ico_notice"></span> 
								도미노피자 개인정보 처리방침 개정 안내</a>
								</li>
							</ul>
						</dd>
					</dl>
					<a href="<?echo G5_BBS_URL ?>/board.php?bo_table=notice" class="btn_ico btn_more">더보기</a>
                </div>
            </div>