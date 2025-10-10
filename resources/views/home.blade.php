@extends('web-layout')

@section('title', 'Home Page')

@section('content')
<main id="main" style="margin-top: 20px">
<!-- ======= Products Section 2 ======= -->
<section id="portfolio" class="portfolio">
  <div class="container-fluid">
    <div class="section-title"><h2>Our Products & Services</h2></div>
  </div>
  <div class="container" data-aos="fade-up">
    <ul
      id="portfolio-flters"
      class=""
      data-aos="fade-up"
      data-aos-delay="100"
    >
      <li data-filter=".filter-banking" class="fp">
        Banking & Finance
      </li>
      <li data-filter=".filter-egov" class="e-service">
        eGov Services
      </li>
      <li data-filter=".filter-recharge" class="rbp">
        Recharge & Bill Payments
      </li>
      <li data-filter=".filter-tour" class="tt">Travels</li>
      <li data-filter=".filter-Investments" class="investments">
        Investments
      </li>
      <li data-filter=".filter-payment" class="insurance">Insurance</li>
      <li data-filter=".filter-loan" class="loan-services">
        Loan Services
      </li>
      <li data-filter=".filter-indi" class="customer-services">
        Customer Services
      </li>
    </ul>

    <div
      class="row portfolio-container"
      data-aos="fade-up"
      data-aos-delay="200"
    >
      <div class="col-lg-3 col-md-6 portfolio-item filter-banking">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/aeps.png"
                  class="img-fluid"
                  alt="AePS"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>AePS</h4>
              <p>
                AePS service enables the customer to use their Aadhaar
                card to access their Aadhaar-linked...
              </p>
              <a
                href="https://aRregqpH93uL.in/aadhaar-enabled-payment-system/?utm_source=Organic-AePS"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-banking">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/dmt.png"
                  class="img-fluid"
                  alt="DMT"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>DMT</h4>
              <p>
                This is a secure money transfer process with multiple
                authentication levels to ensure...
              </p>
              <a
                href="https://aRregqpH93uL.in/dmt/?utm_source=Organic-DMT"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-banking">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/micro-atm.png"
                  class="img-fluid"
                  alt="Micro ATM"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Micro ATM</h4>
              <p>
                Our micro ATM centres will support all transactions
                which can be normally conducted at...
              </p>
              <a
                href="https://aRregqpH93uL.in/micro-atm/?utm_source=Organic-micro-atm"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-banking">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/csp.png"
                  class="img-fluid"
                  alt="CSP"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>CSP</h4>
              <p>
                Customer Service Point (CSP) will enable people to open
                bank accounts, withdraw...
              </p>
              <a
                href="https://aRregqpH93uL.in/csp-agent/"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-egov">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/pan.png"
                  class="img-fluid"
                  alt="PAN"
                /><br />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>PAN</h4>
              <p>
                Get a new PAN card made or get an existing one updated
                with our prompt, hassle-free...
              </p>
              <a
                href="https://aRregqpH93uL.in/pan-card-center/?utm_source=Organic-PAN"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-egov">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/tds.png"
                  class="img-fluid"
                  alt="TDS/eTDS"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>TDS/eTDS</h4>
              <p>
                We are registered with ITD which has modernized the
                current collection system...
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#eGovService"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-egov">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/dsc.png"
                  class="img-fluid"
                  alt="DSC"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>DSC</h4>
              <p>
                A Digital Signature Certificate validates your identity
                electronically...
              </p>
              <a
                href="https://aRregqpH93uL.in/dsc-token/?utm_source=Organic-DSC"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-egov">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/swanidhi.png"
                  class="img-fluid"
                  alt="DSC"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>PM SVANidhi Scheme</h4>
              <p>
                The Ministry of Housing & Urban Affairs launched PM
                SVANidhi scheme...
              </p>
              <a
                href="https://aRregqpH93uL.in/pmsvanidhi/?utm_source=Organic-pmsvanidhi"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-recharge">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/bbps.png"
                  class="img-fluid"
                  alt="BBPS/Home Utilities"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>BBPS/Home Utilities</h4>
              <p>
                Our channel partners accept payments for all utility
                bills such as water, electricity, Gas...
              </p>
              <a
                href="https://aRregqpH93uL.in/bharat-bill-payment-system-bbps/?utm_source=Organic-BBPS"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-recharge">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/recharges.png"
                  class="img-fluid"
                  alt="Recharges"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Recharges</h4>
              <p>
                Now recharge for your mobile, DTH or any prepaid
                recharge on-the-go with the help of our agents....
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#RechargeBillPayments"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-payment">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/two-wheeler-ins-s.png"
                  class="img-fluid"
                  alt="Life Insurance"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Two Wheeler Insurance</h4>
              <p>
                A two-wheeler insurance policy is an insurance cover for
                protection of two wheelers...
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#Insurance"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-payment">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/four-wheeler-insurance-s.png"
                  class="img-fluid"
                  alt="General Insurance"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Four Wheeler Insurance</h4>
              <p>
                Four Wheeler insurance is a unique insurance policy for
                vehicle owners to protect them...
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#Insurance"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-payment">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/healthcare-s.png"
                  class="img-fluid"
                  alt="Health Insurance"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Health Insurance</h4>
              <p>
                Health insurance is a type of insurance that covers
                medical expenses that arise due to an...
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#Insurance"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-payment">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/shield-s.png"
                  class="img-fluid"
                  alt="Motor Insurance"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Life Insurance</h4>
              <p>
                Life insurance is a contract between an insurance policy
                holder and an insurer...
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#Insurance"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-tour">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/irctc.png"
                  class="img-fluid"
                  alt="Train Tickets"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Train Tickets</h4>
              <p>
                We are an authorized IRCTC partner, you can get a chance
                to be an IRCTC agent...
              </p>
              <a
                href="https://aRregqpH93uL.in/rail-e-ticketing/?utm_source=Organic-Rail-Ticket"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-tour">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/buslogo.png"
                  class="img-fluid"
                  alt="Bus Tickets"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Bus Tickets</h4>
              <p>
                Now, book your bus tickets on Religare Digital and make
                your bus booking experience smoother and more
                affordable. We allow you to book tickets from anywhere
                in India at the lowest price.
              </p>
              <a
                href="https://aRregqpH93uL.in/bus-ticketing/?utm_source=Organic-Bus-Ticket"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-tour">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/uploads/2022/12/ticket.png"
                  class="img-fluid"
                  alt="Air Tickets"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Air Tickets</h4>
              <p>
                With a fully integrated B2B flight booking portal, we
                take care of the end to end business processes and
                ensure a smooth and seamless booking experience for our
                clients.
              </p>
              <a
                href="https://aRregqpH93uL.in/air-ticketing/?utm_source=Organic-Air-Ticket"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-Investments">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/nps.png"
                  class="img-fluid"
                  alt="National Pension System"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>National Pension System</h4>
              <p>
                NPS is a voluntary, defined contribution retirement
                savings scheme designed to...
              </p>
              <a
                href="https://www.religareonline.com/campaigns/nps/?utm_source=Organic-NPS"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-Investments">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/mf.png"
                  class="img-fluid"
                  alt="Mutual Fund"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Mutual Fund</h4>
              <p>
                Invest in a variety of mutual funds through our platform
                in a hassle-free manner.
              </p>
              <a
                href="https://www.religareonline.com/campaigns/mutual-funds/?utm_source=Organic-Mutual-fund"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-Investments">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/sgb.png"
                  class="img-fluid"
                  alt="Sovereign Gold Bond (SGB)"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Sovereign Gold Bond (SGB)</h4>
              <p>
                Issued by Reserve Bank on behalf of Government of India,
                - SGBs are government securities...
              </p>
              <a
                href="https://aRregqpH93uL.in/sovereign-gold-bonds-sgb/?utm_source=Organic-SGB"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-Investments">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/fd.png"
                  class="img-fluid"
                  alt="Fixed Deposit (FD"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Fixed Deposit (FD)</h4>
              <p>
                Fixed Deposits are an easy way to earn returns from
                funds that are lying idle.
              </p>
              <a
                href="https://aRregqpH93uL.in/fixed-deposit-fd/?utm_source=Organic-FD"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-Investments">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/cgb.png"
                  class="img-fluid"
                  alt="Captital Gain Bonds"
                />
              </div>
            </div>
          </div>

          <div class="row">
            <div class="portfolio-info">
              <h4>Capital Gain Bonds</h4>
              <p>
                Capital gain bonds or 54EC bonds are the fixed income
                instruments that provide capital...
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#Investments"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-Investments">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/ipo.png"
                  class="img-fluid"
                  alt="IPOs"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>IPOs</h4>
              <p>
                Initial public offering is the process by which a
                private company can go public by sale of its...
              </p>
              <a
                href="https://aRregqpH93uL.in/products-services/#Investments"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/vespa-scooter.png"
                  class="img-fluid"
                  alt="Two-Wheeler-Loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Two Wheeler Loan</h4>
              <p>
                A two-wheeler loan helps to buy a scooter or a
                motorcycle at affordable EMIs for up to 60 months....
              </p>
              <a
                href="https://aRregqpH93uL.in/two-wheeler-loan/?utm_source=Organic-two-wheeler-loan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/real-estate.png"
                  class="img-fluid"
                  alt="home-loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Home Loan</h4>
              <p>
                A home loan can be applied to buy, construct or renovate
                a house. Any Indian national who is....
              </p>
              <a
                href="https://aRregqpH93uL.in/home-loan/?utm_source=Organic-HomeLoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/personal.png"
                  class="img-fluid"
                  alt="personal-loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Personal Loan</h4>
              <p>
                Personal loans are all-purpose unsecured loans which can
                be availed for various needs such as....
              </p>
              <a
                href="https://aRregqpH93uL.in/personal-loan/?utm_source=Organic-PersonalLoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/tractor.png"
                  class="img-fluid"
                  alt="Tractor-Loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Tractor Loan</h4>
              <p>
                A tractor loan can be applied for purchase of a new
                tractor, used tractor, harvester....
              </p>
              <a
                href="https://aRregqpH93uL.in/tractor-loan/?utm_source=Organic-TractorLoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/personal.png"
                  class="img-fluid"
                  alt="personal-loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Gold Loan</h4>
              <p>
                Gold loan is a secured loan, ideal for short term cash
                requirements. The loan can be applied....
              </p>
              <a
                href="https://aRregqpH93uL.in/gold-loan/?utm_source=Organic-GoldLoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/msme-icon.png"
                  class="img-fluid"
                  alt="MSME-Loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>MSME Loan</h4>
              <p>
                MSME Loans are easy and flexible secured/unsecured
                business loans that can be used for....
              </p>
              <a
                href="https://aRregqpH93uL.in/msme-loans/?utm_source=Organic-MSMELoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/AGRI.png"
                  class="img-fluid"
                  alt="AgriRural-Loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Agri & Rural Loan</h4>
              <p>
                Agri & rural loans are lending schemes for farmers and
                rural applicants....
              </p>
              <a
                href="https://aRregqpH93uL.in/agri-and-rural/?utm_source=Organic-AgriRuralLoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-loan">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/Loan-against-property-icon.png"
                  class="img-fluid"
                  alt="Loan-Against-Property"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Loan Against Property</h4>
              <p>
                Loan against property (LAP) is a secured loan that is
                offered against residential....
              </p>
              <a
                href="https://aRregqpH93uL.in/loan-against-property/?utm_source=Organic-LonaAgainstPropertyLoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div
        class="col-lg-3 col-md-6 portfolio-item filter-loan"
        style="left: 0px !important"
      >
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/auto-loan-icon.png"
                  class="img-fluid"
                  alt="Auto-Loan"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>Auto Loan</h4>
              <p>
                Auto loan is a secured loan offered for purchasing a new
                car, pre-owned or used car....
              </p>
              <a
                href="https://aRregqpH93uL.in/auto-loan/?utm_source=Organic-AutoLoan"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-indi">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/pan-s.png"
                  class="img-fluid"
                  alt="PAN-Card"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>PAN Card</h4>
              <p>Apply for Pan Card Online</p>
              <a
                href="https://aRregqpH93uL.in/pan-service/"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 portfolio-item filter-indi">
        <div class="innerBox">
          <div class="row">
            <div class="col-md-12">
              <div class="portfolio-img">
                <img
                  src="wp-content/themes/egov/assets/images/digital-signature.png"
                  class="img-fluid"
                  alt="DSC"
                />
              </div>
            </div>
          </div>
          <div class="row">
            <div class="portfolio-info">
              <h4>DSC</h4>
              <p>Apply for DSC Online</p>
              <a
                href="https://aRregqpH93uL.in/buy-digital-signature-online/"
                class="details-link"
                title="More Details"
                >More</a
              >
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row" data-aos="fade-up" data-aos-delay="200">
      <ul
        id="portfolio-flters"
        class="d-flex justify-content-center"
        data-aos="fade-up"
        data-aos-delay="100"
      >
        <li
          data-filter="*"
          class="filter-active viewAll"
          style="
            background: transparent;
            color: #fff;
            border: 2px solid #00a536;
            border-radius: 10px;
            color: #081d2c;
            padding: 10px 20px;
            list-style: none;
          "
        >
          View all
        </li>
      </ul>
    </div>
  </div>
