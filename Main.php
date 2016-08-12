<?php
namespace CaixaMisteriosa\Jowy;

use pocketmine\event\Listener;
use pocketmine\plugin\PluginBase;
use pocketmine\plugin\Plugin;

use pocketmine\Server;
use pocketmine\Player;

use pocketmine\event\player\PlayerDeathEvent;
use pocketmine\event\player\PlayerInteractEvent;

use pocketmine\utils\Config;

use pocketmine\item\Item;
use pocketmine\item\Emerald;

use pocketmine\block\Block;
use pocketmine\level\sound\TNTPrimeSound;
use pocketmine\level\sound\PopSound;
use pocketmine\level\sound\EndermanTeleportSound;
use pocketmine\utils\TextFormat as C;

use pocketmine\math\Vector3;
use pocketmine\level\Level;
use pocketmine\level\particle\LavaParticle;


class Main extends PluginBase implements Listener{

  public function onEnable(){
    @mkdir($this->getDataFolder());
    $config = new Config($this->getDataFolder() . "/config.yml", Config::YAML);
    $config->save();
    $this->getServer()->getPluginManager()->registerEvents($this, $this);
  }

  public function onDeath(PlayerDeathEvent $event){
    $entity = $event->getEntity();
    $cause = $entity->getLastDamageCause();
    if($entity instanceof Player){
       if($cause instanceof Player){
        $killer->getInventory()->addItem(Item::get(388,0,1));
    }
  }
}
  public function onInteract(PlayerInteractEvent $event){
    $block = $event->getBlock();
    $player = $event->getPlayer();
    $inventory = $player->getInventory();
      if($block->getId() === Block::END_PORTAL_FRAME){
        if($inventory->contains(new Emerald(0,1))) {
        $event->setCancelled();
        $player->sendMessage(C::GREEN . "- Abrindo");
        $player->sendMessage(C::RED . "");
										$level=$player->getLevel();
										$level->addSound(new PopSound($player));
										$level=$player->getLevel();
        sleep(3);
        $player->sendMessage(C::GREEN . "- Carregando");
        sleep(2);
        $player->sendMessage(C::RED . " .");
        sleep(2);
        $player->sendMessage(C::RED . " ..");
        sleep(1);
        $player->sendMessage(C::GREEN . "- 3");
        $player->sendMessage(C::RED . "");
										$level=$player->getLevel();
										$level->addSound(new EndermanTeleportSound($player));
										$level=$player->getLevel();
        sleep(1);
        $player->sendMessage(C::GREEN . "- 2");
        $player->sendMessage(C::RED . "");
										$level=$player->getLevel();
										$level->addSound(new EndermanTeleportSound($player));
										$level=$player->getLevel();
        sleep(1);
        $player->sendMessage(C::GREEN . "- 1");
        $player->sendMessage(C::RED . "");
										$level=$player->getLevel();
										$level->addSound(new EndermanTeleportSound($player));
										$level=$player->getLevel();
        sleep(2);
        $player->sendMessage(C::GREEN . "   Menos Uma  Esmeralda");
$player->getInventory()->removeItem(Item::get(ITEM::EMERALD));
        $level=$player->getLevel();

        $x = $block->getX();
        $y = $block->getY();
        $z = $block->getZ();
        $r = 2000;
        $g = 2000;
        $b = 2000;
        $center = new Vector3($x, $y, $z);
        $radius = 200000;
        $count = 100000;
        $particle = new LavaParticle($center, $r, $g, $b, 1);
          for($yaw = 1000, $y = $center->y; $y < $center->y + 10; $yaw += (M_PI * 2) / 50, $y += 1 / 50){
              $x = cos($yaw) + $center->x;
              $z = cos($yaw) + $center->z;
              $particle->setComponents($x, $y, $z);
              $level->addParticle($particle);
}
        $prize = rand(1,15);
        switch($prize){
        case 1:
          $inventory->addItem(Item::get(302,0,1));
        break;
        case 2:
          $inventory->addItem(Item::get(396,0,64));
        break;
        case 3:
          $inventory->addItem(Item::get(311,0,1));
        break;
        case 4:
          $inventory->addItem(Item::get(312,0,1));
        break;
        case 5:
          $inventory->addItem(Item::get(264,0,15));
        break;
        case 6:
          $inventory->addItem(Item::get(293,0,1));
        break;
        case 7:
          $inventory->addItem(Item::get(2,0,64));
        break;
        case 8:
          $inventory->addItem(Item::get(133,0,1));
        break;
        case 9:
          $inventory->addItem(Item::get(322,0,20));
        break;
        case 10:
          $inventory->addItem(Item::get(333,0,1));
        break;
        case 11:
          $inventory->addItem(Item::get(271,0,1));
        break;
        case 12:
          $inventory->addItem(Item::get(322:16,0,5));
        break;
        case 13:
          $inventory->addItem(Item::get(313,0,1));
        break;
        case 14:
          $inventory->addItem(Item::get(396,0,128));
        break;
        case 15:
          $inventory->addItem(Item::get(278,0,1));
        break;


    }
  }
}
}
}
