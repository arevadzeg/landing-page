<ol class="join-flow">
  <li class="join-flow__step join-flow__step--join">
    <img src="./assets/svg/join-us-icon.svg" alt="Step 1: Join Us" class="join-flow__icon" />
    <div class="join-flow__text">
      <span class="join-flow__title">JOIN US</span>
      <span class="join-flow__subtitle">Quick & Easy</span>
    </div>
  </li>

  <li class="join-flow__arrow" aria-hidden="true">
    <img src="assets/svg/arrow.svg" role="presentation" alt="Arrow icon" />
  </li>

  <li class="join-flow__step join-flow__step--deposit">
    <img src="./assets/svg/deposit-icon.svg" alt="Step 2: Deposit" class="join-flow__icon" />
    <div class="join-flow__text">
      <span class="join-flow__title">Deposit</span>
      <span class="join-flow__subtitle">Safe & Secure</span>
    </div>
  </li>

  <li class="join-flow__arrow" aria-hidden="true">
    <img src="assets/svg/arrow.svg" role="presentation" alt="Arrow icon" />
  </li>

  <li class="join-flow__step join-flow__step--play">
    <img src="./assets/svg/play-icon.svg" alt="Step 3: Play" class="join-flow__icon" />
    <div class="join-flow__text">
      <span class="join-flow__title">Play</span>
      <span class="join-flow__subtitle">Start Winning</span>
    </div>
  </li>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const steps = document.querySelectorAll('.join-flow__step');

      const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
          }
        });
      }, {
        threshold: 0.3
      });

      steps.forEach(step => {
        observer.observe(step);
      });
    });
  </script>

</ol>