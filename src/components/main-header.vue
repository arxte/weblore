<script>
export default {
  data() {
    return {
      burgerBool: false,
    };
  },

  methods: {
    clickBurger() {
      const list = document.querySelector(".burger-list-wrapper");

      const burger = document.querySelector(".burger-menu");

      const tel = document.querySelector(".menu-header__tel");
      burger.classList.add("activeBurger");

      this.burgerBool = !this.burgerBool;
      if (this.burgerBool === true) {
        burger.classList.add("activeBurger");
        list.style.display = "block";
        tel.style.zIndex = 4;
        burger.style.zIndex = 4;
      } else {
        list.style.display = "none";
        burger.classList.remove("activeBurger");
      }
    },

    scrollPortfolio() {
      const portfolio = document.getElementById("portfolio");

      portfolio.scrollIntoView({
        block: "center",
        inline: "center",
        behavior: "smooth",
      });
    },

    scrollPrice() {
      const price = document.getElementById("price");

      price.scrollIntoView({
        block: "center",
        inline: "center",
        behavior: "smooth",
      });
    },

    scrollFAQ() {
      const faq = document.getElementById("faq");

      faq.scrollIntoView({
        block: "center",
        inline: "center",
        behavior: "smooth",
      });
    },
  },
};
</script>
<template>
  <nav class="menu-header" id="main-header">
    <div class="menu-header__logo">
      <div class="logo"></div>
    </div>

    <ul class="menu-header__list-header">
      <li class="list-header__item" @click="scrollPortfolio()">Портфолио</li>
      <li class="list-header__item" @click="scrollPrice()">Цены</li>
      <li class="list-header__item" @click="scrollFAQ()">Частые вопросы</li>
    </ul>

    <p class="menu-header__tel">+7 (700) 436 3960</p>

    <div class="burger-menu" @click="clickBurger()">
      <span></span>
    </div>

    <article class="burger-list-wrapper">
      <div class="burger-list-block">
        <ul class="burger-list">
          <li class="burger-list__item">Меню</li>
          <li class="burger-list__item" @click="scrollPortfolio()">
            Портфолио
          </li>
          <li class="burger-list__item" @click="scrollPrice()">Цены</li>
          <li class="burger-list__item" @click="scrollFAQ()">Частые вопросы</li>
        </ul>

        <p class="burger-list__paragraph">2023 © WebLore, Все права защищены</p>
      </div>
    </article>
  </nav>
</template>
