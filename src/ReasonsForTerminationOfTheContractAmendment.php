<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс ReasonsForTerminationOfTheContractAmendment
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class ReasonsForTerminationOfTheContractAmendment extends AbstractBook
{

    protected int $default = 1;

    /**
     * Коллекция возможных значений
     * @var array
     */
    protected array $data = [
        'По соглашению сторон' => 1,
        'В связи с истечением срока действия изменения договора' => 2,
        'В связи с наступлением условия прекращения действия изменения договора' => 3,
        'Односторонний отказ источника от изменения договора' => 4,
        'Односторонний отказ субъекта от изменения договора' => 5,
        'По иному основанию' => 99
    ];

}
