<style type="text/css">
  body{font-family:Roboto, sans-serif; font-weight:normal; }
  h1{font-family:Roboto, sans-serif; font-weight:100; }
  #sp-header-top{ background-color:#ffffff; }
  #sp-breadcrumb-block{ background-image:url("/demo/senvietdeal/images/bg-bredum.png");background-color:#f6f6f6; }
  #sp-block-acymailling{ background-color:#ffffff; }
  #sp-block-bottom-2{ background-color:#ffffff; }
  #sp-footer{ background-color:#060d11; }
  div.mod_search35 input[type="search"]{ width:auto; }
</style>

<section id="sp-breadcrumb-block"><div class="container"><div class="row"><div id="sp-breadcrumb" class="col-sm-12 col-md-12"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">
<ol class="breadcrumb">
  
  <li><a href="<?php echo base_url() ?>" class="pathway">Home</a></li>
  <li class="active">Xác Nhận Mua Hàng</li></ol>
</div></div></div></div></div></div></section>


<section id="sp-main-body"><div class="container"><div class="row"><div id="sp-component" class="col-sm-9 col-md-9"><div class="sp-column "><div id="system-message-container">
  </div>
<table class="jshop" id="jshop_menu_order">
  <tbody><tr>    
          <td class="jshop_order_step active">
        <span id="active_step" class="active_step">Thông tin</span>      </td>
          <td class="jshop_order_step next">
        <span class="not_active_step">Phương thức thanh toán</span>      </td>
          <td class="jshop_order_step next">
        <span class="not_active_step">Xác nhận đơn hàng</span>      </td>
      </tr>
</tbody></table>
<div class="jshop address_block">


<form action="" method="post">
<div class="jshop_register">
    <table>
        <tbody>
          <tr>
              <td class="name"><span>Tổng tiền cần thanh toán:</span></td>
              <td class="name"><b style="color: red;font-size: 22px"><?php echo number_format($total_amount) ?> đ</b></td>
          </tr>

          <tr>
          <td class="name">
            Họ và Tên <span style="color: red;">*</span>          </td>
          <td>
            <input type="text" value="<?php echo isset($user->name) ? $user->name : set_value('name')?>" name="name" id="name" class="input">
            <div id="name_error" class="error"><?php echo form_error('name')?></div>
          </td>
        </tr>
                                                                <tr>
          <td class="name">
            E-mail <span style="color: red;">*</span>          </td>
          <td>
            <input type="text" value="<?php echo isset($user->email) ? $user->email : set_value('email') ?>" name="email" id="email" class="input">
            <div id="email_error" class="error"><?php echo form_error('email')?></div>
          </td>
        </tr>
        <tr>
          <td class="name">
            Địa Chỉ: <span style="color: red;">*</span>          </td>
          <td>
            <textarea name="message" id="message" rows="4" style="height: 100px;" class="input"> <?php echo set_value('message')?></textarea>
            <div id="message_error" class="error"><?php echo form_error('message')?></div>
          </td>
        </tr>
        <tr>
          <td class="name">
            Điện thoại di động <span style="color: red;">*</span>          </td>
          <td>
            <input type="text" value="<?php echo isset($user->phone) ? $user->phone : set_value('phone') ?>" name="phone" id="phone" class="input">
            <div id="phone_error" class="error"><?php echo form_error('phone')?></div>
          </td>
        </tr>
        <tr>
            <td class="name">
                Hình thức thanh toán <span style="color: red;">*</span>
            </td>
            <td class="name">
              <select name="payment">
                  <option value="">---- Chọn Hình Thức Thanh Toán ----</option>
                  <option value="offline">Thanh Toán Khi Nhận Hàng</option>
                  <option value="atcomputer">Giao dịch tại công ty</option>
                  <option value="atpostoffice">Giao dịch wa bưu điện</option>
                  
              </select>
              <div id="phone_error" class="error"><?php echo form_error('payment')?></div>
          </td>
        </tr>
      </tbody>
    </table>
</div>


    
       <!--  <div>
    Địa chỉ khác    <input type="radio" name="delivery_adress" id="delivery_adress_1" value="0" checked="checked" onclick="jQuery('#div_delivery').hide()">
    <label for="delivery_adress_1" aria-invalid="false">No</label>
    <input type="radio" name="delivery_adress" id="delivery_adress_2" value="1" onclick="jQuery('#div_delivery').show()">
    <label for="delivery_adress_2" aria-invalid="false">Yes</label>
    </div>
        
    <div id="div_delivery" class="jshop_register" style="padding-bottom: 0px; display: none;">
    <table>
                <tbody><tr>
          <td class="name">
            Tiêu đề <span>*</span>          </td>
          <td>
            <select id="d_title" name="d_title" class="inputbox">
  <option value="0">Chọn</option>
  <option value="1">Ông.</option>
  <option value="2">Bà.</option>
