<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class message
 * @package App\Models
 *
 * @property string $name
 */
class Message extends Model
{
    protected $table = 'user_message';
    public $timestamps = false;
}
