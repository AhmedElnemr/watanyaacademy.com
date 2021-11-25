<?php
use Illuminate\Support\Facades\Storage;
use Image;
// GetImg
if (!function_exists('GetImg')) {
    function GetImg($img_src)
    {
        if (file_exists($img_src) || $img_src == '') {
            $img = url('/') . '/empty.png';
        } else {
            $img = url('storage/') . '/' . $img_src;
        }
        return $img;
    }
}


//get current lang
if (!function_exists('get_lang')) {
    function get_lang()
    {
        return Request()->segment(1);
    }
}


// change language and get current url
if (!function_exists('change_language')) {
    function change_language($lang)
    {
        return LaravelLocalization::getLocalizedURL($lang);
    }
}


if (!function_exists('change_Date_into_arabic')) {
    function change_Date_into_arabic($current_date, $date_type = '')
    {
        // PHP Arabic Date
        // PHP Arabic Date
        error_reporting(E_ALL ^ E_NOTICE);
        $months = array(
            "Jan" => "يناير",
            "Feb" => "فبراير",
            "Mar" => "مارس",
            "Apr" => "أبريل",
            "May" => "مايو",
            "Jun" => "يونيو",
            "Jul" => "يوليو",
            "Aug" => "أغسطس",
            "Sep" => "سبتمبر",
            "Oct" => "أكتوبر",
            "Nov" => "نوفمبر",
            "Dec" => "ديسمبر"
        );
        $your_date = $current_date; // The Current Date
        $en_month = date("M", strtotime($your_date));
        foreach ($months as $en => $ar) {
            if ($en == $en_month) {
                $ar_month = $ar;
            }
        }
        $find = array(
            "Sat",
            "Sun",
            "Mon",
            "Tue",
            "Wed",
            "Thu",
            "Fri"
        );
        $replace = array(
            "السبت",
            "الأحد",
            "الإثنين",
            "الثلاثاء",
            "الأربعاء",
            "الخميس",
            "الجمعة"
        );
        $ar_day_format = date("D", strtotime($your_date)); // The Current Day
        $ar_day = str_replace($find, $replace, $ar_day_format);
        header('Content-Type: text/html; charset=utf-8');
        $standard = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
        $eastern_arabic_symbols = array("٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩");
        $current_date = $ar_day . ' - ' . date("d", strtotime($your_date)) . ' / ' . $ar_month . ' / ' . date("Y", strtotime($your_date));
        if ($date_type != '') {
            $current_date = date("d", strtotime($your_date)) . ' / ' . $ar_month . ' / ' . date("Y", strtotime($your_date));
        }
        if ($date_type == 'full') {
            $current_date = date("d", strtotime($your_date)) . ' / ' . $ar_month . ' / ' . date("Y", strtotime($your_date));
        }
        if ($date_type == 'time_ar') {
//           H:i:s
            $current_date = date("H", strtotime($your_date)) . ':' . date("i", strtotime($your_date))/*.":".date("s", strtotime($your_date))*/
            ;
        }
        if ($date_type == 'time_ar_pm_am') {
//           H:i:s
            $am_pm_date = ' ص ';
            if (date("A", strtotime($your_date)) == 'PM') {
                $am_pm_date = ' م ';
            }
            $current_date = date("H", strtotime($your_date)) . ':' . date("i", strtotime($your_date)) . $am_pm_date;
        }
        $arabic_date = str_replace($standard, $eastern_arabic_symbols, $current_date);
        // Echo Out the Date
        return $arabic_date;
    }
}


// prefix language before route
if (!function_exists('l_url')) {
    function l_url($url)
    {
        return LaravelLocalization::setLocale() . '/' . $url;;
    }
}


// ----------------------------- site text ------------------------------------
if (!function_exists('banner')) {
    function banner($key_word)
    {
        return \App\Models\Banner::where('key_word', $key_word)->first();
    }
}


if (!function_exists('site_text')) {
    function site_text($key_word)
    {
        return \App\Models\SiteText::where('key_word', $key_word)->first();
    }
}


// ----------------------------- site text ------------------------------------
if (!function_exists('right_redirect')) {
    function right_redirect($url)
    {
//            function startsWith ($string, $startString)
//            {
        $len = strlen('h');
//                return (substr($url, 0, $len) === 'h');
//            }
        if (substr($url, 0, $len) === 'h') {
            return $url;
        }
        return '#';
    }
}


// ----------------------------- site text ------------------------------------
if (!function_exists('setting')) {
    function setting()
    {
        return \App\Models\Setting::orderBy('id', 'desc')->first();
    }
}


if (!function_exists('site_text')) {
    function site_text()
    {
        return \App\Models\SiteText::orderBy('id', 'asc')->get();
    }
}


