<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;




class SchemaController extends Controller
{
    public function index(){
        if (!Schema::hastable('addresses')){
            Schema::create('addresses', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính với kiểu UNSIGNED BIGINT
                $table->string('street', 255)->nullable();
                $table->string('country', 255);
                $table->unsignedBigInteger('icon_id')->nullable();
                $table->unsignedBigInteger('monster_id');
    
                $table->timestamps();


            
            });

            Schema::create('articles', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->unsignedBigInteger('category_id');
                $table->string('title', 255);
                $table->string('slug', 255)->default('');
                $table->text('content');
                $table->string('image', 255)->nullable();
                $table->enum('status', ['PUBLISHED', 'DRAFT'])->default('PUBLISHED');
                $table->date('date');
                $table->boolean('featured')->default(0);
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('article_tag', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->unsignedBigInteger('article_id');
                $table->unsignedBigInteger('tag_id');
                $table->timestamps();
                $table->softDeletes();
    
                // Khóa ngoại nếu có bảng articles và tags
                // $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
                // $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            });

            Schema::create('a_s', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->unsignedBigInteger('b_s_id');
                
                // Nếu có bảng `b_s`, thêm khóa ngoại:
                // $table->foreign('b_s_id')->references('id')->on('b_s')->onDelete('cascade');
            });

            Schema::create('bills', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->unsignedBigInteger('id_customer')->nullable();
                $table->date('date_order')->nullable();
                $table->float('total')->nullable()->comment('Tổng tiền');
                $table->string('payment', 200)->nullable()->comment('Hình thức thanh toán');
                $table->string('note', 500)->nullable();
                $table->timestamps();
    
                // Nếu có bảng customers, thêm khóa ngoại
                // $table->foreign('id_customer')->references('id')->on('customers')->onDelete('set null');
            });

            Schema::create('b_s', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->string('data', 255);
            });

            Schema::create('categories', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->unsignedBigInteger('parent_id')->default(0);
                $table->unsignedInteger('lft')->nullable();
                $table->unsignedInteger('rgt')->nullable();
                $table->unsignedInteger('depth')->nullable();
                $table->string('name', 255);
                $table->string('slug', 255);
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('comments', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->string('username', 255);
                $table->text('comment');
                $table->unsignedBigInteger('id_product');
                $table->timestamps();
    
                // Nếu có bảng products, thêm khóa ngoại
                // $table->foreign('id_product')->references('id')->on('products')->onDelete('cascade');
            });

