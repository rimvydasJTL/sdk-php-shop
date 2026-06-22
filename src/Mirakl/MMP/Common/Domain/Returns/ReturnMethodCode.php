<?php

declare(strict_types=1);

namespace Mirakl\MMP\Common\Domain\Returns;

class ReturnMethodCode
{
    public const BY_MAIL         = 'RETURN_METHOD_BY_MAIL';
    public const DROP_OFF_POINT  = 'RETURN_METHOD_DROP_OFF_POINT';
    public const HOME_PICKUP     = 'RETURN_METHOD_HOME_PICKUP';
    public const IN_STORE        = 'RETURN_METHOD_IN_STORE';
    public const RETURNLESS      = 'RETURN_METHOD_RETURNLESS';
}
