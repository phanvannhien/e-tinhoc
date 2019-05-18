<?php

namespace App\Http\Controllers;

use App\BlogCategory;
use App\Category;
use App\Http\Filters\ProductFilter;
use App\Models\Blog;
use App\Models\Cities;
use App\Models\Client;
use App\Models\Contact;
use App\Models\District;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Store;
use App\Product;
use Illuminate\Http\Request;


use Auth;
use DB;
use Illuminate\Support\Facades\Cache;

use App\User;
use Jenssegers\Agent\Agent;


use Spatie\SchemaOrg\Schema;
use SEOMeta;
use OpenGraph;
use Twitter;
use Validator;
use Cart;
use Session;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    protected $agent;

    public function __construct()
    {
       $this->agent = new Agent();
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Agent $agent)
    {
        $expiresAt = now()->addMinutes(10);
        $blogcat = BlogCategory::findOrFail(1);
        $posts = Blog::whereHas('categories',function ($query) use ($blogcat){
            $query->where('blogcategory_id',  $blogcat->id );
        })->orderBy( 'created_at','DESC')->paginate();
        return view('theme.home', compact('posts','blogcat'));
    }

    public function category(ProductFilter $filter, Request $request, $slug, $id ){

        $request['category'] = array($id);
        $expiresAt = now()->addMinutes(10);
        if( Cache::has('category_'. $id ) ){
            $category = Cache::get('category_'. $id);
        }else{
            $category = Category::findOrFail( $id );
            Cache::put('category_'. $id, $category, $expiresAt);
        }


        if( Cache::has('categories') ){
            $categories = Cache::get('categories');
        }else{
            $categories = Category::whereNull('parent_id')->where('status',1)->orderBy('_lft')->get();
            Cache::put('categories', $categories, $expiresAt);
        }

        if( $request->has('orderby') ){
            $products = Product::filter($filter)
                ->orderBy( $request->input('orderby') , $request->input('dir') )
                ->paginate();
        }else{
            $products = Product::filter($filter)->paginate();
        }

        return view('theme.products.category', compact('categories','category', 'products'));

    }

    public function detail(Request $request, $slug, $id){


        $expiresAt = now()->addMinutes(10);

        if( Cache::has('product_detail_'.$id ) ){
            $product = Cache::get('product_detail_'.$id );
        }else{
            $product = Product::findOrFail($id);
            Cache::put('product_detail_'. $id, $product, $expiresAt);
        }
        $product->increment('viewed');

        if( Cache::has('product_detail_'.$id.'_related' ) ){
            $related = Cache::get('product_detail_'.$id.'_related' );
        }else{
            $currentCategory = $product->categories()->pluck('category_id')->toArray();
           
            if( count($currentCategory) <= 0 ){
        
                $related = Product::where('id', '!=', $product->id  )
                    ->orderBy('title','ASC')
                    ->limit(12)->get();

            }else{
                $related = Product::whereHas('categories',function ($query) use ($currentCategory){
                    $query->whereIn('category_id', $currentCategory );
                })->where('id', '!=', $product->id  )
                    ->orderBy('title','ASC')
                    ->limit(12)->get();
            }

            Cache::put('product_detail_'.$id.'_related' , $related, $expiresAt);
        }

        return view('theme.products.detail', compact('product','related'));
    }

    public function pageDetail(Request $request, $slug, $id){
        $expiresAt = now()->addMinutes(10);
        if( Cache::has('page_'.$id ) ){
            $page = Cache::get('page_'.$id );
        }else{
            $page = Page::findOrFail($id);
            Cache::put('page_'. $id, $page, $expiresAt);
        }
        return view('theme.pages.page', compact('page'));
    }

    public function blogCategory( Request $request, $slug, $id ){
        $expiresAt = now()->addMinutes(10);

        if( Cache::has('blog_categories') ){
            $categories = Cache::get('blog_categories');
        }else{
            $categories = BlogCategory::whereNull('parent_id')->where('status',1)->get();
            Cache::put('blog_categories', $categories, $expiresAt);
        }

        if( Cache::has('blog_category_'. $id ) ){
            $category = Cache::get('blog_category_'. $id);
        }else{
            $category = BlogCategory::findOrFail( $id );
            Cache::put('blog_category_'. $id, $category, $expiresAt);
        }

        if( $request->has('orderby') ){
            $posts = Blog::whereHas('categories',function ($query) use ($category){
                $query->where('blogcategory_id',  $category->id );
            })->orderBy( $request->input('orderby') , $request->input('dir') )->paginate();
        }else{
            $posts = Blog::whereHas('categories',function ($query) use ($category){
                $query->where('blogcategory_id',  $category->id );
            })->orderBy('created_at','DESC')->paginate();
        }
        
        return view('theme.blogs.category', compact('categories', 'category', 'posts'));
    }

    public function blogDetail(Request $request, $slug, $id){
        $expiresAt = now()->addMinutes(10);

        if( Cache::has('blog_categories') ){
            $categories = Cache::get('blog_categories');
        }else{
            $categories = BlogCategory::whereNull('parent_id')->where('status',1)->get();
            Cache::put('blog_categories', $categories, $expiresAt);
        }

        if( Cache::has('blog_detail_'.$id ) ){
            $blog = Cache::get( 'blog_detail_'.$id  );
        }else{
            $blog = Blog::findOrFail( $id );
            Cache::put('blog_detail_'.$id , $blog, $expiresAt );
        }

        if( Cache::has('blog_detail_'.$id.'_related' ) ){
            $related = Cache::get('blog_detail_'.$id.'_related' );
        }else{
            $related = Blog::whereHas('categories',function ($query) use ($blog){
                $query->where('blogcategory_id', $blog->categories()->pluck('blogcategory_id')->toArray() );
            })->where('id', '!=', $blog->id  )
                ->orderBy('created_at','DESC')->paginate();
            Cache::put('blog_detail_'.$id.'_related' , $related, $expiresAt);
        }

        return view('theme.blogs.detail', compact('blog','categories','related'));
    }



    public function contact(  Request $request ){
        if( Cache::has('stores') ){
            $stores = Cache::get('stores');
        }else{
            $stores = Store::all();
            Cache::forever('stores', $stores);
        }
        return view('theme.pages.contact', compact('stores'));
    }

    public function contactSave(Request $request){
        $rules = [
            'full_name' => 'required|string',
            'email' => 'required|string|email',
            'phone' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
            'topic' => 'required|string',
        ];

        $validator = Validator::make($request->all(), $rules );
        if ($validator->fails()) {
            return back()->withErrors ( $validator )->withInput();
        }

        $contact = new Contact();
        $contact->full_name = $request->input('full_name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->topic = $request->input('topic');
        $contact->save();
        return back()->with('status','Cám ơn bạn đã liên hệ');
    }


}
