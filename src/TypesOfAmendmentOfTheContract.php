<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс TypesOfAmendmentOfTheContract
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary\AbstractClasses
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class TypesOfAmendmentOfTheContract extends AbstractBook
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
        'Льготный период - изменение договора в связи с существенным изменением обстоятельств или по законному требованию заемщика' => 1,
        'Урегулирование проблемной задолженности' => 2,
        'Прочие изменения' => 3
    ];

}
