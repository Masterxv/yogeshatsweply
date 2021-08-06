<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SnapchatCampaignMediaModel extends Model{
    protected $table = 'snapchat_campaign_media';
    protected $fillable = ['campaign_id', 'media_src','media_type','preview_type', 'original_media_src'];          
}
