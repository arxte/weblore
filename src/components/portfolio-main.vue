<template>
  <section class="portfolio" id="portfolio">
    <div class="portfolio-title-wrapper">
      <h1 class="portfolio__title">Примеры нашего дизайна</h1>
    </div>

    <carousel-portfolio></carousel-portfolio>
  </section>
</template>

<script>
import CarouselPortfolio from "./carousel-portfolio.vue";

export default {
  components: {
    CarouselPortfolio,
  },
};
</script>
