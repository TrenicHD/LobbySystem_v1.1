<?php

declare(strict_types=1);

namespace TrenicHD\tasks;

use TrenicHD\Main;
use pocketmine\scheduler\Task;

class ScoreboardTask extends Task
{
    private $plugin;

    public function __construct(Main $plugin)
    {
        $this->plugin = $plugin;
    }

    public function onRun(int $currentTick) : void
    {
        $this->plugin->scoreboard();
    }
}