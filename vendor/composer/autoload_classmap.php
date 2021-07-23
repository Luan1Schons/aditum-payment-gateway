<?php

// autoload_classmap.php @generated by Composer

$vendorDir = dirname(dirname(__FILE__));
$baseDir = dirname($vendorDir);

return array(
    'AditumPayments\\ApiSDK\\Configuration' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Configuration.php',
    'AditumPayments\\ApiSDK\\Controller\\Authorization' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Controller/Authorization.php',
    'AditumPayments\\ApiSDK\\Controller\\Boleto' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Controller/Boleto.php',
    'AditumPayments\\ApiSDK\\Controller\\Login' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Controller/Login.php',
    'AditumPayments\\ApiSDK\\Controller\\PreAuthorization' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Controller/PreAuthorization.php',
    'AditumPayments\\ApiSDK\\Domains\\Address' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Address.php',
    'AditumPayments\\ApiSDK\\Domains\\Authorization' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Authorization.php',
    'AditumPayments\\ApiSDK\\Domains\\Boleto' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Boleto.php',
    'AditumPayments\\ApiSDK\\Domains\\Card' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Card.php',
    'AditumPayments\\ApiSDK\\Domains\\Charge' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Charge.php',
    'AditumPayments\\ApiSDK\\Domains\\Customer' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Customer.php',
    'AditumPayments\\ApiSDK\\Domains\\Discount' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Discount.php',
    'AditumPayments\\ApiSDK\\Domains\\Fine' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Fine.php',
    'AditumPayments\\ApiSDK\\Domains\\Phone' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Phone.php',
    'AditumPayments\\ApiSDK\\Domains\\PreAuthorization' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/PreAuthorization.php',
    'AditumPayments\\ApiSDK\\Domains\\Transactions' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Domains/Transactions.php',
    'AditumPayments\\ApiSDK\\Enum\\AcquirerCode' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Enum/AcquirerCode.php',
    'AditumPayments\\ApiSDK\\Enum\\CardBrand' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Enum/CardBrand.php',
    'AditumPayments\\ApiSDK\\Enum\\ChargeStatus' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Enum/ChargeStatus.php',
    'AditumPayments\\ApiSDK\\Enum\\DiscountType' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Enum/DiscountType.php',
    'AditumPayments\\ApiSDK\\Enum\\DocumentType' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Enum/DocumentType.php',
    'AditumPayments\\ApiSDK\\Enum\\PaymentType' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Enum/PaymentType.php',
    'AditumPayments\\ApiSDK\\Enum\\PhoneType' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Enum/PhoneType.php',
    'AditumPayments\\ApiSDK\\Gateway' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Gateway.php',
    'AditumPayments\\ApiSDK\\Helper\\Utils' => $vendorDir . '/aditum-payments/aditum-api-sdk-php/src/Helper/Utils.php',
    'Composer\\InstalledVersions' => $vendorDir . '/composer/InstalledVersions.php',
    'Picqer\\Barcode\\Barcode' => $vendorDir . '/picqer/php-barcode-generator/src/Barcode.php',
    'Picqer\\Barcode\\BarcodeBar' => $vendorDir . '/picqer/php-barcode-generator/src/BarcodeBar.php',
    'Picqer\\Barcode\\BarcodeGenerator' => $vendorDir . '/picqer/php-barcode-generator/src/BarcodeGenerator.php',
    'Picqer\\Barcode\\BarcodeGeneratorDynamicHTML' => $vendorDir . '/picqer/php-barcode-generator/src/BarcodeGeneratorDynamicHTML.php',
    'Picqer\\Barcode\\BarcodeGeneratorHTML' => $vendorDir . '/picqer/php-barcode-generator/src/BarcodeGeneratorHTML.php',
    'Picqer\\Barcode\\BarcodeGeneratorJPG' => $vendorDir . '/picqer/php-barcode-generator/src/BarcodeGeneratorJPG.php',
    'Picqer\\Barcode\\BarcodeGeneratorPNG' => $vendorDir . '/picqer/php-barcode-generator/src/BarcodeGeneratorPNG.php',
    'Picqer\\Barcode\\BarcodeGeneratorSVG' => $vendorDir . '/picqer/php-barcode-generator/src/BarcodeGeneratorSVG.php',
    'Picqer\\Barcode\\Exceptions\\BarcodeException' => $vendorDir . '/picqer/php-barcode-generator/src/Exceptions/BarcodeException.php',
    'Picqer\\Barcode\\Exceptions\\InvalidCharacterException' => $vendorDir . '/picqer/php-barcode-generator/src/Exceptions/InvalidCharacterException.php',
    'Picqer\\Barcode\\Exceptions\\InvalidCheckDigitException' => $vendorDir . '/picqer/php-barcode-generator/src/Exceptions/InvalidCheckDigitException.php',
    'Picqer\\Barcode\\Exceptions\\InvalidFormatException' => $vendorDir . '/picqer/php-barcode-generator/src/Exceptions/InvalidFormatException.php',
    'Picqer\\Barcode\\Exceptions\\InvalidLengthException' => $vendorDir . '/picqer/php-barcode-generator/src/Exceptions/InvalidLengthException.php',
    'Picqer\\Barcode\\Exceptions\\UnknownTypeException' => $vendorDir . '/picqer/php-barcode-generator/src/Exceptions/UnknownTypeException.php',
    'Picqer\\Barcode\\Helpers\\BinarySequenceConverter' => $vendorDir . '/picqer/php-barcode-generator/src/Helpers/BinarySequenceConverter.php',
    'Picqer\\Barcode\\Types\\TypeCodabar' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCodabar.php',
    'Picqer\\Barcode\\Types\\TypeCode11' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode11.php',
    'Picqer\\Barcode\\Types\\TypeCode128' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode128.php',
    'Picqer\\Barcode\\Types\\TypeCode128A' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode128A.php',
    'Picqer\\Barcode\\Types\\TypeCode128B' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode128B.php',
    'Picqer\\Barcode\\Types\\TypeCode128C' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode128C.php',
    'Picqer\\Barcode\\Types\\TypeCode39' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode39.php',
    'Picqer\\Barcode\\Types\\TypeCode39Checksum' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode39Checksum.php',
    'Picqer\\Barcode\\Types\\TypeCode39Extended' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode39Extended.php',
    'Picqer\\Barcode\\Types\\TypeCode39ExtendedChecksum' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode39ExtendedChecksum.php',
    'Picqer\\Barcode\\Types\\TypeCode93' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeCode93.php',
    'Picqer\\Barcode\\Types\\TypeEan13' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeEan13.php',
    'Picqer\\Barcode\\Types\\TypeEan8' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeEan8.php',
    'Picqer\\Barcode\\Types\\TypeEanUpcBase' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeEanUpcBase.php',
    'Picqer\\Barcode\\Types\\TypeIntelligentMailBarcode' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeIntelligentMailBarcode.php',
    'Picqer\\Barcode\\Types\\TypeInterface' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeInterface.php',
    'Picqer\\Barcode\\Types\\TypeInterleaved25' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeInterleaved25.php',
    'Picqer\\Barcode\\Types\\TypeInterleaved25Checksum' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeInterleaved25Checksum.php',
    'Picqer\\Barcode\\Types\\TypeKix' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeKix.php',
    'Picqer\\Barcode\\Types\\TypeMsi' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeMsi.php',
    'Picqer\\Barcode\\Types\\TypeMsiChecksum' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeMsiChecksum.php',
    'Picqer\\Barcode\\Types\\TypePharmacode' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypePharmacode.php',
    'Picqer\\Barcode\\Types\\TypePharmacodeTwoCode' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypePharmacodeTwoCode.php',
    'Picqer\\Barcode\\Types\\TypePlanet' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypePlanet.php',
    'Picqer\\Barcode\\Types\\TypePostnet' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypePostnet.php',
    'Picqer\\Barcode\\Types\\TypeRms4cc' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeRms4cc.php',
    'Picqer\\Barcode\\Types\\TypeStandard2of5' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeStandard2of5.php',
    'Picqer\\Barcode\\Types\\TypeStandard2of5Checksum' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeStandard2of5Checksum.php',
    'Picqer\\Barcode\\Types\\TypeUpcA' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeUpcA.php',
    'Picqer\\Barcode\\Types\\TypeUpcE' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeUpcE.php',
    'Picqer\\Barcode\\Types\\TypeUpcExtension2' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeUpcExtension2.php',
    'Picqer\\Barcode\\Types\\TypeUpcExtension5' => $vendorDir . '/picqer/php-barcode-generator/src/Types/TypeUpcExtension5.php',
);