            Schema::create('customers', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->string('name', 100);
                $table->string('gender', 10);
                $table->string('email', 50)->unique();
                $table->string('address', 100);
                $table->string('phone_number', 20);
                $table->string('note', 200);
                $table->timestamps();
            });

            Schema::create('dummies', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->string('name', 255);
                $table->text('description');
                $table->json('extras'); // Dùng kiểu JSON thay vì LONGTEXT với CHECK
                $table->timestamps();
            });

            Schema::create('failed_jobs', function (Blueprint $table) {
                $table->id(); // BIGINT UNSIGNED NOT NULL AUTO_INCREMENT
                $table->text('connection');
                $table->text('queue');
                $table->longText('payload');
                $table->longText('exception');
                $table->timestamp('failed_at')->useCurrent();
            });

            Schema::create('icons', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->string('name', 255);
                $table->string('icon', 255);
                $table->timestamps();
            });

            Schema::create('menu_items', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->string('name', 100);
                $table->string('type', 20)->nullable();
                $table->string('link', 255)->nullable();
                $table->unsignedBigInteger('page_id')->nullable();
                $table->unsignedBigInteger('parent_id')->nullable();
                $table->unsignedInteger('lft')->nullable();
                $table->unsignedInteger('rgt')->nullable();
                $table->unsignedInteger('depth')->nullable();
                $table->timestamps();
                $table->softDeletes();
    
                // Nếu có bảng pages, có thể thêm khóa ngoại
                // $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
    
                // Nếu hỗ trợ menu đa cấp, có thể thêm khóa ngoại
                // $table->foreign('parent_id')->references('id')->on('menu_items')->onDelete('cascade');
            });

            Schema::create('migrations', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->string('migration', 191);
                $table->integer('batch');
            });

            Schema::create('model_has_permissions', function (Blueprint $table) {
                $table->unsignedBigInteger('permission_id');
                $table->string('model_type', 255);
                $table->unsignedBigInteger('model_id');
    
                $table->primary(['permission_id', 'model_id', 'model_type']); // Khóa chính tổng hợp
    
                // Nếu dùng Spatie Laravel Permission, có thể thêm khóa ngoại
                // $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            });

            Schema::create('model_has_roles', function (Blueprint $table) {
                $table->unsignedBigInteger('role_id');
                $table->string('model_type', 255);
                $table->unsignedBigInteger('model_id');
    
                $table->primary(['role_id', 'model_id', 'model_type']); // Khóa chính tổng hợp
    
                // Nếu dùng Spatie Laravel Permission, có thể thêm khóa ngoại
                // $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            });

            Schema::create('monsters', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
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
                $table->string('text')->nullable();
                $table->text('tinymce')->nullable();
                $table->string('upload')->nullable();
                $table->string('upload_multiple')->nullable();
                $table->string('url')->nullable();
                $table->text('video')->nullable();
                $table->string('week')->nullable();
                $table->text('extras')->nullable();
                $table->mediumBlob('base64_image')->nullable();
                $table->timestamps(); // Tạo created_at và updated_at tự động
            });

            Schema::create('monster_article', function (Blueprint $table) {
                $table->id(); // Tự động tạo khóa chính (bigint unsigned)
                $table->unsignedBigInteger('monster_id');
                $table->unsignedBigInteger('article_id');
                $table->timestamps();
                $table->softDeletes(); // Tạo cột deleted_at để hỗ trợ xóa mềm
    
                // Khóa ngoại
                $table->foreign('monster_id')->references('id')->on('monsters')->onDelete('cascade');
                $table->foreign('article_id')->references('id')->on('articles')->onDelete('cascade');
            });

            Schema::create('monster_category', function (Blueprint $table) {
                $table->id(); // Khóa chính tự động tăng
                $table->unsignedBigInteger('monster_id');
                $table->unsignedBigInteger('category_id');
                $table->timestamps(); // Thêm created_at và updated_at
                $table->softDeletes(); // Thêm deleted_at để hỗ trợ xóa mềm
    
                // Khóa ngoại
                $table->foreign('monster_id')->references('id')->on('monsters')->onDelete('cascade');
                $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            });

            Schema::create('monster_tag', function (Blueprint $table) {
                $table->id(); // Khóa chính tự động tăng
                $table->unsignedBigInteger('monster_id');
                $table->unsignedBigInteger('tag_id');
                $table->timestamps(); // Thêm created_at và updated_at
                $table->softDeletes(); // Thêm deleted_at để hỗ trợ xóa mềm
    
                // Khóa ngoại
                $table->foreign('monster_id')->references('id')->on('monsters')->onDelete('cascade');
                $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
            });

            Schema::create('news', function (Blueprint $table) {
                $table->id(); // Khóa chính tự động tăng
                $table->string('title', 200)->comment('Tiêu đề');
                $table->text('content')->comment('Nội dung');
                $table->string('image', 100)->comment('Hình');
                $table->timestamps(); // Tạo created_at và updated_at
            });

            Schema::create('pages', function (Blueprint $table) {
                $table->id(); // Khóa chính tự động tăng
                $table->string('template')->comment('Tên template');
                $table->string('name')->comment('Tên trang');
                $table->string('title')->comment('Tiêu đề');
                $table->string('slug')->unique()->comment('Đường dẫn URL');
                $table->text('content')->nullable()->comment('Nội dung trang');
                $table->text('extras')->nullable()->comment('Dữ liệu bổ sung');
                $table->timestamps(); // Tạo created_at và updated_at
                $table->softDeletes(); // Tạo deleted_at để hỗ trợ soft delete
            });

            Schema::create('password_resets', function (Blueprint $table) {
                $table->string('email')->index()->comment('Email người dùng');
                $table->string('token')->comment('Mã token reset mật khẩu');
                $table->timestamp('created_at')->nullable()->comment('Thời điểm tạo');
            });

            Schema::create('permissions', function (Blueprint $table) {
                $table->id();
                $table->string('name')->comment('Tên quyền');
                $table->string('guard_name')->comment('Guard sử dụng');
                $table->timestamps();
            });

            Schema::create('postalboxes', function (Blueprint $table) {
                $table->id();
                $table->string('postal_name')->nullable()->comment('Tên hộp thư');
                $table->unsignedBigInteger('monster_id')->comment('ID của monster');
                $table->timestamps();
                
                // Khóa ngoại liên kết với bảng monsters (nếu có)
                $table->foreign('monster_id')->references('id')->on('monsters')->onDelete('cascade');
            });

            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('name', 100)->nullable()->comment('Tên sản phẩm');
                $table->unsignedBigInteger('id_type')->nullable()->comment('Loại sản phẩm');
                $table->text('description')->nullable()->comment('Mô tả sản phẩm');
                $table->float('unit_price')->nullable()->comment('Giá gốc');
                $table->float('promotion_price')->nullable()->comment('Giá khuyến mãi');
                $table->string('image', 255)->nullable()->comment('Hình ảnh');
                $table->string('unit', 255)->nullable()->comment('Đơn vị tính');
                $table->tinyInteger('new')->default(0)->comment('Sản phẩm mới: 1 - Có, 0 - Không');
                $table->timestamps();
    
                // Khóa ngoại liên kết với bảng `product_types` nếu có
                $table->foreign('id_type')->references('id')->on('product_types')->onDelete('set null');
            });

            Schema::create('revisions', function (Blueprint $table) {
                $table->id();
                $table->string('revisionable_type', 255)->comment('Tên model được sửa đổi');
                $table->unsignedBigInteger('revisionable_id')->comment('ID của model được sửa đổi');
                $table->unsignedBigInteger('user_id')->nullable()->comment('ID người dùng thực hiện chỉnh sửa');
                $table->string('key', 255)->comment('Trường bị thay đổi');
                $table->text('old_value')->nullable()->comment('Giá trị cũ');
                $table->text('new_value')->nullable()->comment('Giá trị mới');
                $table->timestamps();
    
                // Khóa ngoại với bảng users nếu có
                $table->foreign('user_id')->references('id')->on('users')->onDelete('set null');
            });

            Schema::create('roles', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255)->unique()->comment('Tên vai trò');
                $table->string('guard_name', 255)->comment('Guard cho vai trò');
                $table->timestamps();
            });

            Schema::create('role_has_permissions', function (Blueprint $table) {
                $table->unsignedBigInteger('permission_id');
                $table->unsignedBigInteger('role_id');
    
                $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
                $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
    
                $table->primary(['permission_id', 'role_id']);
            });

            Schema::create('settings', function (Blueprint $table) {
                $table->id();
                $table->string('key')->unique();
                $table->string('name');
                $table->string('description')->nullable();
                $table->string('value')->nullable();
                $table->text('field');
                $table->boolean('active')->default(1);
                $table->timestamps();
            });

            Schema::create('slides', function (Blueprint $table) {
                $table->id();
                $table->string('link', 100)->nullable();
                $table->string('image', 100);
                $table->timestamps();
            });
            
            Schema::create('tags', function (Blueprint $table) {
                $table->id();
                $table->string('name', 255);
                $table->string('slug', 255)->unique();
                $table->timestamps();
                $table->softDeletes();
            });

            Schema::create('type_products', function (Blueprint $table) {
                $table->id();
                $table->string('name', 100);
                $table->text('description');
                $table->string('image', 255);
                $table->timestamps();
            });
            Schema::create('users', function (Blueprint $table) {
                $table->id(); // UNSIGNED BIGINT tự động tăng
                $table->string('name', 255);
                $table->string('email', 255)->unique();
                $table->string('password', 255);
                $table->rememberToken(); // Cột remember_token (100 ký tự)
                $table->timestamps();
            });
    
            Schema::create('wishlists', function (Blueprint $table) {
                $table->id(); // Tự động tạo cột id (UNSIGNED BIGINT, AUTO_INCREMENT)
                $table->foreignId('id_user')->constrained('users')->onDelete('cascade');
                $table->foreignId('id_product')->constrained('products')->onDelete('cascade');
                $table->integer('quantity')->default(1);
                $table->timestamps(); // Tự động tạo created_at và updated_at
            });


        }
        return "Done";
        
    }
}
