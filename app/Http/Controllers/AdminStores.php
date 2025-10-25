<?php
#{{-----------------------------------------------------🙏अंतः अस्ति प्रारंभः🙏-----------------------------}}
namespace App\Http\Controllers;
use App\Mail\ActivationComplete;
use App\Mail\StatusActivation;
use App\Models\Blog;
use App\Models\BookDelivery;
use App\Models\DeliveryBoy;
use App\Models\GroupType;
use App\Models\PricingDetail;
use App\Models\RegisterUser;
use App\Models\FormAttribute;
use Exception;
use App\Models\SubMaster;
use App\Models\Master;
use Illuminate\Http\Request;
use Mail;
use Auth, Hash;
class AdminStores extends Controller
{
    public function storemaster(Request $rq)
    {

        try {
            $attributes = Master::create([
                'type' => $rq->type == 'Master' ? 'Master' : $rq->type,
                'label' => $rq->label,
            ]);
            return back()->with('success', "Category Added..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }
    public function storesubmaster(Request $req)
    {
        try {
            $submasterdata = $req->validate([
                'label' => 'required',
                'value' => 'required',
                'type' => 'required',
            ]);
            if ($req->hasFile('iconimage')) {
                $req->validate([
                    'iconimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $req->file('iconimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('adminAssets/images/Services'), $filename);
                $submasterdata['iconimage'] = $filename;
            }
            // dd($submasterdata);
            Master::create($submasterdata);
            return back()->with('success', 'Sub-Master Added..!!!!');

        } catch (Exception $e) {
            return redirect()->route('submaster')->with('error', $e->getMessage());
            //return redirect()->route('submaster')->with('error', 'Not Added Try Again...!!!!');
        }
    }
    public function getsubmasterajax($selectedCat)
    {
        $data = Master::where('type', '=', $selectedCat)->get();
        return response()->json($data);

    }
    public function updatesubmaster(Request $request)
    {

        try {
            $carlist = Master::find($request->submasterid);

            // Initialize $filename with the current image or set to null
            $filename = $carlist->iconimage;
            if ($request->hasFile('iconimage')) {
                // dd($request->all());
                $request->validate([
                    'iconimage' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
                $file = $request->file('iconimage');
                $filename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('adminAssets/images/Services'), $filename);
            }
            $carlist->update([
                'label' => $request->label,
                'type' => $request->type,
                'value' => $request->value,
                'iconimage' => $filename,
            ]);
            return back()->with('success', "Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Updated..Try Again.....');
        }
    }
    public function deletemaster($id)
    {
        // dd($id);
        $data = Master::find($id);
        if (!$data) {
            return redirect()->back()->with('error', "Data not found.");
        }
        $data->delete();
        return redirect()->back()->with('success', "Deleted.!!!");
    }
    public function updatemaster(Request $rq)
    {
        try {
            $data = Master::find($rq->masterid);
            $data->type = $rq->type;
            $data->label = $rq->label;
            $data->save();
            return back()->with('success', "Category Updated..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }
    public function filterservice($selectedtype)
    {
        $master = Master::where('type', $selectedtype)->get();
        return response()->json(['master' => $master]);
    }
    public function updateactivationstatus(Request $request)
    {
        $login = RegisterUser::find($request->id);
        if ($login) {
            $login->activationstatus = $request->status;
            $login->save();
            // if ($request->status == 'activate') {
            //     Mail::to($login->email)->send(new ActivationComplete($login->username));
            // }
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
    public function filterusersbydate(Request $request)
    {
        $datefrom = $request->input('datefrom');
        $dateto = $request->input('dateto');
        $data = RegisterUser::whereDate('created_at', '>=', $datefrom)->whereDate('created_at', '<=', $dateto)->orderby('created_at', 'desc')->get();
        //dd($data);
        return response()->json($data);
    }
    public function filteruserbymobile(Request $request)
    {
        $mobilenumber = $request->input('mobilenumber');
        $data = RegisterUser::where('mobilenumber', 'like', '%' . $mobilenumber . '%')->orderby('created_at', 'desc')->get();
        //dd($data);
        return response()->json($data);
    }
    public function updateCompulsory(Request $request)
    {
        $data = Master::find($request->input('id'));
        if ($data) {
            $data->iscompulsory = $request->input('compulsory');
            $data->save();
            return response()->json(['success' => true]);
        }
        return response()->json(['success' => false], 404);
    }
    public function updateuserroles(Request $request)
    {
        $request->validate([
            'myroles' => 'nullable|array'
        ]);
        $user = RegisterUser::find($request->user_id);
        $user->myroles = json_encode($request->roles ?? []);
        $user->save();
        return response()->json(['message' => 'Roles updated']);
    }
    public function newAdduserAdmin(Request $rq)
    {
        // dd($submasterdata);
        try {
            $rq->validate([
                'mobilenumber' => 'required|unique:register_users,mobilenumber',
                'email' => 'required|email|unique:register_users,email',
            ]);
            $data = RegisterUser::create([
                'username' => $rq->username,
                'email' => $rq->email,
                'mobilenumber' => $rq->mobilenumber,
                'activationRequest' => 'Pending',
                'profile' => 'defaultuser.png',
            ]);

            return back()->with('success', 'Registered..!!!!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return redirect()->route('registerdeliveryboy')->with('error', 'Not Added Try Again...!!!!');
        }
    }
    public function deleteUser($id)
    {
        $data = RegisterUser::find($id);
        $data->delete();
        return back()->with('success', "Deleted....!!!");
    }
    public function changepassword(Request $request)
    {
        //dd($request->all());
        try {
            $request->validate([
                'newpassword' => 'required|min:6|confirmed',
            ]);

            $userdata = Auth::user();
            //dd($userdata);
            // Update user's password
            $userdata->password = Hash::make($request->newpassword);
            $userdata->save();

            return redirect()->route('admin.adminprofile')->with('success', 'Password changed successfully!');
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
            //return back()->with('error', 'Not Added Try Again...!!!!');
        }
    }
    public function storeblog(Request $request)
    {
        try {
            $validated = $request->validate([
                'blogname' => 'required|string|max:255',
                'categories' => 'required|string',
                'tags' => 'nullable|string',
                'metadescription' => 'nullable|string',
                'metakeywords' => 'nullable|string',
                'blogdescription' => 'required|string',
                'blogthumbnail' => 'nullable|mimes:jpeg,png,jpg |max:2048'
            ]);

            //  Decode JSON strings into arrays
            $categories = json_decode($validated['categories'], true);
            $tags = json_decode($validated['tags'] ?? '[]', true);
            $metaKeywords = json_decode($validated['metakeywords'] ?? '[]', true);


            $thumbnailFilename = null;
            if ($request->hasFile('blogthumbnail')) {
                $file = $request->file('blogthumbnail');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('adminAssets/images/Blogs'), $thumbnailFilename);
            }
            $blog = Blog::create([
                'blogname' => $validated['blogname'],
                'metadescription' => $request->input('metadescription'),
                'blogcategories' => $categories,
                'tags' => $tags,
                'metakeywords' => $metaKeywords,
                'blogdescription' => $validated['blogdescription'],
                'blogthumbnail' => $thumbnailFilename
            ]);


            return response()->json([
                'success' => true,
                'message' => 'Blog created successfully',
                'data' => $blog
            ]);

        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }
    public function updateblog(Request $request)
    {
        try {
            $validated = $request->validate([
                'blogname' => 'required|string|max:255',
                'categories' => 'required|string',
                'tags' => 'nullable|string',
                'metadescription' => 'nullable|string',
                'metakeywords' => 'nullable|string',
                'blogdescription' => 'required|string',
                'blogthumbnail' => 'nullable|mimes:jpeg,png,jpg|max:2048'
            ]);

            // Decode JSON strings into arrays
            $categories = json_decode($validated['categories'], true);
            $tags = json_decode($validated['tags'] ?? '[]', true);
            $metaKeywords = json_decode($validated['metakeywords'] ?? '[]', true);

            // Find blog
            $blog = Blog::findOrFail( $request->input('blogid'));

            // Handle thumbnail
            if ($request->hasFile('blogthumbnail')) {
                // Delete old file if exists
                if ($blog->blogthumbnail && file_exists(public_path('adminAssets/images/Blogs/' . $blog->blogthumbnail))) {
                    unlink(public_path('adminAssets/images/Blogs/' . $blog->blogthumbnail));
                }

                $file = $request->file('blogthumbnail');
                $thumbnailFilename = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('adminAssets/images/Blogs'), $thumbnailFilename);
                $blog->blogthumbnail = $thumbnailFilename;
            }

            // Update blog data
            $blog->update([
                'blogname' => $validated['blogname'],
                'metadescription' => $request->input('metadescription'),
                'blogcategories' => $categories,
                'tags' => $tags,
                'metakeywords' => $metaKeywords,
                'blogdescription' => $validated['blogdescription'],
                'blogthumbnail' => $blog->blogthumbnail ?? null
            ]);

            return response()->json([
                'success' => true,
                'message' => 'Blog updated successfully',
                'data' => $blog
            ]);

        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage()
            ], 500);
        }
    }
     public function deleteblog($id)
    {
        try {
            $data = Blog::find($id);
            $data->delete();
            return back()->with('success', " Deleted..!!!");
        } catch (Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }

}
