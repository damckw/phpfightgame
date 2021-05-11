<?php

class Init
{
    public function readPlayerInfo($player)
    {
        $line = readline();
        list($uname, $hp, $attack, $def) = explode(" ", $line);
        $player->setUname($uname);
        $player->setHp($hp);
        $player->setAttack($attack);
        $player->setDef($def);
    }
}