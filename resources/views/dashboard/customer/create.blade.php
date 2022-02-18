@extends('dashboard.layouts.main')

@php
use App\Enums\CustomerRole;
@endphp

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="page-header"><h3 class="page-title">Tạo tài khoản khách hàng</h3></div>
        <div class="widget widget-content-area">
            <form action="{{ route('manager.customer.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label for="name text-primary">Tên</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" placeholder="Tên khách hàng" minlength="2" required>
                          @error('name')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="phone">Số ĐT</label>
                          <input type="text" name="phone" id="phone" class="form-control" value="{{ old('phone') }}"  placeholder="Nhập SĐT" maxlength="10" minlength="10" required>
                          @error('phone')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                  <label for="address">Địa chỉ</label>
                  <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control" placeholder="Nhập địa chỉ khách hàng">
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="identity_id">CMT/CCCD <small>(tuỳ chọn)</small></label>
                            <input type="text" name="identity_id" id="identity_id" value="{{ old('identity_id') }}" class="form-control" placeholder="Số CMT/CCCD">
                            @error('identity_id')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="role">Ranking</label>
                          <select class="form-control" name="role" id="role">
                            @foreach (CustomerRole::cases() as $role)
                                <option value="{{ $role->value }}" {{ $role->value === old('role') ?: 'selected' }}>{{ Str::headline($role->value) }}</option>
                            @endforeach
                          </select>
                          @error('role')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label for="password">Mật khẩu</label>
                          <input type="password" class="form-control" name="password" id="password" placeholder="Mật khẩu mới" required>
                          @error('password')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="password_confirmed">Nhập lại mật khẩu</label>
                          <input type="password" class="form-control" name="password_confirmed" id="password_confirmed" placeholder="Nhập lại mật khẩu" required>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center mt-3">
                  <button type="submit" class="btn btn-lg btn-primary">Tạo mới</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
