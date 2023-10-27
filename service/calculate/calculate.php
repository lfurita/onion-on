<?php 
$menuNo=[5,1];
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
            <h1>정산 / List</h1>

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
                <!-- Table start -->
                <div class="table-box">
                    <!-- 매출 start -->
                    <table class="sales-prchs">
                        <colgroup>
                            <col width="180px"> <!--/* 매출구분 */-->
                            <col width="180px"> <!--/* 공급가 */-->
                            <col width="180px"> <!--/* 세액 */-->
                            <col width="180px"> <!--/* 합계 */-->
                            <col width="266px"> <!--/* 상세내역 */-->
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="red" colspan="5">매출</th>
                            </tr>
                            <tr>
                                <th>매출구분</th>
                                <th>공급가</th>
                                <th>세액</th>
                                <th>합계</th>
                                <th>상세내역</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>양파온</td>
                                <td class="right">468,363원</td>
                                <td class="right">48,836원</td>
                                <td class="right">515,199원</td>
                                <td>내역보기</td>
                            </tr>
                            <tr>
                                <td>마트샵</td>
                                <td class="right">487,232원</td>
                                <td class="right">48,723원</td>
                                <td class="right">535,955원</td>
                                <td>내역보기</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>매출 합계</td>
                                <td class="right">955,595원</td>
                                <td class="right">95,560원</td>
                                <td class="right">1,051,155원</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- 매출 end -->
                    
                    <!-- 매입 start -->
                    <table class="sales-prchs">
                        <colgroup>
                            <col width="180px"> <!--/* 매출구분 */-->
                            <col width="180px"> <!--/* 공급가 */-->
                            <col width="180px"> <!--/* 세액 */-->
                            <col width="180px"> <!--/* 합계 */-->
                            <col width="266px"> <!--/* 상세내역 */-->
                        </colgroup>
                        <thead>
                            <tr>
                                <th class="sky" colspan="5">매입</th>
                            </tr>
                            <tr>
                                <th>매입구분</th>
                                <th>공급가</th>
                                <th>세액</th>
                                <th>합계</th>
                                <th>상세내역</th>
                            </tr>
                        <tbody>
                            <tr>
                                <td>플랫폼사용료(양파온)</td>
                                <td class="right">4,552,200원</td>
                                <td class="right">455,220원</td>
                                <td class="right">5,007,420원</td>
                                <td>내역보기</td>
                            </tr>
                            <tr>
                                <td>플랫폼사용료(마트샵)</td>
                                <td class="right">4,552,201원</td>
                                <td class="right">455,220원</td>
                                <td class="right">5,007,421원</td>
                                <td>내역보기</td>
                            </tr>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td>매입 합계</td>
                                <td class="right">9,104,401원</td>
                                <td class="right">910,440원</td>
                                <td class="right">10,014,841원</td>
                                <td>&nbsp;</td>
                            </tr>
                        </tfoot>
                        </thead>
                    </table>
                    <!-- 매입 end -->
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