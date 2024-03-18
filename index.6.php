<?php

function convertCurrency($amount, $fromCurrency, $toCurrency) {
    // Курсы обмена
    $usdToEur = 0.85;
    $usdToGbp = 0.73;
    $eurToUsd = 1.18;
    $eurToGbp = 0.86;
    $gbpToUsd = 1.38;
    $gbpToEur = 1.16;

    // Вычисление конвертированной суммы
    switch ($fromCurrency) {
        case 'USD':
            switch ($toCurrency) {
                case 'EUR':
                    return $amount * $usdToEur;
                case 'GBP':
                    return $amount * $usdToGbp;
                default:
                    return $amount;
            }
        case 'EUR':
            switch ($toCurrency) {
                case 'USD':
                    return $amount * $eurToUsd;
                case 'GBP':
                    return $amount * $eurToGbp;
                default:
                    return $amount;
            }
        case 'GBP':
            switch ($toCurrency) {
                case 'USD':
                    return $amount * $gbpToUsd;
                case 'EUR':
                    return $amount * $gbpToEur;
                default:
                    return $amount;
            }
        default:
            return $amount;
    }
}

// Пример использования:
$amount = 100;
$fromCurrency = 'USD';
$toCurrency = 'EUR';

$result = convertCurrency($amount, $fromCurrency, $toCurrency);
echo "$amount $fromCurrency = $result $toCurrency";

?>