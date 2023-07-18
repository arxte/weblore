<script>
import MainHeader from "./components/main-header.vue";
import TitleHeader from "./components/title-header.vue";
import PlusesHeader from "./components/pluses-header.vue";
import PortfolioMain from "./components/portfolio-main.vue";
import BenefitsMain from "./components/benefits-main.vue";
import PriceMain from "./components/price-main.vue";
import FaqMain from "./components/faq-main.vue";
import DiscussMain from "./components/discuss-main.vue";
import FooterFooter from "./components/footer-footer.vue";
import BurgerMenu from "./components/burgerMenu.vue";

export default {
  components: {
    MainHeader,
    TitleHeader,
    PlusesHeader,
    PortfolioMain,
    BenefitsMain,
    PriceMain,
    FaqMain,
    DiscussMain,
    FooterFooter,
    BurgerMenu,
  },
};
</script>

<template>
  <div class="background-header-block" @scroll="animFunc()">
    <header>
      <div class="wrapper">
        <main-header> </main-header>

        <burger-menu></burger-menu>
        <title-header></title-header>
        <pluses-header></pluses-header>
      </div>
    </header>
  </div>

  <main>
    <div class="wrapper">
      <portfolio-main></portfolio-main>
      <benefits-main></benefits-main>
      <price-main></price-main>
      <faq-main></faq-main>
    </div>

    <div class="background-discuss-block">
      <div class="wrapper">
        <discuss-main></discuss-main>
      </div>
    </div>
  </main>

  <footer>
    <div class="wrapper">
      <footer-footer></footer-footer>
    </div>
  </footer>
</template>
