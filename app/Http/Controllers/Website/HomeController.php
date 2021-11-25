<?php
namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Models\Academy_New;
use App\Models\Activity;
use App\Models\Banner;
use App\Models\Course;
use App\Models\OpenCourse;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\TwitterCard;
use Artesaos\SEOTools\Facades\JsonLd;

use App\Models\SiteText;

class HomeController extends Controller {

    public function index() {

        SEOMeta::setTitle('الأكاديمية الوطنية');
        SEOMeta::setDescription('الأكاديمية الوطنية للعلوم الشاملة');
        SEOMeta::setCanonical(url('contact_us'));

        OpenGraph::setTitle('الرئيسية | الأكاديمية الوطنية للعلوم الشاملة');
        OpenGraph::setDescription('الأكاديمية الوطنية للعلوم الشاملة');
        OpenGraph::setUrl(url('/'));
      //  OpenGraph::addProperty('type', 'articles');

        TwitterCard::setTitle('الرئيسية | الأكاديمية الوطنية للعلوم الشاملة');
     //   TwitterCard::setSite('@LuizVinicius73');
        JsonLd::setTitle('الرئيسية | الأكاديمية الوطنية للعلوم الشاملة');
        JsonLd::setDescription('الأكاديمية الوطنية للعلوم الشاملة');
        JsonLd::addImage(GetImg(setting()->image_slider));



        $banner       = Banner::where('id', '!=', 0)->orderBy('id','desc');
        $site_texts   = SiteText::where('id', '!=', 0)->orderBy('id','desc')->get();
        $open_courses = OpenCourse::where('id', '!=', 0)->orderBy('id','desc')->get()->take(6);
        $our_teams    = Team::where('id', '!=', 0)->orderBy('id','asc')->get()->take(4);

        /* counters */
        $courses      = Course::count();
        $openCourses  = OpenCourse::count();
        $activities   = Activity::count();
        $teams        = Team::count();

        $news         = Academy_New::where('id', '!=', 0)->orderBy('id','desc')->get();

        return view('website.index' , compact( 'banner','site_texts','open_courses','our_teams' , 'courses' , 'openCourses' , 'activities' , 'teams' , 'news'));
    }





} //end of class


