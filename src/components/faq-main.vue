<script>
import "../assets/svg/faqArrowDown.svg";
import "../assets/svg/faqArrowUp.svg";

export default {
  data() {
    return {};
  },

  methods: {
    accordeon(idx) {
      const el = document.querySelectorAll(".faq-main-list__item-content");
      const arrow = document.querySelectorAll(".faq-main-list__item-title");
      const border = document.querySelectorAll(".faq-main-list__item");
      let height = 0;

      el.forEach((item, index) => {
        if (idx == index) {
          if (item.classList.contains("_activeAccordeonItem")) {
            item.style.height = "0px";
            height = item.style.height;
          } else {
            item.style.height = item.scrollHeight + "px";
            height = item.style.height;
          }
          item.classList.toggle("_activeAccordeonItem");
        }
      });

      arrow.forEach((item, index) => {
        if (idx == index) {
          if (height === "0px") {
            item.style.backgroundImage = "url('/assets/faqArrowDown.svg')";
          } else {
            item.style.backgroundImage = "url('/assets/faqArrowUp.svg')";
          }
        }
      });

      border.forEach((item, index) => {
        if (idx === index) {
          if (height === "0px") {
            item.style.borderTopColor = "#343757";
            item.style.borderBottomColor = "#343757";
          } else {
            item.style.borderTopColor = "#F0BC7A";
            item.style.borderBottomColor = "#F0BC7A";
          }
        }
      });
    },
  },
};
</script>

<template>
  <section class="faq-main" id="faq">
    <h1 class="faq-main__title">Часто Задаваемые Вопросы</h1>

    <ul class="faq-main-list" style="bordertopcolor: '#f0bc7a'">
      <transition name="accor">
        <li class="faq-main-list__item" @click="accordeon(0)">
          <h2 class="faq-main-list__item-title">
            Сколько стоит создание сайта/интернет-магазина?
          </h2>

          <transition name="accorTwo">
            <div class="faq-main-list__item-content">
              <p class="faq-main-list__item-paragraph">
                Стоимость каждого проекта оценивается индивидуально, но есть
                начальная стоимость в следующих значениях:
              </p>

              <p class="faq-main-list__item-paragraph">
                — Одностраничный сайт от 150 000 ТГ
              </p>

              <p class="faq-main-list__item-paragraph">
                — Многостраничный сайт от 300 000 ТГ
              </p>
            </div>
          </transition>
        </li>
      </transition>

      <li class="faq-main-list__item" @click="accordeon(1)">
        <h2 class="faq-main-list__item-title">
          За какой срок выполняется создание сайта?
        </h2>

        <transition name="accorTwo">
          <div class="faq-main-list__item-content">
            <p class="faq-main-list__item-paragraph">
              Создание одностраничного сайта занимает от 10 рабочих дней, а
              многостраничного сайта — от одного месяца.
            </p>
          </div>
        </transition>
      </li>

      <li class="faq-main-list__item" @click="accordeon(2)">
        <h2 class="faq-main-list__item-title">
          Вы оказываете услуги по поддержке и продвижению сайта в дальнейшем?
        </h2>

        <div class="faq-main-list__item-content">
          <p class="faq-main-list__item-paragraph">
            Да, продвигаем по таргетированной рекламе в социальных сетях, а
            также по контекстной рекламе в поисковиках.
          </p>
        </div>
      </li>

      <li class="faq-main-list__item" @click="accordeon(3)">
        <h2 class="faq-main-list__item-title">
          У меня будет уникальный дизайн?
        </h2>

        <div class="faq-main-list__item-content">
          <p class="faq-main-list__item-paragraph">
            Наша компания не занимается разработкой однотипных сайтов. Перед тем
            как приступить к работе, мы изучим ваш бизнес, конкурентов, целевую
            аудиторию, чтобы вы получили прибыльный, узнаваемый для клиентов
            ресурс, которым удобно пользоваться.
          </p>
        </div>
      </li>
    </ul>
  </section>
</template>
