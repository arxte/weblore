<script>
export default {
  data() {
    return {};
  },

  methods: {
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
  <transition name="title-appearance" appear>
    <h1 class="title-header">
      Решения по дизайну <br />
      <span class="title-header_medium">для бизнеса</span>
    </h1>
  </transition>

  <button class="title-header__btn" @click="scroll()">Заказать Дизайн</button>
</template>