</select>
          </td>
        </tr>        
                        <tr>
          <td class="name">
            Họ <span>*</span>          </td>
          <td>
            <input type="text" name="d_f_name" id="d_f_name" value="" class="inputbox">
          </td>
        </tr>
                        <tr>
          <td class="name">
            Họ và Tên <span>*</span>          </td>
          <td>
            <input type="text" name="d_l_name" id="d_l_name" value="" class="inputbox">
          </td>
        </tr>
                                <tr>
          <td class="name">
            Công ty           </td>
          <td>
            <input type="text" name="d_firma_name" id="d_firma_name" value="" class="inputbox">
          </td>
        </tr>
                                                        
                <tr>
          <td class="name">
            Địa chỉ <span>*</span>          </td>
          <td>
            <input type="text" name="d_street" id="d_street" value="" class="inputbox">
                      </td>
        </tr>
                        <tr>
          <td class="name">
            Mã vùng <span>*</span>          </td>
          <td>
            <input type="text" name="d_zip" id="d_zip" value="" class="inputbox">
          </td>
        </tr>
                        <tr>
          <td class="name">
            Thành phố <span>*</span>          </td>
          <td>
            <input type="text" name="d_city" id="d_city" value="" class="inputbox">
          </td>
        </tr>
                        <tr>
          <td class="name">
            State           </td>
          <td>
            <input type="text" name="d_state" id="d_state" value="" class="inputbox">
          </td>
        </tr>
                        <tr>
          <td class="name">
            Đất nước <span>*</span>          </td>
          <td>
            <select id="d_country" name="d_country" class="inputbox">
  <option value="0">Chọn</option>
  <option value="1">Afghanistan</option>
  <option value="2">Albania</option>
  <option value="3">Algeria</option>
  <option value="4">American Samoa</option>
  <option value="5">Andorra</option>
  <option value="6">Angola</option>
  <option value="7">Anguilla</option>
  <option value="8">Antarctica</option>
  <option value="9">Antigua and Barbuda</option>
  <option value="10">Argentina</option>
  <option value="11">Armenia</option>
  <option value="12">Aruba</option>
  <option value="13">Australia</option>
  <option value="14">Austria</option>
  <option value="15">Azerbaijan</option>
  <option value="16">Bahamas</option>
  <option value="17">Bahrain</option>
  <option value="18">Bangladesh</option>
  <option value="19">Barbados</option>
  <option value="20">Belarus</option>
  <option value="21">Belgium</option>
  <option value="22">Belize</option>
  <option value="23">Benin</option>
  <option value="24">Bermuda</option>
  <option value="25">Bhutan</option>
  <option value="26">Bolivia</option>
  <option value="27">Bosnia and Herzegowina</option>
  <option value="28">Botswana</option>
  <option value="29">Bouvet Island</option>
  <option value="30">Brazil</option>
  <option value="31">British Indian Ocean Territory</option>
  <option value="32">Brunei Darussalam</option>
  <option value="33">Bulgaria</option>
  <option value="34">Burkina Faso</option>
  <option value="35">Burundi</option>
  <option value="36">Cambodia</option>
  <option value="37">Cameroon</option>
  <option value="38">Canada</option>
  <option value="39">Cape Verde</option>
  <option value="40">Cayman Islands</option>
  <option value="41">Central African Republic</option>
  <option value="42">Chad</option>
  <option value="43">Chile</option>
  <option value="44">China</option>
  <option value="45">Christmas Island</option>
  <option value="46">Cocos (Keeling) Islands</option>
  <option value="47">Colombia</option>
  <option value="48">Comoros</option>
  <option value="49">Congo</option>
  <option value="50">Cook Islands</option>
  <option value="51">Costa Rica</option>
  <option value="52">Cote D'Ivoire</option>
  <option value="53">Croatia</option>
  <option value="54">Cuba</option>
  <option value="55">Cyprus</option>
  <option value="56">Czech Republic</option>
  <option value="57">Denmark</option>
  <option value="58">Djibouti</option>
  <option value="59">Dominica</option>
  <option value="60">Dominican Republic</option>
  <option value="61">East Timor</option>
  <option value="62">Ecuador</option>
  <option value="63">Egypt</option>
  <option value="64">El Salvador</option>
  <option value="65">Equatorial Guinea</option>
  <option value="66">Eritrea</option>
  <option value="67">Estonia</option>
  <option value="68">Ethiopia</option>
  <option value="69">Falkland Islands (Malvinas)</option>
  <option value="70">Faroe Islands</option>
  <option value="71">Fiji</option>
  <option value="72">Finland</option>
  <option value="73">France</option>
  <option value="74">France Metropolitan</option>
  <option value="75">French Guiana</option>
  <option value="76">French Polynesia</option>
  <option value="77">French Southern Territories</option>
  <option value="78">Gabon</option>
  <option value="79">Gambia</option>
  <option value="80">Georgia</option>
  <option value="81">Germany</option>
  <option value="82">Ghana</option>
  <option value="83">Gibraltar</option>
  <option value="84">Greece</option>
  <option value="85">Greenland</option>
  <option value="86">Grenada</option>
  <option value="87">Guadeloupe</option>
  <option value="88">Guam</option>
  <option value="89">Guatemala</option>
  <option value="90">Guinea</option>
  <option value="91">Guinea-bissau</option>
  <option value="92">Guyana</option>
  <option value="93">Haiti</option>
  <option value="94">Heard and Mc Donald Islands</option>
  <option value="95">Honduras</option>
  <option value="96">Hong Kong</option>
  <option value="97">Hungary</option>
  <option value="98">Iceland</option>
  <option value="99">India</option>
  <option value="100">Indonesia</option>
  <option value="101">Iran (Islamic Republic of)</option>
  <option value="102">Iraq</option>
  <option value="103">Ireland</option>
  <option value="104">Israel</option>
  <option value="105">Italy</option>
  <option value="106">Jamaica</option>
  <option value="107">Japan</option>
  <option value="108">Jordan</option>
  <option value="109">Kazakhstan</option>
  <option value="110">Kenya</option>
  <option value="111">Kiribati</option>
  <option value="112">Korea Democratic People's Republic of</option>
  <option value="113">Korea Republic of</option>
  <option value="114">Kuwait</option>
  <option value="115">Kyrgyzstan</option>
  <option value="116">Lao People's Democratic Republic</option>
  <option value="117">Latvia</option>
  <option value="118">Lebanon</option>
  <option value="119">Lesotho</option>
  <option value="120">Liberia</option>
  <option value="121">Libyan Arab Jamahiriya</option>
  <option value="122">Liechtenstein</option>
  <option value="123">Lithuania</option>
  <option value="124">Luxembourg</option>
  <option value="125">Macau</option>
  <option value="126">Macedonia The Former Yugoslav Republic of</option>
  <option value="127">Madagascar</option>
  <option value="128">Malawi</option>
  <option value="129">Malaysia</option>
  <option value="130">Maldives</option>
  <option value="131">Mali</option>
  <option value="132">Malta</option>
  <option value="133">Marshall Islands</option>
  <option value="134">Martinique</option>
  <option value="135">Mauritania</option>
  <option value="136">Mauritius</option>
  <option value="137">Mayotte</option>
  <option value="138">Mexico</option>
  <option value="139">Micronesia Federated States of</option>
  <option value="140">Moldova Republic of</option>
  <option value="141">Monaco</option>
  <option value="142">Mongolia</option>
  <option value="143">Montserrat</option>
  <option value="144">Morocco</option>
  <option value="145">Mozambique</option>
  <option value="146">Myanmar</option>
  <option value="147">Namibia</option>
  <option value="148">Nauru</option>
  <option value="149">Nepal</option>
  <option value="150">Netherlands</option>
  <option value="151">Netherlands Antilles</option>
  <option value="152">New Caledonia</option>
  <option value="153">New Zealand</option>
  <option value="154">Nicaragua</option>
  <option value="155">Niger</option>
  <option value="156">Nigeria</option>
  <option value="157">Niue</option>
  <option value="158">Norfolk Island</option>
  <option value="159">Northern Mariana Islands</option>
  <option value="160">Norway</option>
  <option value="161">Oman</option>
  <option value="162">Pakistan</option>
  <option value="163">Palau</option>
  <option value="164">Panama</option>
  <option value="165">Papua New Guinea</option>
  <option value="166">Paraguay</option>
  <option value="167">Peru</option>
  <option value="168">Philippines</option>
  <option value="169">Pitcairn</option>
  <option value="170">Poland</option>
  <option value="171">Portugal</option>
  <option value="172">Puerto Rico</option>
  <option value="173">Qatar</option>
  <option value="174">Reunion</option>
  <option value="175">Romania</option>
  <option value="176">Russian Federation</option>
  <option value="177">Rwanda</option>
  <option value="178">Saint Kitts and Nevis</option>
  <option value="179">Saint Lucia</option>
  <option value="180">Saint Vincent and the Grenadines</option>
  <option value="181">Samoa</option>
  <option value="182">San Marino</option>
  <option value="183">Sao Tome and Principe</option>
  <option value="184">Saudi Arabia</option>
  <option value="185">Senegal</option>
  <option value="186">Seychelles</option>
  <option value="187">Sierra Leone</option>
  <option value="188">Singapore</option>
  <option value="189">Slovakia (Slovak Republic)</option>
  <option value="190">Slovenia</option>
  <option value="191">Solomon Islands</option>
  <option value="192">Somalia</option>
  <option value="193">South Africa</option>
  <option value="194">South Georgia and the South Sandwich Islands</option>
  <option value="195">Spain</option>
  <option value="196">Sri Lanka</option>
  <option value="197">St. Helena</option>
  <option value="198">St. Pierre and Miquelon</option>
  <option value="199">Sudan</option>
  <option value="200">Suriname</option>
  <option value="201">Svalbard and Jan Mayen Islands</option>
  <option value="202">Swaziland</option>
  <option value="203">Sweden</option>
  <option value="204">Switzerland</option>
  <option value="205">Syrian Arab Republic</option>
  <option value="206">Taiwan</option>
  <option value="207">Tajikistan</option>
  <option value="208">Tanzania United Republic of</option>
  <option value="209">Thailand</option>
  <option value="210">Togo</option>
  <option value="211">Tokelau</option>
  <option value="212">Tonga</option>
  <option value="213">Trinidad and Tobago</option>
  <option value="214">Tunisia</option>
  <option value="215">Turkey</option>
  <option value="216">Turkmenistan</option>
  <option value="217">Turks and Caicos Islands</option>
  <option value="218">Tuvalu</option>
  <option value="219">Uganda</option>
  <option value="220">Ukraine</option>
  <option value="221">United Arab Emirates</option>
  <option value="222">United Kingdom</option>
  <option value="223">United States</option>
  <option value="224">United States Minor Outlying Islands</option>
  <option value="225">Uruguay</option>
  <option value="226">Uzbekistan</option>
  <option value="227">Vanuatu</option>
  <option value="228">Vatican City State (Holy See)</option>
  <option value="229">Venezuela</option>
  <option value="230" selected="selected">Viet Nam</option>
  <option value="231">Virgin Islands (British)</option>
  <option value="232">Virgin Islands (U.S.)</option>
  <option value="233">Wallis and Futuna Islands</option>
  <option value="234">Western Sahara</option>
  <option value="235">Yemen</option>
  <option value="236">Yugoslavia</option>
  <option value="237">Zaire</option>
  <option value="238">Zambia</option>
  <option value="239">Zimbabwe</option>
