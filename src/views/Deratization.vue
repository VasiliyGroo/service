<template>
  <main class="content">
    <div class="btn-function">
      <button type="submit" class="btn-docs-box">
        <router-link to="/service/" class="button">Вернуться назад</router-link>
      </button>
    </div>

    <h1>Дератизация и дезинсекция</h1>
    <div class="container-functions-docs-box">
      <form
        action="https://lawyerageeva.ru/php/word-deratization.php"
        method="POST"
        enctype="multipart/form-data"
        class="form-docs"
        id="form"
      >
        <div class="text-field">
          <label class="text-field__label" for="fullname">Введите ФИО</label>
          <input
            class="text-field__input"
            type="text"
            name="name"
            id="fullname"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="address"
            >Введите свой адрес без номера квартиры, пример: 000100, г. Москва,
            ул. Пушкина, д. 1</label
          >
          <input
            class="text-field__input"
            type="text"
            name="address"
            id="address"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="address"
            >Введите номер квартиры</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="number"
            id="number"
            min="0"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="address"
            >Введите наименование управляющей компании, пример: ООО "Рога и
            Копыта"</label
          >
          <input
            class="text-field__input"
            type="text"
            name="name_uk"
            id="name_uk"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="address"
            >Введите адрес управляющей компании, пример: "0100000, г.Москва,
            ул.Пушкина, д. 1"</label
          >
          <input
            class="text-field__input"
            type="text"
            name="address_uk"
            id="address_uk"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>
        <div class="btn-function">
          <button type="submit" class="btn-docs-box">
            <div class="title-docs">Создать документ</div>
          </button>
        </div>
      </form>
    </div>
  </main>
</template>
