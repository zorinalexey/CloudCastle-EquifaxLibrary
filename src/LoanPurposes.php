<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary;

use CloudCastle\EquifaxLibrary\AbstractClasses\AbstractBook;

/**
 * Класс LoanPurposes
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
final class LoanPurposes extends AbstractBook
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
        'Пополнение оборотных средств' => 1,
        'Приобретение земельного участка' => 2.1,
        'Приобретение жилого здания' => 2.2,
        'Приобретение нежилого здания' => 2.3,
        'Приобретение жилого помещения на первичном рынке' => 2.4,
        'Приобретение жилого помещения на вторичном рынке' => 2.5,
        'Приобретение нежилого помещения' => 2.6,
        'Приобретение иной недвижимости' => 2.7,
        'Приобретение основных средств, за исключением недвижимости' => 3,
        'Строительство жилого здания' => 4.1,
        'Реконструкция жилого здания' => 4.2,
        'Строительство нежилого здания' => 4.3,
        'Реконструкция нежилого здания' => 4.4,
        'Приобретение имущественных прав по договору участия в долевом строительстве многоквартирного дома или иного жилого здания' => 4.5,
        'Приобретение имущественных прав по договору участия в долевом строительстве нежилого здания' => 4.6,
        'Финансирование инвестиционного проекта, предусматривающего строительство или реконструкцию жилого здания или жилых и нежилых зданий' => 4.7,
        'Финансирование инвестиционного проекта, предусматривающего строительство или реконструкцию только нежилого здания' => 4.8,
        'Финансирование инвестиционного проекта, предусматривающего строительство или реконструкцию инженерно-технической инфраструктуры' => 4.9,
        'Приобретение ценных бумаг' => 5,
        'Обеспечение участия в электронных торгах, аукционе или конкурсе' => 6,
        'Вклад в уставный капитал юридического лица' => 7,
        'Погашение задолженности (рефинансирование) субъекта перед организацией, в которую он обратился' => 8,
        'Погашение задолженности (рефинансирование) субъекта перед лицом, отличным от организации, в которую он обратился' => 9,
        'Погашение субъектом задолженности третьего лица перед организацией, в которую оно обратилось, или иным лицом' => 10,
        'Финансирование лизинговой деятельности' => 11,
        'Приобретение прав кредитора по займам (кредитам)' => 12,
        'Предоставление займа (кредита) иному лицу' => 13,
        'POS-заем' => 14,
        'Бытовые или текущие нужды (ремонт, приобретение мебели, бытовой техники, медицинские услуги)' => 15,
        'Образовательный кредит с государственной поддержкой в соответствии с частью 4 статьи 104 Федерального закона от 29 декабря 2012 года N 273-ФЗ "Об образовании в Российской Федерации"' => 16.1,
        'Образовательный кредит без государственной поддержки в соответствии со статьей 104 Федерального закона от 29 декабря 2012 года N 273-ФЗ "Об образовании в Российской Федерации"' => 16.2,
        'Иной заем (кредит) на оплату образования' => 16.3,
        'Приобретение автомобиля с пробегом менее 1000 километров' => 17,
        'Приобретение автомобиля с пробегом от 1000 километров' => 18,
        'Цель не определена' => 19,
        'Иная цель' => 99
    ];

}
