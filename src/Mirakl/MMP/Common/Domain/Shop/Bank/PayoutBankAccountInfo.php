<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $bankAccountNumber)
 * @method string getBic()
 * @method $this  setBic(string $bic)
 * @method string getIban()
 * @method $this  setIban(string $iban)
 * @method string getPayoutFormat()
 * @method $this  setPayoutFormat(string $payoutFormat)
 * @method string getSortCode()
 * @method $this  setSortCode(string $sortCode)
 */
class PayoutBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'PAYOUT';
}
