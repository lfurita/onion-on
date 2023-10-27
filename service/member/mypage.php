<?php 
$menuNo=[0,4];
include "../../include/header.php"; 
?>

<div class="content-wrap">
    <?php  include "../../include/menu.php"; ?>

    <div class="sub-conts-wrap">
        <div class="wrap">
            <h1>마이페이지</h1>
            <h2><strong>‘신도림만나유통’</strong> 유통사님 안녕하세요.</h2>

            <div class="acnt-infrm-box">
                <h3>유통사 계정 정보</h3>

                <ul class="clearfix inb">
                    <li class="title-head">현재 포인트</li>
                    <li class="title-head">정보</li>

                    <li>현재 포인트</li>
                    <li>S1214123</li>

                    <li>유통사명</li>
                    <li>한우물 유통</li>

                    <li>주소</li>
                    <li>서울시 구로구 경인로 661, 핀포인트타워 18층 (신도림동)</li>

                    <li>현재 포인트</li>
                    <li>00000 P</li>
                </ul>
            </div>

            <div class="afstr-mngmn-box">
                <h3>가맹점 관리 (00개)</h3>

                <table class="table-mypg">
                    <colgroup>
                        <col width="154px"> <!-- /* 가맹점명 */ -->
                        <col width="*"> <!-- /* 주 소 */ -->
                        <col width="189px"> <!-- /* 연락처 */ -->
                        <col width="140px"> <!-- /* 가입일 */ -->
                        <col width="140px"> <!-- /* 최근 주문일 */ -->
                        <col width="190px"> <!-- /* 누적 주문 수량 */ -->
                        <col width="190px"> <!-- /* 누적 주문 금액 */ -->
                        <col width="150px"> <!-- /* 알림 톡 */ -->
                    </colgroup>
                    <thead>
                        <tr>
                            <th>가맹점명</th>
                            <th>주 소</th>
                            <th>연락처</th>
                            <th>가입일</th>
                            <th>최근 주문일</th>
                            <th>누적 주문 수량</th>
                            <th>누적 주문 금액</th>
                            <th>알림 톡</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>바른치킨</td>
                            <td class="left">서울시 구로구 경인로 661, 신도림1차 푸르지오 18층 (신도림동, 핀포인트타워)</td>
                            <td>010-0000-0000</td>
                            <td>23.12.01</td>
                            <td>23.12.11</td>
                            <td>0000건</td>
                            <td>000,0000,000원</td>
                            <td>
                                <a href="" class="button text-link">설정</a>
                            </td>
                        </tr>
                        <tr>
                            <td>BBQ 신도림점</td>
                            <td class="left">서울시 구로구 경인로 661, 신도림1차 푸르지오 18층 (신도림동, 핀포인트타워)</td>
                            <td>010-0000-0000</td>
                            <td>23.12.01</td>
                            <td>23.12.11</td>
                            <td>0000건</td>
                            <td>000,0000,000원</td>
                            <td>
                                <a href="" class="button text-link">설정</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php 
include "../../include/footer.php"; 
?>