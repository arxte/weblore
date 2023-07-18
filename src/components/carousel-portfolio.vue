<template>
  <div class="carousel-wrapper">
    <section class="carousel" style="left: 0">
      <div
        class="carousel__item active"
        v-for="(item, index) in carouselItem"
        :style="{
          backgroundImage: carouselItem[index].activeImgBack,
        }"
        :key="item.id"
        style="max-width: 640px; max-height: 680px"
      >
        <div class="carousel-img-wrapper_active">
          <div
            class="carousel__img_active"
            :style="{
              backgroundImage: carouselItem[index].activeImg,
            }"
          ></div>
        </div>

        <div class="carousel-item-content_active">
          <div class="carousel-item-content__text-wrapper_active">
            <h1 class="carousel-item-content__title_active">
              {{ item.title }}
            </h1>
            <p class="carousel-item-content__paragraph_active">
              {{ item.paragraph }}
            </p>
          </div>

          <div class="carousel-item-content__btn-wrapper_active">
            <a href="#" class="carousel-item-content__btn_active links">
              Показать больше
            </a>
          </div>
        </div>
      </div>
    </section>

    <div class="carousel-button-wrapper">
      <button
        class="carousel__button carousel__button-prev"
        @click="slidPrev(-1)"
        disabled
      ></button>
      <button
        class="carousel__button carousel__button-next"
        @click="slid(1)"
      ></button>
    </div>
  </div>
</template>

<script>
import "../assets/images/active-pic-1.png";
import "../assets/images/active-pic-2.png";
import "../assets/images/active-pic-3.png";
import "../assets/images/inactive-pic-1.png";
import "../assets/images/inactive-pic-2.png";
import "../assets/images/inactive-pic-3.png";
import "../assets/images/rs7Active.png";
import "../assets/images/rs7Inactive.png";
import "../assets/images/shopActive.png";
import "../assets/images/shopInactive.png";
import "../assets/images/cameraActive.png";
import "../assets/images/camerainActive.png";

