<?php
namespace NightmareCybers\staff;

use pocketmine\utils\TextFormat;
use pocketmine\plugin\PluginBase;
use pocketmine\event\Listener;
use pocketmine\event\player\PlayerChatEvent;
use pocketmine\command\CommandSender;
use pocketmine\command\Command;
use pocketmine\Player;

class Main extends PluginBase implements Listener{
	public function onEnable(){
		$this->getServer()->getPluginManager()->registerEvents($this, $this);
		$this->saveDefaultConfig();
		$this->getLogger()->info(TEXTFORMAT::BLUE . "[STAFF]" .TEXTFORMAT::RED. " >>" .TEXTFORMAT::AQUA.  " Done! Staff is running on Version 6.9");
	}
	public function onCommand(CommandSender $sender, Command $command, $label, array $args) {
        $cmd = strtolower($command->getName());
        switch ($cmd){
            case "staff":
                if (!($sender instanceof Player)){
                    $sender->sendMessage(TEXTFORMAT::GOLD . "§1§lC§r§9yber §l§2R§r§aealms §l§4S§r§ctaff");
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff1"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff2"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff3"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff4"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff5"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff6"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff7"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff8"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff9"));
                    $sender->sendMessage(TEXTFORMAT::GREEN . "- " . $this->getConfig()->get("staff10"));
                    return true;
                }
                $player = $this->getServer()->getPlayer($sender->getName());
                if ($player->hasPermission("staff.rules")){
                    $sender->sendMessage("§1§lC§r§9yber §l§2R§r§aealms §l§4S§r§ctaff");
                    $sender->sendMessage("- " . $this->getConfig()->get("staff1"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff2"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff3"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff4"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff5"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff6"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff7"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff8"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff9"));
                    $sender->sendMessage("- " . $this->getConfig()->get("staff10"));
                    return true;
                }
                break;
            }
        }
    }
?>