<?php 
$menuNo=[2,1];
include "../../include/header.php"; 
?>
<script type="text/javascript">
    // 달력 script
    $(document).ready(function() {
        $("#date_select").click(function(){
            var StartDate = $("#start_date").val();
            var EndDate = $("#end_date").val();
            TwoDatseSelectLayer(StartDate,EndDate);
        })

        var today = new Date();
        var tomorrow = new Date(Date.parse(today) + (1000 * 60 * 60 * 24));

        $("#start_date").datepicker({
            dateFormat: "yy-mm-dd",
            showOtherMonths: true,
            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
            monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
            monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
            buttonText: "",
            minDate: today,
            onClose: function( selectedDate ) {
            }         
        });

        $(" #end_date").datepicker({
            //showOn: "both",  // 버튼 이미지 나오게 하기
            dateFormat: "yy-mm-dd",
            //buttonImage: "/asset/img/icon/icon-calendar.png",
            //buttonImageOnly: true,
            showOtherMonths: true,
            dayNamesMin: ['일', '월', '화', '수', '목', '금', '토'],
            monthNamesShort: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
            monthNames: ['1月', '2月', '3月', '4月', '5月', '6月', '7月', '8月', '9月', '10月', '11月', '12月'],
            buttonText: "Select date",
            minDate: tomorrow
        });
        
    });
</script>

