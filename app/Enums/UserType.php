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
    const Admin = 1;
    const HR = 2;
    const Candidate = 3;

    const AllHR = 4;

    const AllCandidate = 5;

    const All = 6;
}
