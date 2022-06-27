<template>
  <main class="content">
    <div class="btn-function">
      <button type="submit" class="btn-docs-box">
        <router-link to="/service/" class="button">Вернуться назад</router-link>
      </button>
    </div>

    <h1>Информационные доски</h1>
    <div class="container-functions-docs-box">
      <form
        action="https://lawyerageeva.ru/php/word-information-boards.php"
        method="POST"
        enctype="multipart/form-data"
        class="form-docs"
        id="form"
      >
        <div class="text-field">
          <label class="text-field__label" for="name"
            >Введите ФИО заявителя в родительном падеже, пример: Ивановой Елены
            Сергеевны</label
          >
          <input
            class="text-field__input"
            type="text"
            name="name"
            id="name"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="name"
            >Введите ФИО заявителя в дательном падеже, пример: Ивановой Елене
            Сергеевне</label
          >
          <input
            class="text-field__input"
            type="text"
            name="name_dp"
            id="name_dp"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="address"
            >Введите адрес заявителя без номера квартиры, пример: 010000,
            г.Москва, ул.Пушкина, д.1</label
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
          <label class="text-field__label" for="apartment"
            >Введите номер квартиры заявителя</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="apartment"
            id="apartment"
            min="0"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="name_uk"
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
          <label class="text-field__label" for="address_uk"
            >Введите юридический адрес управляющей компании, пример: 010000,
            г.Москва, ул.Пушкина, д.1</label
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
