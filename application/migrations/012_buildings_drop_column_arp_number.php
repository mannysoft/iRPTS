<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_buildings_drop_column_arp_number extends CI_Migration {
	
	function up() 
	{	
		$this->dbforge->drop_column('improvements_buildings', 'arp_number');
		$this->dbforge->drop_column('improvements_buildings', 'property_index_number');
		
		$this->dbforge->drop_column('land', 'arp_number');
		$this->dbforge->drop_column('land', 'property_index_number');
		
		$this->dbforge->drop_column('machineries', 'arp_number');
		$this->dbforge->drop_column('machineries', 'property_index_number');
		
		$this->dbforge->drop_column('plants_trees', 'arp_number');
		$this->dbforge->drop_column('plants_trees', 'property_index_number');
	}

	function down() 
	{
		
	}
}
