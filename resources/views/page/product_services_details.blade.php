@extends('web-layout')
@section('title', 'Product Services')
@section('content')
    <link href="{{ asset('public/theme/web-new/wp-content/themes/egov/campaigns/e-pan/css/style_digital.css') }}"
        rel="stylesheet">

    <div class="mainbanner fd" id="home">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 float-start">
                    <img src="https://religaredigital.in/wp-content/themes/egov/campaigns/e-pan/images/fd.png"
                        class="img-fluid" alt="Religare Digital Dukaan ek sewayen Anek!">
                </div>
                <div class="col-lg-4 leadform">
                    <h2 class="mb-2 hide-after">Become an Associate with Religare </h2>
                    <div class="col-lg-12">

                        <form action="https://crm.religareonline.com/suitecrm/index.php?entryPoint=WebToPersonCapture"
                            name="WebToLeadForm" method="POST" id="WebToLeadForm" autocomplete="off">
                            <div class="row gy-4">
                                <div class="col-md-12 frmFld">
                                    <input type="text" class="form-control" id="opportunity_name" name="opportunity_name"
                                        placeholder="Name" onkeypress="checkNameLength(event)" autocomplete="off">
                                    <span class="error-in" id="name-error" style="display: none;">Please enter valid
                                        Name</span>
                                </div>


                                <div class="col-md-12 frmFld">
                                    <input type="email" class="form-control" id="email1" name="email1"
                                        placeholder="Email" onkeypress="checkEmailPattern(event)" autocomplete="off">
                                    <span class="error-in" id="email-error" style="display: none;">Please enter valid
                                        Email</span>
                                </div>


                                <div class="col-md-12 field-group" style="margin-top:15px;">
                                    <select class="form-select select2-hidden-accessible" name="city_c" id="city"
                                        data-select2-id="city" tabindex="-1" aria-hidden="true">
                                        <option selected="selected" value="0" data-select2-id="2">City Name</option>
                                        <option>ADONI</option>
                                        <option>AGARTALA</option>
                                        <option>AGRA</option>
                                        <option>AHMEDABAD</option>
                                        <option>SANGAMNER</option>
                                        <option>AIZWAL</option>
                                        <option>AJMER</option>
                                        <option>AKOLA</option>
                                        <option>ALAPPUZHA</option>
                                        <option>ALIGARH</option>
                                        <option>ALLAHABAD</option>
                                        <option>ALWAR</option>
                                        <option>AMBALA</option>
                                        <option>AMRAVATI</option>
                                        <option>AMRITSAR</option>
                                        <option>ANAND</option>
                                        <option>ANANTAPUR</option>
                                        <option>ANANTHPUR</option>
                                        <option>ANANTNAG</option>
                                        <option>ANGAMALY</option>
                                        <option>ANKOLA</option>
                                        <option>ARANTHANGI</option>
                                        <option>ARRAH</option>
                                        <option>ASANSOL</option>
                                        <option>ATTUR</option>
                                        <option>AURANGABAD MH</option>
                                        <option>AURANGABAD BH</option>
                                        <option>AZAMGARH</option>
                                        <option>BADAUN</option>
                                        <option>BAHADURGARH</option>
                                        <option>BALASORE</option>
                                        <option>BALLIA</option>
                                        <option>BANGALORE</option>
                                        <option>BANSWARA</option>
                                        <option>BARDOLI</option>
                                        <option>BAREILLY</option>
                                        <option>BARODA</option>
                                        <option>BASTI</option>
                                        <option>BEED</option>
                                        <option>BELGAUM</option>
                                        <option>BELLARY</option>
                                        <option>BERHAMPUR</option>
                                        <option>BETUL</option>
                                        <option>BHAGALPUR</option>
                                        <option>BHANDARA</option>
                                        <option>BHARUCH</option>
                                        <option>BHATINDA</option>
                                        <option>BHAVANI</option>
                                        <option>BHAVNAGAR</option>
                                        <option>BHILWARA</option>
                                        <option>BHIWANI</option>
                                        <option>BHOJPUR</option>
                                        <option>BHOPAL</option>
                                        <option>BHUBANESHWAR</option>
                                        <option>BHUJ</option>
                                        <option>BHUSAWAL</option>
                                        <option>BIHAR SHARIFF</option>
                                        <option>BIJAPUR</option>
                                        <option>BIJNOR</option>
                                        <option>BIKANER</option>
                                        <option>BILASPUR</option>
                                        <option>BINA</option>
                                        <option>BIRBHUM</option>
                                        <option>BOKARO</option>
                                        <option>BONGAIGON</option>
                                        <option>BORSAD</option>
                                        <option>BULANDSHAHAR</option>
                                        <option>BULDANA</option>
                                        <option>BURDWAN</option>
                                        <option>CALCUTTA</option>
                                        <option>CALICUT</option>
                                        <option>CHANDIGARH</option>
                                        <option>CHANDRAPURA</option>
                                        <option>CHENGANNUR</option>
                                        <option>CHENNAI</option>
                                        <option>CHERTHALA</option>
                                        <option>CHICKBALLAPUR</option>
                                        <option>CHIKKODI</option>
                                        <option>CHIRALA</option>
                                        <option>CHITTORGARH</option>
                                        <option>CHURU</option>
                                        <option>COCHIN</option>
                                        <option>COIMBATORE</option>
                                        <option>CONTAI</option>
                                        <option>COOCHBEHAR</option>
                                        <option>CUDDALORE</option>
                                        <option>THENI</option>
                                        <option>CUMBUM -AP</option>
                                        <option>CUTTACK</option>
                                        <option>DAHOD</option>
                                        <option>DARBHANGA</option>
                                        <option>DATIA</option>
                                        <option>DAVANGERE</option>
                                        <option>DEESA</option>
                                        <option>DEHRADUN</option>
                                        <option>DEOGHAR</option>
                                        <option>DHANBAD</option>
                                        <option>DHARAPURAM</option>
                                        <option>DHARWAD</option>
                                        <option>DHOLPUR</option>
                                        <option>DHULE</option>
                                        <option>DIBIYAPUR</option>
                                        <option>DIBRUGARH</option>
                                        <option>DINDIGUL</option>
                                        <option>DONDAICHA</option>
                                        <option>DUNGARPUR</option>
                                        <option>DURG</option>
                                        <option>DURGAPUR</option>
                                        <option>EASTGODAVARI</option>
                                        <option>ELURU</option>
                                        <option>ERODE</option>
                                        <option>ETAWAH</option>
                                        <option>FAIZABAD</option>
                                        <option>FARIDABAD</option>
                                        <option>FATEHPUR</option>
                                        <option>FEROZEPUR</option>
                                        <option>FIROZABAD</option>
                                        <option>GADAG</option>
                                        <option>GANDHIDHAM</option>
                                        <option>GANDHINAGAR</option>
                                        <option>GANGAVATI</option>
                                        <option>GAUTAM BUDH NAGAR</option>
                                        <option>GAYA</option>
                                        <option>GHATAPRABHA</option>
                                        <option>GHAZIABAD</option>
                                        <option>GHAZIPUR</option>
                                        <option>GIRIDIH</option>
                                        <option>GOA</option>
                                        <option>GOBICHETTYPALYAM</option>
                                        <option>GODHRA</option>
                                        <option>GOKAK</option>
                                        <option>GONDIA</option>
                                        <option>GORAKHPUR</option>
                                        <option>GULBARGA</option>
                                        <option>GUNTAKAL</option>
                                        <option>GUNTUR</option>
                                        <option>GURGAON</option>
                                        <option>GUWAHATI</option>
                                        <option>GWALIOR</option>
                                        <option>HAILAKANDI</option>
                                        <option>HALDWANI</option>
                                        <option>HARIDWAR</option>
                                        <option>HATHRAS</option>
                                        <option>HISAR</option>
                                        <option>HISSAR</option>
                                        <option>HOOGHLY</option>
                                        <option>HOSHANGABAD</option>
                                        <option>HOSPET</option>
                                        <option>HOWRAH</option>
                                        <option>HUBLI</option>
                                        <option>HYDERABAD</option>
                                        <option>IMPHAL</option>
                                        <option>INDORE</option>
                                        <option>JABALPUR</option>
                                        <option>JAGATSINGHPUR</option>
                                        <option>JAIPUR</option>
                                        <option>JALANDHAR</option>
                                        <option>JALESWAR</option>
                                        <option>JALGAON</option>
                                        <option>JALGOAN</option>
                                        <option>JALNA</option>
                                        <option>JALPAIGURI</option>
                                        <option>JAMMU</option>
                                        <option>JAMNAGAR</option>
                                        <option>JAMSHEDPUR</option>
                                        <option>JAMTARA</option>
                                        <option>JHANSI</option>
                                        <option>JODHPUR</option>
                                        <option>JUNAGADH</option>
                                        <option>KADIRI</option>
                                        <option>KAITHAL</option>
                                        <option>KAKINADA</option>
                                        <option>KALPETTA</option>
                                        <option>KANCHEEPURAM</option>
                                        <option>KANCHIPURAM</option>
                                        <option>KANDUKUR</option>
                                        <option>KANNUR</option>
                                        <option>KANPUR</option>
                                        <option>KANYAKUMARI</option>
                                        <option>KARAD</option>
                                        <option>KARAIKUDI</option>
                                        <option>KARIMNAGAR</option>
                                        <option>KARNAL</option>
                                        <option>KARUR</option>
                                        <option>KARWAR</option>
                                        <option>KASGANJ</option>
                                        <option>KASHIPUR</option>
                                        <option>KATIHAR</option>
                                        <option>KATNI</option>
                                        <option>KATWA</option>
                                        <option>KAVALI</option>
                                        <option>KERALA</option>
                                        <option>KESHOD</option>
                                        <option>KHAMGAON</option>
                                        <option>KHAMMAM</option>
                                        <option>KHANNA</option>
                                        <option>KHARGONE</option>
                                        <option>KHATIMA</option>
                                        <option>KISHANGARH</option>
                                        <option>KODERMA</option>
                                        <option>KOLAR</option>
                                        <option>KOLHAPUR</option>
                                        <option>KOLKATTA</option>
                                        <option>KORIYA</option>
                                        <option>KOTA</option>
                                        <option>KOTDWARA</option>
                                        <option>KOTTAYAM</option>
                                        <option>KOZHIKODE</option>
                                        <option>KUMBAKONAM</option>
                                        <option>KUNDAPURA</option>
                                        <option>KURNOOL</option>
                                        <option>KURUKSHETRA</option>
                                        <option>KUTCH</option>
                                        <option>LAKHIMPUR</option>
                                        <option>LALGUDI</option>
                                        <option>LALITPUR</option>
                                        <option>LATUR</option>
                                        <option>LUCKNOW</option>
                                        <option>LUDHIANA</option>
                                        <option>MADANAPALLY</option>
                                        <option>MADURAI</option>
                                        <option>MAHABUBNAGAR</option>
                                        <option>MAHARAJGANJ</option>
                                        <option>MAHESANA</option>
                                        <option>MAHUVA</option>
                                        <option>MALAPPURAM</option>
                                        <option>MALDA</option>
                                        <option>MALKAPUR</option>
                                        <option>MANAPARAI</option>
                                        <option>MANDI</option>
                                        <option>MANDYA</option>
                                        <option>MANGALORE</option>
                                        <option>MANMAD</option>
                                        <option>MARAIMALAI NAGAR</option>
                                        <option>MARGAO</option>
                                        <option>MATHURA</option>
                                        <option>MAU</option>
                                        <option>MAYILADUTHURAI</option>
                                        <option>MEERUT</option>
                                        <option>MEHSANA</option>
                                        <option>MIDNAPORE</option>
                                        <option>MIRAJ</option>
                                        <option>SANGLI</option>
                                        <option>MIRYALGUDA</option>
                                        <option>MOGA</option>
                                        <option>MOODABIDRI</option>
                                        <option>MORADABAD</option>
                                        <option>MORBI</option>
                                        <option>MOTIHARI</option>
                                        <option>MUMBAI</option>
                                        <option>MUNGER</option>
                                        <option>MURSHIDABAD</option>
                                        <option>MUZAFFARNAGAR</option>
                                        <option>MUZAFFARPUR</option>
                                        <option>MYSORE</option>
                                        <option>NADIA</option>
                                        <option>NADIAD</option>
                                        <option>NAGAON</option>
                                        <option>NAGAPATTINAM</option>
                                        <option>NAGAUR</option>
                                        <option>NAGERCOIL</option>
                                        <option>NAGPUR</option>
                                        <option>NAIHATI</option>
                                        <option>NAINITAL</option>
                                        <option>NAJIBABAD</option>
                                        <option>NAMAKKAL</option>
                                        <option>NANDED</option>
                                        <option>NANDURBAR</option>
                                        <option>NANDYAL</option>
                                        <option>NARASARAOPET</option>
                                        <option>NARWANA</option>
                                        <option>NASHIK</option>
                                        <option>NAVAPUR</option>
                                        <option>NAVI MUMBAI</option>
                                        <option>NAVSARI</option>
                                        <option>NAWADA</option>
                                        <option>NELLORE</option>
                                        <option>NEW DELHI</option>
                                        <option>NIPANI</option>
                                        <option>NIZAMABAD</option>
                                        <option>NOIDA</option>
                                        <option>ONGOLE</option>
                                        <option>OTHERS</option>
                                        <option>PALAKKAD</option>
                                        <option>PALAMPUR</option>
                                        <option>PALANI</option>
                                        <option>PALANPUR</option>
                                        <option>PANAJIM</option>
                                        <option>PANCHKULA</option>
                                        <option>PANDHARPUR</option>
                                        <option>PANIPAT</option>
                                        <option>PANJIM</option>
                                        <option>PANRUTI</option>
                                        <option>PANVEL</option>
                                        <option>PARACHUR</option>
                                        <option>PARBHANI</option>
                                        <option>PATHANAMTHITTA</option>
                                        <option>PATHANKOT</option>
                                        <option>PATIALA</option>
                                        <option>PATNA</option>
                                        <option>PILANI</option>
                                        <option>PILIBHIT</option>
                                        <option>POLLACHI</option>
                                        <option>PONDICHERRY</option>
                                        <option>PRAKASHAM</option>
                                        <option>PRODDATUR</option>
                                        <option>PUNE</option>
                                        <option>PURBA MIDNAPUR</option>
                                        <option>PURNIA</option>
                                        <option>PUSAD</option>
                                        <option>RAICHUR</option>
                                        <option>RAIGAD</option>
                                        <option>RAIPUR</option>
                                        <option>RAJAHMUNDRY</option>
                                        <option>RAJKOT</option>
                                        <option>RAMANATHAPURAM</option>
                                        <option>RAMNAGAR</option>
                                        <option>RAMPUR</option>
                                        <option>RANCHI</option>
                                        <option>RANGAREDDY</option>
                                        <option>RATH</option>
                                        <option>RATLAM</option>
                                        <option>RATNAGIRI</option>
                                        <option>RATNAGIRI</option>
                                        <option>RAYAGADA</option>
                                        <option>RENUKOOT</option>
                                        <option>ROHTAK</option>
                                        <option>ROORKEE</option>
                                        <option>ROURKELA</option>
                                        <option>SABARKANTHA</option>
                                        <option>SABARMATI</option>
                                        <option>SAHARANPUR</option>
                                        <option>SALEM</option>
                                        <option>SAMBALPUR</option>
                                        <option>SATARA</option>
                                        <option>SATNA</option>
                                        <option>SECUNDRABAD</option>
                                        <option>SHAHAJAHANPUR UP</option>
                                        <option>SHEGAON</option>
                                        <option>SHIMLA</option>
                                        <option>SIDDAPUR</option>
                                        <option>SILCHAR</option>
                                        <option>SILIGURI</option>
                                        <option>SILVASSA</option>
                                        <option>SINDHANUR</option>
                                        <option>SINGUR</option>
                                        <option>SIRCILLA</option>
                                        <option>SIROHI</option>
                                        <option>SIRSA</option>
                                        <option>SIRSI</option>
                                        <option>SITAMARHI</option>
                                        <option>SIVAKASI</option>
                                        <option>SIVASAGAR</option>
                                        <option>SOLAPUR</option>
                                        <option>SOMWARPET</option>
                                        <option>SONBHADRA</option>
                                        <option>SONEPAT</option>
                                        <option>SRIGANGANAGAR</option>
                                        <option>SRIVILLIPUTTUR</option>
                                        <option>SUNAM</option>
                                        <option>SURANDAI</option>
                                        <option>SURAT</option>
                                        <option>SURGUJA</option>
                                        <option>SURI</option>
                                        <option>TADEPALIIGUDEM</option>
                                        <option>TADIPATRI</option>
                                        <option>TANUKU</option>
                                        <option>TARAKESHWAR</option>
                                        <option>TENALI</option>
                                        <option>TENKASI</option>
                                        <option>THANE</option>
                                        <option>THANJAVUR</option>
                                        <option>THIRUVALLA</option>
                                        <option>THRISSUR</option>
                                        <option>TINDIVANAM</option>
                                        <option>TIRUCHARPALLY</option>
                                        <option>TIRUCHENDHUR</option>
                                        <option>TIRUCHIRAPALLI</option>
                                        <option>TIRUNELVELI</option>
                                        <option>TIRUPUR</option>
                                        <option>TONK</option>
                                        <option>TRIVANDRUM</option>
                                        <option>TUMKUR</option>
                                        <option>TUTICORIN</option>
                                        <option>UDAIPUR</option>
                                        <option>UJJAIN</option>
                                        <option>UNJHA</option>
                                        <option>UNNAO</option>
                                        <option>UPLETA</option>
                                        <option>VADODARA</option>
                                        <option>VALSAD</option>
                                        <option>VAPI</option>
                                        <option>VARANASI</option>
                                        <option>VELLORE</option>
                                        <option>VIJAYAWADA</option>
                                        <option>VILLUPURAM TN</option>
                                        <option>VIRAMGAM</option>
                                        <option>VIRUDHUNAGAR</option>
                                        <option>VISAKHAPATNAM</option>
                                        <option>VISHAKAPATNAM</option>
                                        <option>VISNAGAR</option>
                                        <option>VIZIANAGARAM</option>
                                        <option>WADAKANCHERY</option>
                                        <option>WARANGAL</option>
                                        <option>WASHIM</option>
                                        <option>WEST GODAVARI</option>
                                        <option>WESTGODAVARI</option>
                                        <option>YAMUNANAGAR</option>
                                        <option>YAVATMAL</option>
                                        <option>YELLAPUR</option>
                                    </select><span class="select2 select2-container select2-container--default"
                                        dir="ltr" data-select2-id="1" style="width: 406px;"><span
                                            class="selection"><span class="select2-selection select2-selection--single"
                                                role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                aria-disabled="false" aria-labelledby="select2-city-container"><span
                                                    class="select2-selection__rendered" id="select2-city-container"
                                                    role="textbox" aria-readonly="true" title="City Name">City
                                                    Name</span><span class="select2-selection__arrow" role="presentation"><b
                                                        role="presentation"></b></span></span></span><span
                                            class="dropdown-wrapper" aria-hidden="true"></span></span>
                                </div>
                                <div class="col-md-12" style="margin-top:15px;">
                                    <select class="multi-select jqmsLoaded" multiple="" id="multiSelect"
                                        name="multi-select" style="visibility: hidden; display: none;">
                                        <option value="PAN">PAN Card Services</option>
                                        <option value="DSC">Digital Signature Certificate</option>
                                        <option value="DIGIPAY">AEPS/MATM/DMT</option>
                                        <option value="NPS">National Pension System</option>
                                        <option value="BBPS">BBPS &amp; Recharge</option>
                                        <option value="Insurance">Insurance</option>
                                        <option value="EGOV Investments">Investments</option>
                                        <option value="Train Ticket">Train Ticketing</option>

                                        <option value="Air Ticket">Air Ticketing</option>
                                        <option value="Bus Ticket">Bus Ticketing</option>
                                    </select>
                                    <div class="ms-options-wrap" style="position: relative;"><button
                                            class="capture-value">Select All Products</button>
                                        <div class="ms-options"
                                            style="min-height: 200px; max-height: 200px; overflow: auto; display: none;"><a
                                                class="ms-selectall global">Select all Products</a>
                                            <ul style="column-count: 1; column-gap: 0px;">
                                                <li class=""><label for="ms-opt-1"><input type="checkbox"
                                                            value="PAN" title="PAN Card Services" id="ms-opt-1">PAN
                                                        Card Services</label></li>
                                                <li class=""><label for="ms-opt-2"><input type="checkbox"
                                                            value="DSC" title="Digital Signature Certificate"
                                                            id="ms-opt-2">Digital Signature Certificate</label></li>
                                                <li class=""><label for="ms-opt-3"><input type="checkbox"
                                                            value="DIGIPAY" title="AEPS/MATM/DMT"
                                                            id="ms-opt-3">AEPS/MATM/DMT</label></li>
                                                <li class=""><label for="ms-opt-4"><input type="checkbox"
                                                            value="NPS" title="National Pension System"
                                                            id="ms-opt-4">National Pension System</label></li>
                                                <li class=""><label for="ms-opt-5"><input type="checkbox"
                                                            value="BBPS" title="BBPS &amp; Recharge"
                                                            id="ms-opt-5">BBPS &amp; Recharge</label></li>
                                                <li class=""><label for="ms-opt-6"><input type="checkbox"
                                                            value="Insurance" title="Insurance"
                                                            id="ms-opt-6">Insurance</label></li>
                                                <li class=""><label for="ms-opt-7"><input type="checkbox"
                                                            value="EGOV Investments" title="Investments"
                                                            id="ms-opt-7">Investments</label></li>
                                                <li class=""><label for="ms-opt-8"><input type="checkbox"
                                                            value="Train Ticket" title="Train Ticketing"
                                                            id="ms-opt-8">Train Ticketing</label></li>
                                                <li class=""><label for="ms-opt-9"><input type="checkbox"
                                                            value="Air Ticket" title="Air Ticketing" id="ms-opt-9">Air
                                                        Ticketing</label></li>
                                                <li class=""><label for="ms-opt-10"><input type="checkbox"
                                                            value="Bus Ticket" title="Bus Ticketing" id="ms-opt-10">Bus
                                                        Ticketing</label></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <span class="error-in" id="product-error" style="display:none;">Please select a
                                        Product From the list</span>
                                </div>



                                <div class="col-md-6 frmFld">
                                    <input type="text" class="form-control" id="phone_mobile" name="phone_mobile"
                                        placeholder="Mobile Number" onkeypress="checkMobileNoLength(event)"
                                        onblur="getOtpCall()" autocomplete="off">
                                    <span class="error-in" id="mobile-error" style="display: none;">Please enter valid
                                        Mobile number</span>
                                    <span id="mss" style="font-size: 12px; color: green;"></span>
                                </div>

                                <div class="col-md-6 frmFld">
                                    <input type="text" class="form-control" id="otp" name="otp"
                                        placeholder="OTP" onchange="resetError()" autocomplete="off">
                                    <span class="error-in" id="otp-error" style="display:none">Please enter valid
                                        OTP.</span>
                                    <a class="resend" id="resendOtp" onclick="getOtpCall()">Resend OTP</a>
                                </div>

                                <input type="hidden" id="Referrerby" name="Referrerby" value="">
                                <input type="hidden" id="campaign_id" name="campaign_id" value="a06TZ00000B15m1YAB">
                                <input type="hidden" id="lead_source" name="lead_source" value="website">
                                <input type="hidden" id="lead_utm_adgroup_c" name="lead_utm_adgroup_c" value="website">
                                <input type="hidden" id="lead_locater_c" name="lead_locater_c" value="Portal">

                                <input type="hidden" id="utmsource_c" name="utmsource_c" value="FD">

                                <input type="hidden" id="utmcampaign_c" name="utmcampaign_c" value="Google">

                                <input type="hidden" id="utmkeyword_c" name="utmkeyword_c" value="FD">

                                <input type="hidden" id="lead_utm_term_c" name="lead_utm_term_c"
                                    value="ReligareDigital">

                                <input type="hidden" id="lead_utm_placement_c" name="lead_utm_placement_c"
                                    value="fixed-deposit-fd">

                                <input type="hidden" id="lead_utm_medium_c" name="lead_utm_medium_c" value="Organic">


                                <div class="col-md-12  frmFld msg">
                                    By signing up, you agree to receive updates on Whatsapp
                                </div>

                                <div class="col-md-12  frmFld">
                                    <button type="submit" onclick="submit_form(event)">Submit</button>
                                </div>
                            </div>
                        </form>




                    </div>
                </div>
            </div>
        </div>
        <div class="bannerBottom"></div>
    </div>
    <section id="why-us" class="why-us advantage pb-0" style="background:none;">
        <div class="container">
            <div class="row gx-0 documents">
                <div class="col-lg-12 d-flex flex-column justify-content-center">

                    <div class="row gx-0 BenefitsBox">
                        <div class="col-lg-12 col-sm-12 mb-3">


                            <div class="section-title">
                                <h2>Fixed Deposit (FD)</h2>
                                <p>A fixed deposit is a financial instrument provided by banks or NBFCs which provides a
                                    higher rate of interest as compared to a regular savings account. A Fixed Deposit is a
                                    type of an account opened with a bank where an assured rate of interest is paid for
                                    keeping the funds for a particular period. Fixed Deposits are an easy way to earn
                                    returns from funds that are lying idle.</p>
                            </div>
                        </div>

                        <div class="col-lg-12 col-sm-12 float-start section-title">
                            <div class="row gap-52 mt-3">
                                <div
                                    class="col-lg-3 col-md-12 border-hover p-2 border d-flex align-items-center justify-content-start iconBox">
                                    <div class="ms-2"><img src="/wp-content/themes/egov/campaigns/e-pan/images/old.png"
                                            alt="Safe &amp; Secure" style="height: 50px;"></div>
                                    <div class="ps-3">
                                        <h6 class="text-start m-0">Senior Citizen FD</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-12 border-hover p-2 border d-flex align-items-center justify-content-start iconBox">
                                    <div class="ms-2"><img
                                            src="/wp-content/themes/egov/campaigns/e-pan/images/taxes.png"
                                            alt="Earn-interest" style="height: 50px;"></div>
                                    <div class="ps-3">
                                        <h6 class="text-start m-0">Tax Saving FD</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-12 border-hover p-2 border d-flex align-items-center justify-content-start iconBox">
                                    <div class="ms-2"><img
                                            src="/wp-content/themes/egov/campaigns/e-pan/images/directions.png"
                                            alt="Tax-benefits" style="height: 50px;"></div>
                                    <div class="ps-3">
                                        <h6 class="text-start m-0">Flexi FD</h6>
                                    </div>
                                </div>
                                <div
                                    class="col-lg-3 col-md-12 border-hover p-2 border  d-flex align-items-center justify-content-start iconBox">
                                    <div class="ms-2"><img
                                            src="/wp-content/themes/egov/campaigns/e-pan/images/deposit.png"
                                            alt="Tax-benefits" style="height: 50px;"></div>
                                    <div class="ps-3 ">
                                        <h6 class="text-start m-0">Bank Deposit FD</h6>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-3 col-md-12 border-hover p-2 border  d-flex align-items-center justify-content-start iconBox">
                                    <div class="ms-2"><img
                                            src="/wp-content/themes/egov/campaigns/e-pan/images/gross.png"
                                            alt="Tax-benefits" style="height: 50px;"></div>
                                    <div class="ps-3 ">
                                        <h6 class="text-start m-0">Cumulative FD</h6>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-3 col-md-12 border-hover p-2 border  d-flex align-items-center justify-content-start iconBox">
                                    <div class="ms-2"><img
                                            src="/wp-content/themes/egov/campaigns/e-pan/images/fixed.png"
                                            alt="Tax-benefits" style="height: 50px;"></div>
                                    <div class="ps-3 ">
                                        <h6 class="text-start m-0">Non-cumulative FD</h6>
                                    </div>
                                </div>

                                <div
                                    class="col-lg-3 col-md-12 border-hover p-2 border  d-flex align-items-center justify-content-start iconBox">
                                    <div class="ms-2"><img
                                            src="/wp-content/themes/egov/campaigns/e-pan/images/travel.png"
                                            alt="Tax-benefits" style="height: 50px;"></div>
                                    <div class="ps-3 ">
                                        <h6 class="text-start m-0">NRIs FD</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </section>
    <section id="why-us" class="why-us advantage pb-0">
        <div class="container-fluid desktopView aos-init aos-animate" data-aos="fade-up">
            <div class="section-title">
                <h2>ADVANTAGES OF RELIGARE PARTNERSHIP</h2>
            </div>
            <div class="content">

                <div class="box"><span><img
                            src="https://religaredigital.in/wp-content/themes/egov/assets/images/Vector.png"
                            class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                            data-aos-delay="150"></span> Business opportunity <br>with low investment</div>

                <div class="box"><span><img
                            src="https://religaredigital.in/wp-content/themes/egov/assets/images/Vector1.png"
                            class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                            data-aos-delay="150"></span> Easy onboarding on <br>our platform</div>

                <div class="box"><span><img
                            src="https://religaredigital.in/wp-content/themes/egov/assets/images/Vector2.png"
                            class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                            data-aos-delay="150"></span> One stop shop for all<br> Digital &amp; Financial Services</div>

                <div class="box"><span><img
                            src="https://religaredigital.in/wp-content/themes/egov/assets/images/Vector3.png"
                            class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                            data-aos-delay="150"></span> High earning <br>potential</div>

                <div class="box last"><span><img
                            src="https://religaredigital.in/wp-content/themes/egov/assets/images/Vector4.png"
                            class="img-fluid aos-init aos-animate" alt="" data-aos="zoom-in"
                            data-aos-delay="150"></span> Secure &amp; Reliable <br>technology platform</div>

            </div>
        </div>
    </section>
    <section class="section-header portfolio" id="services">
        <div class="container">
            <div class="section-title">
                <h1>Religare Digital Products &amp; Services</h1>
            </div><br>
            <ul id="portfolio-flters" class="aos-init aos-animate" data-aos="fade-up" data-aos-delay="100">
                <li data-filter=".filter-banking" class="fp filter-active">Banking &amp; Finance</li>
                <li data-filter=".filter-egov" class="e-service">eGov Services</li>
                <li data-filter=".filter-recharge" class="rbp">Recharge &amp; Bill Payments</li>
                <li data-filter=".filter-tour" class="tt">Tours &amp; Travels</li>
                <li data-filter=".filter-Investments" class="investments">Investments</li>
                <li data-filter=".filter-payment" class="insurances">Insurances</li>
                <!-- <li data-filter=".filter-ecommerce" class="e-commerce">e-Commerce</li> -->
            </ul>



            <div class="row portfolio-container gy-4" style="position: relative; height: 198.625px;">



                <div class="col-lg-3 col-md-6 portfolio-item filter-banking"
                    style="display: block; position: absolute; left: 0px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/aeps.png"
                                        class="img-fluid" alt="AePS"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>AePS</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-banking"
                    style="display: block; position: absolute; left: 330px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/dmt.png"
                                        class="img-fluid" alt="DMT"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>DMT</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-banking"
                    style="display: block; position: absolute; left: 660px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/micro-atm.png"
                                        class="img-fluid" alt="Micro ATM"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Micro ATM</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-banking"
                    style="display: block; position: absolute; left: 990px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/csp.png"
                                        class="img-fluid" alt="CSP"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>CSP</h4>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-egov"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/pan.png"
                                        class="img-fluid" alt="PAN"><br></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>PAN</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-egov"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">

                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/tds.png"
                                        class="img-fluid" alt="TDS/eTDS"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>TDS/eTDS</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-egov"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">

                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/dsc.png"
                                        class="img-fluid" alt="DSC"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>DSC</h4>

                            </div>
                        </div>
                    </div>
                </div>




                <div class="col-lg-3 col-md-6 portfolio-item filter-recharge"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">

                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/bbps.png"
                                        class="img-fluid" alt="BBPS/Home Utilities"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>BBPS/Home Utilities</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-recharge"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/recharges.png"
                                        class="img-fluid" alt="Recharges"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Recharges</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-payment"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/healthcare.png"
                                        class="img-fluid" alt="Health Insurance"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Health Insurance</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-payment"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/shield.png"
                                        class="img-fluid" alt="Life Insurance"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Life Insurance</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-payment"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/general-insurance.png"
                                        class="img-fluid" alt="General Insurance"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>General Insurance</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-payment"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/car-insurance.png"
                                        class="img-fluid" alt="Motor Insurance"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Motor Insurance</h4>

                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-3 col-md-6 portfolio-item filter-tour"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/irctc.png"
                                        class="img-fluid" alt="Train Tickets"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Train Tickets</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-tour"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/buslogo.png"
                                        class="img-fluid" alt="Bus Tickets"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Bus Tickets</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-tour"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/uploads/2022/12/ticket.png"
                                        class="img-fluid" alt="Air Tickets"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Air Tickets</h4>

                            </div>
                        </div>
                    </div>
                </div>



                <div class="col-lg-3 col-md-6 portfolio-item filter-Investments"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/nps.png"
                                        class="img-fluid" alt="National Pension System"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>National Pension System</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-Investments"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/mf.png"
                                        class="img-fluid" alt="Mutual Fund"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Mutual Fund</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-Investments"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/sgb.png"
                                        class="img-fluid" alt="Sovereign Gold Bond (SGB)"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Sovereign Gold Bond (SGB)</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-Investments"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/fd.png"
                                        class="img-fluid" alt="Fixed Deposit (FD)"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Fixed Deposit (FD)</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-Investments"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/cgb.png"
                                        class="img-fluid" alt="Captital Gain Bonds"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>Captital Gain Bonds</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 portfolio-item filter-Investments"
                    style="display: none; position: absolute; left: 1320px; top: 0px;">
                    <div class="innerBox">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portfolio-img"><img
                                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/ipo.png"
                                        class="img-fluid" alt="IPOs"></div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="portfolio-info">
                                <h4>IPOs</h4>

                            </div>
                        </div>
                    </div>
                </div>

                <!-- <div class="col-lg-3 col-md-6 portfolio-item filter-ecommerce">
              <div class="innerBox">
                <div class="row">
                  <div class="col-md-12">
                    <div class="portfolio-img"><img
                        src="https://religaredigital.in/wp-content/themes/egov/assets/images/amazon.png" class="img-fluid"
                        alt="Amazon"></div>
                  </div>
                </div>

                <div class="row">
                  <div class="portfolio-info">
                    <h4>Amazon</h4>

                  </div>
                </div>
              </div>
            </div> -->
            </div>

            <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="200">
                <ul id="portfolio-flters" class="d-flex justify-content-center aos-init aos-animate" data-aos="fade-up"
                    data-aos-delay="100">
                    <li data-filter="*" class="filter-active viewAll"
                        style="background:transparent;
  color: #fff;
  border:2px solid #00A536;
  border-radius:10px;
  color:#081D2C;
  padding:10px 20px;
  list-style:none;">
                        View all</li>
                </ul>
            </div>
        </div>
    </section>
    <section class="section-header docSec grey-blue" id="documents">
        <div class="container">

            <div class="section-title">
                <h2>Documents Required</h2><br>
                <p style="margin-bottom:30px">If you are considering a career as a Sub Broker, you need to provide
                    documents to enable smooth functioning
                    of your
                    business or contact our Regional
                    Franchise Manager.</p>
            </div>


            <div class="row gx-0 documents">
                <div class="col-lg-12 d-flex flex-column justify-content-center">


                    <div class="row gx-0">
                        <div class="col-lg-3 col-sm-12 box2 float-start">
                            <img src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/icons-09.svg"
                                alt="Passport Size Photograph">
                            <div class="docs-discription">
                                <h6>Photograph &amp; PAN Card</h6>
                                <p>Passport Size Photograph &amp; Pan card copy</p>
                            </div>
                        </div>



                        <div class="col-lg-3 col-sm-12 box2 float-start">
                            <img src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/icons-12.svg"
                                alt="Office Proof">
                            <div class="docs-discription">
                                <h6>Office Proof</h6>
                                <p>Landline/Telephone Bill/Electricity Bill/Rent Agreement</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12 box2 float-start">
                            <img src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/bank-proof.svg"
                                alt="Bank Proof">
                            <div class="docs-discription">
                                <h6>Bank Proof</h6>
                                <p>Copy of : cancelled cheque / statement / passbook</p>
                            </div>
                        </div>

                        <div class="col-lg-3 col-sm-12 box2 float-start">
                            <img src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/icons-11.svg"
                                alt="Residence Address Proof">
                            <div class="docs-discription">
                                <h6>Residence Address Proof</h6>
                                <p>Driving Licence, Aadhar card/Voter id card/passport/passbook</p>
                            </div>
                        </div>


                        <div class="col-lg-9 col-sm-12 box2 last float-start">
                            <img src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/additional-docs.svg"
                                alt="Additional Documents">
                            <div class="docs-discription">
                                <h6>Additional Documents</h6>
                                <p><strong>For Partnership Firm: </strong>Copy of Partnership Deed/Letter of Authority of
                                    the
                                    Partners<br>
                                    <strong>For Companies: </strong>Copy of Memorandum and Articles of Association/ Bye
                                    Laws, Board
                                    Resolution (Company /Society / Trust), Authorized Signatory List
                                </p>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>

    </section>
    <section id="clients" class="clients">
        <div class="container-fluid p-0">
            <div class="section-title">
                <h2>Religare Digital Partners</h2>
            </div>
            <div class="row aos-init" data-aos="zoom-in">



                <div class="owl-carousel owl-carousel1 owl-theme owl-loaded owl-drag">





















                    <!-- <div class="owl-item">
                <div class="card row d-flex flex-row">
                  <div class="profile"><img
                      src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client12.png"
                      class="img-fluid" alt="client logo"></div>
                </div>
              </div> -->

                    <div class="owl-stage-outer">
                        <div class="owl-stage"
                            style="transform: translate3d(-3185px, 0px, 0px); transition: 0.25s; width: 5145px;">
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client4.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client5.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client6.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client7.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client9.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client11.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client1.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client2.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client3.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client4.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client5.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client6.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client7.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client9.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client11.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client1.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client2.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client3.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned active" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client4.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client5.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="owl-item cloned" style="width: 215px; margin-right: 30px;">
                                <div class="owl-item">
                                    <div class="card row d-flex flex-row">
                                        <div class="profile"><img
                                                src="{{ url('public/theme/web-new') }}/wp-content/themes/Campaigns/Become-an-Associate-updated-dummy/images/client6.png"
                                                class="img-fluid" alt="client logo"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="owl-nav disabled">
                        <div class="owl-prev"><i class="fa fa-arrow-left" aria-hidden="true"></i></div>
                        <div class="owl-next"><i class="fa fa-arrow-right" aria-hidden="true"></i></div>
                    </div>
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonialSec" id="reviews">
        <div class="container rounded">
            <div class="section-title">
                <h2>Partner Reviews</h2>
            </div>
            <div id="demo" class="carousel slide" data-bs-ride="carousel">

                <!-- Indicators/dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"
                        aria-current="true"></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="1" class=""></button>
                    <button type="button" data-bs-target="#demo" data-bs-slide-to="2" class=""></button>
                </div>

                <!-- The slideshow/carousel -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testi_img text-center">
                            <img src="https://egovpartner.religareonline.com/web/wp-content/themes/egov/images/9918.png"
                                alt="Sunil Kumar">
                            <h3 class="name">Sunil Kumar </h3>
                            <div class="mb-2"> <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star active-star" aria-hidden="true">
                                </span> <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star-half-alt active-star" aria-hidden="true"></span>
                            </div>
                        </div>
                        <p class="">
                            I am writing to you to express my gratitude towards the company. I have joined RELIGARE BROKING
                            LIMITED
                            7yrs ago.I am achieved 6 lakh pan card acknowledgement and 7 lakh Etds .I am happy to generate a
                            revenue
                            of 5 lakh per year .Unlike my previous experience with another company, I found this platform
                            very
                            impressive
                            We want to thank you for being your true self while at work. Your optimistic attitude and good
                            conduct,
                            while at work, is motivating for your peers and senior colleagues alike.
                            You are an inspiration for the team and you have a significant role to play in the future
                            success of the
                            organisation. Keep the good work going.
                        </p>
                    </div>
                    <div class="carousel-item">
                        <div class="testi_img text-center">
                            <img src="https://egovpartner.religareonline.com/web/wp-content/themes/egov/images/9343.png"
                                alt="Sujeet Kumar">
                            <h3 class="name">Sujeet Kumar </h3>
                            <div class="mb-2"> <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star active-star" aria-hidden="true">
                                </span> <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star-half-alt active-star" aria-hidden="true"></span>
                            </div>
                        </div>
                        <p class=""> I am very happy to say that ,with Religare Broking Limited Company we are
                            dealing with PAN Card
                            , TAN No , E-TDS Aadhaar DSC since 2014 which is resolved in a friendly manner with Religare
                            Broking
                            Limited Company and prompt action is taken. No difficulties have arisen in doing the work since
                            2014. And
                            in future also the company will continue to support us in our work. It was a good experience to
                            work with
                            them. I hope that the co-workers of Religare Broking Limited and their senior officers will
                            continue to
                            have a good working relationship in the coming times so that by joining them, they will continue
                            to
                            cooperate in more profit and service to the general public. </p>
                    </div>
                    <div class="carousel-item">
                        <div class="testi_img text-center">
                            <img src="https://egovpartner.religareonline.com/web/wp-content/themes/egov/images/09101.png"
                                alt="Sathya">
                            <h3 class="name">Sathya </h3>
                            <div class="mb-2"> <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star active-star" aria-hidden="true">
                                </span> <span class="fas fa-star active-star" aria-hidden="true"></span>
                                <span class="fas fa-star-half-alt active-star" aria-hidden="true"></span>
                            </div>
                        </div>
                        <p class="">
                            I am writing to thank you for the quality of service provided by your team. We sincerely
                            appreciate your
                            efficient, gracious service, the level of detail and accountability you have demonstrated on
                            each
                            services, and the way you conduct business as a whole.
                            I have associated with Religare from last 10 years and processed more than 3 lack pan
                            application and got
                            good support and proactive auctions regarding pan processing and other day to day work. I am
                            able to earn
                            nearly 7 Lac per year through your franchise.
                            Your IT team, Accounts team and compliance team is really working hard and supported us a lot
                            And given
                            solution for all problems.
                        </p>
                    </div>



                </div>

                <!-- Left and right controls/icons -->
                <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>
        </div>
    </section>
    <section class="section-header grey-blue" id="awards">
        <div class="container awards">
            <h2>Awards</h2>
            <p>We have earned our recognition and it feels great every time when we are praised and recognised by
                distinguished
                organisations. Some of the awards we have received for our
                services and initiatives</p>
            <div class="row gx-0 mt-5 text-center">
                <div class="col-lg-4 mb-3 awardBox">

                    <img src="https://religaredigital.in/wp-content/themes/egov/assets/images/award3.jpg"
                        alt="Religare Broking" class="img-fluid">
                </div>
                <div class="col-lg-4 mb-3 awardBox">
                    <img src="https://religaredigital.in/wp-content/themes/egov/assets/images/award4.jpg"
                        alt="Religare Broking" class="img-fluid">
                </div>
                <div class="col-lg-4 mb-3 awardBox">
                    <img src="https://religaredigital.in/wp-content/themes/egov/assets/images/award2.jpg"
                        alt="Religare Broking" class="img-fluid">
                </div>
                <div class="col-lg-4 mb-3 awardBox">
                    <img src="https://religaredigital.in/wp-content/themes/egov/assets/images/award1.jpg"
                        alt="Religare Broking" class="img-fluid">
                </div>
                <div class="col-lg-4 mb-3 awardBox">
                    <img src="https://religaredigital.in/wp-content/themes/egov/assets/images/award5.jpg"
                        alt="Religare Broking" class="img-fluid">
                </div>
                <div class="col-lg-4 mb-3 awardBox">
                    <img src="https://religaredigital.in/wp-content/themes/egov/assets/images/award6.jpg"
                        alt="Religare Broking" class="img-fluid">
                </div>
            </div>
        </div>

    </section>
@endsection
