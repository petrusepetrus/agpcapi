<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            ['ISO_country_code' => 'GB', 'international_dialling_code' => '44', 'international_dialling_code_formatted' => '(+44)', 'country' => 'UK'],
            ['ISO_country_code' => 'US', 'international_dialling_code' => '1', 'international_dialling_code_formatted' => '(+1)', 'country' => 'USA'],
            ['ISO_country_code' => 'DZ', 'international_dialling_code' => '213', 'international_dialling_code_formatted' => '(+213)', 'country' => 'Algeria'],
            ['ISO_country_code' => 'AD', 'international_dialling_code' => '376', 'international_dialling_code_formatted' => '(+376)', 'country' => 'Andorra'],
            ['ISO_country_code' => 'AO', 'international_dialling_code' => '244', 'international_dialling_code_formatted' => '(+244)', 'country' => 'Angola'],
            ['ISO_country_code' => 'AI', 'international_dialling_code' => '1264', 'international_dialling_code_formatted' => '(+1264)', 'country' => 'Anguilla'],
            ['ISO_country_code' => 'AG', 'international_dialling_code' => '1268', 'international_dialling_code_formatted' => '(+1268)', 'country' => 'Antigua & Barbuda'],
            ['ISO_country_code' => 'AR', 'international_dialling_code' => '54', 'international_dialling_code_formatted' => '(+54)', 'country' => 'Argentina'],
            ['ISO_country_code' => 'AM', 'international_dialling_code' => '374', 'international_dialling_code_formatted' => '(+374)', 'country' => 'Armenia'],
            ['ISO_country_code' => 'AW', 'international_dialling_code' => '297', 'international_dialling_code_formatted' => '(+297)', 'country' => 'Aruba'],
            ['ISO_country_code' => 'AU', 'international_dialling_code' => '61', 'international_dialling_code_formatted' => '(+61)', 'country' => 'Australia'],
            ['ISO_country_code' => 'AT', 'international_dialling_code' => '43', 'international_dialling_code_formatted' => '(+43)', 'country' => 'Austria'],
            ['ISO_country_code' => 'AZ', 'international_dialling_code' => '994', 'international_dialling_code_formatted' => '(+994)', 'country' => 'Azerbaijan'],
            ['ISO_country_code' => 'BS', 'international_dialling_code' => '1242', 'international_dialling_code_formatted' => '(+1242)', 'country' => 'Bahamas'],
            ['ISO_country_code' => 'BH', 'international_dialling_code' => '973', 'international_dialling_code_formatted' => '(+973)', 'country' => 'Bahrain'],
            ['ISO_country_code' => 'BD', 'international_dialling_code' => '880', 'international_dialling_code_formatted' => '(+880)', 'country' => 'Bangladesh'],
            ['ISO_country_code' => 'BB', 'international_dialling_code' => '1246', 'international_dialling_code_formatted' => '(+1246)', 'country' => 'Barbados'],
            ['ISO_country_code' => 'BY', 'international_dialling_code' => '375', 'international_dialling_code_formatted' => '(+375)', 'country' => 'Belarus'],
            ['ISO_country_code' => 'BE', 'international_dialling_code' => '32', 'international_dialling_code_formatted' => '(+32)', 'country' => 'Belgium'],
            ['ISO_country_code' => 'BZ', 'international_dialling_code' => '501', 'international_dialling_code_formatted' => '(+501)', 'country' => 'Belize'],
            ['ISO_country_code' => 'BJ', 'international_dialling_code' => '229', 'international_dialling_code_formatted' => '(+229)', 'country' => 'Benin'],
            ['ISO_country_code' => 'BM', 'international_dialling_code' => '1441', 'international_dialling_code_formatted' => '(+1441)', 'country' => 'Bermuda'],
            ['ISO_country_code' => 'BT', 'international_dialling_code' => '975', 'international_dialling_code_formatted' => '(+975)', 'country' => 'Bhutan'],
            ['ISO_country_code' => 'BO', 'international_dialling_code' => '591', 'international_dialling_code_formatted' => '(+591)', 'country' => 'Bolivia'],
            ['ISO_country_code' => 'BA', 'international_dialling_code' => '387', 'international_dialling_code_formatted' => '(+387)', 'country' => 'Bosnia Herzegovina'],
            ['ISO_country_code' => 'BW', 'international_dialling_code' => '267', 'international_dialling_code_formatted' => '(+267)', 'country' => 'Botswana'],
            ['ISO_country_code' => 'BR', 'international_dialling_code' => '55', 'international_dialling_code_formatted' => '(+55)', 'country' => 'Brazil'],
            ['ISO_country_code' => 'BN', 'international_dialling_code' => '673', 'international_dialling_code_formatted' => '(+673)', 'country' => 'Brunei'],
            ['ISO_country_code' => 'BG', 'international_dialling_code' => '359', 'international_dialling_code_formatted' => '(+359)', 'country' => 'Bulgaria'],
            ['ISO_country_code' => 'BF', 'international_dialling_code' => '226', 'international_dialling_code_formatted' => '(+226)', 'country' => 'Burkina Faso'],
            ['ISO_country_code' => 'BI', 'international_dialling_code' => '257', 'international_dialling_code_formatted' => '(+257)', 'country' => 'Burundi'],
            ['ISO_country_code' => 'KH', 'international_dialling_code' => '855', 'international_dialling_code_formatted' => '(+855)', 'country' => 'Cambodia'],
            ['ISO_country_code' => 'CM', 'international_dialling_code' => '237', 'international_dialling_code_formatted' => '(+237)', 'country' => 'Cameroon'],
            ['ISO_country_code' => 'CA', 'international_dialling_code' => '1', 'international_dialling_code_formatted' => '(+1)', 'country' => 'Canada'],
            ['ISO_country_code' => 'CV', 'international_dialling_code' => '238', 'international_dialling_code_formatted' => '(+238)', 'country' => 'Cape Verde Islands'],
            ['ISO_country_code' => 'KY', 'international_dialling_code' => '1345', 'international_dialling_code_formatted' => '(+1345)', 'country' => 'Cayman Islands'],
            ['ISO_country_code' => 'CF', 'international_dialling_code' => '236', 'international_dialling_code_formatted' => '(+236)', 'country' => 'Central African Republic'],
            ['ISO_country_code' => 'CL', 'international_dialling_code' => '56', 'international_dialling_code_formatted' => '(+56)', 'country' => 'Chile'],
            ['ISO_country_code' => 'CN', 'international_dialling_code' => '86', 'international_dialling_code_formatted' => '(+86)', 'country' => 'China'],
            ['ISO_country_code' => 'CO', 'international_dialling_code' => '57', 'international_dialling_code_formatted' => '(+57)', 'country' => 'Colombia'],
            ['ISO_country_code' => 'KM', 'international_dialling_code' => '269', 'international_dialling_code_formatted' => '(+269)', 'country' => 'Comoros'],
            ['ISO_country_code' => 'CG', 'international_dialling_code' => '242', 'international_dialling_code_formatted' => '(+242)', 'country' => 'Congo'],
            ['ISO_country_code' => 'CK', 'international_dialling_code' => '682', 'international_dialling_code_formatted' => '(+682)', 'country' => 'Cook Islands'],
            ['ISO_country_code' => 'CR', 'international_dialling_code' => '506', 'international_dialling_code_formatted' => '(+506)', 'country' => 'Costa Rica'],
            ['ISO_country_code' => 'HR', 'international_dialling_code' => '385', 'international_dialling_code_formatted' => '(+385)', 'country' => 'Croatia'],
            ['ISO_country_code' => 'CU', 'international_dialling_code' => '53', 'international_dialling_code_formatted' => '(+53)', 'country' => 'Cuba'],
            ['ISO_country_code' => 'CY', 'international_dialling_code' => '90392', 'international_dialling_code_formatted' => '(+90392)', 'country' => 'Cyprus North'],
            ['ISO_country_code' => 'CY', 'international_dialling_code' => '357', 'international_dialling_code_formatted' => '(+357)', 'country' => 'Cyprus South'],
            ['ISO_country_code' => 'CZ', 'international_dialling_code' => '42', 'international_dialling_code_formatted' => '(+42)', 'country' => 'Czech Republic'],
            ['ISO_country_code' => 'DK', 'international_dialling_code' => '45', 'international_dialling_code_formatted' => '(+45)', 'country' => 'Denmark'],
            ['ISO_country_code' => 'DJ', 'international_dialling_code' => '253', 'international_dialling_code_formatted' => '(+253)', 'country' => 'Djibouti'],
            ['ISO_country_code' => 'DM', 'international_dialling_code' => '1809', 'international_dialling_code_formatted' => '(+1809)', 'country' => 'Dominica'],
            ['ISO_country_code' => 'DO', 'international_dialling_code' => '1809', 'international_dialling_code_formatted' => '(+1809)', 'country' => 'Dominican Republic'],
            ['ISO_country_code' => 'EC', 'international_dialling_code' => '593', 'international_dialling_code_formatted' => '(+593)', 'country' => 'Ecuador'],
            ['ISO_country_code' => 'EG', 'international_dialling_code' => '20', 'international_dialling_code_formatted' => '(+20)', 'country' => 'Egypt'],
            ['ISO_country_code' => 'SV', 'international_dialling_code' => '503', 'international_dialling_code_formatted' => '(+503)', 'country' => 'El Salvador'],
            ['ISO_country_code' => 'GQ', 'international_dialling_code' => '240', 'international_dialling_code_formatted' => '(+240)', 'country' => 'Equatorial Guinea'],
            ['ISO_country_code' => 'ER', 'international_dialling_code' => '291', 'international_dialling_code_formatted' => '(+291)', 'country' => 'Eritrea'],
            ['ISO_country_code' => 'EE', 'international_dialling_code' => '372', 'international_dialling_code_formatted' => '(+372)', 'country' => 'Estonia'],
            ['ISO_country_code' => 'ET', 'international_dialling_code' => '251', 'international_dialling_code_formatted' => '(+251)', 'country' => 'Ethiopia'],
            ['ISO_country_code' => 'FK', 'international_dialling_code' => '500', 'international_dialling_code_formatted' => '(+500)', 'country' => 'Falkland Islands'],
            ['ISO_country_code' => 'FO', 'international_dialling_code' => '298', 'international_dialling_code_formatted' => '(+298)', 'country' => 'Faroe Islands'],
            ['ISO_country_code' => 'FJ', 'international_dialling_code' => '679', 'international_dialling_code_formatted' => '(+679)', 'country' => 'Fiji'],
            ['ISO_country_code' => 'FI', 'international_dialling_code' => '358', 'international_dialling_code_formatted' => '(+358)', 'country' => 'Finland'],
            ['ISO_country_code' => 'FR', 'international_dialling_code' => '33', 'international_dialling_code_formatted' => '(+33)', 'country' => 'France'],
            ['ISO_country_code' => 'GF', 'international_dialling_code' => '594', 'international_dialling_code_formatted' => '(+594)', 'country' => 'French Guiana'],
            ['ISO_country_code' => 'PF', 'international_dialling_code' => '689', 'international_dialling_code_formatted' => '(+689)', 'country' => 'French Polynesia'],
            ['ISO_country_code' => 'GA', 'international_dialling_code' => '241', 'international_dialling_code_formatted' => '(+241)', 'country' => 'Gabon'],
            ['ISO_country_code' => 'GM', 'international_dialling_code' => '220', 'international_dialling_code_formatted' => '(+220)', 'country' => 'Gambia'],
            ['ISO_country_code' => 'GE', 'international_dialling_code' => '7880', 'international_dialling_code_formatted' => '(+7880)', 'country' => 'Georgia'],
            ['ISO_country_code' => 'DE', 'international_dialling_code' => '49', 'international_dialling_code_formatted' => '(+49)', 'country' => 'Germany'],
            ['ISO_country_code' => 'GH', 'international_dialling_code' => '233', 'international_dialling_code_formatted' => '(+233)', 'country' => 'Ghana'],
            ['ISO_country_code' => 'GI', 'international_dialling_code' => '350', 'international_dialling_code_formatted' => '(+350)', 'country' => 'Gibraltar'],
            ['ISO_country_code' => 'GR', 'international_dialling_code' => '30', 'international_dialling_code_formatted' => '(+30)', 'country' => 'Greece'],
            ['ISO_country_code' => 'GL', 'international_dialling_code' => '299', 'international_dialling_code_formatted' => '(+299)', 'country' => 'Greenland'],
            ['ISO_country_code' => 'GD', 'international_dialling_code' => '1473', 'international_dialling_code_formatted' => '(+1473)', 'country' => 'Grenada'],
            ['ISO_country_code' => 'GP', 'international_dialling_code' => '590', 'international_dialling_code_formatted' => '(+590)', 'country' => 'Guadeloupe'],
            ['ISO_country_code' => 'GU', 'international_dialling_code' => '671', 'international_dialling_code_formatted' => '(+671)', 'country' => 'Guam'],
            ['ISO_country_code' => 'GT', 'international_dialling_code' => '502', 'international_dialling_code_formatted' => '(+502)', 'country' => 'Guatemala'],
            ['ISO_country_code' => 'GN', 'international_dialling_code' => '224', 'international_dialling_code_formatted' => '(+224)', 'country' => 'Guinea'],
            ['ISO_country_code' => 'GW', 'international_dialling_code' => '245', 'international_dialling_code_formatted' => '(+245)', 'country' => 'Guinea - Bissau'],
            ['ISO_country_code' => 'GY', 'international_dialling_code' => '592', 'international_dialling_code_formatted' => '(+592)', 'country' => 'Guyana'],
            ['ISO_country_code' => 'HT', 'international_dialling_code' => '509', 'international_dialling_code_formatted' => '(+509)', 'country' => 'Haiti'],
            ['ISO_country_code' => 'HN', 'international_dialling_code' => '504', 'international_dialling_code_formatted' => '(+504)', 'country' => 'Honduras'],
            ['ISO_country_code' => 'HK', 'international_dialling_code' => '852', 'international_dialling_code_formatted' => '(+852)', 'country' => 'Hong Kong'],
            ['ISO_country_code' => 'HU', 'international_dialling_code' => '36', 'international_dialling_code_formatted' => '(+36)', 'country' => 'Hungary'],
            ['ISO_country_code' => 'IS', 'international_dialling_code' => '354', 'international_dialling_code_formatted' => '(+354)', 'country' => 'Iceland'],
            ['ISO_country_code' => 'IN', 'international_dialling_code' => '91', 'international_dialling_code_formatted' => '(+91)', 'country' => 'India'],
            ['ISO_country_code' => 'ID', 'international_dialling_code' => '62', 'international_dialling_code_formatted' => '(+62)', 'country' => 'Indonesia'],
            ['ISO_country_code' => 'IR', 'international_dialling_code' => '98', 'international_dialling_code_formatted' => '(+98)', 'country' => 'Iran'],
            ['ISO_country_code' => 'IQ', 'international_dialling_code' => '964', 'international_dialling_code_formatted' => '(+964)', 'country' => 'Iraq'],
            ['ISO_country_code' => 'IE', 'international_dialling_code' => '353', 'international_dialling_code_formatted' => '(+353)', 'country' => 'Ireland'],
            ['ISO_country_code' => 'IL', 'international_dialling_code' => '972', 'international_dialling_code_formatted' => '(+972)', 'country' => 'Israel'],
            ['ISO_country_code' => 'IT', 'international_dialling_code' => '39', 'international_dialling_code_formatted' => '(+39)', 'country' => 'Italy'],
            ['ISO_country_code' => 'JM', 'international_dialling_code' => '1876', 'international_dialling_code_formatted' => '(+1876)', 'country' => 'Jamaica'],
            ['ISO_country_code' => 'JP', 'international_dialling_code' => '81', 'international_dialling_code_formatted' => '(+81)', 'country' => 'Japan'],
            ['ISO_country_code' => 'JO', 'international_dialling_code' => '962', 'international_dialling_code_formatted' => '(+962)', 'country' => 'Jordan'],
            ['ISO_country_code' => 'KZ', 'international_dialling_code' => '7', 'international_dialling_code_formatted' => '(+7)', 'country' => 'Kazakhstan'],
            ['ISO_country_code' => 'KE', 'international_dialling_code' => '254', 'international_dialling_code_formatted' => '(+254)', 'country' => 'Kenya'],
            ['ISO_country_code' => 'KI', 'international_dialling_code' => '686', 'international_dialling_code_formatted' => '(+686)', 'country' => 'Kiribati'],
            ['ISO_country_code' => 'KP', 'international_dialling_code' => '850', 'international_dialling_code_formatted' => '(+850)', 'country' => 'Korea North'],
            ['ISO_country_code' => 'KR', 'international_dialling_code' => '82', 'international_dialling_code_formatted' => '(+82)', 'country' => 'Korea South'],
            ['ISO_country_code' => 'KW', 'international_dialling_code' => '965', 'international_dialling_code_formatted' => '(+965)', 'country' => 'Kuwait'],
            ['ISO_country_code' => 'KG', 'international_dialling_code' => '996', 'international_dialling_code_formatted' => '(+996)', 'country' => 'Kyrgyzstan'],
            ['ISO_country_code' => 'LA', 'international_dialling_code' => '856', 'international_dialling_code_formatted' => '(+856)', 'country' => 'Laos'],
            ['ISO_country_code' => 'LV', 'international_dialling_code' => '371', 'international_dialling_code_formatted' => '(+371)', 'country' => 'Latvia'],
            ['ISO_country_code' => 'LB', 'international_dialling_code' => '961', 'international_dialling_code_formatted' => '(+961)', 'country' => 'Lebanon'],
            ['ISO_country_code' => 'LS', 'international_dialling_code' => '266', 'international_dialling_code_formatted' => '(+266)', 'country' => 'Lesotho'],
            ['ISO_country_code' => 'LR', 'international_dialling_code' => '231', 'international_dialling_code_formatted' => '(+231)', 'country' => 'Liberia'],
            ['ISO_country_code' => 'LY', 'international_dialling_code' => '218', 'international_dialling_code_formatted' => '(+218)', 'country' => 'Libya'],
            ['ISO_country_code' => 'LI', 'international_dialling_code' => '417', 'international_dialling_code_formatted' => '(+417)', 'country' => 'Liechtenstein'],
            ['ISO_country_code' => 'LT', 'international_dialling_code' => '370', 'international_dialling_code_formatted' => '(+370)', 'country' => 'Lithuania'],
            ['ISO_country_code' => 'LU', 'international_dialling_code' => '352', 'international_dialling_code_formatted' => '(+352)', 'country' => 'Luxembourg'],
            ['ISO_country_code' => 'MO', 'international_dialling_code' => '853', 'international_dialling_code_formatted' => '(+853)', 'country' => 'Macao'],
            ['ISO_country_code' => 'MK', 'international_dialling_code' => '389', 'international_dialling_code_formatted' => '(+389)', 'country' => 'Macedonia'],
            ['ISO_country_code' => 'MG', 'international_dialling_code' => '261', 'international_dialling_code_formatted' => '(+261)', 'country' => 'Madagascar'],
            ['ISO_country_code' => 'MW', 'international_dialling_code' => '265', 'international_dialling_code_formatted' => '(+265)', 'country' => 'Malawi'],
            ['ISO_country_code' => 'MY', 'international_dialling_code' => '60', 'international_dialling_code_formatted' => '(+60)', 'country' => 'Malaysia'],
            ['ISO_country_code' => 'MV', 'international_dialling_code' => '960', 'international_dialling_code_formatted' => '(+960)', 'country' => 'Maldives'],
            ['ISO_country_code' => 'ML', 'international_dialling_code' => '223', 'international_dialling_code_formatted' => '(+223)', 'country' => 'Mali'],
            ['ISO_country_code' => 'MT', 'international_dialling_code' => '356', 'international_dialling_code_formatted' => '(+356)', 'country' => 'Malta'],
            ['ISO_country_code' => 'MH', 'international_dialling_code' => '692', 'international_dialling_code_formatted' => '(+692)', 'country' => 'Marshall Islands'],
            ['ISO_country_code' => 'MQ', 'international_dialling_code' => '596', 'international_dialling_code_formatted' => '(+596)', 'country' => 'Martinique'],
            ['ISO_country_code' => 'MR', 'international_dialling_code' => '222', 'international_dialling_code_formatted' => '(+222)', 'country' => 'Mauritania'],
            ['ISO_country_code' => 'YT', 'international_dialling_code' => '269', 'international_dialling_code_formatted' => '(+269)', 'country' => 'Mayotte'],
            ['ISO_country_code' => 'MX', 'international_dialling_code' => '52', 'international_dialling_code_formatted' => '(+52)', 'country' => 'Mexico'],
            ['ISO_country_code' => 'FM', 'international_dialling_code' => '691', 'international_dialling_code_formatted' => '(+691)', 'country' => 'Micronesia'],
            ['ISO_country_code' => 'MD', 'international_dialling_code' => '373', 'international_dialling_code_formatted' => '(+373)', 'country' => 'Moldova'],
            ['ISO_country_code' => 'MC', 'international_dialling_code' => '377', 'international_dialling_code_formatted' => '(+377)', 'country' => 'Monaco'],
            ['ISO_country_code' => 'MN', 'international_dialling_code' => '976', 'international_dialling_code_formatted' => '(+976)', 'country' => 'Mongolia'],
            ['ISO_country_code' => 'MS', 'international_dialling_code' => '1664', 'international_dialling_code_formatted' => '(+1664)', 'country' => 'Montserrat'],
            ['ISO_country_code' => 'MA', 'international_dialling_code' => '212', 'international_dialling_code_formatted' => '(+212)', 'country' => 'Morocco'],
            ['ISO_country_code' => 'MZ', 'international_dialling_code' => '258', 'international_dialling_code_formatted' => '(+258)', 'country' => 'Mozambique'],
            ['ISO_country_code' => 'MN', 'international_dialling_code' => '95', 'international_dialling_code_formatted' => '(+95)', 'country' => 'Myanmar'],
            ['ISO_country_code' => 'NA', 'international_dialling_code' => '264', 'international_dialling_code_formatted' => '(+264)', 'country' => 'Namibia'],
            ['ISO_country_code' => 'NR', 'international_dialling_code' => '674', 'international_dialling_code_formatted' => '(+674)', 'country' => 'Nauru'],
            ['ISO_country_code' => 'NP', 'international_dialling_code' => '977', 'international_dialling_code_formatted' => '(+977)', 'country' => 'Nepal'],
            ['ISO_country_code' => 'NL', 'international_dialling_code' => '31', 'international_dialling_code_formatted' => '(+31)', 'country' => 'Netherlands'],
            ['ISO_country_code' => 'NC', 'international_dialling_code' => '687', 'international_dialling_code_formatted' => '(+687)', 'country' => 'New Caledonia'],
            ['ISO_country_code' => 'NZ', 'international_dialling_code' => '64', 'international_dialling_code_formatted' => '(+64)', 'country' => 'New Zealand'],
            ['ISO_country_code' => 'NI', 'international_dialling_code' => '505', 'international_dialling_code_formatted' => '(+505)', 'country' => 'Nicaragua'],
            ['ISO_country_code' => 'NE', 'international_dialling_code' => '227', 'international_dialling_code_formatted' => '(+227)', 'country' => 'Niger'],
            ['ISO_country_code' => 'NG', 'international_dialling_code' => '234', 'international_dialling_code_formatted' => '(+234)', 'country' => 'Nigeria'],
            ['ISO_country_code' => 'NU', 'international_dialling_code' => '683', 'international_dialling_code_formatted' => '(+683)', 'country' => 'Niue'],
            ['ISO_country_code' => 'NF', 'international_dialling_code' => '672', 'international_dialling_code_formatted' => '(+672)', 'country' => 'Norfolk Islands'],
            ['ISO_country_code' => 'NP', 'international_dialling_code' => '670', 'international_dialling_code_formatted' => '(+670)', 'country' => 'Northern Marianas'],
            ['ISO_country_code' => 'NO', 'international_dialling_code' => '47', 'international_dialling_code_formatted' => '(+47)', 'country' => 'Norway'],
            ['ISO_country_code' => 'OM', 'international_dialling_code' => '968', 'international_dialling_code_formatted' => '(+968)', 'country' => 'Oman'],
            ['ISO_country_code' => 'PW', 'international_dialling_code' => '680', 'international_dialling_code_formatted' => '(+680)', 'country' => 'Palau'],
            ['ISO_country_code' => 'PA', 'international_dialling_code' => '507', 'international_dialling_code_formatted' => '(+507)', 'country' => 'Panama'],
            ['ISO_country_code' => 'PG', 'international_dialling_code' => '675', 'international_dialling_code_formatted' => '(+675)', 'country' => 'Papua New Guinea'],
            ['ISO_country_code' => 'PY', 'international_dialling_code' => '595', 'international_dialling_code_formatted' => '(+595)', 'country' => 'Paraguay'],
            ['ISO_country_code' => 'PE', 'international_dialling_code' => '51', 'international_dialling_code_formatted' => '(+51)', 'country' => 'Peru'],
            ['ISO_country_code' => 'PH', 'international_dialling_code' => '63', 'international_dialling_code_formatted' => '(+63)', 'country' => 'Philippines'],
            ['ISO_country_code' => 'PL', 'international_dialling_code' => '48', 'international_dialling_code_formatted' => '(+48)', 'country' => 'Poland'],
            ['ISO_country_code' => 'PT', 'international_dialling_code' => '351', 'international_dialling_code_formatted' => '(+351)', 'country' => 'Portugal'],
            ['ISO_country_code' => 'PR', 'international_dialling_code' => '1787', 'international_dialling_code_formatted' => '(+1787)', 'country' => 'Puerto Rico'],
            ['ISO_country_code' => 'QA', 'international_dialling_code' => '974', 'international_dialling_code_formatted' => '(+974)', 'country' => 'Qatar'],
            ['ISO_country_code' => 'RE', 'international_dialling_code' => '262', 'international_dialling_code_formatted' => '(+262)', 'country' => 'Reunion'],
            ['ISO_country_code' => 'RO', 'international_dialling_code' => '40', 'international_dialling_code_formatted' => '(+40)', 'country' => 'Romania'],
            ['ISO_country_code' => 'RU', 'international_dialling_code' => '7', 'international_dialling_code_formatted' => '(+7)', 'country' => 'Russia'],
            ['ISO_country_code' => 'RW', 'international_dialling_code' => '250', 'international_dialling_code_formatted' => '(+250)', 'country' => 'Rwanda'],
            ['ISO_country_code' => 'SM', 'international_dialling_code' => '378', 'international_dialling_code_formatted' => '(+378)', 'country' => 'San Marino'],
            ['ISO_country_code' => 'ST', 'international_dialling_code' => '239', 'international_dialling_code_formatted' => '(+239)', 'country' => 'Sao Tome& Principe'],
            ['ISO_country_code' => 'SA', 'international_dialling_code' => '966', 'international_dialling_code_formatted' => '(+966)', 'country' => 'Saudi Arabia'],
            ['ISO_country_code' => 'SN', 'international_dialling_code' => '221', 'international_dialling_code_formatted' => '(+221)', 'country' => 'Senegal'],
            ['ISO_country_code' => 'CS', 'international_dialling_code' => '381', 'international_dialling_code_formatted' => '(+381)', 'country' => 'Serbia'],
            ['ISO_country_code' => 'SC', 'international_dialling_code' => '248', 'international_dialling_code_formatted' => '(+248)', 'country' => 'Seychelles'],
            ['ISO_country_code' => 'SL', 'international_dialling_code' => '232', 'international_dialling_code_formatted' => '(+232)', 'country' => 'Sierra Leone'],
            ['ISO_country_code' => 'SG', 'international_dialling_code' => '65', 'international_dialling_code_formatted' => '(+65)', 'country' => 'Singapore'],
            ['ISO_country_code' => 'SK', 'international_dialling_code' => '421', 'international_dialling_code_formatted' => '(+421)', 'country' => 'Slovak Republic'],
            ['ISO_country_code' => 'SI', 'international_dialling_code' => '386', 'international_dialling_code_formatted' => '(+386)', 'country' => 'Slovenia'],
            ['ISO_country_code' => 'SB', 'international_dialling_code' => '677', 'international_dialling_code_formatted' => '(+677)', 'country' => 'Solomon Islands'],
            ['ISO_country_code' => 'SO', 'international_dialling_code' => '252', 'international_dialling_code_formatted' => '(+252)', 'country' => 'Somalia'],
            ['ISO_country_code' => 'ZA', 'international_dialling_code' => '27', 'international_dialling_code_formatted' => '(+27)', 'country' => 'South Africa'],
            ['ISO_country_code' => 'ES', 'international_dialling_code' => '34', 'international_dialling_code_formatted' => '(+34)', 'country' => 'Spain'],
            ['ISO_country_code' => 'LK', 'international_dialling_code' => '94', 'international_dialling_code_formatted' => '(+94)', 'country' => 'Sri Lanka'],
            ['ISO_country_code' => 'SH', 'international_dialling_code' => '290', 'international_dialling_code_formatted' => '(+290)', 'country' => 'St. Helena'],
            ['ISO_country_code' => 'KN', 'international_dialling_code' => '1869', 'international_dialling_code_formatted' => '(+1869)', 'country' => 'St. Kitts'],
            ['ISO_country_code' => 'SC', 'international_dialling_code' => '1758', 'international_dialling_code_formatted' => '(+1758)', 'country' => 'St. Lucia'],
            ['ISO_country_code' => 'SD', 'international_dialling_code' => '249', 'international_dialling_code_formatted' => '(+249)', 'country' => 'Sudan'],
            ['ISO_country_code' => 'SR', 'international_dialling_code' => '597', 'international_dialling_code_formatted' => '(+597)', 'country' => 'Suriname'],
            ['ISO_country_code' => 'SZ', 'international_dialling_code' => '268', 'international_dialling_code_formatted' => '(+268)', 'country' => 'Swaziland'],
            ['ISO_country_code' => 'SE', 'international_dialling_code' => '46', 'international_dialling_code_formatted' => '(+46)', 'country' => 'Sweden'],
            ['ISO_country_code' => 'CH', 'international_dialling_code' => '41', 'international_dialling_code_formatted' => '(+41)', 'country' => 'Switzerland'],
            ['ISO_country_code' => 'SI', 'international_dialling_code' => '963', 'international_dialling_code_formatted' => '(+963)', 'country' => 'Syria'],
            ['ISO_country_code' => 'TW', 'international_dialling_code' => '886', 'international_dialling_code_formatted' => '(+886)', 'country' => 'Taiwan'],
            ['ISO_country_code' => 'TJ', 'international_dialling_code' => '7', 'international_dialling_code_formatted' => '(+7)', 'country' => 'Tajikstan'],
            ['ISO_country_code' => 'TH', 'international_dialling_code' => '66', 'international_dialling_code_formatted' => '(+66)', 'country' => 'Thailand'],
            ['ISO_country_code' => 'TG', 'international_dialling_code' => '228', 'international_dialling_code_formatted' => '(+228)', 'country' => 'Togo'],
            ['ISO_country_code' => 'TO', 'international_dialling_code' => '676', 'international_dialling_code_formatted' => '(+676)', 'country' => 'Tonga'],
            ['ISO_country_code' => 'TT', 'international_dialling_code' => '1868', 'international_dialling_code_formatted' => '(+1868)', 'country' => 'Trinidad & Tobago'],
            ['ISO_country_code' => 'TN', 'international_dialling_code' => '216', 'international_dialling_code_formatted' => '(+216)', 'country' => 'Tunisia'],
            ['ISO_country_code' => 'TR', 'international_dialling_code' => '90', 'international_dialling_code_formatted' => '(+90)', 'country' => 'Turkey'],
            ['ISO_country_code' => 'TM', 'international_dialling_code' => '7', 'international_dialling_code_formatted' => '(+7)', 'country' => 'Turkmenistan'],
            ['ISO_country_code' => 'TM', 'international_dialling_code' => '993', 'international_dialling_code_formatted' => '(+993)', 'country' => 'Turkmenistan'],
            ['ISO_country_code' => 'TC', 'international_dialling_code' => '1649', 'international_dialling_code_formatted' => '(+1649)', 'country' => 'Turks & Caicos Islands'],
            ['ISO_country_code' => 'TV', 'international_dialling_code' => '688', 'international_dialling_code_formatted' => '(+688)', 'country' => 'Tuvalu'],
            ['ISO_country_code' => 'UG', 'international_dialling_code' => '256', 'international_dialling_code_formatted' => '(+256)', 'country' => 'Uganda'],
            ['ISO_country_code' => 'UA', 'international_dialling_code' => '380', 'international_dialling_code_formatted' => '(+380)', 'country' => 'Ukraine'],
            ['ISO_country_code' => 'AE', 'international_dialling_code' => '971', 'international_dialling_code_formatted' => '(+971)', 'country' => 'United Arab Emirates'],
            ['ISO_country_code' => 'UY', 'international_dialling_code' => '598', 'international_dialling_code_formatted' => '(+598)', 'country' => 'Uruguay'],
            ['ISO_country_code' => 'UZ', 'international_dialling_code' => '7', 'international_dialling_code_formatted' => '(+7)', 'country' => 'Uzbekistan'],
            ['ISO_country_code' => 'VU', 'international_dialling_code' => '678', 'international_dialling_code_formatted' => '(+678)', 'country' => 'Vanuatu'],
            ['ISO_country_code' => 'VA', 'international_dialling_code' => '379', 'international_dialling_code_formatted' => '(+379)', 'country' => 'Vatican City'],
            ['ISO_country_code' => 'VE', 'international_dialling_code' => '58', 'international_dialling_code_formatted' => '(+58)', 'country' => 'Venezuela'],
            ['ISO_country_code' => 'VN', 'international_dialling_code' => '84', 'international_dialling_code_formatted' => '(+84)', 'country' => 'Vietnam'],
            ['ISO_country_code' => 'VG', 'international_dialling_code' => '84', 'international_dialling_code_formatted' => '(+1284)', 'country' => 'Virgin Islands - British'],
            ['ISO_country_code' => 'VI', 'international_dialling_code' => '84', 'international_dialling_code_formatted' => '(+1340)', 'country' => 'Virgin Islands - US'],
            ['ISO_country_code' => 'WF', 'international_dialling_code' => '681', 'international_dialling_code_formatted' => '(+681)', 'country' => 'Wallis & Futuna'],
            ['ISO_country_code' => 'YE', 'international_dialling_code' => '969', 'international_dialling_code_formatted' => '(+969)', 'country' => 'Yemen (North)'],
            ['ISO_country_code' => 'YE', 'international_dialling_code' => '967', 'international_dialling_code_formatted' => '(+967)', 'country' => 'Yemen (South)'],
            ['ISO_country_code' => 'ZM', 'international_dialling_code' => '260', 'international_dialling_code_formatted' => '(+260)', 'country' => 'Zambia'],
            ['ISO_country_code' => 'ZW', 'international_dialling_code' => '263', 'international_dialling_code_formatted' => '(+263)', 'country' => 'Zimbabwe'],
        ];
        DB::table('countries')->insert($countries);
    }
}
