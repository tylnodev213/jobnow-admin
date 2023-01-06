<?php declare(strict_types=1);

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static OptionOne()
 * @method static static OptionTwo()
 * @method static static OptionThree()
 */
final class UserType extends Enum
{
    const Admin = 0;
    const HR = 1;
    const Candidate = 2;

    const AllHR = 3;

    const AllCandidate = 4;

    const All = 5;
}