</section>
<!-- End Products Section 2 -->

<!-- ======= BecomeAgent Section 3======= -->
<section
  id="skills"
  class="skills BecomeAgent pt-0 pb-0"
  style="padding-top: 40px"
>
  <div class="container" data-aos="fade-up">
    <div class="row">
      <div
        class="col-lg-4 col-md-6 d-flex align-items-center img1"
        data-aos="fade-right"
        data-aos-delay="100"
      >
        <img
          src="wp-content/themes/egov/assets/images/pic1.webp"
          class="img-fluid"
          alt="Become an Agent"
        />
      </div>
      <div
        class="col-lg-8 col-sm-12 content content1"
        data-aos="fade-left"
        data-aos-delay="100"
      >
        <div class="col-lg-8 col-sm-12">
          <h3>Become an Agent</h3>
          <p>
            Boost your monthly income by registering as Religare Digital
            Agent. You can open a one-stop digital shop and earn
            commission by providing services such as cash withdrawal,
            cash deposit, money transfer, pan correction and updation,
            AePS linked transactions, loans, insurance, ticket booking
            and much more in your local area.<br /><br />
          </p>

          <p style="text-align: left">
            We promise you
            <strong
              >more products, more transactions and more
              revenue!!</strong
            >
          </p>

          <div class="" id="products">
            <div class="d-flex justify-content-center callToActions">
              <button class="btn joinBtn">
                <a href="/Signup" class="btn-learn-more">Join Now</a>
              </button>
              <button class="btn joinBtn calc">
                <a
                  href="/income-calculator"
                  class="btn-learn-more hover-btn"
                  >Income Calculator</a
                >
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="row franchisee">
      <div
        class="col-lg-4 col-md-6 d-flex align-items-center img1 mobview"
        data-aos="fade-right"
        data-aos-delay="100"
      >
        <img
          src="wp-content/themes/egov/assets/images/pic2.webp"
          class="img-fluid"
          alt="Franchisee Partner"
        />
      </div>

      <div
        class="col-lg-8 col-sm-12 pt-4 content content2"
        data-aos="fade-left"
        data-aos-delay="100"
      >
        <div class="col-lg-9 col-sm-12">
          <h3>Become a Franchisee Partner</h3>
          <p>
            Join the family of 53,000+ business partners and launch your
            digital shop with zero investment. As a partner, you will
            earn a good monthly income and represent a brand that has
            been serving India for 30 years.
          </p>

          <ul>
            <li><p>• Served over 5 Crore Customers</p></li>
            <li><p>• Facilitating 10,000+ Pincodes</p></li>
            <li><p>• 35 States & Union Territories</p></li>
          </ul>

          <div class="" id="products">
            <div class="d-flex justify-content-center callToActions">
              <button class="btn joinBtn">
                <a href="/Signup" class="btn-learn-more">Join Now</a>
              </button>
              <button class="btn joinBtn calc">
                <a
                  href="/income-calculator"
                  class="btn-learn-more hover-btn"
                  >Income Calculator</a
                >
              </button>
            </div>
          </div>
        </div>
      </div>

      <div
        class="col-lg-4 d-flex align-items-center img1 desktopView"
        data-aos="fade-right"
        data-aos-delay="100"
      >
        <img
          src="wp-content/themes/egov/assets/images/pic2.webp"
          class="img-fluid"
          alt=""
        />
      </div>
    </div>
  </div>
