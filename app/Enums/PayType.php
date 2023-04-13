<?php

declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;
use BenSampo\Enum\Contracts\LocalizedEnum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class PayType extends Enum implements LocalizedEnum
{
    const PROJECT = 0;
    const HOUR = 1;
    const DAY = 2;
    const MONTH = 3;
}
