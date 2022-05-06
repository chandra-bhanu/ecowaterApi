<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NewConnection extends Model
{
    use HasFactory;
    
    protected $table = 'eco_newconnection';
    
    /**
     * The primary key associated with the table.
     *
     * @var string
     */
    protected $primaryKey = 'id';
    
    /**
     * Indicates if the model's ID is auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = true;
    
    /**
     * Disabling Auto Timestamps
     *
     * @var bool
     */
    public $timestamps = false;
    
    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'opted_product_id' => NULL,
        'updated_on' => NULL,
        'deleted_on' => NULL,
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = ['requested_product_id', 'name', 'mobile', 'created_on'];
    
//    protected $optional = ['opted_product_id', 'updated_on', 'deleted_on'];
}
