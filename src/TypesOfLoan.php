<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс TypesOfLoan
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class TypesOfLoan extends AbstractBook
{

    protected int $default = 99;

    /**
     * Коллекция возможных значений
     * @var array
     */
    protected array $data = [
        'Заем (кредит)' => 1,
        'Заем (кредит) с ипотекой' => 2,
        'Микрозаем' => 3,
        'Кредитная линия с лимитом выдачи' => 4,
        'Кредитная линия с лимитом задолженности' => 5,
        'Комбинированная кредитная линия с лимитом выдачи и лимитом задолженности' => 6,
        'Кредит "овердрафт" (кредитование счета)' => 7,
        'Синдицированный заем (кредит)' => 8,
        'Иной заем (кредит)' => 99
    ];

}