</section>
<!-- End BecomeAgent Section 3 -->

<!-- ======= About us Section 4======= -->
<section id="about" class="why-us aboutus">
  <div class="container-fluid" data-aos="fade-up">
    <div class="section-title"><h2>About Us</h2></div>

    <div class="row">
      <div
        class="col-lg-7 d-flex flex-column justify-content-center order-2 order-lg-1"
      >
        <div class="content">
          <p>
            Religare Broking Ltd. (RBL) is a wholly owned subsidiary of
            Religare Enterprises Limited (REL), a leading diversified
            financial services group in India. RBL is one of the leading
            stock broking firms in India offering over 10 lakh clients
            across both Offline and Online platforms. RBL also offers
            TIN facilitation & PAN facility at select branches - a
            unique service to help an customer with PAN, TAN and TDS/TCS
            returns related requirements.
          </p>

          <p>
            Religare Digital is an E-Governance vertical of RBL. The
            business supports more than 53,000+ agents who facilitate
            e-gov services to Indian citizens in rural and semi urban
            setting. The motto of the business is to empower India by
            simplifying and assisting financial inclusion services. Our
            agent program is an easy to join digital business program
            that assures a stable monthly business income in a
            convenient, efficient and transparent manner.<br /><br />

            <strong
              >Sky is the limit for the agents who aspire &
              perform!</strong
            >
          </p>
        </div>
      </div>
      <div
        class="col-lg-4 col-md-8 col-sm-12 align-items-stretch order-1 order-lg-2 img"
      >
        <img
          src="wp-content/themes/egov/assets/images/about.png"
          class="img-fluid"
          alt="eGovernance"
          data-aos="zoom-in"
          data-aos-delay="150"
        />
      </div>
    </div>
  </div>
