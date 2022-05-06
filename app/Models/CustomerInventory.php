<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerInventory extends Model
{
    use HasFactory;
    
    protected $table = 'eco_customer_product_inventory';
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
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        "customer_id",
        "product_id",
        "type",
        "quantity",
        "transaction_type",
        "created_on",
        "updated_on"
        ];
    
}