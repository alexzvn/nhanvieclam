@extends('dashboard.layouts.main')

@push('styles')
<link href="{{ asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
<div class="page-header">
    <h3 class="page-title">Quản lý danh mục</h3>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="widget widget-content-area">
            <form action="{{ route('manager.category.store') }}" method="POST">
                @csrf
                
                <div class="form-group">
                  <label for="name">Tên danh mục</label>
                  <input type="text" class="form-control" name="name" id="name" placeholder="Tên của danh mục" required>
                </div>

                <button type="button" class="btn btn-success">Tạo mới</button>
            </form>
        </div>
    </div>

    <div class="col-md-6">
        <div class="widget widget-content-area">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th></th>
                    </tr>
                    @foreach ($categories as $cate)
                    <tr>
                        <td>{{ $cate->id }}</td>
                        <td>{{ $cate->name }}</td>
                        <td class="text-center">
                            <ul class="table-controls">
                                <li><a href="{{ route('manager.category.show', $cate) }}"><i data-feather="edit"></i></a></li>
                                <li x-data={} class="text-danger">
                                    <form x-ref="form" action="{{ route('manager.category.delete', $cate) }}" method="POST">@csrf</form>
                                    <a href="javascript:void(0)" @click="confirm('Đồng ý xoá danh mục {{ $cate->name }}?') && $refs.form.submit()">
                                        <i data-feather="trash"></i>
                                    </a>
                                </li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
