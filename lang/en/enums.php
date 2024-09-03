<?php

use App\Enums\ApiPermission\ApiPermissionAction;
use App\Enums\Currency\CurrencyCodeListEnum;
use App\Enums\Order\OrderShipmentWayEnum;
use App\Enums\Order\OrderSourceEnum;
use App\Enums\Order\OrderStatus;
use App\Enums\Webhook\WebhookTypeEnum;

return [
    OrderSourceEnum::class => [
        OrderSourceEnum::API => 'api',
        OrderSourceEnum::SHEET => 'sheet',
        OrderSourceEnum::USER => 'user',
        OrderSourceEnum::IMPORT => 'import',
    ],

    OrderStatus::class => [
        OrderStatus::NEW => 'new',
        OrderStatus::SHIPPED => 'shipped',
        OrderStatus::PACKED => 'packed',
        OrderStatus::WAITING_FOR_SHIPPING_COMPANY => 'waiting for shipping company',
        OrderStatus::DELIVERED => 'delivered',
        OrderStatus::RETURNED => 'returned',
    ],
    OrderShipmentWayEnum::class => [
        OrderShipmentWayEnum::TO_HOME => 'to home',
        OrderShipmentWayEnum::TO_OFFICE => 'to office',
    ],
    CurrencyCodeListEnum::class => [
        CurrencyCodeListEnum::AED => 'United Arab Emirates Dirham',
        CurrencyCodeListEnum::AFN => 'Afghani',
        CurrencyCodeListEnum::ALL => 'Lek',
        CurrencyCodeListEnum::AMD => 'Armenian Dram',
        CurrencyCodeListEnum::ARS => 'Argentine Peso',
        CurrencyCodeListEnum::AUD => 'Australian Dollar',
        CurrencyCodeListEnum::AZN => 'Azerbaijan Manat',
        CurrencyCodeListEnum::BAM => 'Convertible Mark',
        CurrencyCodeListEnum::BDT => 'Taka',
        CurrencyCodeListEnum::BGN => 'Bulgarian Lev',
        CurrencyCodeListEnum::BHD => 'Bahraini Dinar',
        CurrencyCodeListEnum::BIF => 'Burundi Franc',
        CurrencyCodeListEnum::BND => 'Brunei Dollar',
        CurrencyCodeListEnum::BOB => 'Boliviano',
        CurrencyCodeListEnum::BRL => 'Brazilian Real',
        CurrencyCodeListEnum::BWP => 'Pula',
        CurrencyCodeListEnum::BYN => 'Belarusian Ruble',
        CurrencyCodeListEnum::BZD => 'Belize Dollar',
        CurrencyCodeListEnum::CAD => 'Canadian Dollar',
        CurrencyCodeListEnum::CDF => 'Congolese Franc',
        CurrencyCodeListEnum::CHF => 'Swiss Franc',
        CurrencyCodeListEnum::CLP => 'Chilean Peso',
        CurrencyCodeListEnum::CNY => 'Yuan Renminbi',
        CurrencyCodeListEnum::COP => 'Colombian Peso',
        CurrencyCodeListEnum::CRC => 'Costa Rican Colon',
        CurrencyCodeListEnum::CVE => 'Cape Verde Escudo',
        CurrencyCodeListEnum::CZK => 'Czech Koruna',
        CurrencyCodeListEnum::DJF => 'Djibouti Franc',
        CurrencyCodeListEnum::DKK => 'Danish Krone',
        CurrencyCodeListEnum::DOP => 'Dominican Peso',
        CurrencyCodeListEnum::DZD => 'Algerian Dinar',
        CurrencyCodeListEnum::EGP => 'Egyptian Pound',
        CurrencyCodeListEnum::ERN => 'Nakfa',
        CurrencyCodeListEnum::ETB => 'Ethiopian Birr',
        CurrencyCodeListEnum::EUR => 'Euro',
        CurrencyCodeListEnum::GBP => 'British Pound',
        CurrencyCodeListEnum::GEL => 'Lari',
        CurrencyCodeListEnum::GHS => 'Ghana Cedi',
        CurrencyCodeListEnum::GNF => 'Guinean Franc',
        CurrencyCodeListEnum::GTQ => 'Quetzal',
        CurrencyCodeListEnum::HKD => 'Hong Kong Dollar',
        CurrencyCodeListEnum::HNL => 'Lempira',
        CurrencyCodeListEnum::HRK => 'Kuna',
        CurrencyCodeListEnum::HUF => 'Forint',
        CurrencyCodeListEnum::IDR => 'Rupiah',
        CurrencyCodeListEnum::ILS => 'New Israeli Sheqel',
        CurrencyCodeListEnum::INR => 'Indian Rupee',
        CurrencyCodeListEnum::IQD => 'Iraqi Dinar',
        CurrencyCodeListEnum::IRR => 'Iranian Rial',
        CurrencyCodeListEnum::ISK => 'Iceland Krona',
        CurrencyCodeListEnum::JMD => 'Jamaican Dollar',
        CurrencyCodeListEnum::JOD => 'Jordanian Dinar',
        CurrencyCodeListEnum::JPY => 'Yen',
        CurrencyCodeListEnum::KES => 'Kenyan Shilling',
        CurrencyCodeListEnum::KHR => 'Riel',
        CurrencyCodeListEnum::KMF => 'Comorian Franc',
        CurrencyCodeListEnum::KRW => 'Won',
        CurrencyCodeListEnum::KWD => 'Kuwaiti Dinar',
        CurrencyCodeListEnum::KZT => 'Tenge',
        CurrencyCodeListEnum::LBP => 'Lebanese Pound',
        CurrencyCodeListEnum::LKR => 'Sri Lanka Rupee',
        CurrencyCodeListEnum::LYD => 'Libyan Dinar',
        CurrencyCodeListEnum::MAD => 'Moroccan Dirham',
        CurrencyCodeListEnum::MDL => 'Moldovan Leu',
        CurrencyCodeListEnum::MGA => 'Malagasy Ariary',
        CurrencyCodeListEnum::MKD => 'Denar',
        CurrencyCodeListEnum::MMK => 'Kyat',
        CurrencyCodeListEnum::MOP => 'Pataca',
        CurrencyCodeListEnum::MUR => 'Mauritius Rupee',
        CurrencyCodeListEnum::MXN => 'Mexican Peso',
        CurrencyCodeListEnum::MYR => 'Malaysian Ringgit',
        CurrencyCodeListEnum::MZN => 'Metical',
        CurrencyCodeListEnum::NAD => 'Namibia Dollar',
        CurrencyCodeListEnum::NGN => 'Naira',
        CurrencyCodeListEnum::NIO => 'Cordoba Oro',
        CurrencyCodeListEnum::NOK => 'Norwegian Krone',
        CurrencyCodeListEnum::NPR => 'Nepese Rupee',
        CurrencyCodeListEnum::NZD => 'New Zealand Dollar',
        CurrencyCodeListEnum::OMR => 'Rial Omani',
        CurrencyCodeListEnum::PAB => 'Balboa',
        CurrencyCodeListEnum::PEN => 'Nuevo Sol',
        CurrencyCodeListEnum::PHP => 'Philippine Peso',
        CurrencyCodeListEnum::PKR => 'Pakistan Rupee',
        CurrencyCodeListEnum::PLN => 'Zloty',
        CurrencyCodeListEnum::PYG => 'Guarani',
        CurrencyCodeListEnum::QAR => 'Qatari Rial',
        CurrencyCodeListEnum::RON => 'Romanian Leu',
        CurrencyCodeListEnum::RSD => 'Serbian Dinar',
        CurrencyCodeListEnum::RUB => 'Russian Ruble',
        CurrencyCodeListEnum::RWF => 'Rwanda Franc',
        CurrencyCodeListEnum::SAR => 'Saudi Riyal',
        CurrencyCodeListEnum::SDG => 'Sud',
        CurrencyCodeListEnum::SEK => 'Swedish Krona',
        CurrencyCodeListEnum::SGD => 'Singapore Dollar',
        CurrencyCodeListEnum::SOS => 'Somali Shilling',
        CurrencyCodeListEnum::SYP => 'Syria Pound',
        CurrencyCodeListEnum::THB => 'Baht',
        CurrencyCodeListEnum::TND => 'Tunisian Dinar',
        CurrencyCodeListEnum::TOP => 'Paanga',
        CurrencyCodeListEnum::TRY => 'Turkish Lira',
        CurrencyCodeListEnum::TTD => 'Trinidad and Tobago Dollar',
        CurrencyCodeListEnum::TWD => 'New Taiwan Dollar',
        CurrencyCodeListEnum::TZS => 'Tanzanian Shilling',
        CurrencyCodeListEnum::UAH => 'Hryvnia',
        CurrencyCodeListEnum::UGX => 'Uganda Shilling',
        CurrencyCodeListEnum::USD => 'United States Dollar',
        CurrencyCodeListEnum::UYU => 'Peso Uruguayo',
        CurrencyCodeListEnum::UZS => 'Uzbekistan Sum',
        CurrencyCodeListEnum::VEF => 'Bolivar Fuerte',
        CurrencyCodeListEnum::VND => 'Dong',
        CurrencyCodeListEnum::XAF => 'CFA Franc BEAC',
        CurrencyCodeListEnum::XOF => 'CFA Franc BCEAO',
        CurrencyCodeListEnum::YER => 'Yemeni Rial',
        CurrencyCodeListEnum::ZAR => 'South African Rand',
        CurrencyCodeListEnum::ZWL => 'Zimbabwe Dollar',

    ],

    ApiPermissionAction::class => [
        ApiPermissionAction::VIEW => 'View',
        ApiPermissionAction::VIEW_ANY => 'View Any',
        ApiPermissionAction::CREATE => 'Create',
        ApiPermissionAction::UPDATE => 'Update',
        ApiPermissionAction::DELETE => 'Delete',
        ApiPermissionAction::RESTORE => 'Restore',
        ApiPermissionAction::FORCE_DELETE => 'Force Delete',
    ],

    WebhookTypeEnum::class => [
        WebhookTypeEnum::LEAD_CREATED => 'Lead Created',
        WebhookTypeEnum::LEAD_UPDATED => 'Lead Updated',
        WebhookTypeEnum::ORDER_CREATED => 'Order Created',
        WebhookTypeEnum::ORDER_UPDATED => 'Order Updated',
        WebhookTypeEnum::STOCK_MIN_LIMIT_REACHED => 'Stock Min Limit Reached',
    ],
];
