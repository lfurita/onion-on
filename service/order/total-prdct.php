<?php 
$menuNo=[2,3];
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
                        &nbsp;
                    </div>

                    <div class="right-box-top">
                        <a class="excel"><img src="/asset/img/common/btn_excel.png" alt=""></a>
                    </div>
                </div>
                <!-- button Top end -->

                <!-- Table start -->
                <div class="table-box">
                    <table class="table-basic">
                        <colgroup>
                            <col width="64px"> <!--/* No */-->
                            <col width="250px"> <!--/* 상품코드 */-->
                            <col width="250px"> <!--/* 이중바코드 */-->
                            <col width="500px"> <!--/* 상품명 */-->
                            <col width="100px"> <!--/* 수량 */-->
                            <col width="140px"> <!--/* 규격 */-->
                            <col width="140px"> <!--/* 과세구분 */-->
                            <col width="*"> <!--/* 기타 */-->
                        </colgroup>
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>상품코드</th>
                                <th>이중바코드</th>
                                <th>상품명</th>
                                <th>수량</th>
                                <th>규격</th>
                                <th>과세구분</th>
                                <th>기타</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>01</td>
                                <td>88012311212</td>
                                <td>88012311212</td>
                                <td>농협 깐 마늘</td>
                                <td>10</td>
                                <td>500g</td>
                                <td>과세/비과세</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>02</td>
                                <td>88012311212</td>
                                <td>88012311212</td>
                                <td>곰표 밀가루 강력분</td>
                                <td>20</td>
                                <td>3kg</td>
                                <td>과세/비과세</td>
                                <td>-</td>
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