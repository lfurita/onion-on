<?php 
$menuNo=[4,1];
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
            <h1>다운로드 / 기본양식</h1>

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
                        
                        <li class="title">업무선택</li>
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
                                <div class="radiobox">
                                    <input id="delayShpmn" class="radio-custom" name="orderStatus" type="radio">
                                    <label for="delayShpmn" class="radio-custom-label">출고지연</label>
                                </div>
                                <div class="radiobox">
                                    <input id="beRlsd" class="radio-custom" name="orderStatus" type="radio">
                                    <label for="beRlsd" class="radio-custom-label">출고</label>
                                </div>
                                <div class="radiobox">
                                    <input id="cmplt" class="radio-custom" name="orderStatus" type="radio">
                                    <label for="cmplt" class="radio-custom-label">완료</label>
                                </div>
                                <div class="radiobox">
                                    <input id="cnclt" class="radio-custom" name="orderStatus" type="radio">
                                    <label for="cnclt" class="radio-custom-label">취소</label>
                                </div>
                            </div>
                        </li>
                        
                        <li class="title">양식선택</li>
                        <li class="inp-box">
                            <div class="radio-box-wrap">
                                <div class="radiobox">
                                    <input id="basicStyle" class="radio-custom" name="slctForm" type="radio" checked>
                                    <label for="basicStyle" class="radio-custom-label">기본양식</label>
                                </div>
                                <div class="radiobox">
                                    <input id="mrktBom" class="radio-custom" name="slctForm" type="radio">
                                    <label for="mrktBom" class="radio-custom-label">마켓봄</label>
                                </div>
                                <div class="radiobox">
                                    <input id="teamFresh" class="radio-custom" name="slctForm" type="radio">
                                    <label for="teamFresh" class="radio-custom-label">팀프레시</label>
                                </div>
                                <div class="radiobox">
                                    <input id="newWorld" class="radio-custom" name="slctForm" type="radio">
                                    <label for="newWorld" class="radio-custom-label">뉴월드</label>
                                </div>
                                <div class="radiobox">
                                    <input id="mlnmMngmn" class="radio-custom" name="slctForm" type="radio">
                                    <label for="mlnmMngmn" class="radio-custom-label">천년경영</label>
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
                        &nbsp;
                    </div>

                    <div class="right-box-top">
                        <a class="excel"><img src="/asset/img/common/btn_excel.png" alt=""></a>
                    </div>
                </div>
                <!-- button Top end -->

                <!-- Table start -->
                <div class="table-box">
                    <table class="table-basic" style="width: 2028px;">
                        <colgroup>
                            <col width="100px"> <!--/* 접수일자 */-->
                            <col width="100px"> <!--/* 완료일자 */-->
                            <col width="100px"> <!--/* 주문번호 */-->
                            <col width="100px"> <!--/* 배송상태 */-->
                            <col width="145px"> <!--/* 배송지명 */-->

                            <col width="100px"> <!--/* 구매자명 */-->
                            <col width="120px"> <!--/* 연락처 */-->
                            <col width="200px"> <!--/* 상품명 */-->
                            <col width="120px"> <!--/* 상품코드 */-->
                            <col width="120px"> <!--/* 상품가격 */-->

                            <col width="90px"> <!--/* 수량 */-->
                            <col width="120px"> <!--/* 결제금액 */-->

                            <col width="400px"> <!--/* 배송지 */-->
                            <col width="200px"> <!--/* 메모 */-->
                        </colgroup>
                        <thead>
                            <tr>
                                <th>접수일자</th>
                                <th>완료일자</th>
                                <th>주문번호</th>
                                <th>배송상태</th>
                                <th>배송지명</th>
                                
                                <th>구매자명</th>
                                <th>연락처</th>
                                <th>상품명</th>
                                <th>상품코드</th>
                                <th>상품가격</th>
                                
                                <th>수량</th>
                                <th>결제금액</th>
                                
                                <th>배송지</th>
                                <th>메모</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023-12-01</td>
                                <td>2023-12-03</td>
                                <td>123456789</td>
                                <td>완료</td>
                                <td>스마트샵&제휴사</td>
                                
                                <td>홍길동</td>
                                <td>010-0000-0000</td>
                                <td>양배추 3kg</td>
                                <td>21213705</td>
                                <td class="right">30,000원</td>
                                
                                <td>1</td>
                                <td class="right">30,000원</td>
                                
                                <td class="left">서울시 구로구 경인로 662, 디큐브시티 타워동 37층</td>
                                <td>-</td>
                            </tr>
                            <tr>
                                <td>2023-12-01</td>
                                <td>2023-12-03</td>
                                <td>123456789</td>
                                <td>완료</td>
                                <td>스마트샵&제휴사</td>
                                
                                <td>홍길동</td>
                                <td>010-0000-0000</td>
                                <td>양배추 3kg</td>
                                <td>21213705</td>
                                <td class="right">30,000원</td>
                                
                                <td>1</td>
                                <td class="right">30,000원</td>
                                
                                <td class="left">서울시 구로구 경인로 662, 디큐브시티 타워동 37층</td>
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