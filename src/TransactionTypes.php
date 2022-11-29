<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс TransactionTypes
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class TransactionTypes extends AbstractBook
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
        'Договор займа (кредита)' => 1,
        'Договор лизинга' => 2,
        'Независимая гарантия' => 3,
        'Поручительство' => 4,
        'Договор с элементами займа, поручительства, гарантии или лизинга (смешанный договор)' => 5
    ];

}
