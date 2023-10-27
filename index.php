<?php 
$menuNo=[1,1];
include "include/header.php"; 
?>
<div class="content-wrap">
    <?php  include "include/menu.php"; ?>

    <div class="dash-board-wrap">
        <div class="wrap">
            <h1>양파 ON Main</h1>
            <h2><strong>‘신도림만나유통’</strong> 유통사님 오늘의 양파ON 주문을 확인해 주세요.
                <a href="#" class="refresh-box">10:15
                    <i class="icon-refresh">새로고침 아이콘</i>
                </a>
            </h2>

            <section class="main-section-first">
                <!-- 총주문 start -->
                <div class="total-order-box">
                    <div class="inner">
                        <div class="total-item">
                            <div class="order-item">
                                <div class="numb-box">
                                    <strong>10</strong>
                                </div>
                                <div class="text-item">총주문</div>
                            </div>
                        </div>
                        <div class="order-box">
                            <div class="order-item">
                                <div class="numb-box">
                                    <strong>1</strong>
                                    <span class="percent-item">10%</span>
                                </div>
                                <div class="text-item">접수</div>
                            </div>
                            
                            <div class="order-item">
                                <div class="numb-box">
                                    <strong>2</strong>
                                    <span class="percent-item">20%</span>
                                </div>
                                <div class="text-item">확인</div>
                            </div>
                            
                            <div class="order-item">
                                <div class="numb-box">
                                    <strong>2</strong>
                                    <span class="percent-item">20%</span>
                                </div>
                                <div class="text-item">출고지연</div>
                            </div>
                            
                            <div class="order-item">
                                <div class="numb-box">
                                    <strong>2</strong>
                                    <span class="percent-item">20%</span>
                                </div>
                                <div class="text-item">출고</div>
                            </div>
                            
                            <div class="order-item">
                                <div class="numb-box">
                                    <strong>2</strong>
                                    <span class="percent-item">20%</span>
                                </div>
                                <div class="text-item">완료</div>
                            </div>
                            
                            <div class="order-item">
                                <div class="numb-box">
                                    <strong>1</strong>
                                    <span class="percent-item">10%</span>
                                </div>
                                <div class="text-item">취소</div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- 총주문 end -->

                <!-- 미처리 항목 start -->
                <div class="unprcItems-box">
                    <div class="heading-box">
                        <div class="title-item">
                            <strong>현재포인트 : </strong>
                            <span>00000P (전일대비 +000)</span>
                        </div>
                    </div>
                    <div class="boby-box">
                        <div class="row-item first">
                            <div class="cell-item">미처리 항목 확인해주세요.</div>
                        </div>
                        <div class="row-item">
                            <div class="cell-item first">000</div>
                            <div class="cell-item second">접수(미확인)</div>
                        </div>
                        <div class="row-item">
                            <div class="cell-item first">000</div>
                            <div class="cell-item second">출고지연</div>
                        </div>
                        <div class="row-item">
                            <div class="cell-item first">000</div>
                            <div class="cell-item second">재입고</div>
                        </div>
                    </div>
                </div>
                <!-- 미처리 항목 end -->
            </section>
            
            <section class="main-section-second">
                <div class="inner">
                    <!-- 유통사 지표 start -->
                    <div class="dstrb-indct-box">
                        <div class="title-box-wrap">
                            <strong>9월 유통사 지표</strong>
                        </div>
                        <!-- 유통사 지표 start -->
                        <div class="face-earth-box">
                            <div class="row-item">
                                <ul>
                                    <li class="th-cell-item">주문건수</li>
                                    <li class="td-cell-item">
                                        <div class="box-item">
                                            <div class="first">취소</div>
                                            <div class="second">20</div>
                                            <div class="third">5%</div>
                                        </div>

                                        <div class="box-item">
                                            <div class="first">완료</div>
                                            <div class="second">250</div>
                                            <div class="third">95%</div>
                                        </div>
                                    </li>

                                    <li class="th-cell-item">매출액</li>
                                    <li class="td-cell-item">
                                        <div class="box-item">
                                            <div class="first">취소</div>
                                            <div class="second">256,000</div>
                                            <div class="third">7%</div>
                                        </div>

                                        <div class="box-item">
                                            <div class="first">완료</div>
                                            <div class="second">3,452,000</div>
                                            <div class="third">93%</div>
                                        </div>
                                    </li>
                                    
                                    <li class="th-cell-item">가맹점수</li>
                                    <li class="td-cell-item">
                                        <div class="box-item">
                                            <div class="first">신규</div>
                                            <div class="second">5</div>
                                            <div class="third">5%</div>
                                        </div>

                                        <div class="box-item">
                                            <div class="first">누적</div>
                                            <div class="second">30</div>
                                            <div class="third">95%</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- 유통사 지표 end -->
                    </div>
                    <!-- 유통사 지표 end -->

                    <!-- 일별 처리 현황 start -->
                    <div class="dlypr-stts-box">
                        <div class="title-box-wrap">
                            <strong>일별 처리 현황</strong>
                        </div>
                        
                        <div class="graph-box-wrap">
                            그래프 영역
                        </div>
                    </div>
                    <!-- 일별 처리 현황 end -->
                </div>
            </section>
            <!-- 월별 매출 추이 start -->
            <section class="main-section-third">
                <div class="inner">
                    <div class="monthly-sales-box">
                        <div class="title-box-wrap">
                            <strong>월별 매출 추이</strong>
                        </div>

                        <div class="graph-box-wrap">
                            그래프 영역
                        </div>
                    </div>
                </div>
            </section>
            <!-- 월별 매출 추이 end -->
        </div>
    </div>
</div>

<?php 
include "include/footer.php"; 
?>