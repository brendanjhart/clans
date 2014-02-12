<?php

namespace Model;

class Clan_Invites extends \DB\SQL\Mapper {
    
    // Instantiate mapper
    function __construct(\DB\SQL $db) {
        // This is where the mapper and DB structure synchronization occurs
        parent::__construct($db, 'clan_invites');
    }
    
    function get_invitations($player_id) {
        // find invites
        return $this->find(array(
            ' player_id = ? ',
            $player_id
        ));       
    }
	
	function addInvite($player_id, $clan_id) {
		$this->player_id = $player_id;
		$this->clan_id = $clan_id;
		$this->save();
	}
}