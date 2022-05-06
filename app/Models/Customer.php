<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    
    protected $table = 'eco_customers';
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
        "sub_type",
        "delivery_group",
        "name",
        "mobile",
        "password",
        "subscription_payment_type",
        "security_deposit",
        "total_business",
        "pending_amount",
        "refund_amount",
        "account_status",
        "admin_comment",
        "delivery_address",
        "created_on",
        "updated_on"
        ];
    
}