<?php namespace App\Models;

use CodeIgniter\Models;

/**
 * A vanilla model using all the goodness built-in to CI.
 * It will connect to the designated table in the default database.
 */
class groups extends Model {
    protected $table = 'groups'; // we need this
    protected $primaryKey = 'code'; // we only need this if not 'id'
}
