<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $bankAccountNumber)
 */
class PhilippinesBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'PHILIPPINES';
}
