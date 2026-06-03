<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Shop\Bank;

/**
 * @method string getBankAccountNumber()
 * @method $this  setBankAccountNumber(string $bankAccountNumber)
 * @method string getBankBranchNumber()
 * @method $this  setBankBranchNumber(string $bankBranchNumber)
 * @method string getBic()
 * @method $this  setBic(string $bic)
 * @method string getIban()
 * @method $this  setIban(string $iban)
 */
class SerbianBankAccountInfo extends BankAccountInfo
{
    /**
     * @var string
     */
    public static $type = 'SERBIAN';
}
