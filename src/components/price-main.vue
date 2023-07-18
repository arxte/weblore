<script>
export default {
  data() {
    return {
      animPriceFirst: [],
      animPriceSecond: [],
      animStroke: false,
    };
  },

  mounted() {
    window.addEventListener("scroll", () => {
      this.animFunc();
    });
  },

  methods: {
    animFunc() {
      for (let index = 0; index <= this.animPriceFirst.length; index++) {
        const animItem = document.querySelectorAll(".price-list__item-first");
        const animItemSecond = (this.animPriceSecond =
          document.querySelectorAll(".price-list__item-second"));
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
          animItem[0].classList.add("_animPriceStart");
          animItemSecond[0].classList.add("_animPriceStartSecond");

          if (animItemSecond[0].classList.contains("_animPriceStartSecond")) {
            this.animStroke = true;
          }
        } else {
          if (!animItem[index].classList.contains("_animNoHide")) {
            animItem[0].classList.remove("_animPriceStart");
            animItemSecond[0].classList.remove("_animPriceStartSecond");
          }
        }
      }

      function offset(el) {
        const rect = el.getBoundingClientRect(),
          scrollLeft =
            window.pageXOffset || document.documentElement.scrollLeft,
          scrollTop =
            window.pageYOffset || document.documentElement.scrollTottom;
        return {
          left: rect.left + scrollLeft,
          top: rect.top + scrollTop,
        };
      }
    },

    scroll() {
      const element = document.getElementById("discuss-wrapper");
      element.scrollIntoView({
        block: "center",
        inline: "center",
        behavior: "smooth",
      });
    },
  },
};
</script>

<template>
  <section class="price-list" id="price">
    <div class="price-list__title-wrapper">
      <h1 class="price-list__title">Цены</h1>
      <p class="price-list__paragraph">
        Цены могут отличаться в зависимости от проекта
      </p>
    </div>

    <div class="price-list__item-wrapper price-list__item-first _animNoHide">
      <div class="price-list__item">
        <h2 class="item__title">Одностраничные сайты</h2>

        <p class="item__price">От 150 000 ТГ</p>

        <ul class="item__list-type">
          <li class="list-type__elem list-style-type-single">
            <span class="list-type__elem-span">Лендинг</span> - продающие
            лендинги с запоминающимся дизайном
          </li>
          <li class="list-type__elem list-style-type-single">
            <span class="list-type__elem-span">Сайт визитка</span> -
            одностраничный индивидуальный сайт для ознакомления
          </li>
        </ul>

        <div class="item__content-text">
          <p class="content-text__paragraph">
            Одностраничные сайты имеют ключевую роль в представлении
            деятельности вашего бизнеса потенциальным клиентам.
          </p>

          <p class="content-text__paragraph">
            Делаем упор на позиционированиe вашей компании на сайте отражая
            правильные образы и эмоции
          </p>
        </div>
      </div>

      <button class="price__btn" @click="scroll()">Заказать Дизайн</button>
    </div>

    <div class="price-list__item-wrapper price-list__item-second _animNoHide">
      <div class="price-list__item">
        <transition name="animationStroke">
          <div class="stroke" v-if="animStroke"></div>
        </transition>
        <h2 class="item__title">Многостраничные сайты</h2>

        <p class="item__price">От 300 000 ТГ</p>

        <ul class="item__list-type item__list-type-second">
          <li class="list-type__elem list-style-type-multi">
            <span class="list-type__elem-span">Интернет Магазин</span> -
            многостраничный сайт для продажи продукции
          </li>
          <li class="list-type__elem list-style-type-multi">
            <span class="list-type__elem-span">Корпоративный сайт</span> - cайт
            с данными разбитыми на несколько страниц
          </li>
          <li class="list-type__elem list-style-type-multi">
            <span class="list-type__elem-span">Информационный портал</span> -
            структура и порядок информации гарантированы
          </li>
        </ul>

        <div class="item__content-text">
          <p class="content-text__paragraph">
            Многостраничный сайт – это ресурс, состоящий из двух и более
            страниц. Такие площадки, как правило, легко оптимизируются, отлично
            продвигаются.
          </p>

          <p class="content-text__paragraph">
            Здесь мы руководствуемся пользовательским опытом работы с
            интерфейсом и удобством пользования ресурса
          </p>
        </div>
      </div>

      <button class="price__btn" @click="scroll()">Заказать Дизайн</button>
    </div>
  </section>
</template>
