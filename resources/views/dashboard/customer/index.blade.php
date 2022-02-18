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
                        <th>SĐT</th>
                        <th>Số dư</th>
                        <th>Ngày tạo</th>
                        <th></th>
                    </tr>
                    @foreach ($customers as $customer)
                    <tr>
                        <td>{{ $customer->id }}</td>
                        <td>{{ $customer->name }}</td>
                        <td>{{ $customer->phone }}</td>
                        <td>{{ number_format($customer->balance) }} đ</td>
                        <td>{{ $customer->created_at->format('d/m/Y') }}</td>
                        <td class="text-center">
                            <ul class="table-controls">
                                <li><a href="{{ route('manager.customer.show', $customer) }}"><i data-feather="edit"></i></a></li>
                            </ul>
                        </td>
                    </tr>
                    @endforeach
                </table>
            </div>

            <div class="d-flex justify-content-center">
                {{ $customers->withQueryString()->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
