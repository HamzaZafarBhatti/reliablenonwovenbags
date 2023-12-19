<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;
    protected $image_path = 'frontpage/images/';

    protected $fillable = [
        'logo',
        'banner_heading_1',
        'banner_heading_2',
        'banner_button_text',
        'about_us_image',
        'about_us_heading',
        'about_us_description_1',
        'about_us_description_2',
        'about_us_button_text',
        'products_heading',
        'products_description',
        'contactus_heading',
        'contactus_description',
        'contactus_button_text',
        'social_facebook',
        'social_twitter',
        'social_instagram',
        'social_whatsapp',
        'social_phone',
        'company_name',
        'phone',
        'address',
        'office_time',
    ];

    public function getImagePath()
    {
        return $this->image_path;
    }
}
