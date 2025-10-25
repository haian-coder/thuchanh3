<header>
    <div class="header-container">
        <p class="logo">Roastery Coffee</p>
        <nav>
            <ul class="nav-list">
                <li><a href="{{ url('/') }}">Trang chủ</a></li>
                <li><a href="{{ url('about') }}">Giới thiệu</a></li>
                <li><a href="{{ url('menu') }}">Thực đơn</a></li>
                <li><a href="{{ url('beans-story') }}">Câu chuyện hạt cà phê</a></li>
                <li><a href="{{ url('contact') }}">Liên hệ</a></li>
            </ul>
        </nav>
    </div>
</header>


<style>

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

header {
    width: 100%;
    background-color: #000;
    color: white;
    font-family: 'Poppins', sans-serif;
}

.header-container {
    display: flex;
    align-items: center;
    justify-content: space-between;
    height: 60px;
    padding: 0 40px;
}

.logo {
    font-size: 22px;
    font-weight: 600;
    margin: 0;
}

.nav-list {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 25px;
}

.nav-list a {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease, border-bottom 0.3s ease;
    padding-bottom: 2px;
}

.nav-list a:hover {
    color: #c0a060;
    border-bottom: 2px solid #c0a060;
}

@media (max-width: 768px) {
    .header-container {
        flex-direction: column;
        align-items: center;
        height: auto;
        padding: 10px 20px;
    }

    .nav-list {
        flex-direction: column;
        gap: 10px;
        text-align: center;
    }
}
</style>
