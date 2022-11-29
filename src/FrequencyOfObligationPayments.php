<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс FrequencyOfObligationPayments
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class FrequencyOfObligationPayments extends AbstractBook
{

    /**
     * Значение по умолчанию
     * @var type
     */
    protected int $default = 99;

    /**
     * Коллекция возможных значений
     * @var array
     */
    protected array $data = [
        'Более четырех раз в месяц' => 1,
        'От двух до четырех раз в месяц' => 2,
        'Один раз в месяц' => 3,
        'Один раз в квартал' => 4,
        'Один раз в полгода' => 5,
        'Один раз в год' => 6,
        'Единовременно, в том числе в день окончания срока действия договора' => 7,
        'До востребования' => 8,
        'Бессрочно' => 8,
        'Иное' => 99
    ];

}
