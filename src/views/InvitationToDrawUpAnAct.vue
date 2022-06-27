<template>
  <main class="content">
    <div class="btn-function">
      <button type="submit" class="btn-docs-box">
        <router-link to="/service/" class="button">Вернуться назад</router-link>
      </button>
    </div>
    <h1>Приглашение на составление Акта</h1>
    <div class="container-functions-docs-box">
      <form
        action="https://lawyerageeva.ru/php/word-invitation-to-draw-up-an-act.php"
        method="POST"
        enctype="multipart/form-data"
        class="form-docs"
        id="form"
      >
        <div class="text-field">
          <label class="text-field__label" for="company"
            >Введите наименование управляющей компании, пример: ООО "Рога и
            Копыта"</label
          >
          <input
            class="text-field__input"
            type="text"
            name="company"
            id="company"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="name_company"
            >Введите ФИО генерального директора управляющей компании в дательном
            падеже, пример: Иванову Ивану Ивановичу</label
          >
          <input
            class="text-field__input"
            type="text"
            name="name_company"
            id="name_company"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="address_company"
            >Введите юридический адрес управляющей компании, пример: 000100, г.
            Москва, ул. Пушкина, д. 1</label
          >
          <input
            class="text-field__input"
            type="text"
            name="address_company"
            id="address_company"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="name"
            >Введите ФИО заявителя в родительном падеже, пример: Иванова Ивана
            Ивановича</label
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
          <label class="text-field__label" for="address"
            >Введите адрес заявителя, пример: 000100, г. Москва, ул. Пушкина, д.
            1, кв. 45</label
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
          <label class="text-field__label" for="tel"
            >Введите номер телефона заявителя, пример: +79999999999</label
          >
          <input
            class="text-field__input"
            type="text"
            name="tel"
            id="tel"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="name_o_company"
            >Введите Имя Отчество генерального директора, пример: Иван
            Иванович</label
          >
          <input
            class="text-field__input"
            type="text"
            name="name_o_company"
            id="name_o_company"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="problem"
            >Введите описание коммунальной услуги ненадлежащего качества</label
          >
          <textarea
            class="text-field__input"
            type="textarea"
            name="problem"
            id="problem"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="date"
            >Введите дату составления акта, пример: 01.01.2022</label
          >
          <input
            class="text-field__input"
            type="text"
            name="date"
            id="date"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="time"
            >Введите время составления акта, пример 14 часов 45 минут:</label
          >
          <label class="text-field__label" for="time">часов</label>
          <input
            class="text-field__input_times"
            type="number"
            name="hours"
            id="hours"
            min="00"
            max="23"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
          <label class="text-field__label" for="time">минут</label>
          <input
            class="text-field__input_times"
            type="number"
            name="minutes"
            id="minutes"
            min="00"
            max="59"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="date_go"
            >Введите дату приглашения на составление акта, пример:
            01.01.2022</label
          >
          <input
            class="text-field__input"
            type="text"
            name="date_go"
            id="date_go"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="name_sign"
            >Введите расшифровку подписи заявителя, пример: Иванов И.И.</label
          >
          <input
            class="text-field__input"
            type="text"
            name="name_sign"
            id="name_sign"
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