@extends('web-layout')
@section('title', 'Contact')
@section('content')
    <main id="main">
        <div class="container breadcrumb aos-init aos-animate" data-aos="fade-up">
            <ul class="breadcrumb">
                <li><a href="/">Home</a> :: </li>
                <li>Contact US</li>
            </ul>
        </div>
        <!-- ======= eGovernance-Service Section 1======= -->
        <section id="why-us" class="">
            <div class="container aos-init aos-animate" data-aos="fade-up">
                <div class="row Box1">
                    <div class="col-lg-6 col-md-8 col-sm-12 order-1 order-lg-2 contactSec">
                        <div class="row d-flex contact-row">
                            <i class="fa-solid fa-location-dot"></i>
                            <span>Prius Height, 2nd Floor, Plot No 10/11,
                                Sector 125, Noida - 201301, Uttar Pradesh
                            </span>
                        </div>
                        <div class="row d-flex contact-row">
                            <i class="fa-solid fa-phone"></i>
                            <span><a href="tel:+91 8805826526">+91 8805826526</a></span>
                        </div>
                        <div class="row d-flex contact-row">
                            <i class="fa-solid fa-envelope"></i>
                            <span><a href="mailto:support@eadarsh.in"
                                    target="_blank">support@eadarsh.in</a></span>
                        </div>
                        <div class="row d-flex contact-row">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14019.251222542138!2d77.3300731!3d28.5453458!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce42abfffffff%3A0xde985a3813cb5271!2sPrius%20Height!5e0!3m2!1sen!2sin!4v1681985490622!5m2!1sen!2sin"
                                width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                    <div class="col-lg-6 Boxcontent order-2 order-lg-1">
                        <div class="section-title pt-4 formBox">
                            <div class="container aos-init aos-animate p-0" data-aos="fade-up">
                                <h2>Contact US</h2>
                            </div>
                            <form id="WebToLeadForm" autocomplete="off" class="php-email-form">
                                <div class="row gy-4">
                                    <div class="col-md-6 field-group">
                                        <input type="text" class="form-control" id="opportunity_name"
                                            name="opportunity_name" placeholder="Name" onkeypress="checkNameLength(event)"
                                            autocomplete="off">
                                        <span class="error-in" id="name-error" style="display: none;">Please enter valid
                                            Name</span>
                                    </div>
                                    <div class="col-md-6 field-group">
                                        <input type="text" class="form-control" id="phone_mobile" name="phone_mobile"
                                            placeholder="Mobile Number" onkeypress="checkMobileNoLength(event)"
                                            onblur="getOtpCall()" autocomplete="off">
                                        <span class="error-in" id="mobile-error" style="display: none;">Please enter valid
                                            Mobile number</span>
                                        <span id="mss" style="font-size: 12px; color: green;"></span>
                                    </div>
                                    <div class="col-md-6 field-group">
                                        <input type="email" class="form-control" id="email1" name="email1"
                                            placeholder="Email" onkeypress="checkEmailPattern(event)">
                                        <span class="error-in" id="email-error" style="display: none;">Please enter valid
                                            Email</span>
                                    </div>
                                    <div class="col-md-6 field-group">
                                        <input type="text" class="form-control" id="otp" name="otp"
                                            placeholder="OTP" onchange="resetError()">
                                        <span class="error-in" id="otp-error" style="display:none">Please enter valid
                                            OTP.</span>
                                        <a class="resend" id="resendOtp" onclick="getOtpCall()">Resend OTP</a>
                                    </div>
                                    <div class="col-md-12 field-group">
                                        <select class="form-select select2-hidden-accessible" name="city_c" id="city"
                                            data-select2-id="city" tabindex="-1" aria-hidden="true">
                                            <option selected="selected" value="0" data-select2-id="2">City Name
                                            </option>
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
                                            dir="ltr" data-select2-id="1" style="width: 584px;"><span
                                                class="selection"><span class="select2-selection select2-selection--single"
                                                    role="combobox" aria-haspopup="true" aria-expanded="false"
                                                    tabindex="0" aria-disabled="false"
                                                    aria-labelledby="select2-city-container"><span
                                                        class="select2-selection__rendered" id="select2-city-container"
                                                        role="textbox" aria-readonly="true" title="City Name">City
                                                        Name</span><span class="select2-selection__arrow"
                                                        role="presentation"><b
                                                            role="presentation"></b></span></span></span><span
                                                class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                    <div class="col-md-12">
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
                                            <option value="Air Ticket">Air Ticket</option>
                                            <option value="Bus Ticket">Bus Ticket</option>
                                        </select>
                                        <div class="ms-options-wrap" style="position: relative;"><button
                                                class="capture-value">Select All Products</button>
                                            <div class="ms-options"
                                                style="min-height: 200px; max-height: 200px; overflow: auto; display: none;">
                                                <a class="ms-selectall global">Select all Products</a>
                                                <ul style="column-count: 1; column-gap: 0px;">
                                                    <li class=""><label for="ms-opt-1"><input type="checkbox"
                                                                value="PAN" title="PAN Card Services"
                                                                id="ms-opt-1">PAN Card Services</label></li>
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
                                                                value="Air Ticket" title="Air Ticket" id="ms-opt-9">Air
                                                            Ticket</label></li>
                                                    <li class=""><label for="ms-opt-10"><input type="checkbox"
                                                                value="Bus Ticket" title="Bus Ticket" id="ms-opt-10">Bus
                                                            Ticket</label></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <span class="error-in" id="product-error" style="display:none;">Please select a
                                            Product From the list</span>
                                    </div>

                                    <input type="hidden" id="Referrerby" name="Referrerby" value="">
                                    <input type="hidden" id="referrermobile" name="referrermobile" value="">
                                    <input type="hidden" id="referrername" name="referrername" value="">
                                    <input type="hidden" id="irnotify" name="irnotify" value="">
                                    <input type="hidden" id="lead_utm_adgroup_c" name="lead_utm_adgroup_c"
                                        value="website">
                                    <input type="hidden" id="utmcampaign_c" name="utmcampaign_c" value="google">
                                    <input type="hidden" id="utmkeyword_c" name="utmkeyword_c" value="contactus">
                                    <input type="hidden" id="lead_utm_term_c" name="lead_utm_term_c"
                                        value="ReligareDigital">
                                    <input type="hidden" id="lead_utm_placement_c" name="lead_utm_placement_c"
                                        value="contactus">
                                    <input type="hidden" id="lead_utm_medium_c" name="lead_utm_medium_c"
                                        value="website">

                                    <input type="hidden" id="assigned_user_id" name="assigned_user_id" value="1">
                                    <input type="hidden" id="moduleDir" name="moduleDir" value="Leads">
                                    <input type="hidden" id="lead_source" name="lead_source" value="Religare_Digital">
                                    <input type="hidden" id="utmsource_c" name="utmsource_c" value="Organic-contactus">
                                    <!-- /*///chnage id */  -->
                                    <input type="hidden" id="utm_campaign" name="utm_campaign" value="">
                                    <input type="hidden" id="utm_medium" name="utm_medium" value="">
                                    <input type="hidden" id="utm_keyword" name="utm_keyword" value="">
                                    <input type="hidden" id="utm_placement" name="utm_placement" value="">
                                    <input type="hidden" id="utm_site" name="utm_site" value="">
                                    <input type="hidden" id="utm_adgroup" name="utm_adgroup" value="">
                                    <input type="hidden" id="utm_content" name="utm_content" value="">
                                    <input type="hidden" id="utm_creative" name="utm_creative" value="">
                                    <input type="hidden" id="lead_locater_c" name="lead_locater_c" value="portal">

                                    <input type="hidden" id="campaign_id" name="campaign_id"
                                        value="a06TZ00000B15m1YAB">

                                    <div class="col-md-12 field-group">
                                        By signing up, you agree to receive updates on Whatsapp
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" onclick="submit_form(event)"
                                            class="mybtn">Submit</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End eGovernance-Service Section 1 ------>
    </main>
@endsection
