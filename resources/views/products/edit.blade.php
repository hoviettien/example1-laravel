@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h2>Chỉnh sửa sản phẩm</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('products.update', $product['id']) }}" method="POST">
            @csrf
            @method('PATCH')

            <div class="mb-3">
                <label for="createdAt" class="form-label">Ngày tạo</label>
                <input type="datetime-local" id="createdAt" name="createdAt"
                    value="{{ \Carbon\Carbon::parse($product['createdAt'])->format('Y-m-d\TH:i') }}" required
                    class="form-control">
            </div>

            <div class="mb-3">
                <label for="name" class="form-label">Tên sản phẩm</label>
                <input type="text" id="name" name="name" value="{{ $product['name'] }}" required class="form-control">
            </div>

            <div class="mb-3">
                <label for="avatar" class="form-label">URL hình ảnh</label>
                <input type="url" id="avatar" name="avatar" value="{{ $product['avatar'] }}" required class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Cập nhật</button>
        </form>
    </div>
@endsection