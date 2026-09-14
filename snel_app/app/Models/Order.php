<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Carbon;

/**
 * @property int $id
 * @property Carbon $orderdate
 * @property int $user_id
 * @property int $status
 *
 * @property-read User $user
 * @property-read Collection<int, OrderRow> $orderrows
 */
class Order extends Model
{
    public $timestamps = false;

    protected $table = 'order';

    protected $fillable = [
        'orderdate',
        'user_id',
        'status',
    ];

    protected function casts(): array
    {
        return [
            'orderdate' => 'datetime',
        ];
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function orderrows(): HasMany
    {
        return $this->hasMany(OrderRow::class, 'order_id');
    }
}
