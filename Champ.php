<?php
class Champ
{
    private $_lvl = 1;
    private $_nom = "Test";
    private $_classe = null;

    public function __construct(string $nom, Classe $classe,int $lvlInit)
    {

        $this->setNom($nom);
        $this->setLvl($lvlInit);
        $this->setClasse($classe);
    }

    /**
     * @return int
     */
    public function getLvl(): int
    {
        return $this->_lvl;
    }

    /**
     * @param int $lvl
     */
    public function setLvl(int $lvl): void
    {
        $this->_lvl = $lvl;
    }

    /**
     * @return null
     */
    public function getClasse()
    {
        return $this->_classe;
    }

    /**
     * @return string
     */
    public function getNom(): string
    {
        return $this->_nom;
    }

    /**
     * @param null $classe
     */
    public function setClasse($classe): void
    {
        $this->_classe = $classe;
    }

    /**
     * @param string $nom
     */
    public function setNom(string $nom): void
    {
        $this->_nom = $nom;
    }

    public function resume()
    {
        return "I'm ".$this->_nom.", a lvl ".$this->_lvl." ".$this->_classe->getName();
    }

}

