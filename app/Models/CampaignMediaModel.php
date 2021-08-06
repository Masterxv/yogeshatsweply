<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CampaignMediaModel extends Model{
    protected $table = 'campaign_media';
    protected $fillable = ['campaign_id', 'media_src','media_type','preview_type', 'original_media_src'];         
    // public function get_channel(){
    //     return $this->hasOne('App\Models\BrandModel', 'id', 'channel_id');
    // }   
}
