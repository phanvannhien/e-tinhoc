<?php
namespace App\Utils;

use Illuminate\Http\Request;

use Spatie\SchemaOrg\Schema;
use SEOMeta;
use OpenGraph;
use Twitter;
use SEO as WebSEO;

class SEO{

    public $configuration;

    public function __construct(  ){
        $this->configuration = app('Configuration');
    }

    public function toHTML(){
        return WebSEO::generate();
    }

    public function generalSEO( $data = array() )
    {
        $request = request();
        # code...
        SEOMeta::setTitle( isset($data['title']) ? $data['title'] : $this->configuration->get('seo_title').' | '.$this->configuration->get('company_name') );
        SEOMeta::setDescription( isset($data['meta_description']) ? $data['meta_description'] : $this->configuration->get('site_description') );
        SEOMeta::addKeyword( isset($data['meta_keywords']) ? $data['meta_keywords'] :  $this->configuration->get('site_keywords') );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setTitle( $this->configuration->get('site_title') );
        OpenGraph::setDescription( $this->configuration->get('site_description') );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url',  $this->configuration->get('logo') );
        OpenGraph::addProperty('image:alt', $this->configuration->get('site_title') );

        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', $this->configuration->get('company_name') );

        Twitter::setTitle( $this->configuration->get('site_title') );
        Twitter::setImage( $this->configuration->get('logo')  );

        return $this;
    }

    public function productCategorySEO( $category){
        // SEO
        $request = request();
        SEOMeta::setTitle($category->category_name);
        SEOMeta::setDescription( $category->meta_description );
        SEOMeta::addKeyword( $category->meta_keyword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription( $category->meta_description );
        OpenGraph::setTitle( 'Website '.$category->category_name );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('image:url', $category->image );
        OpenGraph::addProperty('image:alt', $category->category_name );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $category->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', $this->configuration->get('company_name') );

        Twitter::setTitle('Website '.$category->category_name);
        Twitter::setImage( $category->image  );

        return $this;
    }

    public function productDetailSEO($product){
        // SEO
        $request = request();
        SEOMeta::setTitle($product->title);
        SEOMeta::setDescription($product->meta_description);
        SEOMeta::addKeyword( $product->meta_keyword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription($product->meta_description);
        OpenGraph::setTitle($product->meta_title );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', $product->thumbnail );
        OpenGraph::addProperty('image:alt', $product->meta_description );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $product->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', $this->configuration->get('company_name') );

        // article
        OpenGraph::setTitle($product->meta_title)
            ->setDescription($product->meta_description  )
            ->setType('article')
            ->setArticle([
                'published_time' => $product->created_at,
                'modified_time' => $product->updated_at,
                'section' => 'Website',
                'tag' => $product->meta_title
            ]);

        Twitter::setTitle($product->meta_title);
        Twitter::setImage(  $product->thumbnail  );

        return $this;
    }


    public function pageSEO($page){
        $request = request();
        SEOMeta::setTitle( $page->meta_title );
        SEOMeta::setDescription($page->meta_description);
        SEOMeta::addKeyword( $page->meta_keword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setTitle($page->meta_title );
        OpenGraph::setDescription($page->meta_description);
        
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', $page->thumbnail );
        OpenGraph::addProperty('image:alt', $page->meta_description );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $page->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', $this->configuration->get('site_title') );

        // article
        OpenGraph::setTitle($page->meta_title)
            ->setDescription($page->meta_description  )
            ->setType('article')
            ->setArticle([
                'published_time' => $page->created_at,
                'modified_time' => $page->updated_at,
                'author' => [
                    'first_name' => 'Nhien',
                    'last_name' => 'Nhien',
                    'username' => 'jusephan',
                    'gender' => 'male',
                ],
                'section' => 'Website',
                'tag' => $page->meta_title
            ]);

        Twitter::setTitle($page->meta_title);
        Twitter::setImage(  $page->thumbnail  );
        return $this;
    }

    public function blogCategorySEO($category){
        $request = request();
        SEOMeta::setTitle($category->meta_title);
        SEOMeta::setDescription($category->meta_description);
        SEOMeta::addKeyword( $category->meta_keyword );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription($category->meta_description);
        OpenGraph::setTitle( 'Website '.$category->meta_title );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('type', 'website');
        OpenGraph::addProperty('image:url', $category->image );
        OpenGraph::addProperty('image:alt', $category->meta_title );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $category->meta_description );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', $this->configuration->get('company_name') );

        Twitter::setTitle('Website '.$category->meta_title);
        Twitter::setImage(  $category->image  );
        return $this;
    }

    public function blogSEO($blog){
        $request = request();
        SEOMeta::setTitle($blog->meta_title ?: $blog->blog_title  );
        SEOMeta::setDescription( $blog->meta_description ?: strip_tags( $blog->blog_excerpt ) );
        SEOMeta::addKeyword( $blog->meta_keyword ?: $blog->blog_title );
        SEOMeta::setCanonical( $request->getUri() );

        OpenGraph::setDescription($blog->meta_description ?: strip_tags( $blog->blog_excerpt ));
        OpenGraph::setTitle($blog->meta_title ?: $blog->blog_title  );
        OpenGraph::setUrl( $request->getUri());
        OpenGraph::addProperty('image:url', $blog->blog_thumbnail );
        OpenGraph::addProperty('image:alt', $blog->meta_description ?: strip_tags( $blog->blog_excerpt ) );
        OpenGraph::addProperty('url', $request->getUri() );
        OpenGraph::addProperty('description', $blog->meta_description ?: strip_tags( $blog->blog_excerpt ) );
        OpenGraph::addProperty('locale', app()->getLocale() );
        OpenGraph::addProperty('site_name', app('Configuration')->get('company_name') );

        // article
        OpenGraph::setTitle($blog->meta_title ?: $blog->blog_title )
            ->setDescription( $blog->meta_description ?: strip_tags( $blog->blog_excerpt )  )
            ->setType('article')
            ->setArticle([
                'published_time' => $blog->created_at,
                'modified_time' => $blog->updated_at,
                'author' => [
                    'first_name' => 'Nhien',
                    'last_name' => 'Nhien',
                    'username' => 'jusephan',
                    'gender' => 'male',
                ],
                'section' => 'Website',
                'tag' => $blog->meta_title ?: $blog->blog_title
            ]);

        Twitter::setTitle($blog->meta_title ?: $blog->blog_title );
        Twitter::setImage(  $blog->blog_thumbnail  );
        return $this;
    }

}