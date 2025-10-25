@extends('layouts.app')

@section('content')
    <h1>Thực đơn</h1>
    <div class="menu-container">
        @foreach($drinks as $drink)
            <div class="drink-item">
                <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}" class="drink-image">
                <div class="drink-details">
                    <h3>{{ $drink['name'] }}</h3>
                    <p>{{ $drink['description'] }}</p>
                    <p class="price">{{ number_format($drink['price'], 0) }}₫</p>
                    <a href="{{ route('menu.detail', ['id' => $drink['id']]) }}" class="view-details">Xem chi tiết</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

<style>

h1 {
    text-align: center;
    font-size: 2.8em;
    color: #2c3e50;
    margin: 40px 0;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    position: relative;
}

h1::after {
    content: '';
    display: block;
    width: 60px;
    height: 4px;
    background: #e67e22;
    margin: 15px auto;
    border-radius: 2px;
}


.menu-container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 20px;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
}


.drink-item {
    background-color: #fff;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    position: relative;
}

.drink-item:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
}


.drink-image {
    width: 100%;
    height: 250px;
    object-fit: cover;
    transition: transform 0.5s ease;
}

.drink-item:hover .drink-image {
    transform: scale(1.05);
}


.drink-details {
    padding: 20px;
    background: linear-gradient(to bottom, rgba(255,255,255,0.95), #fff);
}

.drink-details h3 {
    font-size: 1.5em;
    color: #2c3e50;
    margin-bottom: 12px;
    font-weight: 600;
}

.drink-details p {
    font-size: 1em;
    color: #7f8c8d;
    line-height: 1.6;
    margin-bottom: 15px;
}


.price {
    font-weight: 700;
    color: #e67e22;
    font-size: 1.4em;
    margin: 15px 0;
    display: block;
}


.view-details {
    display: inline-block;
    padding: 12px 25px;
    background-color: #2ecc71;
    color: white;
    text-decoration: none;
    border-radius: 25px;
    font-weight: 500;
    transition: all 0.3s ease;
    text-transform: uppercase;
    letter-spacing: 1px;
    font-size: 0.9em;
}

.view-details:hover {
    background-color: #27ae60;
    transform: translateY(-2px);
    box-shadow: 0 5px 15px rgba(46, 204, 113, 0.3);
}


@media (max-width: 768px) {
    .menu-container {
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 20px;
        padding: 15px;
    }

    h1 {
        font-size: 2.2em;
        margin: 30px 0;
    }

    .drink-image {
        height: 200px;
    }

    .drink-details h3 {
        font-size: 1.3em;
    }
}

</style>