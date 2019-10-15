class Migration_Add_tenants extends CI_Migrations {

	public function up() {
		$this->dbforge->add_field(
			array(
				'tenant_id' => array(
					'type' => 'INT',
					'constraint' => 5,
					'unsigned' => true,
					'auto_increment' => true
				),
				'common_name' => array(
					'type' => 'VARCHAR',
					'constratint' => 200
				),
				'legal_name' => array(
					'type' => 'VARCHAR',
					'constraint' => 200
				),
				'address_line_one' => array(
					'type' => "VARCHAR",
					'constraint' = > 100
				),
				'address_line_two' => array(
					'type' => "VARCHAR",
					'constraint' => 100
				),
				'city' => array(
					'type' => "VARCHAR",
					'constraint' => 100
				),
				'province' => array(
					'type' = "VARCHAR",
					'constraint' = 100
				),
				'postal_code' => array(
					'type' => 'VARCHAR',
					'constraint' => 10
				),
				'country' => array(
					'type' => 'VARCHAR',
					'constraint' => 100
				),
				'email' => array(
					'type' => "VARCHAR",
					'constraint' => 100
				),
				'phone_one' => array(
					'type' => "VARCHAR",
					'constraint' => 20
				),
				'phone_one_dsc' => array(
					'type' => 'VARCHAR',
					'constraint' => 30
				),
				'phone_two' => array(
					'type' => 'VARCHAR',
					'constraint' => 20
				),
				'phone_two_dsc' => array(
					'type' => 'VARCHAR',
					'constraint' => 30
				),
			)
		);
		$this->dbforge->add_key('tenant_id', TRUE);
		$this->dbforge->create_table("tenants");

	}


	public function down() {

		$this->dbforge->drop_table("tenants");

	}

}
