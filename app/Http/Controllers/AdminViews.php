<?php
#{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BookDelivery;
use App\Models\DeliveryBoy;
use App\Models\FormAttribute;
use App\Models\Master;
use App\Models\PreetiZinta;
use App\Models\PricingDetail;
use App\Models\RegisterUser;
use Illuminate\Http\Request;
use App\Models\UserMaster;

use Auth;
class AdminViews extends Controller
{
    public function adminlogin()
    {
        return view('auth.login');
    }
    public function master()
    {
        $masterdata = Master::orderBy('created_at', 'desc')->get();
        $data = Master::where('type', 'Master')->get();
        return view('AdminPanel.master', compact('masterdata','data'));
    }

    public function submaster()
    {
        $submasterdata = Master::where('type', '=', 'Master')->get();
        return view('AdminPanel.submaster', compact('submasterdata'));
    }

    public function registerdeliveryboy()
    {
        return view('AdminPanel.deliveryboyregister');
    }

    public function blogs()
    {
        $allblogs = Blog::orderByDesc('created_at')->get();
        $blocnt = Blog::count();
        return view('AdminPanel.blogs',compact('allblogs','blocnt'));
    }
    public function addnewblog()
    {
        $categories = Master::where('type', 'Blog')->get();
        return view('AdminPanel.addblog', compact('categories'));
    }

    public function userslist()
    {
        if (Auth::check()) {
            $vendors = RegisterUser::orderBy('created_at', 'DESC')->get();
            // dd($vendors);
            return view('AdminPanel.allvendors', compact('vendors'));
        } else {
            return redirect()->route('adminlogin');
        }
    }

    public function userprofile($id)
    {
        $user = RegisterUser::where('id', $id)->first();
        return view('AdminPanel.userprofile', compact('user'));
    }
    public function adminprofile()
    {
        return view('AdminPanel.adminprofile');
    }
    public function editBlog($id)
    {
        $data = Blog::where('id',$id)->first();
        $categories = Master::where('type', 'Blog')->get();
        return view('AdminPanel.editblog',compact('data','categories'));
    }

}