</section>
<!-- End About us Section 4 -->

<!-- ======= Advantage Section 5======= -->
<section id="why-us" class="why-us advantage pb-0">
  <div class="container-fluid desktopView" data-aos="fade-up">
    <div class="section-title"><h2>Our Advantages</h2></div>
    <div class="content">
      <div class="box">
        <span
          ><img
            src="wp-content/themes/egov/assets/images/Vector.png"
            class="img-fluid"
            alt="Business Growth"
            data-aos="zoom-in"
            data-aos-delay="150" /></span
        >Brand Trust of <br />30 years
      </div>
      <div class="box">
        <span
          ><img
            src="wp-content/themes/egov/assets/images/Vector1.png"
            class="img-fluid"
            alt="Easy Onboarding"
            data-aos="zoom-in"
            data-aos-delay="150"
        /></span>
        High Growth <br />
        Business Opportunity
      </div>
      <div class="box">
        <span
          ><img
            src="wp-content/themes/egov/assets/images/Vector2.png"
            class="img-fluid"
            alt=""
            data-aos="zoom-in"
            data-aos-delay="150"
        /></span>
        Zero Investment & <br />
        Unlimited Potential
      </div>
      <div class="box">
        <span
          ><img
            src="wp-content/themes/egov/assets/images/Vector3.png"
            class="img-fluid"
            alt="Rupee - Currency"
            data-aos="zoom-in"
            data-aos-delay="150"
        /></span>
        Easy Onboarding for <br />
        30+ Services
      </div>
      <div class="box last">
        <span
          ><img
            src="wp-content/themes/egov/assets/images/Vector4.png"
            class="img-fluid"
            alt="Secure Technology Platform"
            data-aos="zoom-in"
            data-aos-delay="150"
        /></span>
        Safe & Secure <br />Digital Platform
      </div>
    </div>
  </div>
