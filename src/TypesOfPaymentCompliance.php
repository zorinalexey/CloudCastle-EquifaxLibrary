<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс TypesOfPaymentCompliance
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class TypesOfPaymentCompliance extends AbstractBook
{

    /**
     * Значение по умолчанию
     * @var type
     */
    protected int $default = 1;

    /**
     * Коллекция возможных значений
     * @var array
     */
    protected array $data = [
        'Платеж внесен в полном размере' => 1,
        'Платеж внесен не в полном размере' => 2,
        'Платеж не внесен' => 3
    ];

}
