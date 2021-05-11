<?php

interface iPlayer
{
    public function getUname();
    public function getHp();
    public function getAttack();
    public function getDef();
    public function setUname($uname);
    public function setAttack($attack);
    public function setDef($def);
    public function setHp($hp);
}

class Player implements iPlayer
{
    private $uname;
    private $hp;
    private $attack;
    private $def;

    public function getUname()
    {
        return $this->uname;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function getAttack()
    {
        return $this->attack;
    }

    public function getDef()
    {
        return $this->def;
    }

    public function setHp($newHp)
    {
        $this->hp = $newHp;
    }

    public function setUname($uname)
    {
        $this->uname = $uname;
    }

    public function setAttack($attack)
    {
        $this->attack = $attack;
    }

    public function setDef($def)
    {
        $this->def = $def;
    }
}