</section>
<!-- End Advantage Section 5-->

<!-- ======= GreenBelt Section 8======= -->
<section id="cta" class="cta">
  <div class="container" data-aos="zoom-in">
    <div class="row">
      <div class="col-lg-9 text-lg-start greenBeltText">
        <h1 class="text-white m-0">
          Become a Religare Agent & Start Your Digital Shop
        </h1>
        <p>
          Join Religare Digital, the most trusted eGovernance platform
          for starting your business. Get free marketing and training
          support.
        </p>
      </div>

      <div class="col-lg-3 cta-btn-container text-center">
        <a class="cta-btn align-middle" href="/Signup">Get Started</a>
      </div>
    </div>
  </div>
</section>
<!-- End GreenBelt Section 8 -->

<br /><br />
<!-- ======= Partners Section 7======= -->
<section id="clients" class="clients">
  <div class="container-fluid">
    <div class="section-title"><h2>Our Partners</h2></div>
    <div class="row" data-aos="zoom-in">
      <div class="owl-carousel owl-carousel1 owl-theme">
        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client1.png"
                class="img-fluid"
                alt="Protean"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client2.png"
                class="img-fluid"
                alt="Emudhra"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client3.png"
                class="img-fluid"
                alt="Capricorn"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client4.png"
                class="img-fluid"
                alt="NSDL"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client5.png"
                class="img-fluid"
                alt="Fino Payments Bank"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client6.png"
                class="img-fluid"
                alt="NPCI"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client7.png"
                class="img-fluid"
                alt="IRCTC"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client9.png"
                class="img-fluid"
                alt="ICICI Lombard General Insurance"
              />
            </div>
          </div>
        </div>

        <div class="owl-item">
          <div class="card row d-flex flex-row">
            <div class="profile">
              <img
                src="wp-content/themes/egov/assets/images/client11.png"
                class="img-fluid"
                alt="Care Health Insurance"
              />
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Partners Section 7 -->

