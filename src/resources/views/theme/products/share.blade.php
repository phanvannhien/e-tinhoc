<div id="product-share">
    <a href="https://www.facebook.com/sharer.php?u={{ request()->getUri() }}"
       onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm" id="share-facebook">
        <i class="fab fa-facebook-square"></i>
    </a>

    <a href="https://twitter.com/share?url={{ request()->getUri() }}"
       id="share-messenger"
       onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm" >
        <i class="fab fa-twitter"></i>
    </a>

    <a href="mailto:enteryourfriend?subject={{ $product->title }}" id="" class="btn btn-outline-secondary btn-sm" >
        <i class="fa fa-envelope la-2x"></i>
    </a>

    <a onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm"
       href="https://www.pinterest.com/pin/create/button/?url={{ request()->getUri()}}"
       title="{{ $product->title }}"
       target="_blank" href="" id="">
        <i class="fab fa-pinterest"></i>
    </a>

    <a onclick="window.open(this.href,this.title,'width=500,height=500,top=300px,left=300px');  return false;"
       class="btn btn-outline-secondary btn-sm"
       href="http://linkedin.com/shareArticle?mini=true&url={{ request()->getUri()}}"
       title="{{ $product->title }}"
       target="_blank" href="" id="">
        <i class="fab fa-linkedin-in"></i>
    </a>
</div>