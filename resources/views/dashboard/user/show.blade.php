@extends('dashboard.layouts.main')

@php
use App\Enums\UserRole;
@endphp

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="page-header"><h3 class="page-title">Quản lý: {{ $user->name }}</h3></div>
        <div class="widget widget-content-area">
            <form action="{{ route('manager.user.update') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                          <label for="name text-primary">Tên</label>
                          <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $user->name) }}" placeholder="Tên khách hàng" minlength="2" required>
                          @error('name')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" name="email" id="email" class="form-control" value="{{ old('email', $user->email) }}"  placeholder="Nhập SĐT" maxlength="10" minlength="10" readonly>
                          @error('email')
                          <div class="invalid-feedback d-block">{{ $message }}</div>
                          @enderror
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                      <div class="form-group">
                        <label for="address">Địa chỉ</label>
                        <input type="text" name="address" id="address" value="{{ old('address') }}" class="form-control" placeholder="Nhập địa chỉ khách hàng" readonly>
                      </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                          <label for="role">Vai trò</label>
                          <select class="form-control" name="role" id="role">
                            @foreach (UserRole::cases() as $role)
                                <option value="{{ $role->value }}" {{ $role->value === old('role', $user->role->value) ?: 'selected' }}>{{ Str::headline($role->value) }}</option>
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
                          <label for="password_confirmation">Nhập lại mật khẩu</label>
                          <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" placeholder="Nhập lại mật khẩu" required>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center mt-3">
                  <button type="submit" class="btn btn-lg btn-success">Cập nhật</button>
                </div>

            </form>
        </div>
    </div>
</div>
@endsection
