<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

//Routes do site 
Route::controller(SiteController::class)->group(function(){
    Route::get("/", "index")->name("site.karamba.index");
    Route::get("/about", "about")->name("site.karamba.about");
    Route::get("/produtos", "products")->name("site.karamba.products");
    Route::get("/contactos", "contact")->name("site.karamba.contact");
    Route::get("/bilhetes", "bilhete")->name("site.karamba.bilhete");
});

// Routes do administrador do site
Route::controller(AdminController::class)->group(function(){
    Route::get("/admin/index", "index")->name("admin.index");
    Route::post("/admin/register", "registerdatas")->name("admin.register");
    Route::get("/admin/edit/data/{id}", "edit")->name("admin.edit.data");
    Route::post("/admin/update/{id}", "update")->name("admin.update");
    Route::get("/admin/about", "about")->name("admin.about");
    Route::post("/admin/about/store", "storeAbout")->name("admin.store.about");
    Route::get("/admin/detail", "detailview")->name("admin.detail");
    Route::post("/admin/detail/store", "storeDetail")->name("admin.store.detail");
    Route::get("/admin/detail/{id}", "deleteDetail")->name("admin.detail.delete");
    Route::get("/admin/infowhy", "infowhy")->name("admin.infowhy");
    Route::get("/admin/infowhy/edit/{id}", "editwhy")->name("admin.infowhy.edit");
    Route::post("/admin/infowhy/store", "storeinfowhy")->name("store.infowhy");
    Route::get("/admin/footer", "footer")->name("admin.footer");
    Route::post("/admin/contacto", "contactStore")->name("admin.footer.store");
});