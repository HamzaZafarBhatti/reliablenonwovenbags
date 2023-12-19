<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    //
    public function index()
    {
        $settings = Setting::first();

        return view('admin.settings.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $prev_settings = Setting::first();
        if (empty($prev_settings)) {
            $settings = new Setting();
        } else {
            $settings = $prev_settings;
        }

        $data = $request->except('_token');

        try {
            if ($request->has('logo')) {
                if ($settings->logo && file_exists($settings->getImagePath() . $settings->logo)) {
                    unlink($settings->getImagePath() . $settings->logo);
                }
                $file = $request->file('logo');
                $file_name =  time() . '_' . $file->getClientOriginalName();
                $file->move($settings->getImagePath(), $file_name);
                $data['logo'] = $file_name;
            }
            if ($request->has('about_us_image')) {
                if ($settings->about_us_image && file_exists($settings->getImagePath() . $settings->about_us_image)) {
                    unlink($settings->getImagePath() . $settings->about_us_image);
                }
                $file = $request->file('about_us_image');
                $file_name =  time() . '_' . $file->getClientOriginalName();
                $file->move($settings->getImagePath(), $file_name);
                $data['about_us_image'] = $file_name;
            }

            if (empty($prev_settings)) {
                Setting::create($data);
            } else {
                $settings->update($data);
            }

            return back();
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
}
