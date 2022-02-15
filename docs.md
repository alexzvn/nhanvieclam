# Chợ việc làm

Môi giới việc làm chạy trên nền tảng web và mobile

**Tính năng chung:**

## Mục lục tin rao

Các trường cơ bản:

- Tiêu đề (2-3) dòng
- Mở bán (true/false)
- Đã bán (true/false)
- Mô tả (tuỳ chọn)
- Mô tả chi tiết (*hidden)
- Địa chỉ (*hidden)
- Số lượng thợ (slot)
- Số điện thoại (*hidden)
- Hình ảnh/video
- Quan trọng
- Deadline
- Ngày tháng đã tạo
- Giá đã đàm phấn
- Chiết khấu khi chưa có giá đàm phán (required: cần cấp quyền, tk > 200k)

Các trường quản lý:

- Vùng làm việc (HN, HP, HCM)
- Người đăng
- Danh mục

```txt
*hidden: Phải mua thì ms xem đx
```

## Phần khách hàng

Thông tin cơ bản:

- Tên
- Số điện thoại
- Địa chỉ
- CMT / CCCD
- Check xác thực

Thông tin quản lý:

- Số tiền
- Biến động số dư
- Lịch sử mua tin (Đã làm, huỷ bỏ, đang làm, chờ làm, ...)

### Trang giao việc, việc làm

Các chưc năng chung cần có:

```txt
Đăng nhập 1 thiết bị một lúc
Thông báo đẩy từ quản trị
Thông báo nhận tin mới
```

#### Tin rao vặt

- Hiển thị đếm ngược
- Deadline thời gian
- Giá đàm phán/ chiết khấu
- Tiêu đề, mô tả chung

#### Xử lý việc làm

Trường hợp thợ mua đứt việc nhưng không đàm phán được:

1. Vào phần quản lý việc
2. Huỷ việc đã mua (feedback)
3. [Admin] Hoàn trả 30%

Trường hợp đã mua đứt việc trong 24h:

1. Tự động chuyển qua trạng thái hoàn thành

Trường hợp thợ nhận việc trả sau huỷ việc:

1. Vào phần quản lý việc
2. Huỷ việc đã mua (có feedback)
3. Đóng phí phạt xxx.xxxđ (có thể thay đổi)

Trường hợp thợ nhận việc trả sau quá 24h chưa ấn nút hoàn thành:

1. Huỷ nhận tư cách việc tiếp theo
2. Cần hoàn thành hoặc huỷ để nhận việc khác

```txt
Các tin trả sau yêu cầu phải nhập số tiền sau khi nhấn nút hoàn thành
```

### Lịch sử mua bán việc

- Ngăn những tin đang làm với những tin còn lại
- Cho phép tin đang làm update trạng thái

## Phẩn quản trị nhân viên / Admin

### Trang chủ

Hiển thị báo cáo

### Danh mục

Chỉnh sửa, thêm, xoá danh mục

### Việc làm

Thêm, xoá, sửa, cập nhật trạng thái, việc làm

### Lịch sử mua/bán việc làm

```txt
Xử lý yêu cầu huỷ việc làm
Chỉnh sửa giá/chiết khấu
Xử lý trạng thái của việc làm
Lọc theo ngày
```

### Lịch sử nạp tiền

### Khách hàng

Hỗ trợ chia lĩnh vực hoạt động

```txt
Nạp tiền
Trừ tiền
Tạo tài khoản
Sửa thông tin
Khoá tài khoản

Tổng hợp hoạt động của tài khoản
```

#### Loại thường

- Mua đứt tin

#### Loại thân thiết

- Mua chiết khấu

#### Loại vip

- Mua đứt tin
- Mua tin chiết khấu

### Nhân viên

- Chung hết
