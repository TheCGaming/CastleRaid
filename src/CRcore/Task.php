<?php

namespace CRcore;

use pocketmine\scheduler\PluginTask;
use CRcore\Main;

class Task extends PluginTask{

public $playername;

	public function __construct(Main $main, string $playername){
		parent::__construct($main);
		$this->playername = $playername;
	}
	
	public function onRun(int $tick){
	$player = $this->getOwner()->getServer()->getPlayer($this->playername());
		if($player instanceof Player){
			$player->addTitle("§aCastle§l§2Raid, "§7Welcome!", -1, 5*20, 30);
		}
	}
}


