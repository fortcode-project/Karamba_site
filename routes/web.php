<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Loja\ApiController;
use App\Livewire\Site\DeliveryStatusComponent;

use Illuminate\Support\Facades\Route;

    //Routes do site 
    Route::controller(SiteController::class)->group(function(){
        Route::get("/", "index")->name("site.karamba.index");
        Route::get("/about", "about")->name("site.karamba.about");
        Route::get("/produtos", "products")->name("site.karamba.products");
        Route::get("/contactos", "contact")->name("site.karamba.contact");
        Route::get("/bilhetes", "bilhete")->name("site.karamba.bilhete");
        Route::get("/bilhete/{id}", "FormBilhetes")->name("admin.get.bilhete");
        Route::post("/comprar/bilhete", "payment")->name("site.karamba.payment.bilhete");
        Route::post("/envio/email/client", "sendEmail")->name("site.karamba.send.email");
        Route::get("/api/datas", "api");
        Route::get("/delivery/status", "deliveryStatus")->name("site.karamba.status.delivery");
    });

    //Routes do administrador do site para manipulação
    Route::middleware("auth")->controller(AdminController::class)->group(function(){
    Route::get("/admin/index", "index")->name("admin.index");
    Route::get("/admin/hero", "hero")->name("admin.index.hero");
    Route::post("/admin/register/", "registerdatas")->name("admin.register");
    Route::get("/admin/edit/data/{id}", "edit")->name("admin.edit.data");
    Route::post("/admin/update/{id}", "update")->name("admin.update");

    Route::get("/serviços", "viewservice")->name("admin.view.service");
    Route::post("/serviços", "storeservice")->name("admin.store.service");
    
    Route::get("/admin/detail", "detailview")->name("admin.detail");
    Route::post("/admin/detail/store", "storeDetail")->name("admin.store.detail");
    Route::get("/admin/detail/{id}", "deleteDetail")->name("admin.detail.delete");
    Route::get("/admin/infowhy", "infowhy")->name("admin.infowhy");
    Route::get("/admin/infowhy/edit/{id}", "editwhy")->name("admin.infowhy.edit");
    Route::post("/admin/infowhy/update/{id}", "actualizar")->name("admin.infowhy.update");
    Route::post("/admin/infowhy/store", "storeinfowhy")->name("store.infowhy");

    //Contacto e Footer
    Route::get("/admin/footer", "footer")->name("admin.footer");
    Route::post("/admin/contacto", "contactStore")->name("admin.footer.store");
    Route::get("/admin/contact/{id}", "editContact")->name("admin.edit.conatct");
    Route::post("/admin/contact/update/{id}", "actualizarContact")->name("admin.contact.update");
    
    //Detalhes
    Route::get("/admin/datalhes/{id}", "editDetalhes")->name("admin.edit.detalhes");
    Route::post("/admin/Detalhes/update/{id}", "actualizarDetalhes")->name("admin.detalhes.update");

    //About
    Route::get("/admin/about", "about")->name("admin.about");
    Route::post("/admin/about/store", "storeAbout")->name("admin.store.about");
    Route::get("/admin/about/edit/{id}", "editAbout")->name("admin.edit.about");
    Route::post("/admin/about/actualizar/{id}", "actualizarAbout")->name("admin.about.update");
    
    //Bilohetes
    Route::get("/admin/criar/bilhete/", "createBilhete")->name("admin.get.form.bilhete");
    Route::post("/admin/gravar/bilhete", "storeBilhete")->name("admin.post.store.bilhete");
    
    //Anúncios
    Route::get("/anuncio/retangulo", "anuncioRetangulo")->name("anuncio.management.view.retangulo");
    Route::post("/store", "store")->name("anuncio.management.store");
    Route::post("/update", "updateAnuncio")->name("anuncio.management.update");
    Route::post("/store/anuncio", "storeQ")->name("anuncio.management.store.quadrado");
    Route::post("/update/anuncio/", "updateQ")->name("anuncio.management.update.quadrado");
    Route::get("/delete/{id}", "anuncioDelete")->name("anuncio.management.delete");
    Route::get("/lista/anuncio/q", "anuncioQuadrado")->name("anuncio.management.lista.quadrado");
    Route::get("/lista/anuncio/v", "anuncioVertical")->name("anuncio.management.lista.vertical");
    Route::get("/lista/anuncio/h", "anuncioHorizontal")->name("anuncio.management.lista.horizontal");
    
    Route::get("/users", "users")->name("anuncio.management.users");
    Route::post("/user/store", "storeUser")->name("anuncio.management.user.store");
    Route::get("/user/{id}", "deleteUser")->name("anuncio.management.delete.user");

    Route::get("/encomenda/controle", "deliveryGet")->name("karamba.delivery.list");
});

Route::controller(LoginController::class)->group(function(){
    Route::get("/login/view", "loginview")->name("anuncio.login.view");
    Route::post("/login", "login")->name("anuncio.login");
    Route::get("/sair", "logout")->name("anuncio.logout");
});

Route::controller(ApiController::class)->group(function(){
    Route::get("/loja/menu/{category?}" ,"loja")->name("api.loja");
    Route::get("/add/cart/{id}", "addCart")->name("loja.add.cart");
    Route::get("/lista/Carrinho/", "getTotalCart")->name("loja.get.cart.total");
    Route::get('/remove-item/{itemId}', 'removeItem')->name('cart.remove');
    Route::get('/clear-cart', 'clearCart')->name('cart.clear');
    Route::post('/update-quantity', 'updateQuantity')->name('update_quantity');
    Route::get("/select/delivery/{price}", "select_delivery")->name("select.delivery");
});

Route::get("/encomenda/estado/{id}", DeliveryStatusComponent::class)->name("delivery.status");