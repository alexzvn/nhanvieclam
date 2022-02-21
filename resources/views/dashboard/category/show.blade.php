@extends('dashboard.layouts.main')


@section('content')
<div class="row justify-content-center">
    <div class="col-md-4">
        <div class="page-header"><h3 class="page-title">Sửa danh mục {{ $category->name }}</h3></div>
        <div class="widget widget-content-area">
            <form action="{{ route('manager.category.update', $category) }}" method="POST">
                @csrf
                <div class="form-group">
                  <label for="name">Tên danh mục</label>
                  <input type="text" class="form-control" name="name" id="name" value="{{ old('name', $category->name) }}" placeholder="Tên của danh mục" required>
                </div>

                <button class="btn btn-primary" type="submit">Lưu lại</button>
            </form>
        </div>
    </div>
</div>
@endsection
