<?php
namespace models;

require_once __DIR__ . '/../config/Connection.php';

use config\Connection;
use PDO;

class User
{
    public static function get()
    {
        // Get all users
    }

    public static function create($data)
    {
        // Insert user
    }

    public static function find($id)
    {
        // Find user by id
    }

    public static function update($data)
    {
        // Update user by id
    }

    public static function delete($id)
    {
        // Delete user by id
    }
}
