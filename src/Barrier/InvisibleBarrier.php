<?php

namespace Barrier;

use pocketmine\plugin\PluginManger;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;
use pocketmine\Server;
use pocketmine\event\player\PlayerMoveEvent;
use pocketmine\utils\TextFormat as c;

class InvisibleBarrier extends PlayerMoveEvent{
	
	public function onEnable() : void {
		$this->getLogger()->notice(c::BOLD.c::DARK_AQUA."(!)".c::RESET.c::DARK_PURPLE." InvisibleBarrier by IceCruelStuff has been enabled");
	}
	
	public function onMove(PlayerMoveEvent $event) {
		if($this->isInside($event->getPlayer()->getPosition(), $pos1, $pos2)){
			$event->getPlayer()->teleport($event->getFrom());
			// inform players why they're knocked back
		}
	}
	
	public function isInside(Position $position, Position $p1, Position $p2) {
		return ($position->getX() >= $p1->getX() && $position->getX() <= $p2->getX() && $position->getY() >= $p2->getY() && $position->getY() <= $p1->getY() && $position->getZ() >= $p1->getZ() && $position->getZ() <= $p2->getZ() && $position->getLevel()->getName() === $p1->getLevel()->getName() $position->getLevel()->getName() === $p2->getLevel()->getName());
	}
	
	public function onDisable() : void {
		$this->getLogger()->notice(c::BOLD.c::DARK_AQUA."(!)".c::RESET.c::DARK_PURPLE." InvisibleBarrier by IceCruelStuff has been enabled");
	}
}