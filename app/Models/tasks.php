<?php namespace App\Models;

use CodeIgniter\Models;

/**
 * A vanilla model using all the goodness built-in to CI.
 * It will connect to the designated table in the default database.
 */
class tasks extends Model {
    protected $table = 'tasks'; // we need this
    protected $primaryKey = 'code'; // we only need this if not 'id'
}
