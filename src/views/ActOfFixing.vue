<template>
  <main class="content">
    <div class="btn-function">
      <button type="submit" class="btn-docs-box">
        <router-link to="/service/" class="button">Вернуться назад</router-link>
      </button>
    </div>
    <h1>Акт фиксации</h1>
    <div class="container-functions-docs-box">
      <form
        action="https://lawyerageeva.ru/php/word-act-of-fixing.php"
        method="POST"
        enctype="multipart/form-data"
        class="form-docs"
        id="form"
      >
        <div class="text-field">
          <label class="text-field__label" for="date"
            >Введите дату составления акта, пример 01.01.2022</label
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
          <label class="text-field__label" for="date"
            >Введите дату подачи заявки в диспетчерскую службу, пример
            02.01.2022</label
          >
          <input
            class="text-field__input"
            type="text"
            name="date_submission"
            id="date_submission"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="time"
            >Введите время подачи заявки в диспетчерскую службу, пример 14 часов
            45 минут:</label
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
          <label class="text-field__label" for="address"
            >Введите адрес места составления акта без номера квартиры, пример:
            010000, г.Москва, ул.Пушкина, д.1</label
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
          <label class="text-field__label" for="summary"
            >Введите краткое содержание заявки</label
          >
          <input
            class="text-field__input"
            type="text"
            name="summary"
            id="summary"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="num_id"
            >Введите присвоенный оператором (диспетчером) номер заявки</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="num_id"
            id="num_id"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="list"
            >Введите подробное описание установленного факта предоставления
            коммунальной услуги ненадлежащего качества</label
          >
          <textarea
            class="text-field__input"
            type="textarea"
            name="list"
            id="list"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="quantity"
            >Введите колличество составленных экземпляров акта (не менее 2
            экземпляров)</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="quantity"
            id="quantity"
            autocomplete="off"
            min="2"
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

