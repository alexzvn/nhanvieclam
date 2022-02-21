@extends('dashboard.layouts.main')

@push('styles')
<link href="{{ asset('assets/css/tables/table-basic.css') }}" rel="stylesheet" type="text/css">
@endpush

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="page-header"><h3 class="page-title">Tất cả tài khoản</h3></div>
        <div class="widget widget-content-area">
            <div class="table-responsive">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Email</th>
                        <th>Vai trò</th>
                        <th>Ngày tạo</th>
                        <th></th>
                    </tr>
                    @foreach ($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ str($user->role->value)->headline() }}</td>
                        <td>{{ $customer->created_at->format('d/m/Y') }}</td>
                        <td class="text-center">
                            <ul class="table-controls">
                                <li><a href="{{ route('manager.user.show', $user) }}"><i data-feather="edit"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $users->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
