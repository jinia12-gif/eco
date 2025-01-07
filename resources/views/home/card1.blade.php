<div class="container py-5">
  <div class="row">
    <div class="spfilterproducts spfilterproducts1 col-xs-12 clearfix">
      <div class="spfilter-products no_margin_right clearfix " >
          <div class="title_tabs">
            <div class="title-module module-title">
              <span>TOP RANKING</span>
            </div>
          </div>

          @foreach($product as $products)

          <div class="products_banner hook_displayFilterproducts1">
            <div class="products spfp-products t_6_1 ">
              <div class="item2 col-lg-4 col-md-6 col-sm-6 col-xs-12">
                <article class="product-miniature js-product-miniature" data-id-product="43" data-id-product-attribute="0" itemscope="" itemtype="http://schema.org/Product">
                  <div class="thumbnail-container clearfix">
                    <span class="sp_position_label sp_position_label_1">{{$products->id}}</span>
                    <div class="product-image">
                      <a href="" class="thumbnail product-thumbnail">
                        <img class="img-s" src="products/{{$products->image}}"  width="452" height="452">
                      </a>
                      <ul class="sp-product-flags"></ul>
                      <ul class="sp-product-flags flags-right"></ul>
                      <div class="cart_quickview_box sp-cart-box">
                        <a class="cart_quickview_btn quick-view" href="{{url('product_details',$products->id)}}"> 
                          <span><i class="fa fa-eye"></i>Details</span>
                        </a>
                        <a href="{{url('add_cart',$products->id)}}">
                        <button  class="sp-add-to-cart cart_quickview_btn btn btn-primary add-to-cart btn_style3 cart-button" type="submit">
                          <span><i class="fa fa-cart-shopping"></i>Add to cart</span>
                        </button>
                        </a>
                      </div>
                    </div>
                    <div class="product-info clearfix">
                      <h1 class="h3 product-title">{{$products->title}}</h1>  
                      <div class="comments_note">	
                        <div class="star_content clearfix">
                          <i class="fa fa-star icon_star1_active" aria-hidden="true"></i>
                          <i class="fa fa-star icon_star1_active" aria-hidden="true"></i>
                          <i class="fa fa-star icon_star1_active" aria-hidden="true"></i>
                          <i class="fa fa-star icon_star1_active" aria-hidden="true"></i>
                          <i class="fa fa-star icon_star1_active" aria-hidden="true"></i>
                        </div>
                        <span class="span-review-main">2 Review(s)</span>
                      </div>
                      <div class="product-price-and-shipping">
                        <span class="sr-only">Price</span>
                        <span class="price">{{$products->price}}</span>
                      </div>
                    </div>
                    <button class="wishlist-button-add"><i class="fa-solid fa-heart"></i>
                    </button>
                  </div>
                </article>
              </div>
            </div>
          </div>

          @endforeach

        </div>
      </div>
    </div>
  </div>