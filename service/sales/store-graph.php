<?php 
$menuNo=[3,4];
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
            <h1>월별 - 그래프형</h1>

            <!-- search Form start -->
            <div class="search-wrap">
                <form name="searchForm" accept-charset="utf-8" method="get">
                    <ul>
                        <li class="title">기준월</li>
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
                                    <input id="rcptnDate" class="radio-custom" name="srchCrtr" type="radio">
                                    <label for="rcptnDate" class="radio-custom-label">접수일</label>
                                </div>
                                <div class="radiobox">
                                    <input id="cmpltDate" class="radio-custom" name="srchCrtr" type="radio" checked>
                                    <label for="cmpltDate" class="radio-custom-label">완료일</label>
                                </div>
                            </div>
                        </li>
                        
                        <li class="title">업무선택</li>
                        <li class="inp-box">
                            <div class="radio-box-wrap">
                                <div class="radiobox">
                                    <input id="onion" class="radio-custom" name="jobSlctn" type="radio">
                                    <label for="onion" class="radio-custom-label">양파온</label>
                                </div>
                                <div class="radiobox">
                                    <input id="martShp" class="radio-custom" name="jobSlctn" type="radio" checked>
                                    <label for="martShp" class="radio-custom-label">마트샵</label>
                                </div>
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
                        <a href="store-list.php" class="button tab ">
                            <i class="icon-list">리스트형 버튼</i>
                        </a>
                        <a class="button tab active">
                            <i class="icon-graph">그래프형 버튼</i>
                        </a>
                    </div>

                    <div class="right-box-top">
                        <a class="excel"><img src="/asset/img/common/btn_excel.png" alt=""></a>
                    </div>
                </div>
                <!-- button Top end -->

                <!-- Graph start -->
                <div class="graph-box">
                    그래프형
                </div>
                <!-- Graph end -->
            </div>
            <!-- List area end -->
        </div>
    </div>
</div>

<?php 
include "../../include/footer.php"; 
?>