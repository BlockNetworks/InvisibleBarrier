<?php

function onMove(PlayerMoveEvent $event){
if($this->isInside($event->getPlayer()->getPosition(), $pos1, $pos2)){
$event->getPlayer()->teleport($event->getFrom());
// Send message if you want to inform players why they're knocked back
}
}

public function isInside(Position $pp, Position $p1, Position $p2){
return ($pp->getX() >= $p1->getX() && $pp->getX() <= $p2->getX() && $pp->getY() >= $p2->getY() && $pp->getY() <= $p1->getY() && $pp->getZ() >= $p1->getZ() && $pp->getZ() <= $p2->getZ() && $pp->getLevel()->getName() === $p1->getLevel()->getName(), $pp->getLevel()->getName() === $p2->getLevel()->getName());
}
