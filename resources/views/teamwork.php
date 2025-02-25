<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sản Phẩm</title>
</head>
<body style="font-family: Arial, sans-serif; background: #f4f4f4; display: flex; justify-content: center; align-items: center; height: 100vh;">

    <div style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); width: 600px; border: 2px solid blue;">
        <form action="{{ url('/product') }}" method="POST" enctype="multipart/form-data">
            <!-- @csrf -->

            <label style="display: block; font-weight: bold; margin-bottom: 5px;" name="categories">Danh mục sản phẩm.</label>
            <select name="category" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;">
                <option value="Điện thoại di động">Điện thoại di động</option>
                <option value="Máy tính bảng">Máy tính bảng</option>
                <option value="Laptop">Laptop</option>
                <option value="Phụ kiện">Phụ kiện</option>
                <option value="Đồng hồ">Đồng hồ</option>
            </select>

            <label style="display: block; font-weight: bold; margin-bottom: 5px;" name="information">Thông tin.</label>
            <select name="info" style="width: 100%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;">
                <option value="Sản phẩm nổi bật">Sản phẩm nổi bật</option>
                <option value="Sản phẩm mới ra mắt">Sản phẩm mới ra mắt</option>
                <option value="Sản phẩm giảm giá">Sản phẩm giảm giá</option>
            </select>

            <input type="text" name="name" placeholder="Tên sản phẩm" required 
                style="width: 97.1%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;">

            <input type="number" name="price" placeholder="Giá sản phẩm" required 
                style="width: 97.1%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;">

            <input type="number" name="old_price" placeholder="Giá cũ" 
                style="width: 97.1%; padding: 8px; margin-bottom: 10px; border: 1px solid #ddd; border-radius: 4px;">

            <label style="display: block; font-weight: bold; margin-bottom: 5px;">
                Thêm ảnh sản phẩm * <span style="color: red;">Bắt buộc</span>
            </label>
            <input type="file" name="image" required style="margin-bottom: 10px;">

            <div style="display: flex; justify-content: center; gap: 20px; margin-top: 10px;">
                <button type="submit" style="width: 120px; padding: 10px; background: red; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 20px; font-weight: bold;">save</button>
                <button type="button" onclick="alert('Hiển thị sản phẩm')" 
                    style="width: 120px; padding: 10px; background: red; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 20px; font-weight: bold;">Show</button>
            </div>
        </form>
    </div>

</body>
</html>
