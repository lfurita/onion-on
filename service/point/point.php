<?php 
$menuNo=[6,1];
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
            <h1>포인트</h1>

            <!-- 출금 포인트 start -->
            <div class="wthdr-point-wrap">
                <div class="wthdr-point-box">
                    <h2>ㆍ출금 가능한 만나포인트</h2>
                    <div class="box-white-item">
                        <strong>000,000,000</strong>
                        <i>P</i>
                    </div>
                </div>
                <div class="wthdr-point-box">
                    <h2>ㆍ출금은 만나관리자 프로그램에서만 가능합니다.</h2>
                    <div class="button-box-item">
                        <a href="" class="button skyblue">PC용 다운로드하기</a>
                        <a href="" class="button skyblue">모바일용 다운로드하기</a>
                    </div>
                </div>
            </div>
            <!-- 출금 포인트 end -->

            <div class="dpswt-hstry-wrap">
                <h2>ㆍ만나포인트 입출금 내역</h2>
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
                            <a href="" class="button skyblue">검색</a>
                        </li>
                    </ul>
                </form>
                
                <div class="table-box">
                    <table class="table-basic" style="width: 1280px;">
                        <colgroup>
                            <col width="210px"> <!--/* 일시 */-->
                            <col width="210px"> <!--/* 주문번호 */-->
                            <col width="279px"> <!--/* 구분 */-->
                            <col width="397px"> <!--/* 내역 */-->
                            <col width="180px"> <!--/* 금액 */-->
                        </colgroup>
                        <thead>
                            <tr>
                                <th>일시</th>
                                <th>주문번호</th>
                                <th>구분</th>
                                <th>내역</th>
                                <th>금액</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023.10.12 16:20</td>
                                <td>230744557570</td>
                                <td>선결제 수수료 정산</td>
                                <td class="left">[S294798] 삼양상사[마트샵] 886,800원 3.3%(카드)</td>
                                <td class="right">-29,264원</td>
                            </tr>
                            <tr>
                                <td>2023.10.12 16:20</td>
                                <td>230744557570</td>
                                <td>BTOB 페이매출</td>
                                <td class="left">만나페이 선결제 금액: 19050 3.3%</td>
                                <td class="right">191,330원</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php 
include "../../include/footer.php"; 
?>