<!-- Testimonial Section Start -->
<section class="testimonialSec">
  <div class="container rounded">
    <div class="section-title">
      <h2 style="text-transform: capitalize">Partner Reviews</h2>
    </div>
    <div id="demo1" class="carousel slide" data-bs-ride="carousel">
      <!-- Indicators/dots -->
      <div class="carousel-indicators" style="display: none">
        <button
          type="button"
          data-bs-target="#demo1"
          data-bs-slide-to="0"
          class="active"
        ></button>
        <button
          type="button"
          data-bs-target="#demo1"
          data-bs-slide-to="1"
        ></button>
        <button
          type="button"
          data-bs-target="#demo1"
          data-bs-slide-to="2"
        ></button>
      </div>

      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="testi_img text-center">
            <img src="wp-content/themes/egov/assets/images/9918.png" />
            <h3 class="name">Sunil Kumar</h3>
            <div class="mb-2">
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star-half-alt active-star"
                aria-hidden="true"
              ></span>
            </div>
          </div>
          <p class="">
            I am writing to you to express my gratitude towards the
            company. I have joined RELIGARE BROKING LIMITED 7yrs ago.I
            am achieved 6 lakh pan card acknowledgement and 7 lakh Etds
            .I am happy to generate a revenue of 5 lakh per year .Unlike
            my previous experience with another company, I found this
            platform very impressive We want to thank you for being your
            true self while at work. Your optimistic attitude and good
            conduct, while at work, is motivating for your peers and
            senior colleagues alike. You are an inspiration for the team
            and you have a significant role to play in the future
            success of the organisation. Keep the good work going.
          </p>
        </div>
        <div class="carousel-item">
          <div class="testi_img text-center">
            <img src="wp-content/themes/egov/assets/images/9343.png" />
            <h3 class="name">Sujeet Kumar</h3>
            <div class="mb-2">
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span class="fas fa-star active-star" aria-hidden="true">
              </span>
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star-half-alt active-star"
                aria-hidden="true"
              ></span>
            </div>
          </div>

          <p class="">
            I am very happy to say that ,with Religare Broking Limited
            Company we are dealing with PAN Card , TAN No , E-TDS
            Aadhaar DSC since 2014 which is resolved in a friendly
            manner with Religare Broking Limited Company and prompt
            action is taken. No difficulties have arisen in doing the
            work since 2014. And in future also the company will
            continue to support us in our work. It was a good experience
            to work with them. I hope that the co-workers of Religare
            Broking Limited and their senior officers will continue to
            have a good working relationship in the coming times so that
            by joining them, they will continue to cooperate in more
            profit and service to the general public.
          </p>
        </div>

        <div class="carousel-item">
          <div class="testi_img text-center">
            <img src="wp-content/themes/egov/assets/images/09101.png" />
            <h3 class="name">Sathya</h3>
            <div class="mb-2">
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span class="fas fa-star active-star" aria-hidden="true">
              </span
              ><span
                class="fas fa-star active-star"
                aria-hidden="true"
              ></span>
              <span
                class="fas fa-star-half-alt active-star"
                aria-hidden="true"
              ></span>
            </div>
          </div>

          <p>
            I am writing to thank you for the quality of service
            provided by your team. We sincerely appreciate your
            efficient, gracious service, the level of detail and
            accountability you have demonstrated on each services, and
            the way you conduct business as a whole. I have associated
            with Religare from last 10 years and processed more than 3
            lack pan application and got good support and proactive
            auctions regarding pan processing and other day to day work.
            I am able to earn nearly 7 Lac per year through your
            franchise. Your IT team, Accounts team and compliance team
            is really working hard and supported us a lot And given
            solution for all problems.
          </p>
        </div>
      </div>

      <!-- Left and right controls/icons -->
      <button
        class="carousel-control-prev"
        type="button"
        data-bs-target="#demo1"
        data-bs-slide="prev"
      >
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button
        class="carousel-control-next"
        type="button"
        data-bs-target="#demo1"
        data-bs-slide="next"
      >
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
  </div>
