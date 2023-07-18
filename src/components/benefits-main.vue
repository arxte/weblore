<!-- <script setup lang="ts">
import {ref} from 'vue'

const benefits__item = ref()
</script> -->

<script>
export default {
  data() {
    return {
      animElements: [],
      animNumberBenefits: [],
      animTitleBenefits: [],
      animParagraphBenefits: [],
    };
  },

  mounted() {
    window.addEventListener("scroll", () => {
      this.animFunc();
    });

    this.animElements = document.querySelectorAll(".benefits__item");
  },

  methods: {
    animFunc() {
      for (let index = 0; index < this.animElements.length; index++) {
        const animItem = document.querySelectorAll(".benefits__item");
        const animTitleBene = document.querySelectorAll(".benefits__title");
        const animNumberBene = document.querySelectorAll(".benefits__number");
        const animParagraphBene = document.querySelectorAll(
          ".benefits__paragraph"
        );
        const animItemHeight = animItem[index].offsetHeight;
        const animItemOffset = offset(animItem[index]).top;
        const animStart = 4;
        let animItemPoint = window.innerHeight - animItemHeight / animStart;
        if (animItemHeight > window.innerHeight) {
          animItemPoint = window.innerHeight - window.innerHeight / animStart;
        }
        if (
          scrollY > animItemOffset - animItemPoint &&
          scrollY < animItemOffset + animItemHeight
        ) {
          animItem[index].classList.add("_start");

          if (animItem[index].classList.contains("_start")) {
            animNumberBene[index].classList.add("_animNum");
            animTitleBene[index].classList.add("_animTitle");
            animParagraphBene[index].classList.add("_animParagraph");
          }
        } else {
          if (!animItem[index].classList.contains("_animNoHide")) {
            animItem[index].classList.remove("_start");
            animNumberBene[index].classList.remove("_animNum");
            animTitleBene[index].classList.remove("_animTitle");
            animParagraphBene[index].classList.remove("_animParagraph");
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
  },
};
</script>

<template>
  <div class="benefits-main-wrapper">
    <section class="benefits-main">
      <h1 class="benefits-main__title">Преимущества наличия сайта</h1>

      <div class="benefits">
        <div ref="benefits__item" class="benefits__item _animNoHide">
          <h1 class="benefits__number _animNoHide">01</h1>
          <h2 class="benefits__title _animNoHide">Привлечение клиентов</h2>
          <p class="benefits__paragraph benefits__paragraph_align _animNoHide">
            Одна из основных целей бизнеса — увеличить продажи. Сайт поможет
            решить эту задачу благодаря привлечению клиентов, не знавших о вас
            из-за отсутствия рекламы в поисковике и в социальных сетях. А поток
            новых заказчиков увеличит прибыль.
          </p>
        </div>

        <div class="benefits__item _animNoHide">
          <h1 class="benefits__number _animNoHide">02</h1>
          <h2 class="benefits__title _animNoHide">Запуск WOM-Маркетинг</h2>
          <p class="benefits__paragraph benefits__paragraph_align _animNoHide">
            Вашей страницей могут поделиться в социальных сетях, сохранить в
            закладки, или просто отправить вашим потенциальным клиентам и
            партнерам, что поможет работе «маркетинга из уст в уста», известной
            как сарафанное радио.
          </p>
        </div>

        <div class="benefits__item _animNoHide">
          <h1 class="benefits__number _animNoHide">03</h1>
          <h2 class="benefits__title _animNoHide">
            Выгодная презентация вашей компании
          </h2>
          <p class="benefits__paragraph benefits__paragraph_align _animNoHide">
            Правильная презентация важна для создания правильных ассоциаций и
            выгодных для вашей компании эмоций у потенциального клиента. Верный
            способ сделать это — поддержание элементов брендинга во всех точках
            касания клиента и бизнеса, в особенности на сайте.
          </p>
        </div>

        <div class="benefits__item _animNoHide">
          <h1 class="benefits__number _animNoHide">04</h1>
          <h2 class="benefits__title _animNoHide">Автоматизация процессов</h2>
          <p class="benefits__paragraph benefits__paragraph_align _animNoHide">
            Вместо бесконечных вопросов в комментариях и мессенджерах - поток
            заявок от готовых клиентов. Такой структурированный подход позволит
            вам настроить атоматизацию и сохранить ваше время
          </p>
        </div>

        <div class="benefits__item _animNoHide">
          <h1 class="benefits__number _animNoHide">05</h1>
          <h2 class="benefits__title _animNoHide">
            Структурированная информация о компании
          </h2>

          <div
            class="benefits__paragraph benefits__paragraph_align _animNoHide"
          >
            <p class="benefits__paragraph">
              Для увеличения конверсии продаж важно сделать опыт взаимодействия
              положительным, структурировав информацию удобным образом, и сайт
              решает эту проблему.
            </p>

            <p class="benefits__paragraph benefits-last-item-list-title">
              Сайт — это возможность систематизировать важную информацию о вашем
              бизнесе:
            </p>

            <ul class="benefits-last-item-list">
              <li>— товары</li>
              <li>— преимущства</li>
              <li>— отзывы</li>
              <li>— цены</li>
              <li>— условия сотрудничества</li>
              <li>— и многое другое</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
  </div>
</template>
