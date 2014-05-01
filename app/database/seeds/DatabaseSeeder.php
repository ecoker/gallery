<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		// $this->call('UserTableSeeder');
		$this->call('PagesTableSeeder');
		$this->call('GalleriesTableSeeder');
		$this->call('ArtworksTableSeeder');
	}

}