<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getAccountNumber()
 * @method $this  setAccountNumber(string $accountNumber)
 * @method string getBankAccountType()
 * @method $this  setBankAccountType(string $bankAccountType)
 */
class GuatemalanBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'GUATEMALAN';
}
