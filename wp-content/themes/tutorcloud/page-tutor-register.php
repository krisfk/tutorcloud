<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
?>


<div class="breadcrumb mt-4">

    主頁 > 新導師登記</div>
<div class="container mt-5">

    <div class="text-center">
        <h2>導師登記資格
            <div class="bar"></div>
        </h2>
    </div>

    <!-- <div class="text-center mt-3">
        <a href="#" class="filter-btn">導師選項</a>
    </div> -->
    <div class="row mt-3">

        <div class="col-2">
            <ul class="m-0 p-0 text-start">
                <li class="step-txt active">1. 條款及細則</li>
                <li class="step-txt">2. 個人資料</li>
                <li class="step-txt">3. 聯絡資料</li>
                <li class="step-txt">4. 上載履歷</li>
                <li class="step-txt">5. 授課資料</li>
                <li class="step-txt">6. 自我簡介</li>
                <li class="step-txt">7. 完成</li>
            </ul>


            <div class="text-end mt-4">
                <a href="#" class="next-step-btn">下一步</a>
            </div>
        </div>
        <div class="col-10">


            <div class="step-content step-content-1">
                <ul>
                    <li>

                        <a href="javascript:void(0);" class="terms-a">
                            <h3>TutorCloud 師魂 的職責</h3>
                        </a>
                        <div class="mt-3 terms-content">TutorCloud 師魂作為一個網上教育配對平台，其責任僅為導師及家長或學生進行相互配對，以使導師可以向家
                            長或學生提供補習或教育服務。 導師與家長其間只為獨立合作聘約，並不存在僱傭關係。 <br>
                            導師與TutorCloud 師魂亦只存在服務提供者與服務使用者之關係，雙方沒有任何僱傭關係，因此TutorCloud
                            師魂有權依本公司與導師所訂定之「導師收費」收取行政費用，成功登記即代表導師同意條款全部內容。而「條
                            款及細則」所訂之內容等同TutorCloud 師魂與導師之間所定之合約，而TutorCloud 師魂網站內所列出的任何
                            規則或指示都屬於導師合約的一部份，本網站導師亦須格守。</div>
                    </li>
                    <li>

                        <a href="javascript:void(0);" class="terms-a">
                            <h3>TutorCloud 師魂 的權利</h3>
                        </a>
                        <div class="mt-3 terms-content">
                            <ol>
                                <li>暫停或終止用戶資格的權利

                                    <div>倘發現用戶出現以下行為，則TutorCloud 師魂 有權暫停或終止用戶資格而毋須支付賠償：</div>
                                    <div>(a) 違反本合約所列出之條件及條款，或 <br>(b) 透過定罪、和解、保險或託管調查或其他方式而從事與此網站有關之欺騙行為。
                                    </div>
                                </li>
                                <li>處理由用戶提供的資料的權利
                                    <div>TutorCloud 師魂擁有絕對及不受約束之權力，拒絕或刪除用戶所提供之任何資料，而毋須向任
                                        何一方發出通知或作出賠償。在無損此項權利下，倘導師所提供之任何資料一旦刊登或繼續刊
                                        登，會導致TutorCloud 師魂須為第三者負上任何法律責任，或令TutorCloud 師魂觸犯任何有效
                                        司法管轄區的任何法律或規則或第三者的權益，則TutorCloud 師魂擁有權拒絕或修改任何所提
                                        供之資料。</div>
                                </li>
                                <li>撤回提供中介服務之權利
                                    <div>TutorCloud 師魂擁有絕對及不受約束的權利，撤回任何服務條件而不向導師發出任何通知或作
                                        出任何賠償。在無減損此權利下，倘發生下列情況，TutorCloud 師魂 有權撤回服務：</div>
                                    <div>(a) 該導師提供有個人資料有極大可能不全正確；<br>
                                        (b) 導師被發現違反本合約列出的條件及條款，或其戶口被TutorCloud 師魂根據此合約的條款
                                        勒令暫停；<br>
                                        (c) TutorCloud 師魂 因任何原因無法核實或證實導師或家長或學生提供的任何資料。

                                    </div>
                                </li>
                                <li>拒絕提供服務之權利<div>TutorCloud 師魂有權停止提供服務給任何導師並保留拒絕任何人士申請成為導師或終止任何人
                                        士之導師資格而不作任何解釋之權利。</div>
                                </li>
                                <li>更改有關收費的權利<div>使用服務中收費列於「導師收費」中，而該收費說明乃已納入本合約中，視為構成合約的一部份。
                                        TutorCloud 師魂 保留隨時更改有關收費的權利。所有用戶必須於每次使用服務前查核收費表。</div>
                                </li>
                                <li>增刪本合約的權利<div>TutorCloud 師魂保留隨時增刪本合約的一切權利，而不會事先通知導師；導師必須隨時翻看本
                                        合約資料，以確保清楚最新的導師約束條款。</div>
                                </li>
                            </ol>
                        </div>
                    </li>
                    <li>
                        <a href="javascript:void(0);" class="terms-a">
                            <h3>有關補習中介服務之條款</h3>
                        </a>
                        <div class="mt-3 terms-content"></div>

                    </li>
                    <li>
                        <a href="javascript:void(0);" class="terms-a">
                            <h3>收費</h3>
                        </a>
                        <div class="mt-3 terms-content"></div>

                    </li>

                </ul>
            </div>

        </div>
        <!-- <div class="col-2"></div> -->

    </div>








</div>

<script type="text/javascript">
// var $ = jQuery;
$(function() {

    $('.terms-a').click(function() {


        $(this).toggleClass('active');
        if ($(this).hasClass('active')) {
            $(this).next('.terms-content').slideDown(200);
        } else {
            $(this).next('.terms-content').fadeOut(0);

        }
    })
})
</script>
<?php
get_footer();