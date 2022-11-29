<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс TypesOfParticipationInTheTransaction
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class TypesOfParticipationInTheTransaction extends AbstractBook
{

    protected int $default = 1;

    /**
     * Коллекция возможных значений
     * @var array
     */
    protected array $data = [
        'Заемщик' => 1,
        'Поручитель' => 2,
        'Принципал по гарантии' => 3,
        'Лизингополучатель' => 4,
        'Лицо, получающее финансирование или предоставляющее обеспечение по договору с элементами займа, поручительства, гарантии или лизинга (смешанный договор)' => 5,
        'Иной вид участия' => 99
    ];

}