export default {
  data() {
    return {
      carouselItem: [
        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7Inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующee его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },

        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },
        {
          id: 0,
          name: "RS7-concept",
          activeImgBack: "url('/assets/active-pic-1.png')",
          notActiveImgBack: "url('/assets/inactive-pic-1.png')",
          activeImg: "url('/assets/rs7Active.png')",
          notActiveImg: "url('/assets/rs7inactive.png')",
          title: "Промо страница Audi RS7",
          paragraph:
            "Концепт промо страницы для популярной модели бренда Audi - с подходом учитывающим элементы брендинга",
          refFigmaPC:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=515%3A4015&viewport=346%2C124%2C0.08&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile:
            "https://www.figma.com/proto/C1u7uAEGWubEmr6Gc61zKi/Audi-RS7-Concept?page-id=3%3A6&node-id=613%3A23209&viewport=-405%2C237%2C0.27&scaling=scale-down-width&hide-ui=1",
        },

        {
          id: 1,
          name: "CameraMan-concept",
          activeImgBack: "url('/assets/active-pic-2.png')",
          notActiveImgBack: "url('/assets/inactive-pic-2.png')",
          activeImg: "url('/assets/cameraActive.png')",
          notActiveImg: "url('/assets/cameraInactive.png')",
          title: "Одностраничный сайт Портфолио Фотографа",
          paragraph: "Портфолио фотографа презентующее его работы и достижения",
          refFigmaPC:
            "https://www.figma.com/proto/9kbMh9LMtW0lAxxpAAyGlS/Photographer-Portfolio-Concept?page-id=1%3A3&node-id=5%3A4&viewport=521%2C45%2C0.23&scaling=scale-down-width&hide-ui=1",
          refFigmaMobile: "",
        },

        {
          id: 2,
          name: "Shop-concept",
          activeImgBack: "url('/assets/active-pic-3.png')",
          notActiveImgBack: "url('/assets/inactive-pic-3.png')",
          activeImg: "url('/assets/shopActive.png')",
          notActiveImg: "url('/assets/shopInactive.png')",
          title: "Интернет-Магазин бренда одежды",
          paragraph:
            "Многостраничный сайт с возможностью онлайн-покупок для бренда одежды",
          refFigmaMobile:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=1006%3A771&node-id=1006%3A829&viewport=719%2C864%2C0.22&scaling=scale-down-width&starting-point-node-id=1006%3A829&hide-ui=1",
          refFigmaPC:
            "https://www.figma.com/proto/BvyGYJkpjQaGKlG9suWRgw/E-Shop-Design-Concept?page-id=0%3A1&node-id=2%3A2&viewport=195%2C167%2C0.07&scaling=scale-down-width&starting-point-node-id=2%3A2&show-proto-sidebar=1&hide-ui=1",
        },
      ],
      carouselItems: document.querySelectorAll(".carousel-slide"),
      slideIndex: 1,
      prevElem: null,
      offset: 0,
    };
  },

  methods: {
    slidPrev(n) {
      this.slidePrev((this.slideIndex = this.slideIndex + n));
    },

    slid(n) {
      this.slideNext((this.slideIndex = this.slideIndex + n));
    },

    slidePrev(n) {
      const slides = document.querySelectorAll(".carousel__item");
      const btn = document.querySelectorAll(
        ".carousel-item-content__btn-wrapper_active"
      );
      const paragraph = document.querySelectorAll(
        ".carousel-item-content__paragraph_active"
      );
      const img = document.querySelectorAll(".carousel__img_active");
      console.log(btn);
      const car = document.querySelectorAll(".carousel");
      console.log(car);
      const content = document.querySelectorAll(
        ".carousel-item-content_active"
      );
      const btnPrev = document.querySelector(".carousel__button-prev");
      const btnNext = document.querySelector(".carousel__button-next");
      const active = document.querySelector(".active");
      console.log(active.offsetWidth);
      const w = active.offsetWidth + 19;
      console.log(w);

      if (n > slides.length) {
        this.slideIndex = 1;
      }

      if (n < 1) {
        this.slideIndex = slides.length;
      }

      btnPrev.disabled = true;
      btnNext.disabled = true;

      setTimeout(() => {
        btnPrev.disabled = false;
        btnNext.disabled = false;
      }, 1000);

      this.offset = this.offset - w;
      car[0].style.left = -this.offset + "px";
      if (this.offset === 0) {
        btnPrev.disabled = true;
      }

      for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains("active")) {
          slides[i].classList.remove("active");
          slides[i].classList.add("inactive");
          slides[i].style.minWidth = 310 + "px";
          slides[i].style.maxWidth = 310 + "px";
          slides[i].style.maxHeight = 510 + "px";
          img[i].style.backgroundImage = this.carouselItem[i].notActiveImg;
          img[i].style.maxWidth = 243 + "px";
          img[i].style.Height = 170 + "px";
          img[i].style.marginTop = 150 + "px";

          paragraph[i].style.display = "none";
          btn[i].style.display = "none";

          content[i].style.opacity = 0;
          content[i].style.backgroundColor = "transparent";
          content[i].style.backdropFilter = "none";

          slides[i - 1].classList.remove("inactive");
          slides[i - 1].classList.add("active");
          setTimeout(() => {
            content[i].style.opacity = 1;
            content[i].style.backgroundColor = "rgba(31, 32, 53, 0.4)";
            content[i].style.backdropFilter = "blur(20px)";
            slides[i].style.backgroundImage =
              this.carouselItem[i].notActiveImgBack;
          }, 800);
        }
      }
    },

    slideNext(n) {
      const slides = document.querySelectorAll(".carousel__item");
      const btn = document.querySelectorAll(
        ".carousel-item-content__btn-wrapper_active"
      );
      const paragraph = document.querySelectorAll(
        ".carousel-item-content__paragraph_active"
      );
      const img = document.querySelectorAll(".carousel__img_active");
      const car = document.querySelectorAll(".carousel");
      const content = document.querySelectorAll(
        ".carousel-item-content_active"
      );
      const btnPrev = document.querySelector(".carousel__button-prev");
      const btnNext = document.querySelector(".carousel__button-next");
      const active = document.querySelector(".active");
      console.log(active.offsetWidth);
      const w = active.offsetWidth;
      console.log(w);

      if (n > slides.length) {
        this.slideIndex = 1;
      }

      if (n < 1) {
        this.slideIndex = slides.length;
      }

      this.offset = this.offset + w;
      // let s = this.offset + 19;
      car[0].style.left = -this.offset + "px";

      if (this.offset > 0) {
        btnPrev.disabled = false;
      }

      btnPrev.disabled = true;
      btnNext.disabled = true;

      setTimeout(() => {
        btnPrev.disabled = false;
        btnNext.disabled = false;
      }, 1000);

      for (let i = 0; i < slides.length; i++) {
        if (slides[i].classList.contains("active")) {
          setTimeout(() => {
            slides[i].classList.add("inactive");
            slides[i].classList.remove("active");
            slides[i].style.maxWidth = 640 + "px";
            slides[i].style.maxHeight = 680 + "px";
            btn[i].style.display = "flex";
            paragraph[i].style.display = "flex";
          }, 1000);
        }
      }

      paragraph[this.slideIndex - 1].style.opacity = 0;
      btn[this.slideIndex - 1].style.opacity = 0;
      content[this.slideIndex - 1].style.display = "none";
      content[this.slideIndex - 1].style.opacity = 0;
      content[this.slideIndex - 1].style.backgroundColor = "transparent";
      content[this.slideIndex - 1].style.backdropFilter = "none";

      slides[this.slideIndex - 1].classList.remove("inactive");
      slides[this.slideIndex - 1].classList.add("active");
      slides[this.slideIndex - 1].style.maxWidth = 640 + "px";
      slides[this.slideIndex - 1].style.maxHeight = 680 + "px";
      slides[this.slideIndex - 1].style.backgroundImage =
        this.carouselItem[this.slideIndex - 1].activeImgBack;

      btn[this.slideIndex - 1].style.display = "flex";
      paragraph[this.slideIndex - 1].style.display = "flex";

      img[this.slideIndex - 1].style.backgroundImage =
        this.carouselItem[this.slideIndex - 1].activeImg;
      img[this.slideIndex - 1].style.maxWidth = 580 + "px";
      img[this.slideIndex - 1].style.maxHeight = 397 + "px";
      img[this.slideIndex - 1].style.marginTop = 50 + "px";

      setTimeout(() => {
        content[this.slideIndex - 1].style.display = "flex";
        paragraph[this.slideIndex - 1].style.opacity = 1;
        btn[this.slideIndex - 1].style.opacity = 1;

        setTimeout(() => {
          content[this.slideIndex - 1].style.opacity = 1;
          content[this.slideIndex - 1].style.backgroundColor =
            "rgba(31, 32, 53, 0.4)";
          content[this.slideIndex - 1].style.backdropFilter = "blur(20px)";
        }, 100);
      }, 400);
    },
  },

  mounted() {
    const slide = document.querySelectorAll(".carousel__item");
    const btn = document.querySelectorAll(
      ".carousel-item-content__btn-wrapper_active"
    );
    const paragraph = document.querySelectorAll(
      ".carousel-item-content__paragraph_active"
    );
    const img = document.querySelectorAll(".carousel__img_active");
    // const active = document.querySelector(".active");
    // const w = active.offsetWidth;
    const btnSledPrev = document.querySelector(".carousel-button-wrapper");
    const imgSize = document.querySelectorAll(".carousel__img_active");
    const sizeThird = document.querySelectorAll(".carousel-img-wrapper_active");
    for (let i = 0; i < slide.length; i++) {
      if (i != 0) {
        btn[i].style.display = "none";
        paragraph[i].style.display = "none";
        slide[i].classList.remove("active");
        slide[i].classList.add("inactive");
        slide[i].style.maxWidth = 310 + "px";
        slide[i].style.maxHeight = 510 + "px";
        slide[i].style.backgroundImage = this.carouselItem[i].notActiveImgBack;
        img[i].style.backgroundImage = this.carouselItem[i].notActiveImg;
        img[i].style.maxWidth = 243 + "px";
        img[i].style.maxHeight = 170 + "px";
        img[i].style.marginTop = 150 + "px";
      }
    }

    const links = document.querySelectorAll(".links");
    if (
      /Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
        navigator.userAgent
      )
    ) {
      for (let i = 0; i < links.length; i++) {
        links[i].setAttribute("href", this.carouselItem[i].refFigmaMobile);
      }
    } else {
      for (let i = 0; i < links.length; i++) {
        links[i].setAttribute("href", this.carouselItem[i].refFigmaPC);
      }
    }

    if (window.screen.width <= 480) {
      for (let i = 0; i < slide.length; i++) {
        slide[i].classList.remove("inactive");
        slide[i].classList.add("active");
        imgSize[2].classList.add("activeImgSize480");
        imgSize[2].classList.remove("carousel__img_active");
        sizeThird[2].classList.add("trtr480");
        sizeThird[2].classList.remove("carousel-img-wrapper_active");

        slide[i].style.maxWidth = 448 + "px";
        slide[i].style.maxHeight = 517 + "px";
        slide[i].style.backgroundImage = this.carouselItem[i].activeImgBack;

        btn[i].style.display = "flex";
        paragraph[i].style.display = "flex";

        img[i].style.backgroundImage = this.carouselItem[i].activeImg;
        img[i].style.maxWidth = 408 + "px";
        img[i].style.maxHeight = 250 + "px";
        img[i].style.marginTop = 50 + "px";

        btnSledPrev.style.display = "none";
      }
    }

    if (window.screen.width <= 320) {
      for (let i = 0; i < slide.length; i++) {
        slide[i].classList.remove("inactive");
        slide[i].classList.add("active");
        imgSize[2].classList.add("activeImgSize");
        imgSize[2].classList.remove("carousel__img_active");
        sizeThird[2].classList.add("trtr");
        sizeThird[2].classList.remove("carousel-img-wrapper_active");

        slide[i].style.minWidth = 288 + "px";
        slide[i].style.maxHeight = 414 + "px";
        slide[i].style.backgroundImage = this.carouselItem[i].activeImgBack;

        btn[i].style.display = "flex";
        paragraph[i].style.display = "flex";

        img[i].style.backgroundImage = this.carouselItem[i].notActiveImg;
        img[i].style.maxWidth = 100 + "px" + "!important";
        img[i].style.maxHeight = 160 + "px" + "!important";
        img[i].style.marginTop = -50 + "px";

        btnSledPrev.style.display = "none";
      }
    }
  },
};
</script>
