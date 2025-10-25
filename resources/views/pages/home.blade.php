@extends('layouts.app')

@section('content')
    <section class="welcome-section">
        <div class="welcome-inner">
            <div>
                <h1>Welcome to Roastery Coffee</h1>
                <p class="lead">Khám phá hương vị cà phê rang xay tươi từ khắp nơi trên thế giới.</p>
                <a href="/menu" class="btn-cta">Xem thực đơn</a>
            </div>
            <div class="hero-image">
                <img src="{{ asset('images/hero-coffee.jpg') }}" alt="Roastery Coffee" />
            </div>
        </div>
    </section>

    <section class="featured-drinks">
        <h2>Món nước nổi bật</h2>
        <div class="drinks-container">
            @foreach($featuredDrinks as $drink)
            <div class="drink-item">
                <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}" class="drink-image">
                <div class="drink-details">
                    <h3>{{ $drink['name'] }}</h3>
                    <p>{{ $drink['description'] }}</p>
                    <p class="price">{{ number_format($drink['price'], 0) }}₫</p>
                </div>
            </div>
            @endforeach
        </div>
    </section>
@endsection

<style>

.welcome-section {
    background-color: #f5f5f5;
    padding: 30px 0 20px;
}

.welcome-inner {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
    display: grid;
    grid-template-columns: 1fr 420px;
    gap: 24px;
    align-items: center;
}

.welcome-inner h1 {
    font-size: 2.4em;
    color: #2c3e50;
    margin: 0 0 10px;
}

.lead {
    color: #64748b;
    margin-bottom: 16px;
}

.hero-image img {
    width: 100%;
    height: auto;
    border-radius: 12px;
    display: block;
}

.btn-cta {
    display: inline-block;
    background: #e67e22;
    color: #fff;
    padding: 10px 18px;
    border-radius: 6px;
    text-decoration: none;
    font-weight: 600;
}

.btn-cta:hover { opacity: 0.9; }


.featured-drinks {
    padding: 40px 0;
}

.featured-drinks h2 {
    max-width: 1200px;
    margin: 0 auto 20px;
    padding: 0 20px;
    font-size: 1.8rem;
    color: #2c3e50;
}

.drinks-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
    gap: 20px;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 20px;
}


.drink-item {
    background-color: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 6px 18px rgba(2,6,23,0.06);
    transition: transform 0.25s ease, box-shadow 0.25s ease;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.drink-item:hover { transform: translateY(-6px); box-shadow: 0 12px 30px rgba(2,6,23,0.08); }

.drink-image { width: 100%; height: 180px; object-fit: cover; display: block; }

.drink-details { padding: 14px; text-align: left; flex-grow: 1; }


.drink-details h3 { font-size: 1.15rem; color: #2c3e50; margin: 0 0 8px; }
.drink-details p { color: #64748b; margin: 0 0 12px; }
.price { font-weight: 700; color: #e67e22; }

/* Responsive behavior */
@media (max-width: 1000px) {
    .welcome-inner { grid-template-columns: 1fr 320px; }
}

@media (max-width: 700px) {
    .welcome-inner { grid-template-columns: 1fr; text-align: center; }
    .hero-image { order: -1; }
    .drink-details { text-align: center; }
}

</style>