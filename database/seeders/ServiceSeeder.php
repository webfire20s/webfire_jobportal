<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            // eGov Services
            [
                'filter_class' => 'filter-egov',
                'title' => 'PAN',
                'subtitle' => 'New Pan & Updates',
                'image' => 'images/pan-s.png',
                'alt' => 'PAN Card',
                'url' => '/pan-card-center/?utm_source=Organic-PAN',
            ],
            [
                'filter_class' => 'filter-egov',
                'title' => 'ITR Filing',
                'subtitle' => 'Income Tax Returns',
                'image' => 'images/tds-s.png',
                'alt' => 'ITR Filing',
                'url' => '#',
            ],
            [
                'filter_class' => 'filter-egov',
                'title' => 'DSC',
                'subtitle' => 'Digital Signature Certificate',
                'image' => 'images/dsc-s.png',
                'alt' => 'DSC',
                'url' => '/dsc-token/?utm_source=Organic-DSC',
            ],
            [
                'filter_class' => 'filter-egov',
                'title' => 'Udyam Registration',
                'subtitle' => 'MSME Business Registration',
                'image' => 'images/swanidhi.png',
                'alt' => 'Udyam Registration',
                'url' => '/pmsvanidhi/?utm_source=Organic-pmsvanidhi',
            ],

            // Banking & Finance
            [
                'filter_class' => 'filter-banking',
                'title' => 'AePS',
                'subtitle' => 'Aadhaar Enabled Payment',
                'image' => 'images/aeps-s.png',
                'alt' => 'AePS',
                'url' => '/aadhaar-enabled-payment-system/?utm_source=Organic-AePS',
            ],
            [
                'filter_class' => 'filter-banking',
                'title' => 'DMT',
                'subtitle' => 'Domestic Money Transfer',
                'image' => 'images/dmt-s.png',
                'alt' => 'DMT',
                'url' => '/dmt/?utm_source=Organic-DMT',
            ],
            [
                'filter_class' => 'filter-banking',
                'title' => 'Micro ATM',
                'subtitle' => 'Mini Banking Terminal',
                'image' => 'images/micro-atm-s.png',
                'alt' => 'Micro ATM',
                'url' => '/micro-atm/?utm_source=Organic-micro-atm',
            ],
            [
                'filter_class' => 'filter-banking',
                'title' => 'CSP',
                'subtitle' => 'Customer Service Point',
                'image' => 'images/csp-s.png',
                'alt' => 'CSP',
                'url' => '/csp-agent/',
            ],

            // Recharge & Bill Payments
            [
                'filter_class' => 'filter-recharge',
                'title' => 'BBPS',
                'subtitle' => 'All Utility Bill Payments',
                'image' => 'images/bbps-s.png',
                'alt' => 'BBPS',
                'url' => '/bharat-bill-payment-system-bbps/?utm_source=Organic-BBPS',
            ],
            [
                'filter_class' => 'filter-recharge',
                'title' => 'Recharges',
                'subtitle' => 'Mobile, DTH, Data Card',
                'image' => 'images/recharge-s.png',
                'alt' => 'Recharges',
                'url' => '/bharat-bill-payment-system-bbps/?utm_source=Organic-BBPS',
            ],

            // Travels
            [
                'filter_class' => 'filter-tour',
                'title' => 'Train Tickets',
                'subtitle' => 'IRCTC Agent Bookings',
                'image' => 'images/irctc-s.png',
                'alt' => 'Train Tickets',
                'url' => '/rail-e-ticketing/?utm_source=Organic-Rail-Ticket',
            ],
            [
                'filter_class' => 'filter-tour',
                'title' => 'Bus Tickets',
                'subtitle' => 'Book Bus Tickets',
                'image' => 'images/buslogo.png',
                'alt' => 'Bus Tickets',
                'url' => '/bus-ticketing/?utm_source=Organic-Bus-Ticket',
                'style' => 'width:55px',
            ],
            [
                'filter_class' => 'filter-tour',
                'title' => 'Air Tickets',
                'subtitle' => 'Domestic & International',
                'image' => 'https://religaredigital.in/wp-content/uploads/2022/12/ticket.png',
                'alt' => 'Air Tickets',
                'url' => '/air-ticketing/?utm_source=Organic-Air-Ticket',
                'style' => 'width:55px',
            ],

            // Investments
            [
                'filter_class' => 'filter-Investments',
                'title' => 'National Pension System',
                'subtitle' => 'Retirement Savings Scheme',
                'image' => 'images/nps-s.png',
                'alt' => 'NPS',
                'url' => 'https://www.religaredigital.in/become-nps-agent/?utm_source=Organic-NPS',
            ],
            [
                'filter_class' => 'filter-Investments',
                'title' => 'Mutual Fund',
                'subtitle' => 'Grow Your Wealth',
                'image' => 'images/mf-s.png',
                'alt' => 'Mutual Fund',
                'url' => 'https://www.religaredigital.in/become-mutual-fund-agent/?utm_source=Organic-Mutual-fund',
            ],
            [
                'filter_class' => 'filter-Investments',
                'title' => 'Fixed Deposit (FD)',
                'subtitle' => 'Assured Interest Returns',
                'image' => 'images/fd-s.png',
                'alt' => 'Fixed Deposit',
                'url' => '/fixed-deposit-fd/?utm_source=Organic-FD',
            ],
            [
                'filter_class' => 'filter-Investments',
                'title' => 'Demat Account',
                'subtitle' => 'Online Securities Holding',
                'image' => 'images/ipo-s.png',
                'alt' => 'Demat Account',
                'url' => '#',
            ],

            // Insurance (filter-payment)
            [
                'filter_class' => 'filter-payment',
                'title' => 'Two Wheeler Insurance',
                'subtitle' => 'Motor Vehicle Protection',
                'image' => 'images/two-wheeler-ins-s.png',
                'alt' => 'Two Wheeler Insurance',
                'url' => '#',
            ],
            [
                'filter_class' => 'filter-payment',
                'title' => 'Four Wheeler Insurance',
                'subtitle' => 'Car Insurance Coverage',
                'image' => 'images/four-wheeler-insurance-s.png',
                'alt' => 'Four Wheeler Insurance',
                'url' => '#',
            ],
            [
                'filter_class' => 'filter-payment',
                'title' => 'Health Insurance',
                'subtitle' => 'Medical Expense Coverage',
                'image' => 'images/healthcare-s.png',
                'alt' => 'Health Insurance',
                'url' => '#',
            ],
            [
                'filter_class' => 'filter-payment',
                'title' => 'Life Insurance',
                'subtitle' => 'Financial Security for Family',
                'image' => 'images/shield-s.png',
                'alt' => 'Life Insurance',
                'url' => '#',
            ],

            // Loan Services
            [
                'filter_class' => 'filter-loan',
                'title' => 'Two Wheeler Loan',
                'subtitle' => 'Loan for Bike/Scooter Purchase',
                'image' => 'images/vespa-scooter.png',
                'alt' => 'Two Wheeler Loan',
                'url' => '/two-wheeler-loan/?utm_source=Organic-two-wheeler-loan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'Home Loan',
                'subtitle' => 'Buy, Build, or Renovate Home',
                'image' => 'images/real-estate.png',
                'alt' => 'Home Loan',
                'url' => '/home-loan/?utm_source=Organic-HomeLoan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'Personal Loan',
                'subtitle' => 'All-Purpose Unsecured Loan',
                'image' => 'images/personal.png',
                'alt' => 'Personal Loan',
                'url' => '/personal-loan/?utm_source=Organic-PersonalLoan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'Tractor Loan',
                'subtitle' => 'For Agricultural Equipment',
                'image' => 'images/tractor.png',
                'alt' => 'Tractor Loan',
                'url' => '/tractor-loan/?utm_source=Organic-TractorLoan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'Gold Loan',
                'subtitle' => 'Loan Against Gold Ornaments',
                'image' => 'images/gold.png',
                'alt' => 'Gold Loan',
                'url' => '/gold-loan/?utm_source=Organic-GoldLoan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'MSME Loan',
                'subtitle' => 'For Small/Medium Enterprises',
                'image' => 'images/msme-icon.png',
                'alt' => 'MSME Loan',
                'url' => '/msme-loan/?utm_source=Organic-MSMELoan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'Agri & Rural Loan',
                'subtitle' => 'Agriculture & Rural Activities',
                'image' => 'images/AGRI.png',
                'alt' => 'Agri & Rural Loan',
                'url' => '/agri-and-rural/?utm_source=Organic-AgriRuralLoan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'Loan Against Property',
                'subtitle' => 'Secured Loan against Property',
                'image' => 'images/Loan-against-property-icon.png',
                'alt' => 'Loan Against Property',
                'url' => '/loan-against-property/?utm_source=Organic-LonaAgainstPropertyLoan',
            ],
            [
                'filter_class' => 'filter-loan',
                'title' => 'Auto Loan',
                'subtitle' => 'New, Used Car, or Commercial Vehicle',
                'image' => 'images/auto-loan-icon.png',
                'alt' => 'Auto Loan',
                'url' => '/auto-loan/?utm_source=Organic-AutoLoan',
            ],

            // Devices (filter-indi)
            [
                'filter_class' => 'filter-indi',
                'title' => 'Biometric Devices',
                'subtitle' => 'Aadhaar Verification Devices',
                'image' => 'images/biometric-identification1.png',
                'alt' => 'Biometric Devices',
                'url' => '/biometric-device/?utm_source=Organic-BiometricDevice',
            ],
            [
                'filter_class' => 'filter-indi',
                'title' => 'Printers',
                'subtitle' => 'Thermal Printers for Receipts',
                'image' => 'images/printer.png',
                'alt' => 'Printers',
                'url' => '#',
            ],
        ];

        // Ensure the 'style' key is set, even if null, as the database expects it.
        foreach ($services as &$service) {
            $service['style'] = $service['style'] ?? null;
        }

        // Insert all records into the database
        Service::insert($services);
    }
}