</select>
          </td>
        </tr>
                                <tr>
          <td class="name">
            Điện thoại bàn <span>*</span>          </td>
          <td>
            <input type="text" name="d_phone" id="d_phone" value="" class="inputbox">
          </td>
        </tr>
                                                                    
            </tbody></table>
    </div> -->
        
        
    <div style="padding-top:10px;">
                
                <input type="submit" name="submit" value="Thanh Toán" class="button">
    </div>
</form>
</div>
<span id="mxcpr"><a rel="nofollow" target="_blank" href="https://www.webdesigner-profi.de/">Webseite www.webdesigner-profi.de</a></span></div></div><div id="sp-right" class="col-sm-3 col-md-3"><div class="sp-column "><div class="sp-module "><div class="sp-module-content">

<div class="custom">
  <ul style="background: white; padding: 15px; border: 1px solid white; height: 100%; width: 100%; box-shadow: 0px 1px 6px rgba(0, 0, 0, 0.2);">
<li>
<h4 style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng nhanh</span></h4>
<span style="font-size: 14pt; color: #ff0000;"><strong><span class="hotline" style="font-family: 'times new roman', times, serif;">0169.377.9225</span></strong></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Giao hàng và thu tiền tận nơi trên toàn quốc</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Miễn phí vận chuyển cho đơn hàng từ 2 sản phẩm</span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Đặt hàng số lượng lớn xin liên hệ&nbsp;<span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Khiếu nại sản phẩm&nbsp;<span class="red" style="color: #ff0000;"><strong>0169.377.9225</strong></span></span></li>
<li style="text-align: left;"><span style="font-size: 12pt; font-family: 'times new roman', times, serif;">Thời gian đổi hàng là 7 ngày</span></li>
<li style="text-align: left;"></li>
</ul>
<p style="text-align: left;">&nbsp;</p></div>
</div></div></div></div></div></div></section>


