<script>
export default {
  data() {
    return {
      animTel: [],
    };
  },

  mounted() {
    window.addEventListener("scroll", () => {
      this.animFunc();
    });
  },

  methods: {
    animFunc() {
      for (let index = 0; index <= this.animTel.length; index++) {
        const animItem = document.querySelectorAll(".footer-tel__title-tel");
        const animItemHeight = animItem[0].offsetHeight;
        const animItemOffset = offset(animItem[0]).top;
        const animStart = 4;
        let animItemPoint = window.innerHeight - animItemHeight / animStart;
        if (animItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart;
        }
        if (
          scrollY > animItemOffset - animItemPoint &&
          scrollY < animItemOffset + animItemHeight
        ) {
          animItem[0].classList.add("_startAnimFooter");
        } else {
          if (!animItem[index].classList.contains("_animNoHide")) {
            console.log("NETNET");
            animItem[0].classList.remove("_startAnimFooter");
          }
        }
      }

      function offset(el) {
        const rect = el.getBoundingClientRect(),
          scrollLeft =
            window.pageXOffset || document.documentElement.scrollLeft,
          scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        return {
          left: rect.left + scrollLeft,
          top: rect.top + scrollTop,
        };
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

    scrollAboutContacts() {
      const aboutContacts = document.getElementById("main-header");

      aboutContacts.scrollIntoView({
        block: "center",
        inline: "center",
        behavior: "smooth",
      });
    },
  },
};
</script>

<template>
  <section class="foooter">
    <section class="footer-about">
      <div class="footer-logo"></div>

      <p class="footer-about__paragraph">
        Компания по разработке веб-сервисов, <br />
        сайтов и интернет-магазинов
      </p>

      <p class="footer-about__paragraph-license">
        2023 © WebLore, Все права защищены
      </p>
    </section>

    <ul class="footer-nav">
      <li class="footer-nav__item" @click="scrollPortfolio">Портфолио</li>
      <li class="footer-nav__item" @click="scrollAboutContacts">О нас</li>
      <li class="footer-nav__item" @click="scrollPrice">Цены</li>
      <li class="footer-nav__item" @click="scrollAboutContacts">Контакты</li>
    </ul>

    <section class="footer-tel">
      <h1 class="footer-tel__title-tel _animNoHide">+7 (700) 436 3960</h1>

      <div class="footer-tel-wrapper">
        <ul class="footer-tel__list-days">
          <li class="footer-tel__list-days-title">Рабочие дни</li>
          <li class="footer-tel__list-days-paragraph">Понедельник - пятница</li>
        </ul>

        <ul class="footer-tel__list-time">
          <li class="footer-tel__list-time-title">Время работы</li>
          <li class="footer-tel__list-time-paragraph">С 09:00 по 18:00</li>
        </ul>
      </div>
    </section>
  </section>
</template>
