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
final class TypeCode extends Enum implements LocalizedEnum
{
    const     APPLICATION = 0;
    const     WEBSITE = 1;
    const     GAME = 2;
    const     MOBILE = 3;
}
