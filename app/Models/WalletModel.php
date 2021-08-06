<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class WalletModel extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
            protected $table = 'wallet_transactions';


    protected $fillable = [
        'user_id',
        'amount',
        'transaction_type',
        'transaction_id',
        'campaign_id',
        'wallet_id',
        'payment_request',
        'payment_response',
        'business_id',
        'payment_method',
	'remark',
        'payment_image',
	'payment_status',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    public function get_business_detail()
    {
        return $this->hasOne('App\Models\Business', 'id', 'business_id');
    }
    public function get_user()
    {
        return $this->hasOne('App\Models\User', 'id', 'user_id');
    }
    public function get_campaign()
    {
        return $this->hasOne('App\Models\CampaignModel', 'id', 'campaign_id');
    }
}
