<?php
/* @var $this \yii\web\View */

use sheillendra\nova\assets\NovaAsset;

$novaAsset = NovaAsset::register($this);
$this->params['bodyId'] = 'product';
?>
<nav data-depth="3" class="breadcrumb">
    <div class="breadcrumb-title-page">Lorem ipsum dolor sit amet</div>
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="index-2.html">
                <span itemprop="name">Home</span>
            </a>
            <meta itemprop="position" content="1">
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="indexe734.html?id_category=12&amp;controller=category&amp;id_lang=1">
                <span itemprop="name">Men</span>
            </a>
            <meta itemprop="position" content="2">
        </li>
        <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
            <a itemprop="item" href="index3527.html?id_product=15&amp;id_product_attribute=0&amp;rewrite=lorem-ipsum-dolor-sit-amet&amp;controller=product&amp;id_lang=1">
                <span itemprop="name">Lorem ipsum dolor sit amet</span>
            </a>
            <meta itemprop="position" content="3">
        </li>
    </ol>
</nav>          
<div class="container">
    <div class="row">
        <div id="content-wrapper" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            <section id="main" itemscope itemtype="https://schema.org/Product">
                <meta itemprop="url" content="index41b6.html?id_product=15&amp;id_product_attribute=93&amp;rewrite=lorem-ipsum-dolor-sit-amet&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow">
                <div class="row">
                    <div class="col col-lg-6 col-md-6 col-xs-12">
                        <section class="page-content" id="content">
                            <div class="images-container thumb-vertical">
                                <div class="product-cover">
                                    <img 
                                        class="js-qv-product-cover img-fluid"
                                        src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/1/131-large_default.jpg"
                                        alt=""
                                        title=""
                                        style="width:100%;"
                                        itemprop="image"
                                        >
                                    <div class="layer hidden-sm-down" data-toggle="modal" data-target="#product-modal">
                                        <i class="fa fa-expand"></i>
                                    </div>
                                </div>
                                <div class="js-qv-mask mask">
                                    <div class="product-images slick-images" data-autoplay="false" data-autoplayTimeout="6000" data-items="4" data-margin="10" data-nav="true" data-dots="false" data-loop="false" data-items_mobile="3">
                                        <div class="item thumb-container">
                                            <img
                                                class="thumb js-thumb "
                                                data-image-medium-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/0/130-medium_default.jpg"
                                                data-image-large-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/0/130-large_default.jpg"
                                                data-position-image="0"
                                                src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/0/130-small_default.jpg"
                                                alt=""
                                                title=""
                                                itemprop="image"
                                                >
                                        </div>
                                        <div class="item thumb-container">
                                            <img
                                                class="thumb js-thumb  selected "
                                                data-image-medium-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/1/131-medium_default.jpg"
                                                data-image-large-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/1/131-large_default.jpg"
                                                data-position-image="1"
                                                src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/1/131-small_default.jpg"
                                                alt=""
                                                title=""
                                                itemprop="image"
                                                >
                                        </div>
                                        <div class="item thumb-container">
                                            <img
                                                class="thumb js-thumb "
                                                data-image-medium-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/2/132-medium_default.jpg"
                                                data-image-large-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/2/132-large_default.jpg"
                                                data-position-image="2"
                                                src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/2/132-small_default.jpg"
                                                alt=""
                                                title=""
                                                itemprop="image"
                                                >
                                        </div>
                                        <div class="item thumb-container">
                                            <img
                                                class="thumb js-thumb "
                                                data-image-medium-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/3/133-medium_default.jpg"
                                                data-image-large-src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/3/133-large_default.jpg"
                                                data-position-image="3"
                                                src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/3/133-small_default.jpg"
                                                alt=""
                                                title=""
                                                itemprop="image"
                                                >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col col-lg-6 col-md-6 col-xs-12">
                        <h1 class="detail-product-name" itemprop="name">Lorem ipsum dolor sit amet</h1>
                        <div class="product-prices">
                            <div class="product-discount hidden-xs-up">
                                <span class="regular-price">$250.00</span>
                            </div>
                            <div
                                class="product-price has-discount"
                                itemprop="offers"
                                itemscope
                                itemtype="https://schema.org/Offer"
                                >
                                <link itemprop="availability" href="https://schema.org/InStock"/>
                                <meta itemprop="priceCurrency" content="USD">
                                <div class="current-price">
                                    <span itemprop="price" content="200">$200.00</span>
                                    <span class="discount discount-percentage">Save 20%</span>
                                </div>
                            </div>
                            <div class="tax-shipping-delivery-label">
                                Tax excluded
                            </div>
                        </div>
                        <div class="product-information">
                            <div id="product-description-short-15" itemprop="description"><p>Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non auctor ... </p></div>
                            <div class="product-actions">
                                <form action="http://demo.vinovathemes.com/prestashop_nova/index.php?controller=cart" method="post" id="add-to-cart-or-refresh">
                                    <input type="hidden" name="token" value="10b84ac369e8295d24705ecf49966208">
                                    <input type="hidden" name="id_product" value="15" id="product_page_product_id">
                                    <input type="hidden" name="id_customization" value="0" id="product_customization_id">
                                    <div class="product-variants in_border">
                                        <div class="product-variants-item">
                                            <span class="control-label">Size: </span>
                                            <select
                                                id="group_1"
                                                data-product-attribute="1"
                                                name="group[1]">
                                                <option value="1" title="S" selected="selected">S</option>
                                                <option value="2" title="M">M</option>
                                                <option value="3" title="L">L</option>
                                            </select>
                                        </div>
                                        <div class="product-variants-item">
                                            <span class="control-label">Color: </span>
                                            <select
                                                id="group_3"
                                                data-product-attribute="3"
                                                name="group[3]">
                                                <option value="15" title="Green">Green</option>
                                                <option value="16" title="Yellow" selected="selected">Yellow</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product-add-to-cart in_border">
                                        <span class="control-label">QTY: </span>
                                        <div class="product-quantity">
                                            <div class="qty">
                                                <input
                                                    type="text"
                                                    name="qty"
                                                    id="quantity_wanted"
                                                    value="1"
                                                    class="input-group"
                                                    min="1"
                                                    />
                                            </div>
                                            <div class="add">
                                                <button class="btn btn-primary add-to-cart" data-button-action="add-to-cart" type="submit" >
                                                    <i class="shopping-cart"></i>
                                                    <span>Add to cart</span>
                                                </button>
                                            </div>
                                            <a class="addToWishlist wishlistProd_15" href="#" data-rel="15" onclick="WishlistCart('wishlist_block_list', 'add', '15', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                        </div>
                                        <div class="clearfix"></div>
                                        <p class="product-minimal-quantity">
                                        </p>
                                    </div>
                                    <div class="productbuttons in_border">
                                        <div class="dropdown social-sharing">
                                            <button class="btn btn-link" type="button" id="social-sharingButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <span><i class="fa fa-share-alt" aria-hidden="true"></i>Share</span>
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="social-sharingButton">
                                                <a class="dropdown-item" href="http://www.facebook.com/sharer.php?u=http://demo.vinovathemes.com/prestashop_nova/index.php?id_product=15&amp;id_product_attribute=0&amp;rewrite=lorem-ipsum-dolor-sit-amet&amp;controller=product&amp;id_lang=1" title="Share" target="_blank"><i class="fa fa-facebook"></i>Facebook</a>
                                                <a class="dropdown-item" href="https://twitter.com/intent/tweet?text=Lorem%20ipsum%20dolor%20sit%20amet%20http://demo.vinovathemes.com/prestashop_nova/index.php?id_product=15&amp;id_product_attribute=0&amp;rewrite=lorem-ipsum-dolor-sit-amet&amp;controller=product&amp;id_lang=1" title="Tweet" target="_blank"><i class="fa fa-twitter"></i>Tweet</a>
                                                <a class="dropdown-item" href="https://plus.google.com/share?url=http://demo.vinovathemes.com/prestashop_nova/index.php?id_product=15&amp;id_product_attribute=0&amp;rewrite=lorem-ipsum-dolor-sit-amet&amp;controller=product&amp;id_lang=1" title="Google+" target="_blank"><i class="fa fa-google-plus"></i>Google+</a>
                                                <a class="dropdown-item" href="http://www.pinterest.com/pin/create/button/?media=http://demo.vinovathemes.com/prestashop_nova/img/p/1/3/1/131.jpg&amp;url=http://demo.vinovathemes.com/prestashop_nova/index.php?id_product=15&amp;id_product_attribute=0&amp;rewrite=lorem-ipsum-dolor-sit-amet&amp;controller=product&amp;id_lang=1" title="Pinterest" target="_blank"><i class="fa fa-pinterest"></i>Pinterest</a>
                                            </div>
                                        </div>
                                        <a class="btn btn-link" href="javascript:print();">
                                            <span><i class="fa fa-envelope" aria-hidden="true"></i>Send to a friend</span>
                                        </a>
                                        <a class="btn btn-link" href="javascript:print();">
                                            <span><i class="fa fa-print" aria-hidden="true"></i>Print</span>
                                        </a>
                                    </div>
                                    <div class="in_border">
                                        <div id="product_comments_block_extra">
                                            <div class="comments_advices">
                                                <a class="open-comment-form" data-toggle="modal" data-target="#new_comment_form" href="#"><i class="fa fa-edit"></i>Write your review</a>
                                            </div>
                                        </div>
                                        <!--  /Module NovProductComments -->
                                    </div>
                                    <div class="in_border end">
                                        <div class="product-availability">
                                            <label class="control-label">Availability</label>:
                                            <span id="product-availability" class="product-available">
                                                <i class="fa fa-check-square-o"></i>
                                                In stock
                                            </span>
                                        </div>
                                        <div class="sku">
                                            <label class="control-label">Sku</label>:
                                            <span itemprop="sku" content="demo_15">demo_15</span>
                                        </div>
                                        <div class="pro-cate">
                                            <label class="control-label">Categories</label>:
                                            <span><a href="indexe734.html?id_category=12&amp;controller=category&amp;id_lang=1" title="Men">Men</a></span>
                                            <span><a href="indexd9ce.html?id_category=13&amp;controller=category&amp;id_lang=1" title="Children">Children</a></span>
                                            <span><a href="indexf052.html?id_category=14&amp;controller=category&amp;id_lang=1" title="Luxury">Luxury</a></span>
                                            <span><a href="indexb34f.html?id_category=15&amp;controller=category&amp;id_lang=1" title="StreetStyle">StreetStyle</a></span>
                                        </div>
                                    </div>
                                    <input class="product-refresh ps-hidden-by-js" name="refresh" type="submit" value="Refresh">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#description">Description</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#product-details">Product Details</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#reviews">Comments</a>
                        </li>	
                    </ul>
                    <div class="tab-content" id="tab-content">
                        <div class="tab-pane fade in active" id="description">
                            <div class="product-description"><p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.</p>
                                <ul style="list-style-type: circle;">
                                    <li><strong>Feature:</strong> Eco-Friendly, Washable, durable clothing tags warning labels for garments</li>
                                    <li><strong>Brand Name:</strong> Clothing tags warning labels for garments</li>
                                    <li><strong>Shipping:</strong> By international express or sea.</li>
                                </ul>
                                <p></p>
                                <p><img src="../../content.screencast.com/users/HuuHoc/folders/NovaTheme/media/77b2622d-1022-4609-ac73-3872d7a741e8/wamning.png" alt="" width="336" height="46" /></p>
                                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.</p></div>
                        </div>
                        <div class="tab-pane fade"
                             id="product-details"
                             data-product="{&quot;id_shop_default&quot;:&quot;1&quot;,&quot;id_manufacturer&quot;:&quot;1&quot;,&quot;id_supplier&quot;:&quot;1&quot;,&quot;reference&quot;:&quot;demo_15&quot;,&quot;is_virtual&quot;:&quot;0&quot;,&quot;id_category_default&quot;:&quot;12&quot;,&quot;on_sale&quot;:&quot;0&quot;,&quot;online_only&quot;:&quot;0&quot;,&quot;ecotax&quot;:&quot;0.000000&quot;,&quot;minimal_quantity&quot;:&quot;1&quot;,&quot;price&quot;:200,&quot;unity&quot;:&quot;&quot;,&quot;unit_price_ratio&quot;:&quot;0.000000&quot;,&quot;additional_shipping_cost&quot;:&quot;0.00&quot;,&quot;customizable&quot;:&quot;0&quot;,&quot;text_fields&quot;:&quot;0&quot;,&quot;uploadable_files&quot;:&quot;0&quot;,&quot;redirect_type&quot;:&quot;404&quot;,&quot;id_type_redirected&quot;:&quot;0&quot;,&quot;available_for_order&quot;:&quot;1&quot;,&quot;available_date&quot;:null,&quot;show_condition&quot;:&quot;0&quot;,&quot;condition&quot;:&quot;new&quot;,&quot;show_price&quot;:&quot;1&quot;,&quot;indexed&quot;:&quot;1&quot;,&quot;visibility&quot;:&quot;both&quot;,&quot;cache_default_attribute&quot;:&quot;93&quot;,&quot;advanced_stock_management&quot;:&quot;0&quot;,&quot;date_add&quot;:&quot;2017-05-23 05:19:31&quot;,&quot;date_upd&quot;:&quot;2017-05-23 05:23:34&quot;,&quot;pack_stock_type&quot;:&quot;3&quot;,&quot;meta_description&quot;:&quot;&quot;,&quot;meta_keywords&quot;:&quot;&quot;,&quot;meta_title&quot;:&quot;&quot;,&quot;link_rewrite&quot;:&quot;lorem-ipsum-dolor-sit-amet&quot;,&quot;name&quot;:&quot;Lorem ipsum dolor sit amet&quot;,&quot;description&quot;:&quot;&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu.&lt;\/p&gt;\r\n&lt;ul style=\&quot;list-style-type: circle;\&quot;&gt;\r\n&lt;li&gt;&lt;strong&gt;Feature:&lt;\/strong&gt; Eco-Friendly, Washable, durable clothing tags warning labels for garments&lt;\/li&gt;\r\n&lt;li&gt;&lt;strong&gt;Brand Name:&lt;\/strong&gt; Clothing tags warning labels for garments&lt;\/li&gt;\r\n&lt;li&gt;&lt;strong&gt;Shipping:&lt;\/strong&gt; By international express or sea.&lt;\/li&gt;\r\n&lt;\/ul&gt;\r\n&lt;p&gt;&lt;\/p&gt;\r\n&lt;p&gt;&lt;img src=http://demo.vinovathemes.com/"https:////content.screencast.com//users//HuuHoc//folders//NovaTheme//media//77b2622d-1022-4609-ac73-3872d7a741e8//wamning.png/" alt=\&quot;\&quot; width=\&quot;336\&quot; height=\&quot;46\&quot; \/&gt;&lt;\/p&gt;\r\n&lt;p&gt;Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec.&lt;\/p&gt;&quot;,&quot;description_short&quot;:&quot;&lt;p&gt;Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non auctor ...\u00a0&lt;\/p&gt;&quot;,&quot;available_now&quot;:&quot;In stock&quot;,&quot;available_later&quot;:&quot;&quot;,&quot;id&quot;:15,&quot;id_product&quot;:15,&quot;out_of_stock&quot;:2,&quot;new&quot;:1,&quot;id_product_attribute&quot;:93,&quot;quantity_wanted&quot;:1,&quot;extraContent&quot;:[],&quot;allow_oosp&quot;:0,&quot;category&quot;:&quot;men&quot;,&quot;category_name&quot;:&quot;Men&quot;,&quot;link&quot;:&quot;http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?id_product=15&amp;id_product_attribute=0&amp;rewrite=lorem-ipsum-dolor-sit-amet&amp;controller=product&amp;id_lang=1&quot;,&quot;attribute_price&quot;:0,&quot;price_tax_exc&quot;:200,&quot;price_without_reduction&quot;:250,&quot;reduction&quot;:50,&quot;specific_prices&quot;:{&quot;id_specific_price&quot;:&quot;8&quot;,&quot;id_specific_price_rule&quot;:&quot;0&quot;,&quot;id_cart&quot;:&quot;0&quot;,&quot;id_product&quot;:&quot;15&quot;,&quot;id_shop&quot;:&quot;0&quot;,&quot;id_shop_group&quot;:&quot;0&quot;,&quot;id_currency&quot;:&quot;0&quot;,&quot;id_country&quot;:&quot;0&quot;,&quot;id_group&quot;:&quot;0&quot;,&quot;id_customer&quot;:&quot;0&quot;,&quot;id_product_attribute&quot;:&quot;0&quot;,&quot;price&quot;:&quot;-1.000000&quot;,&quot;from_quantity&quot;:&quot;1&quot;,&quot;reduction&quot;:&quot;0.200000&quot;,&quot;reduction_tax&quot;:&quot;1&quot;,&quot;reduction_type&quot;:&quot;percentage&quot;,&quot;from&quot;:&quot;0000-00-00 00:00:00&quot;,&quot;to&quot;:&quot;0000-00-00 00:00:00&quot;,&quot;score&quot;:&quot;32&quot;},&quot;quantity&quot;:10,&quot;quantity_all_versions&quot;:100,&quot;id_image&quot;:&quot;en-default&quot;,&quot;features&quot;:[{&quot;name&quot;:&quot;Compositions&quot;,&quot;value&quot;:&quot;Polyester&quot;,&quot;id_feature&quot;:&quot;5&quot;},{&quot;name&quot;:&quot;Styles&quot;,&quot;value&quot;:&quot;Girly&quot;,&quot;id_feature&quot;:&quot;6&quot;},{&quot;name&quot;:&quot;Properties&quot;,&quot;value&quot;:&quot;Midi Dress&quot;,&quot;id_feature&quot;:&quot;7&quot;}],&quot;attachments&quot;:[],&quot;virtual&quot;:0,&quot;pack&quot;:0,&quot;packItems&quot;:[],&quot;nopackprice&quot;:0,&quot;customization_required&quot;:false,&quot;attributes&quot;:{&quot;1&quot;:{&quot;id_attribute&quot;:&quot;1&quot;,&quot;id_attribute_group&quot;:&quot;1&quot;,&quot;name&quot;:&quot;S&quot;,&quot;group&quot;:&quot;Size&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;},&quot;3&quot;:{&quot;id_attribute&quot;:&quot;16&quot;,&quot;id_attribute_group&quot;:&quot;3&quot;,&quot;name&quot;:&quot;Yellow&quot;,&quot;group&quot;:&quot;Color&quot;,&quot;reference&quot;:&quot;&quot;,&quot;ean13&quot;:&quot;&quot;,&quot;isbn&quot;:&quot;&quot;,&quot;upc&quot;:&quot;&quot;}},&quot;rate&quot;:0,&quot;tax_name&quot;:&quot;&quot;,&quot;ecotax_rate&quot;:0,&quot;unit_price&quot;:0,&quot;customizations&quot;:{&quot;fields&quot;:[]},&quot;id_customization&quot;:0,&quot;is_customizable&quot;:false,&quot;show_quantities&quot;:true,&quot;quantity_label&quot;:&quot;Items&quot;,&quot;quantity_discounts&quot;:[],&quot;customer_group_discount&quot;:0}"
                             >
                             <div class="product-manufacturer">
                                <a href="indexa8aa.html?id_manufacturer=1&amp;controller=manufacturer&amp;id_lang=1">
                                    <img src="<?php echo $novaAsset->baseUrl?>/img/m/1.jpg" class="img img-thumbnail manufacturer-logo" />
                                </a>
                            </div>
                            <div class="product-reference">
                                <label class="label">Reference </label>
                                <span itemprop="sku">demo_15</span>
                            </div>
                            <div class="product-quantities">
                                <label class="label">In stock</label>
                                <span>10 Items</span>
                            </div>
                            <div class="product-out-of-stock">
                            </div>
                            <section class="product-features">
                                <h3>Data sheet</h3>
                                <dl class="data-sheet">
                                    <dt class="name">Compositions</dt>
                                    <dd class="value">Polyester</dd>
                                    <dt class="name">Styles</dt>
                                    <dd class="value">Girly</dd>
                                    <dt class="name">Properties</dt>
                                    <dd class="value">Midi Dress</dd>
                                </dl>
                            </section>
                        </div>
                        <script type="text/javascript">
                            var novproductcomments_controller_url = 'indexf5fb.html?fc=module&amp;module=novproductcomments&amp;controller=default&amp;id_lang=1';
                            var confirm_report_message = 'Are you sure that you want to report this comment?';
                            var secure_key = 'e9fc4fb351be04cb92e58bb65efadb1d';
                            var novproductcomments_url_rewrite = '0';
                            var productcomment_added = 'Your comment has been added!';
                            var productcomment_added_moderation = 'Your comment has been submitted and will be available once approved by a moderator.';
                            var productcomment_title = 'New comment';
                            var productcomment_ok = 'OK';
                            var moderation_active = 1;
                        </script>
                        <div class="tab-pane fade in" id="reviews">
                            <div id="product_comments_block_tab">
                                <p class="text-center mt-10">
                                    <a id="new_comment_tab_btn" class="open-comment-form" data-toggle="modal" data-target="#new_comment_form" href="#">Be the first to write your review !</a>
                                </p>
                            </div>
                        </div>
                        <div class="modal fade in" id="new_comment_form" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title text-xs-center"><i class="fa fa-edit"></i> Write your review</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <i class="material-icons close">close</i>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form id="id_new_comment_form" action="#">
                                            <div class="product row no-gutters">
                                                <div class="product-image col-4">
                                                    <img class="img-fluid" src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/1/131-medium_default.jpg" height="" width="" alt="Lorem ipsum dolor sit amet" />
                                                </div>
                                                <div class="product_desc col-8">
                                                    <p class="product_name">Lorem ipsum dolor sit amet</p>
                                                    <p>Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non auctor ... </p>
                                                </div>
                                            </div>
                                            <div class="new_comment_form_content">
                                                <div id="new_comment_form_error" class="error alert alert-danger">
                                                    <ul></ul>
                                                </div>
                                                <ul id="criterions_list">
                                                    <li>
                                                        <label>Quality</label>
                                                        <div class="star_content">
                                                            <input class="star" type="radio" name="criterion[1]" value="1" />
                                                            <input class="star" type="radio" name="criterion[1]" value="2" />
                                                            <input class="star" type="radio" name="criterion[1]" value="3" />
                                                            <input class="star" type="radio" name="criterion[1]" value="4" />
                                                            <input class="star" type="radio" name="criterion[1]" value="5" checked="checked" />
                                                        </div>
                                                        <div class="clearfix"></div>
                                                    </li>
                                                </ul>
                                                <label for="comment_title">Title for your review<sup class="required">*</sup></label>
                                                <input id="comment_title" name="title" type="text" value=""/>
                                                <label for="content">Your review<sup class="required">*</sup></label>
                                                <textarea id="content" name="content"></textarea>
                                                <label>Your name<sup class="required">*</sup></label>
                                                <input id="commentCustomerName" name="customer_name" type="text" value=""/>
                                                <div id="new_comment_form_footer">
                                                    <input id="id_product_comment_send" name="id_product" type="hidden" value='15' />
                                                    <div class="fl"><sup class="required">*</sup> Required fields</div>
                                                    <div class="fr">
                                                        <button id="submitNewMessage" data-dismiss="modal" aria-label="Close" class="btn btn-primary" name="submitMessage" type="submit">Send</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form><!-- /end new_comment_form_content -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <section class="relate-product product-accessories clearfix">
                    <h3 class="h5 title_block text-uppercase">Relate products<span class="sub_title">Hand-picked arrivals from the best designer</span></h3>
                    <div 
                        class="products product_list grid owl-carousel owl-theme" 
                        data-autoplay="true" 
                        data-autoplayTimeout="6000" 
                        data-loop="true" data-items="4" 
                        data-margin="30" data-nav="true" 
                        data-dots="false" data-items_mobile="2"
                        >
                        <div class="item ">
                            <div class="product-miniature js-product-miniature item-one first_item" data-id-product="2" data-id-product-attribute="7" itemscope itemtype="http://schema.org/Product">
                                <div class="thumbnail-container">
                                    <a href="indexdb0f.html?id_product=2&amp;id_product_attribute=7&amp;rewrite=blouse&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black" class="thumbnail product-thumbnail">
                                        <img 
                                            class="img-fluid image-cover"
                                            src="<?php echo $novaAsset->baseUrl?>/img/p/1/8/5/185-home_default.jpg"
                                            alt = ""
                                            data-full-size-image-url = "http://demo.vinovathemes.com/prestashop_nova/img/p/1/8/5/185-large_default.jpg"
                                            width="370"
                                            height="493"
                                            >
                                    </a>
                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <div class="product-description">
                                    <div class="product-title" itemprop="name"><a href="indexdb0f.html?id_product=2&amp;id_product_attribute=7&amp;rewrite=blouse&amp;controller=product&amp;id_lang=1#/1-size-s/11-color-black">Blouse</a></div>
                                    <div class="product-groups" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <div class="product-comments">	
                                            <div class="star_content">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <span>0 Review(s)</span>
                                        </div>
                                        <div class="product-group-price">
                                            <div class="product-price-and-shipping">
                                                <span itemprop="price" class="price">$26.99</span>
                                            </div>
                                        </div>
                                        <div class="info-stock">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            In stock
                                        </div>
                                        <div class="product-desc" itemprop="desciption"><p>Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non...</div>
                                        <div class="product-buttons">
                                            <form action="http://demo.vinovathemes.com/prestashop_nova/index.php?controller=cart" method="post">
                                                <input type="hidden" name="token" value="10b84ac369e8295d24705ecf49966208">
                                                <input type="hidden" name="id_product" value="2">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to cart</span></a>
                                            </form>
                                            <a class="addToWishlist wishlistProd_2" href="#" data-rel="2" onclick="WishlistCart('wishlist_block_list', 'add', '2', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>		    
                            </div>
                        </div>
                        <div class="item ">
                            <div class="product-miniature js-product-miniature item-one first_item" data-id-product="3" data-id-product-attribute="13" itemscope itemtype="http://schema.org/Product">
                                <div class="thumbnail-container">
                                    <a href="index52ad.html?id_product=3&amp;id_product_attribute=13&amp;rewrite=printed-dress&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange" class="thumbnail product-thumbnail">
                                        <img 
                                            class="img-fluid image-cover"
                                            src="<?php echo $novaAsset->baseUrl?>/img/p/1/8/0/180-home_default.jpg"
                                            alt = ""
                                            data-full-size-image-url = "img/p/1/8/0/180-large_default.jpg"
                                            width="370"
                                            height="493"
                                            >
                                    </a>
                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <div class="product-description">
                                    <div class="product-title" itemprop="name"><a href="index52ad.html?id_product=3&amp;id_product_attribute=13&amp;rewrite=printed-dress&amp;controller=product&amp;id_lang=1#/1-size-s/13-color-orange">Printed Dress</a></div>
                                    <div class="product-groups" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <div class="product-comments">	
                                            <div class="star_content">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <span>0 Review(s)</span>
                                        </div>
                                        <div class="product-group-price">
                                            <div class="product-price-and-shipping">
                                                <span itemprop="price" class="price">$25.99</span>
                                            </div>
                                        </div>
                                        <div class="info-stock">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            In stock
                                        </div>
                                        <div class="product-desc" itemprop="desciption"><p>Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non...</div>
                                        <div class="product-buttons">
                                            <form action="http://demo.vinovathemes.com/prestashop_nova/index.php?controller=cart" method="post">
                                                <input type="hidden" name="token" value="10b84ac369e8295d24705ecf49966208">
                                                <input type="hidden" name="id_product" value="3">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to cart</span></a>
                                            </form>
                                            <a class="addToWishlist wishlistProd_3" href="#" data-rel="3" onclick="WishlistCart('wishlist_block_list', 'add', '3', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>		    
                            </div>
                        </div>
                        <div class="item ">
                            <div class="product-miniature js-product-miniature item-one first_item" data-id-product="4" data-id-product-attribute="16" itemscope itemtype="http://schema.org/Product">
                                <div class="thumbnail-container">
                                    <a href="index2a66.html?id_product=4&amp;id_product_attribute=16&amp;rewrite=printed-dress&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige" class="thumbnail product-thumbnail">
                                        <img 
                                            class="img-fluid image-cover"
                                            src="<?php echo $novaAsset->baseUrl?>/img/p/1/7/6/176-home_default.jpg"
                                            alt = ""
                                            data-full-size-image-url = "img/p/1/7/6/176-large_default.jpg"
                                            width="370"
                                            height="493"
                                            >
                                    </a>
                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                                <div class="product-description">
                                    <div class="product-title" itemprop="name"><a href="index2a66.html?id_product=4&amp;id_product_attribute=16&amp;rewrite=printed-dress&amp;controller=product&amp;id_lang=1#/1-size-s/7-color-beige">Printed Dress</a></div>
                                    <div class="product-groups" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <div class="product-comments">	
                                            <div class="star_content">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <span>0 Review(s)</span>
                                        </div>
                                        <div class="product-group-price">
                                            <div class="product-price-and-shipping">
                                                <span itemprop="price" class="price">$50.99</span>
                                            </div>
                                        </div>
                                        <div class="info-stock">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            In stock
                                        </div>
                                        <div class="product-desc" itemprop="desciption"><p>Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non...</div>
                                        <div class="product-buttons">
                                            <form action="http://demo.vinovathemes.com/prestashop_nova/index.php?controller=cart" method="post">
                                                <input type="hidden" name="token" value="10b84ac369e8295d24705ecf49966208">
                                                <input type="hidden" name="id_product" value="4">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to cart</span></a>
                                            </form>
                                            <a class="addToWishlist wishlistProd_4" href="#" data-rel="4" onclick="WishlistCart('wishlist_block_list', 'add', '4', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>		    
                            </div>
                        </div>
                        <div class="item ">
                            <div class="product-miniature js-product-miniature item-one first_item" data-id-product="5" data-id-product-attribute="19" itemscope itemtype="http://schema.org/Product">
                                <div class="thumbnail-container">
                                    <a href="index42af.html?id_product=5&amp;id_product_attribute=19&amp;rewrite=printed-summer-dress&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow" class="thumbnail product-thumbnail">
                                        <img 
                                            class="img-fluid image-cover"
                                            src="<?php echo $novaAsset->baseUrl?>/img/p/1/7/1/171-home_default.jpg"
                                            alt = ""
                                            data-full-size-image-url = "img/p/1/7/1/171-large_default.jpg"
                                            width="370"
                                            height="493"
                                            >
                                    </a>
                                    <a href="#" class="quick-view hidden-sm-down" data-link-action="quickview">
                                        <i class="fa fa-search"></i>
                                    </a>
                                    <div class="product-flags discount">-5%</div>
                                </div>
                                <div class="product-description">
                                    <div class="product-title" itemprop="name"><a href="index42af.html?id_product=5&amp;id_product_attribute=19&amp;rewrite=printed-summer-dress&amp;controller=product&amp;id_lang=1#/1-size-s/16-color-yellow">Printed Summer Dress</a></div>
                                    <div class="product-groups" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                        <div class="product-comments">	
                                            <div class="star_content">
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                                <div class="star"></div>
                                            </div>
                                            <span>0 Review(s)</span>
                                        </div>
                                        <div class="product-group-price">
                                            <div class="product-price-and-shipping">
                                                <span itemprop="price" class="price">$160.55</span>
                                                <span class="regular-price">$169.00</span>
                                            </div>
                                        </div>
                                        <div class="info-stock">
                                            <i class="fa fa-check-square-o" aria-hidden="true"></i>
                                            In stock
                                        </div>
                                        <div class="product-desc" itemprop="desciption"><p>Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non...</div>
                                        <div class="product-buttons">
                                            <form action="http://demo.vinovathemes.com/prestashop_nova/index.php?controller=cart" method="post">
                                                <input type="hidden" name="token" value="10b84ac369e8295d24705ecf49966208">
                                                <input type="hidden" name="id_product" value="5">
                                                <a class="add-to-cart" href="#" data-button-action="add-to-cart"><i class="novicon-cart"></i><span>Add to cart</span></a>
                                            </form>
                                            <a class="addToWishlist wishlistProd_5" href="#" data-rel="5" onclick="WishlistCart('wishlist_block_list', 'add', '5', false, 1); return false;">
                                                <i class="fa fa-heart"></i>
                                                <span>Add to Wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>		    
                            </div>
                        </div>
                    </div>
                </section>
                <div class="modal fade js-product-images-modal" id="product-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-body">
                                <figure>
                                    <img class="js-modal-product-cover product-cover-modal" width="470" src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/1/131-large_default.jpg" alt="" title="" itemprop="image">
                                    <figcaption class="image-caption">
                                        <div id="product-description-short" itemprop="description"><p>Proin gravida nibh vel velit auctor aliquet. Aenean lorem quis bibendum auctor, nisi elit consequat Lorem Ipsum passages etiam non auctor ... </p></div>
                                    </figcaption>
                                </figure>
                                <aside id="thumbnails" class="thumbnails js-thumbnails text-xs-center">
                                    <div class="js-modal-mask mask  nomargin ">
                                        <ul class="product-images js-modal-product-images">
                                            <li class="thumb-container">
                                                <img data-image-large-src="http://demo.vinovathemes.com/prestashop_nova/img/p/1/3/0/130-large_default.jpg" class="thumb js-modal-thumb" src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/0/130-small_default.jpg" alt="" title="" width="85" itemprop="image">
                                            </li>
                                            <li class="thumb-container">
                                                <img data-image-large-src="http://demo.vinovathemes.com/prestashop_nova/img/p/1/3/1/131-large_default.jpg" class="thumb js-modal-thumb" src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/1/131-small_default.jpg" alt="" title="" width="85" itemprop="image">
                                            </li>
                                            <li class="thumb-container">
                                                <img data-image-large-src="http://demo.vinovathemes.com/prestashop_nova/img/p/1/3/2/132-large_default.jpg" class="thumb js-modal-thumb" src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/2/132-small_default.jpg" alt="" title="" width="85" itemprop="image">
                                            </li>
                                            <li class="thumb-container">
                                                <img data-image-large-src="http://demo.vinovathemes.com/prestashop_nova/img/p/1/3/3/133-large_default.jpg" class="thumb js-modal-thumb" src="<?php echo $novaAsset->baseUrl?>/img/p/1/3/3/133-small_default.jpg" alt="" title="" width="85" itemprop="image">
                                            </li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div><!-- /.modal -->
                <footer class="page-footer">
                    <!-- Footer content -->
                </footer>
            </section>
        </div>
    </div>
</div>