if (!function_exists('bands')) {
    function bands()
    {
        return \App\Models\SiteText::orderBy('id', 'asc')->first();
    }
}


// -------------------------------  ++++++++++++++++ -------------------------------
// -------------------------------  ++++++++++++++++ -------------------------------
// -------------------------------  Upload Image -------------------------------
if (!function_exists('upload_image')) {
    function upload_image($path_ = '', $img, $plus, $file_name = '', $delete_file = '')
    {
        // delete old file
        $delete_file != '' ? Storage::delete($delete_file) : '';
        $path = request()->file($file_name)->store($path_);
        return $path;
    }
}


if (!function_exists('create_thumbnail')) {
    function create_thumbnail($file_name,$folder)
    {
        $image =  request()->file($file_name);
        $input['imagename'] = time().'.'.$image->extension();

        $destinationPath = public_path($folder.'/thumbnail');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPath.'/'.$input['imagename']);
        $path = $destinationPath.'/'.$input['imagename'] ;
        return $path ;
    }
}


if (!function_exists('delete_image')) {
    function delete_image($img)
    {
        // delete old file
        $img != '' ? Storage::delete($img) : '';
    }
}


if (!function_exists('upload_multi_images')) {
    function upload_multi_images($image = '', $id = '', $path = '')
    {
        $data['size'] = $image->getSize();
        $data['mime_type'] = $image->getMimeType();
        $data['name'] = $image->getClientOriginalName();
        $data['hashname'] = $image->hashName();
        $image->store($path);
        return $data;
    }
}


// -------------------------------  Upload Image -------------------------------
if (!function_exists('up')) {
    function up()
    {
        return new \App\Http\Controllers\Upload;
    }
}


if (!function_exists('aurl')) {
    function aurl($url = null)
    {
        return url('admin/' . $url);
    }
}


if (!function_exists('durl')) {
    function durl($url = null)
    {
        return url('driver/' . $url);
    }
}


if (!function_exists('admin')) {
    function admin()
    {
        return auth()->guard('admin');
    }
}


if (!function_exists('driver')) {
    function driver()
    {
        return auth()->guard('driver');
    }
}


if (!function_exists('active_menu')) {
    function active_menu($link)
    {
        if (preg_match('/' . $link . '/i', Request::segment(2))) {
            return ['m-menu__item--open', 'display:block'];
        } else {
            return ['', ''];
        }
    }
}


if (!function_exists('datatable_lang')) {
    function datatable_lang()
    {
        return ['sProcessing' => trans('admin.sProcessing'),
            'sLengthMenu' => trans('admin.sLengthMenu'),
            'sZeroRecords' => trans('admin.sZeroRecords'),
            'sEmptyTable' => trans('admin.sEmptyTable'),
            'sInfo' => trans('admin.sInfo'),
            'sInfoEmpty' => trans('admin.sInfoEmpty'),
            'sInfoFiltered' => trans('admin.sInfoFiltered'),
            'sInfoPostFix' => trans('admin.sInfoPostFix'),
            'sSearch' => trans('admin.sSearch'),
            'sUrl' => trans('admin.sUrl'),
            'sInfoThousands' => trans('admin.sInfoThousands'),
            'sLoadingRecords' => trans('admin.sLoadingRecords'),
            'oPaginate' => [
                'sFirst' => trans('admin.sFirst'),
                'sLast' => trans('admin.sLast'),
                'sNext' => trans('admin.sNext'),
                'sPrevious' => trans('admin.sPrevious'),
            ],
            'oAria' => [
                'sSortAscending' => trans('admin.sSortAscending'),
                'sSortDescending' => trans('admin.sSortDescending'),
            ],
        ];
    }
}


/////// Validate Helper Functions ///////
if (!function_exists('v_image')) {
    function v_image($ext = null)
    {
        if ($ext === null) {
            return 'image|mimes:jpg,jpeg,png,gif,bmp';
        } else {
            return 'image|mimes:' . $ext;
        }
    }
}


/////// Validate Helper Functions ///////
if (!function_exists('get_file')) {
    function get_file($file)
    {
        if (!is_null($file))
            return asset('storage') . '/' . $file;
        else
            return asset('empty.png');
    }
}

//=================================================================
if (!function_exists('make_slug')) {
    function make_slug($string ,$separator = '-')
    {
        if (is_null($string)) {
            return "";
        }
        $string = trim($string);
        $string = mb_strtolower($string, "UTF-8");;
        $string = preg_replace("/[^a-z0-9_\sءاأإآؤئبتثجحخدذرزسشصضطظعغفقكلمنهويةى]#u/", "", $string);
        $string = preg_replace("/[\s-]+/", " ", $string);
        $string = preg_replace("/[\s_]/", $separator, $string);
        return $string;
    }
}

