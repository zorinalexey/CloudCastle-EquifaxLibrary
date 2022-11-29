<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс TypesOfComplianceWithTheDeadlinePayments
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class TypesOfComplianceWithTheDeadlinePayments extends AbstractBook
{

    /**
     * Значение по умолчанию
     * @var string
     */
    protected int $default = 1;

    /**
     * Коллекция возможных значений
     * @var array
     */
    protected array $data = [
        'Срок внесения платежа не наступил (новый договор)' => 1,
        'Новый договор' => 1,
        'Платежи вносятся своевременно' => 2,
        'Своевременно' => 2,
        'Платежи вносятся несвоевременно' => 3,
        'Несвоевременно' => 3
    ];

}
