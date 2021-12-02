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
    <div class="row mt-5">
        <div class="col-3"></div>
        <div class="col-9">年滿十七歲或以上，正就讀大學及具大學學士學位或以上程度學歷之自然人且擁有簽訂合約的心智和法律能
            力之人士，以及獲其憲章、附例及公司組織章程大綱批准其與TutorCloud 師魂簽訂此合約的公司，方可申請成
            為導師。TutorCloud 師魂保留拒絕任何人士申請成為導師或終止任何人士之導師資格而不作任何解釋之權利。
            不符合上述資格者不得使用服務。</div>

    </div>
    <div class="row mt-5">

        <div class="col-2 mt-3">
            <ul class="m-0 p-0 text-start">
                <li class="step-txt active">1. 條款及細則</li>
                <li class="step-txt">2. 個人資料</li>
                <li class="step-txt">3. 學歷資料</li>
                <!-- <li class="step-txt">4. 上載履歷</li>
                <li class="step-txt">5. 授課資料</li>
                <li class="step-txt">6. 自我簡介</li> -->
                <li class="step-txt">4. 完成</li>
            </ul>


            <!-- <div class="text-end mt-4">
                <a href="#" class="next-step-btn">下一步</a>
            </div> -->
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
                        <div class="mt-3 terms-content">
                            <ol>
                                <li>導師之基本責任<div>倘閣下，作為導師，確認接納TutorCloud 師魂之個案後，必須盡力依照TutorCloud 師魂所發出
                                        的指示，上課務必準時到達及依時完成，不可在沒有家長或學生同意的情況下刪減時間。你同意
                                        授權本站利用你的「登記資料」作為本站的宣傳之用，而不受任何法例所限制。你亦同意本站在
                                        必要時候局部或全部顯示「登記資料」，而不受任何版權法例及個人資料（私隱）條例所限制。你
                                        同意不會使用任何工具、軟件或程序干擾本站伺服器的正常運作，更不會故意、有計劃地令本站
                                        的系統負荷過重。你不可以傳播任何電腦病毒或有破壞性的程式給本站和本站的所有導師。你
                                        同意不會追究因本站系統失靈而造成的任何損失。本站會盡力維持系統的可靠性，並保持良好
                                        的效率。你不可利用任何本站的服務作出非法或不道德的行為。</div>
                                </li>
                                <li>導師提供正確資料之責任<div>導師如沒有提供正確資料，或因沒有提供正確資料而導師個案服務被終止，TutorCloud 師魂可
                                        以拒絕為其提供服務，亦有可以收取所衍生之行政費用。</div>
                                </li>
                                <li>導師撤回個案所衍生之責任<div>在個案已確認後，如導師決定取消向相關家長或學生提供補習，導師絕不能把其家長或學生之
                                        資料轉交予任何人仕。</div>
                                </li>
                                <li>導師進行欺騙行為之責任<div>導師如被證實，或TutorCloud 師魂認為或發現導師極有可能與家長或學生串聯進行任何欺騙行
                                        為，包括在導師仍然為家長或學生提供有關服務之時，其任何一方向TutorCloud 師魂謊報服務
                                        經已終止，TutorCloud 師魂會立即終止有關導師的資格，並要求有關人士於七天內清繳有關全
                                        部費用；即使其後家長或學生決定終止有關人士之服務，導師仍須繳付全數服務費用。
                                        TutorCloud 師魂 會保留一切刑事及民事追究之權利，並不會容忍任何欺騙行為出現。</div>
                                </li>


                            </ol>
                        </div>

                    </li>
                    <li>
                        <a href="javascript:void(0);" class="terms-a">
                            <h3>收費</h3>
                        </a>
                        <div class="mt-3 terms-content">
                            <ol>
                                <li>收費<div>使用服務中收費（「收費」）列於「導師收費」中，而該收費說明乃巳納入本合約中，並視為構成合
                                        約的一部份。TutorCloud 師魂保留隨時更改有關收費的權利，而新收費將於指定日期生效（生效
                                        日期將為網頁刊登經修訂收費表後的七天內）。所有用戶必須於每次使用服務前查核收費表。</div>
                                </li>
                                <li>過期付費<div>倘若任何不準時繳費，過期付費少於5天需要付上原行政費用及每日曆日$10附加費用；過期付
                                        費5天或以上需要付上原行政費用及每日曆日$50附加費用，並會視乎情況將個案轉至「小額錢
                                        債」追討。所有附加費用會從繳費到期日起計算，直至付款為止。</div>
                                </li>
                                <li>收費模式<div>家長須透過銀行轉賬/ 轉數快(FPS)/ 或本站提供之其他形式代繳交行政費用, 請務必保留收條並
                                        將之拍下或掃瞄留底, 並致電聯絡TutorCloud 師魂 職員以為個案編號進行核實 。</div>
                                </li>
                                <li>特別情況<div>假如在首兩周任何原因而沒有完成應有補習日數，亦會根據原定補習日數為準則收取費用。註：
                                        原定補習日數是首兩周內應有之所有堂數，學生或導師因任何理由缺課導致首月上課日數減少
                                        ，例如公眾假期，病假等，本公司將會順延繳費日期而不會減收費用。相反，學生與導師增加堂
                                        數的話，也不會增加費用。導師與本公司職員電話確認接受補習個案後，因任何事故決定取消補
                                        習，手續費為$200，亦必須於補習首堂開始48小時之前致電我們確認取消個案，否則本公司將收
                                        取原定之行政費。若家長於首兩星期內*因私人理由*而取消補習，我們會向導師收取已上課堂
                                        一半學費。如有任何由家長提出之堂數更改或個案取消，必須於*家長/學生提出後* 24小時內
                                        以電話聯絡我們，若未經本公司確認，導師即使已經離職，但仍雖繳付有關之行政費。</div>
                                </li>
                                <li>取消補習後安排<div>任何一方取消補習後，除非經TutorCloud 師魂再次介紹，否則導師必須承諾在六個月之內不能
                                        向該學生提供相同或相似的補習服務。導師亦不能轉介該學生之資料予第三者及轉介其他導師
                                        之資料予該學生，若發現導師未有繳付行政費用而為該學生提供補習服務及上述轉介資料之情
                                        況，本公司必從正常之法律途徑追討其行政費及附加費$2000，另外亦保留收取文件送遞、賬
                                        單、蒐集證據之所有費用。無論於TutorCloud 師魂提供介紹前或後而經其他任何途徑獲得該學
                                        生之介紹或與學生直接接洽情況下，導師亦不能為該學生提供補習服務。而於任何情況下，若導
                                        師為該學生提供相同或相似的補習服務而沒有經書面通知本公司，即時需要繳付上述之所有費
                                        用。 註:
                                        該學生是指該學生及其家庭之任何學生或該學生相同地址之任何學生。<br>當你表示同意及遵守這份合約，這代表你能夠理解這份合約的內容及有正常的判斷力去作出決
                                        定。若果你不同意本公司之守則，請不要登記使用該項服務。本站有權停止提供服務給任何導
                                        師。</div>
                                </li>
                                <li>相同學生分科補習的處理方法<div>如學生在找TutorCloud 師魂時已表明需要分科補習時，行政費將以兩星期總課堂數量去收取。
                                        即如果學生需要兩科補習，每星期共上兩課，將收取兩星期，共四課學費為行政費。</div>
                                    <div></div>
                                </li>
                            </ol>
                        </div>

                    </li>

                </ul>

                <a href="javascript:void(0);" class="agree-terms-btn">同意以上條款</a>


            </div>





            <div class="step-content step-content-2">
                <h5>登入資料</h5>
                <table class="mt-3">
                    <tr>
                        <td><label for="email">登入電郵*</label></td>
                        <td><input id="email" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="confirm_email">確認登入電郵*</label></td>
                        <td><input id="confirm_email" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="login_password">登入密碼*</label></td>
                        <td><input id="login_password" type="password" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="confirm_login_password">確認登入密碼*</label></td>
                        <td><input id="confirm_login_password" type="password" class="form-control"></td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <h5 class="mt-4">個人資料</h5>
                        </td>
                    </tr>
                    <tr>
                        <td><label for="chi-name"> 中文全名 *</label></td>
                        <td><input id="chi-name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="eng-name">英文全名 *</label></td>
                        <td><input id="eng-name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="nick-name">別名</label></td>
                        <td><input id="nick-name" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="whatsapp-tel"> WhatsApp 電話號碼 *</label></td>
                        <td><input id="whatsapp-tel" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td><label for="age"> 年齡*</label></td>
                        <td><input id="age" type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td> <label for=""> 性別*</label></td>
                        <td>
                            <label><input type="radio" name="opt-gender" value="男">男</label>
                            <label><input type="radio" name="opt-gender" value="女">女</label>

                        </td>
                    </tr>
                    <tr>
                        <td> <label for="occupation"> 職業</label></td>
                        <td>
                            <select id="occupation" class="form-select" aria-label="">

                                <option selected>選擇</option>
                                <option value="全職教師">全職教師</option>
                                <option value="全職教學助理">全職教學助理</option>
                                <option value="全職補習老師">全職補習老師</option>
                                <option value="退休教師">退休教師</option>
                                <option value="其他在職人仕">其他在職人仕</option>

                            </select>
                        </td>
                    </tr>

                </table>

                <a href="javascript:void(0);" class="prev-step-btn me-3">下一步</a>


                <a href="javascript:void(0);" class="next-step-btn">下一步</a>

            </div>


            <div class="step-content step-content-3">

                <table>
                    <tr>
                        <td><label for="">就讀大學 (學士學位課程) *
                            </label></td>
                        <td> <select id="bac-degree" class="form-select" aria-label="">

                                <option selected>選擇</option>
                                <option value="香港大學">香港大學</option>
                                <option value="香港中文大學">香港中文大學</option>
                                <option value="香港科技大學">香港科技大學</option>
                                <option value="香港理工大學">香港理工大學</option>
                                <option value="香港城市大學">香港城市大學</option>
                                <option value="香港浸會大學">香港浸會大學</option>
                                <option value="香港都會大學">香港都會大學</option>
                                <option value="香港恒生大學">香港恒生大學</option>
                                <option value="嶺南大學">嶺南大學</option>

                            </select></td>
                    </tr>
                    <tr>
                        <td> <label for="">教育程度 *
                            </label></td>
                        <td><select id="tutor-level" class="form-select" aria-label="">
                                <option selected>選擇</option>
                                <option value="大學生">大學生</option>
                                <option value="學士畢業">學士畢業</option>
                                <option value="碩士生">碩士生</option>
                                <option value="碩士畢業">碩士畢業</option>
                                <option value="博士生">博士生</option>
                                <option value="博士畢業">博士畢業</option>
                            </select></td>
                    </tr>
                    <tr>
                        <td><label for="">是否擁有教育文憑 *
                            </label></td>
                        <td> <label><input type="radio" name="opt-diploma">是</label>
                            <label><input type="radio" name="opt-diploma">否</label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">年級 (2021-2022年度) *
                            </label>
                        </td>
                        <td>
                            <select id="tutor-level" class="form-select" aria-label="">
                                <option selected>選擇</option>
                                <option value="Year 1">Year 1</option>
                                <option value="Year 2">Year 2</option>
                                <option value="Year 3">Year 3</option>
                                <option value="Year 4">Year 4</option>
                                <option value="Year 5">Year 5</option>
                                <option value="Year 6">Year 6</option>
                                <option value="已畢業">已畢業</option>

                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>

                            <label for="">大學主修科目 *</label>
                        </td>
                        <td><input type="text" class="form-control"></td>
                    </tr>

                    <tr>
                        <td> <label for="">大學副修科目
                            </label>
                        </td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                    <tr>
                        <td> <label for="">曾就讀中學 *
                            </label>
                        </td>
                        <td><input type="text" class="form-control"></td>
                    </tr>
                </table>

                <table>
                    <td colspan="5">
                        DSE 成績 / 相關公開試成續
                    </td>
                    <tr>
                        <td></td>
                        <td>5**</td>
                        <td>5*</td>
                        <td>5</td>
                        <td>4</td>
                    </tr>
                    <tr>
                        <td><label for="">中文</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-1"></td>
                        <td><input type="radio" value="5*" name="opt-sub-1"></td>
                        <td><input type="radio" value="5" name="opt-sub-1"></td>
                        <td><input type="radio" value="4" name="opt-sub-1"></td>
                    </tr>
                    <tr>
                        <td><label for="">英文</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-2"></td>
                        <td><input type="radio" value="5*" name="opt-sub-2"></td>
                        <td><input type="radio" value="5" name="opt-sub-2"></td>
                        <td><input type="radio" value="4" name="opt-sub-2"></td>

                    </tr>
                    <tr>
                        <td><label for="">數學</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-3"></td>
                        <td><input type="radio" value="5*" name="opt-sub-3"></td>
                        <td><input type="radio" value="5" name="opt-sub-3"></td>
                        <td><input type="radio" value="4" name="opt-sub-3"></td>
                    </tr>
                    <tr>
                        <td><label for="">數學(M1)</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-4"></td>
                        <td><input type="radio" value="5*" name="opt-sub-4"></td>
                        <td><input type="radio" value="5" name="opt-sub-4"></td>
                        <td><input type="radio" value="4" name="opt-sub-4"></td>

                    </tr>
                    <tr>
                        <td><label for="">數學(M2)</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-5"></td>
                        <td><input type="radio" value="5*" name="opt-sub-5"></td>
                        <td><input type="radio" value="5" name="opt-sub-5"></td>
                        <td><input type="radio" value="4" name="opt-sub-5"></td>

                    </tr>
                    <tr>
                        <td><label for="">通識</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-6"></td>
                        <td><input type="radio" value="5*" name="opt-sub-6"></td>
                        <td><input type="radio" value="5" name="opt-sub-6"></td>
                        <td><input type="radio" value="4" name="opt-sub-6"></td>
                    </tr>
                    <tr>
                        <td><label for="">物理</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-7"></td>
                        <td><input type="radio" value="5*" name="opt-sub-7"></td>
                        <td><input type="radio" value="5" name="opt-sub-7"></td>
                        <td><input type="radio" value="4" name="opt-sub-7"></td>
                    </tr>
                    <tr>
                        <td><label for="">化學</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-8"></td>
                        <td><input type="radio" value="5*" name="opt-sub-8"></td>
                        <td><input type="radio" value="5" name="opt-sub-8"></td>
                        <td><input type="radio" value="4" name="opt-sub-8"></td>
                    </tr>
                    <tr>
                        <td><label for="">生物</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-9"></td>
                        <td><input type="radio" value="5*" name="opt-sub-9"></td>
                        <td><input type="radio" value="5" name="opt-sub-9"></td>
                        <td><input type="radio" value="4" name="opt-sub-9"></td>
                    </tr>
                    <tr>
                        <td><label for="">組合科學：物理 化學
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-10"></td>
                        <td><input type="radio" value="5*" name="opt-sub-10"></td>
                        <td><input type="radio" value="5" name="opt-sub-10"></td>
                        <td><input type="radio" value="4" name="opt-sub-10"></td>
                    </tr>
                    <tr>
                        <td><label for="">組合科學：化學 生物
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-11"></td>
                        <td><input type="radio" value="5*" name="opt-sub-11"></td>
                        <td><input type="radio" value="5" name="opt-sub-11"></td>
                        <td><input type="radio" value="4" name="opt-sub-11"></td>
                    </tr>
                    <tr>
                        <td><label for="">綜合科學
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-12"></td>
                        <td><input type="radio" value="5*" name="opt-sub-12"></td>
                        <td><input type="radio" value="5" name="opt-sub-12"></td>
                        <td><input type="radio" value="4" name="opt-sub-12"></td>
                    </tr>
                    <tr>
                        <td><label for="">資訊及通訊科技
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-13"></td>
                        <td><input type="radio" value="5*" name="opt-sub-13"></td>
                        <td><input type="radio" value="5" name="opt-sub-13"></td>
                        <td><input type="radio" value="4" name="opt-sub-13"></td>
                    </tr>
                    <tr>
                        <td><label for="">地理</label></td>
                        <td><input type="radio" value="5**" name="opt-sub-14"></td>
                        <td><input type="radio" value="5*" name="opt-sub-14"></td>
                        <td><input type="radio" value="5" name="opt-sub-14"></td>
                        <td><input type="radio" value="4" name="opt-sub-14"></td>
                    </tr>
                    <tr>
                        <td><label for="">中史
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-15"></td>
                        <td><input type="radio" value="5*" name="opt-sub-15"></td>
                        <td><input type="radio" value="5" name="opt-sub-15"></td>
                        <td><input type="radio" value="4" name="opt-sub-15"></td>
                    </tr>
                    <tr>
                        <td><label for="">西史
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-16"></td>
                        <td><input type="radio" value="5*" name="opt-sub-16"></td>
                        <td><input type="radio" value="5" name="opt-sub-16"></td>
                        <td><input type="radio" value="4" name="opt-sub-16"></td>
                    </tr>
                    <tr>
                        <td><label for="">中國文學
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-17"></td>
                        <td><input type="radio" value="5*" name="opt-sub-17"></td>
                        <td><input type="radio" value="5" name="opt-sub-17"></td>
                        <td><input type="radio" value="4" name="opt-sub-17"></td>
                    </tr>
                    <tr>
                        <td><label for="">英國文學
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-18"></td>
                        <td><input type="radio" value="5*" name="opt-sub-18"></td>
                        <td><input type="radio" value="5" name="opt-sub-18"></td>
                        <td><input type="radio" value="4" name="opt-sub-18"></td>
                    </tr>
                    <tr>
                        <td><label for="">倫理與宗教
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-19"></td>
                        <td><input type="radio" value="5*" name="opt-sub-19"></td>
                        <td><input type="radio" value="5" name="opt-sub-19"></td>
                        <td><input type="radio" value="4" name="opt-sub-19"></td>
                    </tr>
                    <tr>
                        <td><label for="">經濟
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-20"></td>
                        <td><input type="radio" value="5*" name="opt-sub-20"></td>
                        <td><input type="radio" value="5" name="opt-sub-20"></td>
                        <td><input type="radio" value="4" name="opt-sub-20"></td>
                    </tr>
                    <tr>
                        <td><label for="">企業、會計與財務概論
                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-21"></td>
                        <td><input type="radio" value="5*" name="opt-sub-21"></td>
                        <td><input type="radio" value="5" name="opt-sub-21"></td>
                        <td><input type="radio" value="4" name="opt-sub-21"></td>
                    </tr>
                    <tr>
                        <td><label for="">旅遊與款待

                            </label></td>
                        <td><input type="radio" value="5**" name="opt-sub-22"></td>
                        <td><input type="radio" value="5*" name="opt-sub-22"></td>
                        <td><input type="radio" value="5" name="opt-sub-22"></td>
                        <td><input type="radio" value="4" name="opt-sub-22"></td>
                    </tr>
                </table>
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
            $(this).next('.terms-content').slideUp(200);

        }
    })

    $('.agree-terms-btn').click(function() {})
})
</script>
<?php
get_footer();