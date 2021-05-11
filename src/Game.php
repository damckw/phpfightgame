<?php

class Game
{
    /**
     * @param $input 2 lignes, comprenant les infos de chaque joueur
     * exemple: "Bod 100 7 5\nAlice 80 9 3"
     */
    private $player1;
    private $player2;
    private $display;
    private $init;

    public function __construct()
    {
        $this->player1 = new Player();
        $this->player2 = new Player();
        $this->init = new Init();
        $this->display = new Display();
    }

    public function run()
    {
        // Read user entered players
        $this->init->readPlayerInfo($this->player1);
        $this->init->readPlayerInfo($this->player2);

        while ($this->player1->getHp() > 0 and $this->player2->getHp() > 0)
        {
            // Player 1 gets attacked by Player 2
            $newHp1= $this->player1->getHp() - ($this->player2->getAttack() - $this->player1->getDef());

            // Player 2 gets attacked by Player 1
            $newHp2= $this->player2->getHp() - ($this->player1->getAttack() - $this->player2->getDef());

            // Check if players are attackable 
            if ($newHp1 > 0 and $newHp2 > 0)
            {
                $this->player1->setHp($newHp1);
                $this->player2->setHp($newHp2);
            }
            else
            {
                break;
            }
            // Display HP of both players
            $this->display->newTurn($this->player1, $this->player2);
        }

        if ($this->player1->getHp() > 0)
        {
            // Player 1 wins
            $this->display->win($this->player1);
        }
        else
        {
            // Player 2 wins
            $this->display->win($this->player2);
        }
    }
}
require_once('Display.php');
require_once('Init.php');
require_once('Player.php');

$game = new Game();
$game->run();
