<!DOCTYPE html>
<html lang="en">
  <head>
    @include('home.css')
  </head>
<body>
  
  
<div class="modal-dialog" role="document">
   <div class="modal-content">
     <div class="modal-header">
       <a href="/">
       <button type="button" class="close" data-dismiss="modal" aria-label="Close">
         <span aria-hidden="true">×</span>
       </button>
       </a>
     </div>
     <div class="modal-body">
      <div class="row">
        <div class="col-md-6 col-sm-6 hidden-xs-down">
            <div class="images-container">
                <div class="product-cover">
                    <ul class="product-flags"></ul>
                    <img class="js-qv-product-cover" src="/products/{{$data->image}}" width="452" height="300" alt="Mauris aliquet dictum velit" data-full-size-image-url="http://ps.magentech.com/themes/sp_natural/1128-large_default/mauris-aliquet-dictum-velit.jpg" alt="" title="" style="width:100%;" itemprop="image">
                    
                </div>  
            </div>
            </div>
            <div class="col-md-6 col-sm-6">
               <h1 class="h1 product-name">{{$data->title}}</h1>
               <div class="product-prices">
                <div class="product-price h5 ">
                    <div class="current-price">
                        <span>{{$data->price}}</span>
                    </div>
                </div>
                <div class="tax-shipping-delivery-label"></div>
            </div>
            <div id="product-description-short" itemprop="description"><p><span style="font-family:'Open Sans', Arial, sans-serif;font-size:18px;text-align:justify;">{{$data->description}}</span></p></div>
          
		        <span id="product-availability">
					     <label>Quantity: </label>
					  			{{$data->quantity}}
				    </span>

            <div>
            <span >
					     <label>Category: </label>
					  			{{$data->category}}
				    </span>
            </div>
							
          
            <div class="product-actions">
              <form action="" method="" id="">
                <input type="hidden" name="token" value="b4d8ffe051bcc8ff7cc3e5e50be555fa">
                <input type="hidden" name="id_product" value="52" id="product_page_product_id">
                <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                
                <div class="product-variants">
                </div>
                <div class="product-add-to-cart">
                    <span class="control-label">QTY</span>
                    <div class="product-quantity clearfix">
                        <div class="qty">
                           <div class="input-group bootstrap-touchspin"><span class="input-group-addon bootstrap-touchspin-prefix" style="display: none;"></span><input type="text" name="qty" id="quantity_wanted" value="1" class="input-group form-control" min="1" aria-label="Quantity" style="display: block;"><span class="input-group-addon bootstrap-touchspin-postfix" style="display: none;"></span><span class="input-group-btn-vertical"><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-up" type="button"><i class="material-icons touchspin-up"></i></button><button class="btn btn-touchspin js-touchspin bootstrap-touchspin-down" type="button"><i class="material-icons touchspin-down"></i></button></span></div>
                        </div>

                        <div class="add py-3">
                            <a class="btn btn-primary add-to-cart"  href="{{url('add_cart',$data->id)}}">Add to cart</a>
                        </div>
                    </div>
                </div>
            </form>
          </div>
        
        </div>
      </div>
     </div>
    </div>
   </div>
 </div>

</div>
                

                
           



<!-- link js --> 
@include('home.js') 
</body>
</html>