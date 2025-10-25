@extends('layouts.app')

@section('content')
<div class="contact-container">
    <div class="contact-info">
        <h3>Thông tin liên hệ</h3>
        <p><strong>Địa chỉ:</strong><br>Trường Đại học Sư Phạm Đà Nẵng</p>
        <p><strong>Điện thoại:</strong><br>(84) 123-456-789</p>
        <p><strong>Email:</strong><br>info@nhom9.com</p>
        <p><strong>Giờ mở cửa:</strong><br>Thứ 2 - Chủ nhật: 7:00 - 22:00</p>
    </div>

    <div class="contact-form">
        <h3>Gửi tin nhắn cho chúng tôi</h3>
        <form action="#" method="POST">
            <label for="name">Họ và tên</label>
            <input type="text" id="name" name="name" placeholder="Nhập họ và tên">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="Nhập email">

            <label for="subject">Chủ đề</label>
            <input type="text" id="subject" name="subject" placeholder="Nhập chủ đề">

            <label for="message">Nội dung</label>
            <textarea id="message" name="message" rows="4" placeholder="Nhập nội dung..."></textarea>

            <button type="submit">Gửi tin nhắn</button>
        </form>
    </div>
</div>
@endsection

<style>

.contact-container {
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    padding: 40px 80px;
    gap: 50px;
    font-family: 'Poppins', sans-serif;
    color: #333;
}


.contact-info {
    flex: 1;
    background-color: #f7f7f7;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}
.contact-info h3 {
    margin-bottom: 15px;
    color: #c0a060;
}


.contact-form {
    flex: 1;
    background-color: #fff;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.05);
}
.contact-form h3 {
    margin-bottom: 20px;
    color: #c0a060;
}


.contact-form label {
    display: block;
    font-weight: 500;
    margin-bottom: 5px;
}

.contact-form input[type="text"],
.contact-form input[type="email"],
.contact-form textarea {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 6px;
    font-family: inherit;
    font-size: 14px;
    transition: border-color 0.3s;
}

.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #c0a060;
    outline: none;
}


.contact-form button {
    background-color: #000;
    color: #fff;
    border: none;
    padding: 12px 20px;
    border-radius: 6px;
    cursor: pointer;
    transition: background-color 0.3s;
    font-weight: 500;
}
.contact-form button:hover {
    background-color: #c0a060;
    color: #000;
}


@media (max-width: 768px) {
    .contact-container {
        flex-direction: column;
        padding: 20px;
    }
}
</style>
