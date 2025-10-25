@extends('layouts.app')

@section('content')
<h1>Câu chuyện Hạt cà phê</h1>

<div class="beans-story">
    @foreach($beans as $bean)
    <article class="bean-card">
        <div class="bean-left">
            <img src="{{ asset($bean['image']) }}" alt="{{ $bean['name'] }}" class="bean-image">
        </div>
        <div class="bean-right">
            <h3>{{ $bean['name'] }}</h3>
            <h5>{{ $bean['origin'] }}</h5>
            <p>{{ $bean['notes'] }}</p>
        </div>
    </article>
    @endforeach
</div>
@endsection

<style>

    h1 {
        text-align: center;
        font-size: 2.6em;
        color: #2c3e50;
        margin: 30px 0;
        font-weight: 700;
    }

    .beans-story {
        max-width: 1100px;
        margin: 0 auto 60px;
        padding: 0 20px;
        display: grid;
        gap: 24px;
        align-items: start;
    }

 
    .bean-card {
        background: #fff;
        border-radius: 12px;
        overflow: hidden;
        box-shadow: 0 6px 18px rgba(0,0,0,0.06);
        display: grid;
        grid-template-columns: 220px 1fr;
        gap: 20px;
        padding: 18px;
        align-items: center;
        transition: transform 0.25s ease, box-shadow 0.25s ease;
    }

    .bean-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 12px 30px rgba(0,0,0,0.08);
    }

    .bean-left {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .bean-right {
        padding: 4px 6px;
    }

    .bean-image {
        width: 200px;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
    }

    .beans-story h3 {
        margin: 0 0 6px;
        font-size: 1.1em;
        color: #2c3e50;
    }

    .beans-story h5 {
        margin: 0 0 8px;
        font-size: 0.95em;
        color: #7f8c8d;
        font-weight: 500;
    }

    .beans-story p {
        margin: 0;
        color: #606f7b;
        line-height: 1.5;
        font-size: 0.95em;
    }

    @media (max-width: 900px) {
        .bean-card {
            grid-template-columns: 160px 1fr;
            padding: 14px;
        }

        .bean-image {
            width: 160px;
            height: 160px;
        }
    }

    @media (max-width: 600px) {
        .bean-card {
            grid-template-columns: 1fr;
            text-align: center;
        }

        .bean-left {
            margin-bottom: 12px;
        }

        .bean-image {
            width: 220px;
            height: 220px;
            margin: 0 auto;
        }
    }
</style>