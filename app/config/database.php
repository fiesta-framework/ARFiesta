<?php 
				return array(
					/*
					|----------------------------------------------
					| Default Database Connection
					|----------------------------------------------
					*/
					'default' => 'mysql', 
					/*
					|----------------------------------------------
					| Database Connections
					|----------------------------------------------
					*/
					'connections' => array(
						'sqlite' => array(
							'driver'   => 'sqlite',
							'database' => __DIR__.'/../database/production.sqlite',
						),
						'mysql' => array(
							'driver'    => 'mysql',
							'host'      => 'localhost',
							'database'  => 'arcms',
							'username'  => 'root',
							'password'  => '',
							'charset'   => 'utf8',
							'collation' => 'utf8_unicode_ci',
						),
						'pgsql' => array(
							'driver'   => 'pgsql',
							'host'     => 'localhost',
							'database' => 'forge',
							'username' => 'forge',
							'password' => '',
							'charset'  => 'utf8',
							'schema'   => 'public',
						),
						'sqlsrv' => array(
							'driver'   => 'sqlsrv',
							'host'     => 'localhost',
							'database' => 'database',
							'username' => 'root',
							'password' => '',
						),
					),
					/*
					|----------------------------------------------
					| Schemas Table
					|----------------------------------------------
					*/
					'migration' => 'arframework_migrations',
					/*
					|----------------------------------------------
					| Table prefixe 
					|----------------------------------------------
					| for your security change the prefix value to
					| another value
					|
					*/
					'prefixing' => true,
					'prefixe' => 'ar_',
				);