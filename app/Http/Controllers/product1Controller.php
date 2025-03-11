<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class product1Controller extends Controller
{
    public function table(){
        if (!Schema::hasTable('addresses')){
            Schema::create('addresses',function (Blueprint $table){
                $table->increments('id');
                $table->string('street');
                $table->string('country');
                $table->integer('icon_id');
                $table->integer('monster');
            });
        }
        if (!Schema::hasTable('articles')){
            Schema::create('articles',function(Blueprint $table){
                $table->increments('id');
                $table->integer('category_id');
                $table->string('title',255);
                $table->string('slug',255);
                $table->string('content',255);
                $table->string('image')->nullable();
                $table->enum('status',['published', 'draft']);
                $table->timestamps();
                $table->tinyInteger('feature');
                $table->timestamp('created_att')->nullable();
                $table->timestamp('updated_att')->nullable();
                $table->timestamp('deleted_att')->nullable();
    
            });
        }
        if(!Schema::hasTable('failed_jobs')){
            Schema::create('failed_jobs', function(Blueprint $table){
                $table->increments('id'); 
                $table->text('connection'); 
                $table->text('queue'); 
                $table->longText('payload'); 
                $table->longText('exception'); 
                $table->timestamp('failed_at');
            });
        }
        if(!Schema::hasTable('a_s')){
            Schema::create('a_s',function(Blueprint $table){
                $table->increments('id');
                $table->integer('b_s_id');
            });
        }
        if(!Schema::hasTable('bills')){
            Schema::create('bills', function(Blueprint $table){
                $table->increments('id');
                $table->unsignedBigInteger('id_customer')->nullable();
                $table->date('date_order')->nullable();
                $table->float('total')->nullable()->comment('Tổng tiền');
                $table->string('payment', 200)->nullable()->comment('Hình thức thanh toán');
                $table->string('note', 500)->nullable();
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('bills_detail')){
            Schema::create('bills_detail', function(Blueprint $table){
                $table->increments('id');
                $table->unsignedBigInteger('id_bill');
                $table->unsignedBigInteger('id_product');
                $table->integer('quantity')->comment('Số lượng');
                $table->double('unit_price');
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('b_s')){
            Schema::create('b_s', function(Blueprint $table){
                $table->increments('id');
$table->string('data', 255)->collation('utf8mb4_unicode_ci'); 
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('catgories')){
            Schema::create('catgories', function(Blueprint $table){
                $table->increments('id');
                $table->unsignedBigInteger('parent_id')->default(0);
                $table->unsignedInteger('lft')->nullable();
                $table->unsignedInteger('rgt')->nullable();
                $table->unsignedInteger('depth')->nullable();
                $table->string('name', 255)->collation('utf8_unicode_ci');
                $table->string('slug', 255)->collation('utf8_unicode_ci');
                $table->timestamps();
                $table->softDeletes();
            });
        }
        if(!Schema::hasTable('comment')){
            Schema::create('comment', function(Blueprint $table){
                $table->increments('id');
                $table->string('username', 255)->collation('utf8mb4_unicode_ci');
                $table->text('comment')->collation('utf8mb4_unicode_ci');
                $table->unsignedBigInteger('id_product'); // Liên kết sản phẩm
                $table->timestamp('created_att')->nullable();
                $table->timestamp('updated_att')->nullable();
            });
        }
        if(!Schema::hasTable('customer')){
            Schema::create('customer', function(Blueprint $table){
                $table->increments('id');
                $table->string('name', 100)->collation('utf8_unicode_ci');
                $table->string('gender', 10)->collation('utf8_unicode_ci');
                $table->string('email', 50)->unique()->collation('utf8_unicode_ci');
                $table->string('address', 100)->collation('utf8_unicode_ci');
                $table->string('phone_number', 20)->collation('utf8_unicode_ci');
                $table->string('note', 200)->nullable()->collation('utf8_unicode_ci'); // Cho phép NULL
                $table->timestamp('created_att')->nullable();
                $table->timestamp('updated_att')->nullable();
            });
        }
        if(!Schema::hasTable('dummies')){
            Schema::create('dummies', function(Blueprint $table){
                $table->increments('id');
                $table->string('name', 255)->collation('utf8_unicode_ci');
                $table->text('description')->collation('utf8_unicode_ci');
                $table->json('extras'); 
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('icons')){
            Schema::create('icons', function(Blueprint $table){
                $table->increments('id');
                $table->string('name', 255)->collation('utf8_unicode_ci'); 
                $table->string('icon', 255)->collation('utf8_unicode_ci'); 
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('menu_items')){
            Schema::create('menu_items', function(Blueprint $table){
                $table->increments('id');
                $table->string('name', 100)->collation('utf8_unicode_ci'); // Tên menu item
                $table->string('type', 20)->nullable()->collation('utf8_unicode_ci'); // Loại menu item
                $table->string('link', 255)->nullable()->collation('utf8_unicode_ci'); // Đường dẫn
                $table->unsignedBigInteger('page_id')->nullable(); // Liên kết với page (nếu có)
                $table->unsignedBigInteger('parent_id')->nullable(); // Menu cha (nếu có)
                $table->unsignedInteger('lft')->nullable(); // Left value (nested set)
                $table->unsignedInteger('rgt')->nullable(); // Right value (nested set)
                $table->unsignedInteger('depth')->nullable(); // Depth level
                $table->timestamps(); // created_at & updated_at
                $table->softDeletes();
            });
        }
        if(!Schema::hasTable('migrations')){
            Schema::create('migrations', function(Blueprint $table){
                $table->increments('id');
                $table->string('migration');
                $table->integer('batch');
            });
        }
        if(!Schema::hasTable('model_has_permissions')){
            Schema::create('model_has_permissions', function(Blueprint $table){
                $table->unsignedBigInteger('permission_id');
                $table->string('model_type');
                $table->unsignedBigInteger('model_id');
            });
        }
        if(!Schema::hasTable('model_has_roles')){
            Schema::create('model_has_roles', function(Blueprint $table){
                $table->unsignedBigInteger('role_id');  
                $table->string('model_type');
                $table->unsignedBigInteger('model_id');
            });
        }
        if(!Schema::hasTable('monsters')){
            Schema::create('monsters', function(Blueprint $table){
                $table->increments('id'); // Tạo cột id tự động tăng
                $table->string('address')->nullable();
                $table->string('browse')->nullable();
                $table->boolean('checkbox')->nullable();
                $table->text('wysiwyg')->nullable();
                $table->string('color')->nullable();
                $table->string('color_picker')->nullable();
                $table->date('date')->nullable();
                $table->date('date_picker')->nullable();
                $table->date('start_date')->nullable();
                $table->date('end_date')->nullable();
                $table->dateTime('datetime')->nullable();
                $table->dateTime('datetime_picker')->nullable();
                $table->string('email')->nullable();
                $table->integer('hidden')->nullable();
                $table->string('icon_picker')->nullable();
$table->string('image')->nullable();
                $table->string('month')->nullable();
                $table->integer('number')->nullable();
                $table->double('float', 8, 2)->nullable();
                $table->string('password')->nullable();
                $table->string('radio')->nullable();
                $table->string('range')->nullable();
                $table->integer('select')->nullable();
                $table->string('select_from_array')->nullable();
                $table->integer('select2')->nullable();
                $table->string('select2_from_ajax')->nullable();
                $table->string('select2_from_array')->nullable();
                $table->text('simplemde')->nullable();
                $table->text('summernote')->nullable();
                $table->text('table')->nullable();
                $table->text('textarea')->nullable();
                $table->string('text');
                $table->text('tinymce')->nullable();
                $table->string('upload')->nullable();
                $table->string('upload_multiple')->nullable();
                $table->string('url')->nullable();
                $table->text('video')->nullable();
                $table->string('week')->nullable();
                $table->text('extras')->nullable();
                $table->binary('base64_image')->nullable();
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('monster_article')){
            Schema::create('monster_article', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo khóa chính
                $table->timestamps(); // Thêm created_at & updated_at
                $table->softDeletes();
            });
        }
        if(!Schema::hasTable('monster_category')){
            Schema::create('monster_category', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo khóa chính
                $table->timestamps(); // Tạo created_at & updated_at
                $table->softDeletes(); 
            });
        }
        if(!Schema::hasTable('monster_tag')){
            Schema::create('monster_tag', function(Blueprint $table){
                $table->increments('id');
                $table->unsignedBigInteger('monster_id');
                $table->unsignedBigInteger('tag_id');
                $table->timestamps();
                $table->softDeletes();
            });
        }
        if(!Schema::hasTable('news')){
            Schema::create('news', function(Blueprint $table){
                $table->increments('id');
                $table->string('title', 200)->comment('tiêu đề');
                $table->text('content')->comment('nội dung');
                $table->string('image', 100)->comment('hình');
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('pages')){
            Schema::create('pages', function(Blueprint $table){
                $table->increments('id');
                $table->string('template');
                $table->string('name');
                $table->string('title');
                $table->string('slug')->unique();
                $table->text('content')->nullable();
                $table->text('extras')->nullable();
                $table->timestamps();
                $table->softDeletes();
            });
        }
        if(!Schema::hasTable('password_resets')){
            Schema::create('password_resets', function(Blueprint $table){
                $table->string('email')->primary();
                $table->string('token');
                $table->timestamp('created_at')->useCurrent();
            });
        }
        if(!Schema::hasTable('permissions')){
            Schema::create('permissions', function(Blueprint $table){
                $table->increments('id');
                $table->string('name');
                $table->string('guard_name');
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('postalboxes')){
            Schema::create('postalboxes', function(Blueprint $table){
                $table->increments('id'); 
                $table->string('postal_name', 255)->nullable();
                $table->integer('monster_id')->notNull();
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('products')){
            Schema::create('products', function(Blueprint $table){
                $table->increments('id'); 
                $table->string('name', 100)->nullable();
                $table->unsignedInteger('id_type')->nullable();
                $table->text('description')->nullable();
                $table->float('unit_price')->nullable();
                $table->float('promotion_price')->nullable();
                $table->string('image', 255)->nullable();
                $table->string('unit', 255)->nullable();
                $table->tinyInteger('new')->default(0);
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('revisions')){
            Schema::create('revisions', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo cột id kiểu UNSIGNED INT(10) và AUTO_INCREMENT
                $table->string('revisionable_type', 255);
                $table->integer('revisionable_id')->notNull();
                $table->integer('user_id')->nullable();
                $table->string('key', 255);
                $table->text('old_value')->nullable();
                $table->text('new_value')->nullable();
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('roles')){
            Schema::create('roles', function(Blueprint $table){
                $table->increments('id');
        $table->string('name', 255);
                $table->string('guard_name', 255);
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('role_has_permissions')){
            Schema::create('role_has_permissions', function(Blueprint $table){
                $table->unsignedInteger('permission_id');
                $table->unsignedInteger('role_id');
            });
        }
        if(!Schema::hasTable('settings')){
            Schema::create('settings', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo cột id kiểu UNSIGNED INT(10) và AUTO_INCREMENT
                $table->string('key', 255);
                $table->string('name', 255);
                $table->string('description', 255)->nullable();
                $table->string('value', 255)->nullable();
                $table->text('field');
                $table->tinyInteger('active');
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('slides')){
            Schema::create('slides', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo cột id kiểu UNSIGNED INT(11) và AUTO_INCREMENT
                $table->string('link', 100);
                $table->string('image', 100);
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('tags')){
            Schema::create('tags', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo cột id kiểu UNSIGNED INT(10) và AUTO_INCREMENT
                $table->string('name', 255);
                $table->string('slug', 255);
                $table->timestamps(); // Tạo created_at và updated_at
                $table->softDeletes();
            });
        }
        if(!Schema::hasTable('type_products')){
            Schema::create('type_products', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo cột id kiểu UNSIGNED INT(10) và AUTO_INCREMENT
                $table->string('name', 100);
                $table->text('description');
                $table->string('image', 255);
                $table->timestamps();
            });
        }
        if(!Schema::hasTable('users')){
            Schema::create('users', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo cột id kiểu UNSIGNED INT(10) và AUTO_INCREMENT
                $table->string('name', 255);
                $table->string('email', 255)->unique();
                $table->timestamp('email_verified_at')->nullable();
                $table->string('password', 255);
                $table->rememberToken();
                $table->enum('role', ['admin', 'user'])->default('user');
                $table->boolean('is_active')->default(true);
                $table->timestamps(); // Tạo created_at và updated_at
                $table->softDeletes();
            });
        }
        if(!Schema::hasTable('wishlists')){
            Schema::create('wishlists', function(Blueprint $table){
                $table->increments('id'); // Tự động tạo cột id kiểu UNSIGNED INT(10) và AUTO_INCREMENT
                $table->integer('quantity')->default(1);
                $table->timestamps();
            });
        }
        return "Done";
    }}