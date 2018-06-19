<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
	 use SoftDeletes;

    /**
     * Fields that can be mass assigned.
     *
     * @var array
     */
    protected $fillable = ['brand',
    						'model',
    						'technology',
							'announced',
							'status',
							'dimensions',
							'weight',
							'sim',
							'type',
							'size',
							'resolution',
							'multitouch',
							'os',
							'chipset',
							'cpu',
							'gpu',
							'card_slot',
							'internal',
							'primary',
							'features',
							'video',
							'secondary',
							'alert_types',
							'loudspeaker',
							'audio_jack',
							'wlan',
							'bluetooth',
							'gps',
							'nfc',
							'radio',
							'usb',
							'sensors',
							'messaging',
							'browser',
							'colors',
							'price',
							'battery',
							'optical_drive',
							'web_cam',
							'pointing_device',
							'audio',
						];
	/**
	 * Item belongs to Category.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function category()
	{
		// belongsTo(RelatedModel, foreignKey = category_id, keyOnRelatedModel = id)
		return $this->belongsTo(Category::class);
	}

	/**
	 * Item has many Comments.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function comments()
	{
		// hasMany(RelatedModel, foreignKeyOnRelatedModel = item_id, localKey = id)
		return $this->hasMany(Comment::class);
	}

	/**
	 * Item has many Advertisements.
	 *
	 * @return \Illuminate\Database\Eloquent\Relations\HasMany
	 */
	public function advertisements()
	{
		// hasMany(RelatedModel, foreignKeyOnRelatedModel = item_id, localKey = id)
		return $this->hasMany(Advertisement::class);
	}
}
