<?php

use Illuminate\Database\Eloquent\Model as Eloquent;

    class User extends Eloquent{



        public $name;

        //public $timestamps = [];

        protected $fillable = ['username','email'];

        

        
    }



    //db table structure

    /*

    Database: `website`

    CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


    */



?>