<?php //

namespace App\Http\Controllers\AdminControllers;

use App\Http\Controllers\AdminControllers\AlertController;
use App\Http\Controllers\AdminControllers\SiteSettingController;
use App\Http\Controllers\Controller;
use App\Models\Core\Images;
use App\Models\Core\News;
use App\Models\Core\NewsCategory;
use App\Models\Core\Setting;
use Illuminate\Http\Request;
use Lang;

class BlogController extends Controller
{
    public function __construct(News $news, NewsCategory $news_category, Images $images, Setting $setting)
    {
        $this->News = $news;
        $this->NewsCategory = $news_category;
        $this->images = $images;
        $this->myVarsetting = new SiteSettingController($setting);
        $this->myalertsetting = new AlertController($setting);
        $this->Setting = $setting;

    }

    public function display(Request $request)
    {
        $title = array('pageTitle' => Lang::get("labels.News"));
        $news = $this->News->paginator();
        $result['commonContent'] = $this->Setting->commonContent();
        return view("admin.blog.index", $title)->with('news', $news)->with('result', $result);
    }

    public function add(Request $request)
    {



    }

    //addNewNews
    public function insert(Request $request)
    {

    }

    //editnew
    public function edit(Request $request)
    {
    }

    //updatenew
    public function update(Request $request)
    {
    }

    //deleteNews
    public function delete(Request $request)
    {
    }

    public function filter(Request $request)
    {
    }
}
