@extends('layouts.app')

@section('content')
    <div class="drink-detail">
        <div class="drink-detail-inner">
            <div class="drink-image-section">
                <img src="{{ asset($drink['image']) }}" alt="{{ $drink['name'] }}" class="detail-image">
            </div>
            <div class="drink-info-section">
                <h1>{{ $drink['name'] }}</h1>
                <p class="description">{{ $drink['description'] }}</p>
                <div class="price">{{ number_format($drink['price'], 0) }}₫</div>
                <div class="additional-info">
                    <h3><strong>Thành phần:</strong> {{ $drink['ingredients'] ?? 'Đang cập nhật' }}</h3>
                    <h3><strong>Hương vị:</strong> {{ $drink['taste_notes'] ?? 'Đang cập nhật' }}</h3>
                </div>
                <a href="{{ route('menu') }}" class="back-button">← Quay lại thực đơn</a>
            </div>
        </div>
    </div>
@endsection

<style>
    :root{
        --bg: #f7fbfc;
        --card: #ffffff;
        --muted: #6b7280;
        --accent: #e67e22;
        --heading: #102a43;
    }

    .drink-detail{
        background: var(--bg);
        padding: 48px 16px;
    }

    .drink-detail-inner{
        max-width: 1100px;
        margin: 0 auto;
        display: grid;
        grid-template-columns: 1fr 520px;
        gap: 36px;
        align-items: start;
    }


    .drink-image-section{
        background: linear-gradient(180deg, rgba(230,126,34,0.04), rgba(0,0,0,0));
        padding: 12px;
        border-radius: 14px;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .detail-image{
        width: 100%;
        max-width: 520px;
        border-radius: 12px;
        box-shadow: 0 10px 30px rgba(16,42,67,0.08);
        display: block;
    }

    .drink-info-section h1{
        font-size: 2rem;
        color: var(--heading);
        margin: 0 0 10px;
        line-height: 1.15;
    }

    .description{
        font-size: 1rem;
        color: var(--muted);
        margin-bottom: 14px;
    }

    .price{
        font-size: 1.6rem;
        color: var(--accent);
        font-weight: 700;
        margin-bottom: 14px;
    }

    .additional-info{
        background: var(--card);
        padding: 18px;
        border-radius: 10px;
        margin: 18px 0;
        box-shadow: 0 6px 18px rgba(16,42,67,0.04);
    }

    .additional-info h3{
        margin: 0 0 8px;
        font-size: 1.05rem;
        color: var(--heading);
    }

    .ingredients-list{ list-style: disc; margin: 6px 0 12px 20px; color: var(--muted); }

    .taste-notes dt{ font-weight:700; margin-top:8px; color:var(--heading); }
    .taste-notes dd{ margin: 0 0 8px 12px; color:var(--muted); }

    .prep-steps{ margin: 6px 0 12px 20px; color:var(--muted); }

    .tech-specs{ margin-top: 10px; }
    .spec-grid{ display:grid; grid-template-columns: repeat(2, 1fr); gap:10px; }
    .spec-grid div{ background: #fbfdff; padding:10px; border-radius:8px; color:var(--muted); font-size:0.95rem; }

    .back-button{ display:inline-block; margin-top:12px; padding:10px 16px; background:#102a43; color:#fff; border-radius:8px; text-decoration:none; }
    .back-button:hover{ background:#0d2436 }

    .milk-badges{ display:flex; gap:8px; flex-wrap:wrap; margin-top:8px }
    .milk-badges span{ background:#eef6f9; color:#0b3948; padding:6px 10px; border-radius:999px; font-size:0.85rem }

    @media (max-width: 900px){
        .drink-detail-inner{ grid-template-columns: 1fr 1fr; }
        .spec-grid{ grid-template-columns: 1fr; }
    }

    @media (max-width: 700px){
        .drink-detail-inner{ grid-template-columns: 1fr; gap:20px; }
        .drink-image-section{ order: -1 }
        .detail-image{ max-width: 100%; }
        .spec-grid{ grid-template-columns: 1fr; }
    }
</style>