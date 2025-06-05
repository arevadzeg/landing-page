<header class="site-header">
  <img src="./assets/svg/app-logo.svg" alt="app main Logo" class="logo" />

  <div class="site-header__content">
    <h1 class="site-header__title animate-on-scroll">celebrate SPORTSBOOK 300% bonus</h1>

    <h2 class="site-header__subtitle animate-on-scroll">Welcome to World Cup</h2>
    <ul class="site-header__benefits animate-on-scroll">
      <li>Get special bonus of 300%</li>
      <li>deposit 100 get 300</li>
      <li>easy deposit, fast withdrawal, guaranteed pay</li>
    </ul>

    <button class="btn btn-base animate-on-scroll">CLAIM NOW</button>

    <a href="/terms" class="terms-conditions animate-on-scroll">Terms & Conditions</a>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const elements = document.querySelectorAll(".animate-on-scroll");

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add("visible");
          }
        });
      }, {
        threshold: 0.2,
      });

      elements.forEach(el => observer.observe(el));
    });
  </script>

</header>