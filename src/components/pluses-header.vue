<script>
export default {
  data() {
    return {};
  },
};
</script>

<template>
  <ul class="pluses-header">
    <transition name="background-appearance" appear>
      <li class="pluses-header__item">
        <p class="pluses-header__item-title">Качественно</p>
        <p class="pluses-header__item-text">
          Мы серьёзно относимся к каждому проекту, что гарантирует отличные
          результаты сотрудничества
        </p>
      </li>
    </transition>

    <transition name="background-appearance" appear>
      <li class="pluses-header__item">
        <p class="pluses-header__item-title">Всегда в сроки</p>
        <p class="pluses-header__item-text">
          Уважаем время клиентов как свое, и относимся к поставленным срокам со
          всей ответственностью
        </p>
      </li>
    </transition>

    <transition name="background-appearance" appear>
      <li class="pluses-header__item">
        <p class="pluses-header__item-title">Все просто</p>
        <p class="pluses-header__item-text">
          Обьясним как мы разрабатываем сайт, как его дальше использовать и
          продвигать
        </p>
      </li>
    </transition>

    <transition name="background-appearance" appear>
      <li class="pluses-header__item">
        <p class="pluses-header__item-title">Гибкая система оплаты</p>
        <p class="pluses-header__item-text">
          Работаем по 30% авансу от суммы, может отличаться в зависимости от
          объема проекта
        </p>
      </li>
    </transition>
  </ul>
</template>