</section>
<!-- Testimonial Section Ends -->

<section
  class="section-header grey-blue"
  id="awards"
  style="padding-bottom: 0px"
>
  <div
    class="container-fluid awards text-center"
    style="background: #fff; padding: 30px 20px"
  >
    <div class="section-title" style="padding: 0px 20px">
      <h2>Awards</h2>
    </div>
    <p
      style="
        padding: 0px 100px;
        font-weight: 400;
        line-height: 22px;
        font-size: 16px;
      "
    >
      We have earned our recognition and it feels great every time when
      we are praised and recognised by distinguished organisations. Some
      of the awards we have received for our services and initiatives
    </p>
    <div class="row gx-0 mt-5 text-center">
      <div class="col-lg-4 mb-3 awardBox">
        <img
          src="wp-content/themes/egov/assets/images/award3.jpg"
          alt="Religare Broking"
          class="img-fluid"
        />
      </div>
      <div class="col-lg-4 mb-3 awardBox">
        <img
          src="wp-content/themes/egov/assets/images/award4.jpg"
          alt="Religare Broking"
          class="img-fluid"
        />
      </div>
      <div class="col-lg-4 mb-3 awardBox">
        <img
          src="wp-content/themes/egov/assets/images/award2.jpg"
          alt="Religare Broking"
          class="img-fluid"
        />
      </div>
      <div class="col-lg-4 mb-3 awardBox">
        <img
          src="wp-content/themes/egov/assets/images/award1.jpg"
          alt="Religare Broking"
          class="img-fluid"
        />
      </div>
      <div class="col-lg-4 mb-3 awardBox">
        <img
          src="wp-content/themes/egov/assets/images/award5.jpg"
          alt="Religare Broking"
          class="img-fluid"
        />
      </div>
      <div class="col-lg-4 mb-3 awardBox">
        <img
          src="wp-content/themes/egov/assets/images/award6.jpg"
          alt="Religare Broking"
          class="img-fluid"
        />
      </div>
    </div>
  </div>
</section>
</main>
      
@endsection