<div class="content-wrap">
    <?php  include "../../include/menu.php"; ?>

    <div class="sub-conts-wrap">
        <div class="wrap">
            <h1>주문목록</h1>

            <!-- search Form start -->
            <div class="search-wrap">
                <form name="searchForm" accept-charset="utf-8" method="get">
                    <ul>
                        <li class="title">기준날짜</li>
                        <li class="inp-box">
                            <div class="datepic-box">
                                <input type="text" class="picker format-date" name="start_date" id="start_date"  placeholder="YYYY-MM-DD" maxlength="10">
                                ~
                                <input type="text" class="picker format-date" name="end_date" id="end_date"  placeholder="YYYY-MM-DD" maxlength="10">
                                <img src="/asset/img/icon/icon-calendar.png" alt="" id="date_select">
                            </div>
                        </li>
                        
                        <li class="title">주문상태</li>
                        <li class="inp-box">
                            <div class="radio-box-wrap">
                                <div class="radiobox">
                                    <input id="all" class="radio-custom" name="orderStatus" type="radio" checked>
                                    <label for="all" class="radio-custom-label">전체</label>
                                </div>
                                <div class="radiobox">
                                    <input id="register" class="radio-custom" name="orderStatus" type="radio">
                                    <label for="register" class="radio-custom-label">접수</label>
                                </div>
                                <div class="radiobox">
                                    <input id="orderCnfrm" class="radio-custom" name="orderStatus" type="radio">
                                    <label for="orderCnfrm" class="radio-custom-label">주문확인</label>
                                </div>
                            </div>
                        </li>
                        
                        <li class="title">검색</li>
                        <li class="inp-box">
                            <div class="search-box">
                                <input type="text" name="" id="" placeholder="검색어를 입력하세요.">
                                <img src="/asset/img/icon/icon-search.png" alt="">
                            </div>
                        </li>
                    </ul>

                    <div class="button-center-box">
                        <button type="button" class="button linesky">설정 초기화</button>
                        <button type="button" class="button skyblue">검색</button>
                    </div>
                </form>
            </div>
            <!-- search Form end -->

            <!-- List area start -->
            <div class="table-wrap">
                <!-- button Top start -->
                <div class="button-top-box">
                    <div class="left-box-top">
                        <div class="select-box">
                            <select name="">
                                <option value="10">10</option>
                                <option value="35">35</option>
                                <option value="70">70</option>
                                <option value="100" selected>100</option>
                            </select>
                        </div>
                        
                        <a class="button check-box linesky">
                            <div class="checkbox-text-item">
                                <input type="checkbox" id="selection" name="selection" value="" />
                                <label for="selection">
                                    <span><!-- This span is needed to create the "checkbox" element --></span>선택항목
                                </label>
                            </div>
                        </a>

                        <a class="button light-blue">주문확인 변경</a>
                        <a class="button lime">출고지연 변경</a>
                    </div>

                    <div class="right-box-top">
                        <a class="button orange">재입고 변경</a>
                        <a class="excel"><img src="/asset/img/common/btn_excel.png" alt=""></a>
                    </div>
                </div>
                <!-- button Top end -->

                <!-- Table start -->
                <div class="table-box">
                    <table class="table-basic" style="width: 1958px;">
                        <colgroup>
                            <col width="40px"> <!--/* 체크박스 */-->

                            <col width="64px"> <!--/* No */-->
                            <col width="80px"> <!--/* 상태 */-->
                            <col width="130px"> <!--/* 접수일자 */-->
                            <col width="130px"> <!--/* 완료일자 */-->
                            <col width="130px"> <!--/* 주문번호 */-->

                            <col width="150px"> <!--/* 배송지명 */-->
                            <col width="490px"> <!--/* 배송지 주소 */-->
                            <col width="100px"> <!--/* 구매자명 */-->
                            <col width="120px"> <!--/* 연락처 */-->
                            <col width="120px"> <!--/* 공급가액 */-->

                            <col width="100px"> <!--/* 세액 */-->
                            <col width="120px"> <!--/* 결제금액 */-->
                            <col width="80px"> <!--/* 주문 수 */-->
                            <col width="90px"> <!--/* 거래내역표 */-->
                        </colgroup>
                        <thead>
                            <tr>
                                <th>&nbsp;</th>

                                <th>No</th>
                                <th>상태</th>
                                <th>접수일자</th>
                                <th>완료일자</th>
                                <th>주문번호</th>
                                
                                <th>배송지명</th>
                                <th>배송지 주소</th>
                                <th>구매자명</th>
                                <th>연락처</th>
                                <th>공급가액</th>
                                
                                <th>세액</th>
                                <th>결제금액</th>
                                <th>주문 수</th>
                                <th>거래내역표</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="check-box">
                                        <div class="checkbox">
                                            <input type="checkbox" id="nologin" name="ck_auto" value="1">
                                            <label for="nologin"></label>
                                        </div>
                                    </div>
                                </td>

                                <td>01</td>
                                <td>접수</td>
                                <td>2023.12.01 13:00</td>
                                <td>2023.12.01 13:00</td>
                                <td>2313134242</td>

                                <td>카카오</td>
                                <td class="left">서울시 구로구 경인로 661, 신도림 1차푸르지오 101동 18층(신도림동, 핀포인트타워)</td>
                                <td>홍길동</td>
                                <td>010-3271-5555</td>
                                <td class="right">000,000,000원</td>

                                <td class="right">000,000원</td>
                                <td>000,000,000원</td>
                                <td>12</td>
                                <td>
                                    <a class="button text-link">보기</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="check-box">
                                        <div class="checkbox">
                                            <input type="checkbox" id="nologin" name="ck_auto" value="1">
                                            <label for="nologin"></label>
                                        </div>
                                    </div>
                                </td>

                                <td>02</td>
                                <td>지연</td>
                                <td>2023.12.01 13:00</td>
                                <td>2023.12.01 13:00</td>
                                <td>2313134242</td>

                                <td>카카오</td>
                                <td class="left">서울시 구로구 경인로 661, 신도림 1차푸르지오 101동 18층(신도림동, 핀포인트타워)</td>
                                <td>홍길동</td>
                                <td>010-3271-5555</td>
                                <td class="right">000,000,000원</td>

                                <td class="right">000,000원</td>
                                <td>000,000,000원</td>
                                <td>12</td>
                                <td>
                                    <a class="button text-link">보기</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                    <div class="paginate">
                        <a href="#;" class="first"><i class="prev-arrow-double"></i></a>
                        <a href="#;" class="prev"><i class="prev-arrow"></i></a>
                        
                        <a href="#;" class="active">1</a>
                        <a href="#;" class="">2</a>
                        <a href="#;" class="">3</a>
                        <a href="#;" class="">4</a>
                        <a href="#;" class="">5</a>
                        
                        <a href="#;" class="next"><i class="next-arrow"></i></a>
                        <a href="#;" class="last"><i class="next-arrow-double"></i></a>
                    </div>
                </div>
                <!-- Table end -->
            </div>
            <!-- List area end -->
        </div>
    </div>
</div>

<?php 
include "../../include/footer.php"; 
?>