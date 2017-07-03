<?php
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* @var $this \yii\web\View */

use yii\helpers\Html;
use sheillendra\nova\assets\NovaAsset;

$novaAsset = NovaAsset::register($this);

if (!isset($this->params['bodyId'])) {
    $this->params['bodyId'] = 'index';
}

if (!isset($this->params['showDisplayTop'])) {
    $this->params['showDisplayTop'] = false;
}
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html>
    <head>
        <?php echo Html::csrfMetaTags() ?>
        <title><?= Html::encode($this->title) ?></title>
        <?php $this->head() ?>
        <script type="text/javascript">
            var added_to_wishlist = "The product was successfully added to your wishlist.";
            var isLogged = false;
            var isLoggedWishlist = false;
            var loggin_required = "You must be logged in to manage your wishlist.";
            var prestashop = {"cart":{"products":[], "totals":{"total":{"type":"total", "label":"Total", "amount":0, "value":"$0.00"}}, "subtotals":{"products":{"type":"products", "label":"Subtotal", "amount":0, "value":"$0.00"}, "discounts":null, "shipping":{"type":"shipping", "label":"Shipping", "amount":0, "value":"Free"}, "tax":{"type":"tax", "label":"Taxes", "amount":0, "value":"$0.00"}}, "products_count":0, "summary_string":"0 items", "labels":{"tax_short":"(tax excl.)", "tax_long":"(tax excluded)"}, "id_address_delivery":0, "id_address_invoice":0, "is_virtual":false, "vouchers":{"allowed":0, "added":[]}, "discounts":[], "minimalPurchase":0, "minimalPurchaseRequired":""}, "currency":{"name":"US Dollar", "iso_code":"USD", "iso_code_num":"840", "sign":"$"}, "customer":{"lastname":null, "firstname":null, "email":null, "last_passwd_gen":null, "birthday":null, "newsletter":null, "newsletter_date_add":null, "ip_registration_newsletter":null, "optin":null, "website":null, "company":null, "siret":null, "ape":null, "outstanding_allow_amount":0, "max_payment_days":0, "note":null, "is_guest":0, "id_shop":null, "id_shop_group":null, "id_default_group":1, "date_add":null, "date_upd":null, "reset_password_token":null, "reset_password_validity":null, "id":null, "is_logged":false, "gender":{"type":null, "name":null, "id":null}, "risk":{"name":null, "color":null, "percent":null, "id":null}, "addresses":[]}, "language":{"name":"English (English)", "iso_code":"en", "locale":"en-US", "language_code":"en-us", "is_rtl":"0", "date_format_lite":"m\/d\/Y", "date_format_full":"m\/d\/Y H:i:s", "id":1}, "page":{"title":"", "canonical":null, "meta":{"title":"Home Page Nova Theme Prestahop - Prestahop 1.7 theme optimize | Seo optimize", "description":"Prestahop 1.7 theme optimize , Seo optimize - Bestseller theme prestashop in themeforest", "keywords":"", "robots":"index"}, "page_name":"index", "body_classes":{"lang-en":true, "lang-rtl":false, "country-GB":true, "currency-USD":true, "layout-full-width":true, "page-index":true, "tax-display-enabled":true}, "admin_notifications":[]}, "shop":{"name":"prestashop_nova", "email":"nova@domain.com", "registration_number":"", "long":false, "lat":false, "logo":"\/prestashop_nova\/img\/prestashopnova-logo-1495518884.jpg", "stores_icon":"\/prestashop_nova\/img\/logo_stores.png", "favicon":"\/prestashop_nova\/img\/favicon.ico", "favicon_update_time":"1495716804", "address":{"formatted":"prestashop_nova<br>123 Suspendis matti, Visaosang Building, VST District, NY Accums ,  North American<br>United States", "address1":"123 Suspendis matti, Visaosang", "address2":"Building, VST District, NY Accums ,  North American", "postcode":"", "city":"", "state":null, "country":"United States"}, "phone":"0123-456-78910", "fax":""}, "urls":{"base_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/", "current_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php", "shop_domain_url":"http:\/\/demo.vinovathemes.com", "img_ps_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/", "img_cat_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/c\/", "img_lang_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/l\/", "img_prod_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/p\/", "img_manu_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/m\/", "img_sup_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/su\/", "img_ship_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/s\/", "img_store_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/st\/", "img_col_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/img\/co\/", "img_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/themes\/vinova_base\/assets\/img\/", "css_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/themes\/vinova_base\/assets\/css\/", "js_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/themes\/vinova_base\/assets\/js\/", "pic_url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/upload\/", "pages":{"address":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=address", "addresses":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=addresses", "authentication":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=authentication", "cart":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=cart", "category":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=category", "cms":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=cms", "contact":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=contact", "discount":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=discount", "guest_tracking":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=guest-tracking", "history":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=history", "identity":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=identity", "index":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php", "my_account":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=my-account", "order_confirmation":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=order-confirmation", "order_detail":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=order-detail", "order_follow":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=order-follow", "order":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=order", "order_return":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=order-return", "order_slip":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=order-slip", "pagenotfound":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=pagenotfound", "password":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=password", "pdf_invoice":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=pdf-invoice", "pdf_order_return":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=pdf-order-return", "pdf_order_slip":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=pdf-order-slip", "prices_drop":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=prices-drop", "product":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=product", "search":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=search", "sitemap":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=sitemap", "stores":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=stores", "supplier":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=supplier", "register":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=authentication&create_account=1", "order_login":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?controller=order&login=1"}, "theme_assets":"\/prestashop_nova\/themes\/vinova_base\/assets\/", "actions":{"logout":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php?mylogout="}}, "configuration":{"display_taxes_label":true, "low_quantity_threshold":3, "is_b2b":false, "is_catalog":false, "show_prices":true, "opt_in":{"partner":true}, "quantity_discount":{"type":"discount", "label":"Discount"}, "voucher_enabled":0, "return_enabled":0, "number_of_days_for_return":14}, "field_required":[], "breadcrumb":{"links":[{"title":"Home", "url":"http:\/\/demo.vinovathemes.com\/prestashop_nova\/index.php"}], "count":1}, "link":{"protocol_link":"http:\/\/", "protocol_content":"http:\/\/"}, "time":1497682626, "static_token":"10b84ac369e8295d24705ecf49966208", "token":"c54c189fe3a8968b863c657497b2d25c"};
        </script>
        <script type="text/javascript">
            var baseDir = "index.html";
            var static_token = "10b84ac369e8295d24705ecf49966208";
        </script>
        <style type="text/css">
            body {background-color: #ffffff;}@media (min-width: 1600px) {#header .container {width: 1600px;}.footer .container {width: 1600px;}#index .container {width: 1600px;}}
        </style>
    </head>
    <body id="<?php echo $this->params['bodyId'] ?>" class="lang-en country-gb currency-usd layout-full-width page-index tax-display-enabled displayhomenovthree">
        <?php $this->beginBody() ?>

        <main id="main-site">
            
            <?php echo $this->render('@app/views/layouts/_header', ['novaAsset' => $novaAsset]) ?>

            <?php if ($this->params['showDisplayTop']): ?>
                <?php echo $this->render('@app/views/layouts/_displayTop', ['novaAsset' => $novaAsset]) ?>
            <?php endif; ?>

            <div id="wrapper-site">
                <?php echo $content ?>
            </div>

            <?php echo $this->render('@app/views/layouts/_footer', ['novaAsset' => $novaAsset]) ?>

            <div class="canvas-overlay"></div>
            <div id="back-top">
                <span>
                    <i class="fa fa-long-arrow-up"></i>
                </span>
            </div>
        </main>
        <?php $this->endBody() ?>
    </body>
</html>
<?php $this->endPage() ?>