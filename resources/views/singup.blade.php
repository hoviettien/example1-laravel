<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Đăng Ký</title>
</head>
<body>
    <h2>Form Đăng Ký</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form action="{{ url('/formkq') }}" method="POST" style="width: 400px; height: 490px; border:1px solid black; border-radius: 10px;">
        @csrf

        <label style="margin-left: 20px;">Họ Tên:</label>
        <br>
        <input type="text" name="name" value="{{ old('name') }}" style="margin-left: 20px; width: 88%;">
        @error('name')
            <span style="color: red; margin-left: 20px;">{{ $message }}</span>
        @enderror
        <br>
        <br>

        <label style="margin-left: 20px;">Tuổi:</label>
        <br>
        <input type="number" name="age" value="{{ old('age') }}" style="margin-left: 20px; width: 88%;">
        @error('age')
            <span style="color: red; margin-left: 20px;">{{ $message }}</span>
        @enderror
        <br>
        <br>
        <label style="margin-left: 20px;">Ngày Sinh:</label>
        <br>
        <input type="date" name="date" value="{{ old('date') }}" style="margin-left: 20px; width: 88%;">
        @error('date')
            <span style="color: red; margin-left: 20px;">{{ $message }}</span>
        @enderror
        <br>
        <br>

        <label style="margin-left: 20px;">Điện Thoại:</label>
        <br>
        <input type="text" name="phone" value="{{ old('phone') }}" style="margin-left: 20px; width: 88%;">
        @error('phone')
            <span style="color: red; margin-left: 20px;">{{ $message }}</span>
        @enderror
        <br>
        <br>

        <label style="margin-left: 20px;">Website:</label>
        <br>
        <input type="text" name="web" value="{{ old('web') }}" style="margin-left: 20px; width: 88%;">
        @error('web')
            <span style="color: red; margin-left: 20px;">{{ $message }}</span>
        @enderror
        <br>
        <br>

        <label style="margin-left: 20px;">Địa Chỉ:</label>
        <br>
        <input type="text" name="address" value="{{ old('address') }}" style="margin-left: 20px; width: 88%;">
        @error('address')
            <span style="color: red; margin-left: 20px;">{{ $message }}</span>
        @enderror
        <br>
        <br>

        <button type="submit" style="width: 70px; height: 30px; margin-left: 40%; background-color: yellow; border-radius: 5px;">OK</button>
    </form>
<!-- 
    @if(isset($user))
        <h3>Thông Tin Đã Nhập:</h3>
        <p>Họ Tên: {{ $user['name'] }}</p>
        <p>Tuổi: {{ $user['age'] }}</p>
        <p>Ngày Sinh: {{ $user['date'] }}</p>
        <p>Điện Thoại: {{ $user['phone'] }}</p>
        <p>Website: {{ $user['web'] }}</p>
        <p>Địa Chỉ: {{ $user['address'] }}</p>
    @endif -->
    <div>
        @if(isset($userSession))
            @foreach($userSession as $user)
                <h3>Thông Tin User:</h3>
                <p>Họ Tên: {{ $user['name'] }}</p>
                <p>Tuổi: {{ $user['age'] }}</p>
                <p>Ngày Sinh: {{ $user['date'] }}</p>
                <p>Điện Thoại: {{ $user['phone'] }}</p>
                <p>Website: {{ $user['web'] }}</p>
                <p>Địa Chỉ: {{ $user['address'] }}</p>
            @endforeach
        @endif
    </div>

</body>
</html>