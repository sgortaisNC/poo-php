<?php


class Classe
{

    private $_name;
    private $test;
    /**
     * Classe constructor.
     * @param string $string
     */
    public function __construct($string)
    {
        $this->setName($string);
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }
}