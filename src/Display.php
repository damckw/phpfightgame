<?php

class Display
{
    public function newTurn($player1, $player2)
    {
        echo $player1->getHp();
        echo " ";
        echo $player2->getHp();
        echo "\n";
    }

    public function win($player)
    {
        echo $player->getUname();
        echo " ";
        echo $player->getHp();
        echo "\n";
    }
}
