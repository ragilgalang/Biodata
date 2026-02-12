<?php

namespace App\Services;

use Kreait\Firebase\Factory;

class FirebaseService
{
    /**
     * Instance of the Firebase Realtime Database.
     *
     * @var \Kreait\Firebase\Database
     */
    protected $database;

    public function __construct()
    {
        $factory = (new Factory)
            ->withServiceAccount(config('firebase.credentials'))
            ->withDatabaseUri(config('firebase.database_url'));

        $this->database = $factory->createDatabase();
    }

    /**
     * Get the Firebase Realtime Database instance.
     *
     * @return \Kreait\Firebase\Database
     */
    public function database()
    {
        return $this->database;
    }
}

