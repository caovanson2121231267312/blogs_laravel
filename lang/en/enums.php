<?php

declare(strict_types=1);

use App\Enums\TypeCode;
use App\Enums\WorkType;
use App\Enums\PayType;

return [

    TypeCode::class => [
        TypeCode::APPLICATION => 'Phần mềm',
        TypeCode::WEBSITE => 'Website',
        TypeCode::GAME => 'Game',
        TypeCode::MOBILE => 'Ứng dụng',
    ],

    WorkType::class => [
        WorkType::PARTTIME => 'Bán thời gian',
        WorkType::FULLTIME => 'Toàn thời gian',
    ],

    PayType::class => [
        PayType::PROJECT => 'Trả theo dự án',
        PayType::HOUR => 'Trả theo giờ',
        PayType::DAY => 'Trả theo ngày',
        PayType::MONTH => 'Trả theo dự án',
    ],

];
