<?php

declare(strict_types = 1);

namespace CloudCastle\EquifaxLibrary\AbstractClasses;

/**
 * Класс AbstractBook
 * @version 0.0.1
 * @package CloudCastle\EquifaxLibrary\AbstractClasses
 * @generated Зорин Алексей, please DO NOT EDIT!
 * @author Зорин Алексей <zorinalexey59292@gmail.com>
 * @copyright 2022 разработчик Зорин Алексей Евгеньевич.
 */
abstract class AbstractBook
{

    /**
     * Код
     * @var string|int
     */
    public $code;

    /**
     * Наименование
     * @var string|null
     */
    public ?string $name = null;

    /**
     * Конструктор класса
     * @param string|int $str Запрашиваемый параметр
     */
    public function __construct($str = false)
    {
        $this->set((string)$str);
        if ( ! $this->code OR ! $this->name AND isset($this->default)) {
            $this->set((string)$this->default);
        }
    }

    /**
     * Поиск и установка параметров запроса по справочнику
     * @param string|int $str Запрашиваемый параметр
     * @return void
     */
    protected function set(string $str): void
    {
        $name = mb_strtolower($str);
        if ($str) {
            foreach ($this->data as $key => $value) {
                if ($name === mb_strtolower((string)$key)
                    OR $name === mb_strtolower((string)$value)
                ) {
                    $this->name = $name;
                    $this->code = (string)$value;
                }
            }
        }
    }

    /**
     * Получить справочник
     * @return array
     */
    public function getLibrary(): array
    {
        return $this->data;
    }

}
