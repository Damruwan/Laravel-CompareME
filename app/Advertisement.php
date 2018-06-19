<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['item_id', 'user_id', 'price', 'description', 'location', 'image', 'tel_no', 'condition', 'status'];

    /**
     * Advertisement belongs to User.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
    	// belongsTo(RelatedModel, foreignKey = user_id, keyOnRelatedModel = id)
    	return $this->belongsTo(User::class);
    }

    /**
     * Advertisement belongs to Item.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        // belongsTo(RelatedModel, foreignKey = item_id, keyOnRelatedModel = id)
        return $this->belongsTo(Item::class);
    }
}
