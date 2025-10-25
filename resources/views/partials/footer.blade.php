<footer class="simple-footer">
  <div class="simple-inner">
    <p class="brand">Roastery Coffee</p>
    <p class="tag">Nơi hội tụ của những hạt cà phê tuyệt hảo.</p>
    <p class="copyright">&copy; {{ date('Y') }} Roastery Coffee</p>
  </div>
</footer>

<style>

  .simple-footer {
    background: #111216;
    color: #e6eef3;
    padding: 18px 0;
    margin-top: 32px;
  }

  .simple-inner {
    max-width: 1000px;
    margin: 0 auto;
    padding: 0 16px;
    display: flex;
    flex-direction: column;
    gap: 6px;
    align-items: center;
  }

  .simple-inner .brand {
    font-weight: 700;
    letter-spacing: 0.6px;
    margin: 0;
  }

  .simple-inner .tag {
    margin: 0;
    color: #b8c6cf;
    font-size: 0.95rem;
  }

  .simple-inner .copyright {
    margin: 0;
    color: #98a9b5;
    font-size: 0.9rem;
  }

  @media (min-width: 700px) {
    .simple-inner {
      flex-direction: row;
      justify-content: space-between;
      align-items: center;
      gap: 12px;
    }
  }
</style>