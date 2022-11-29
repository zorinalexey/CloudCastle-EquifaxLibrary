<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс TypesOfIdentityDocuments
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class TypesOfIdentityDocuments extends AbstractBook
{

    /**
     * Значение по умолчанию
     * @var type
     */
    protected int $default = 21;

    /**
     * Коллекция возможных значений
     * @var array
     */
    protected array $data = [
        'Паспорт гражданина Российской Федерации' => 21,
        'Паспорт гражданина Российской Федерации, удостоверяющий его личность за пределами территории Российской Федерации' => 22.1,
        'Дипломатический паспорт, удостоверяющий личность гражданина Российской Федерации за пределами территории Российской Федерации' => 22.2,
        'Служебный паспорт, удостоверяющий личность гражданина Российской Федерации за пределами территории Российской Федерации' => 22.3,
        'Удостоверение личности моряка' => 23,
        'Удостоверение личности военнослужащего' => 24,
        'Военный билет военнослужащего' => 25,
        'Временное удостоверение личности гражданина Российской Федерации, выдаваемое на период оформления паспорта гражданина Российской Федерации' => 26,
        'Свидетельство о рождении гражданина Российской Федерации' => 27,
        'Иной документ, удостоверяющий личность гражданина Российской Федерации в соответствии с законодательством Российской Федерации' => 28,
        'Паспорт иностранного гражданина либо иной документ, установленный федеральным законом или признаваемый в соответствии с международным договором Российской Федерации в качестве документа, удостоверяющего личность иностранного гражданина' => 31,
        'Документ, выданный иностранным государством и признаваемый в соответствии с международным договором Российской Федерации в качестве документа, удостоверяющего личность лица без гражданства' => 32,
        'Иной документ, признаваемый документом, удостоверяющим личность лица без гражданства в соответствии с законодательством Российской Федерации и международным договором Российской Федерации' => 35,
        'Удостоверение беженца' => 37,
        'Паспорт иностранного гражданина' => 31,
        'Удостоверение вынужденного переселенца' => 38,
        'Иной документ' => 999
    ];

}
