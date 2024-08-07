<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * @property int $id
 * @property int $customer_id
 * @property int $payment_model_id
 * @property int $shipper_id
 * @property string $shipping_receipt_number
 * @property string $transaction_status_id
 * @property string $uid
 * @property int $total_money
 * @property int $tax
 * @property string $note
 * @property string $edit_count
 */
class Transaction extends Model
{
    use \Awobaz\Compoships\Compoships;
    use HasFactory;
    use SoftDeletes;

    protected $fillable = ['uid', 'customer_id', 'edit_count', 'payment_model_id', 'shipper_id', 'shipping_receipt_number', 'total_money', 'note', 'tax', 'transaction_status_id','created_at','updated_at'];

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class, 'customer_id')->withTrashed();
    }

    public function paymentModel(): BelongsTo
    {
        return $this->belongsTo(PaymentModel::class, 'payment_model_id');
    }

    public function shipper(): BelongsTo
    {
        return $this->belongsTo(Shipper::class)->withTrashed();
    }

    public function transactionLists(): HasMany
    {
        return $this->hasMany(TransactionList::class, ['transaction_id','edit_count'],['id','edit_count']);
    }

    public function transactionStatus(): BelongsTo
    {
        return $this->belongsTo(TransactionStatus::class, 'transaction_status_id');
    }

    public function transactionStatuses(): HasMany
    {
        return $this->hasMany(TransactionStatus::class, 'transaction_id');
    }

    public function transactionPayments(): HasMany
    {
        return $this->hasMany(TransactionPayment::class, 'transaction_id');
    }
}
