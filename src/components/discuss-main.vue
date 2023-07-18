<script>
export default {
  data() {
    return {
      animTitle: [],
      animForm: [],
      form: document.getElementById("discuss-form"),
    };
  },

  mounted() {
    window.addEventListener("scroll", () => {
      this.animFunc();
    });
  },

  methods: {
    animFunc() {
      for (let index = 0; index <= this.animTitle.length; index++) {
        const animItem = document.querySelectorAll(".discuss__title-block");
        const animForm = document.querySelectorAll(".discuss-form");
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
          animItem[0].classList.add("_startAnimDiscuss");
          animForm[0].classList.add("_startAnimDiscuss");
        } else {
          if (!animItem[index].classList.contains("_animNoHide")) {
            animItem[0].classList.remove("_startAnimDiscuss");
            animForm[0].classList.remove("_startAnimDiscuss");
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

    btnClicked() {
      const form = document.getElementById("discuss-form");
      form.addEventListener("submit", formSend);
      const titleForm = document.querySelectorAll(".discuss-form__title");
      const dataForm = document.querySelectorAll(".discuss-form__label");
      const inp = document.getElementById("number");
      async function formSend(e) {
        e.preventDefault();

        let error = formValidate(form);

        let formData = new FormData(form);

        if (error === 0) {
          let response = await fetch("../../mail.php", {
            method: "POST",
            body: formData,
          });

          if (response.ok) {
            form.reset();
          }
        }
      }

      function formValidate(form) {
        let error = 0;
        let formReq = document.querySelectorAll("._req");
        console.log(form);

        for (let index = 0; index < formReq.length; index++) {
          const input = formReq[index];

          if (input.classList.contains("_number")) {
            if (numberTest(input) || inp.value === "") {
              error++;
              titleForm[0].innerHTML =
                "Номер введен неверно. Пример: <br /> 010 5810 9181";
              titleForm[0].style.color = "rgb(255, 30, 30)";

              setTimeout(() => {
                titleForm[0].innerHTML =
                  "Оставьте ваши контактные данные, <br /> и мы перезвоним вам в течении дня";
                titleForm[0].style.color = "#f0bc7a";
              }, 5000);
            }
          } else if (
            (input.getAttribute("type") === "checkbox" &&
              input.checked === false) ||
            inp.value == ""
          ) {
            error++;
            dataForm[0].style.color = "rgb(255, 30, 30)";

            setTimeout(() => {
              dataForm[0].style.color = "#fff";
            }, 2000);
          } else {
            titleForm[0].innerHTML =
              "Ваши контакты успешно отправлены. <br /> Спасибо!";
            titleForm[0].style.color = "#7AF07F";
          }
        }

        return error;
      }

      function numberTest(input) {
        // const thirdRegExp = !/^\+010 \d{4} \d{4}$/.test(input.value);
        // const firstRegExp = !/^\+\8210 \d{4} \d{4}$/.test(input.value);
        // const secondRegExp = !/^010 \d{4} \d{4}$/.test(input.value);
        // const fourRegExp = !/^010\d{4}\d{4}$/.test(input.value);
        // const fiveRegExp = !/^\+010\d{4}\d{4}$/.test(input.value);
        // const sixRegExp = !/^\+\8210\d{4}\d{4}$/.test(input.value);

        const firstRegExp = !/^\+7 \d{3} \d{3} \d{4}$/.test(input.value);
        const secondRegExp = !/^\+7\d{3}\d{3}\d{4}$/.test(input.value);
        const thirdRegExp = !/^7 \d{3} \d{3} d{4}$/.test(input.value);
        const fourRegExp = !/^7\d{3}\d{3}\d{4}$/.test(input.value);

        if (
          firstRegExp === false ||
          secondRegExp === false ||
          thirdRegExp === false ||
          fourRegExp === false
        ) {
          return false;
        } else {
          return true;
        }
      }
    },

    changeTitleForm() {
      console.log("da");
    },
  },
};
</script>

<template>
  <div class="discuss-wrapper" id="discuss-wrapper">
    <section class="discuss">
      <div class="discuss__title-block _animNoHide">
        <h1 class="discuss__title">Обсудим</h1>
        <span class="discuss__title-second">Ваш Проект</span>
      </div>

      <form
        action="../../mail.php"
        method="POST"
        class="discuss-form _animNoHide"
        id="discuss-form"
      >
        <h1 class="discuss-form__title">
          Оставьте ваши контактные данные, <br />
          и мы перезвоним вам в течении дня
        </h1>
        <input
          type="tel"
          id="number"
          name="telephone"
          class="discuss-form__input _number _req"
          placeholder="Номер телефона"
        />

        <button type="submit" class="discuss-form__btn" @click="btnClicked()">
          Отправить
        </button>

        <input
          type="checkbox"
          id="data-processing"
          name="data-processing"
          value="text"
          class="discuss-form__checkbox _req"
        />

        <label for="data-processing" class="discuss-form__label"
          >Cогласен с обработкой персональных данных</label
        >
      </form>
    </section>
  </div>
</template>
