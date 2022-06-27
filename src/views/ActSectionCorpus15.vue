<template>
  <main class="content">
    <div class="btn-function">
      <button type="submit" class="btn-docs-box">
        <router-link to="/service/" class="button">Вернуться назад</router-link>
      </button>
    </div>

    <h1>Акт фиксации строительных недостатков (на 15 описаний)</h1>
    <div class="text-field">
      <label class="text-field__label" for="num_section"
        >Укажите количество предполагаемых описаний в таблице</label
      >

      <div class="dropdown">
        <button class="dropbtn">Форма на 15 описаний</button>
        <div class="dropdown-content">
          <router-link to="/service/act-corpus-section"
            >Форма на 1 описание</router-link
          >
          <router-link to="/service/act-corpus-section2"
            >Форма на 2 описания</router-link
          >
          <router-link to="/service/act-corpus-section3"
            >Форма на 3 описания</router-link
          >
          <router-link to="/service/act-corpus-section4"
            >Форма на 4 описания</router-link
          >
          <router-link to="/service/act-corpus-section5"
            >Форма на 5 описаний</router-link
          >
          <router-link to="/service/act-corpus-section6"
            >Форма на 6 описаний</router-link
          >
          <router-link to="/service/act-corpus-section7"
            >Форма на 7 описаний</router-link
          >
          <router-link to="/service/act-corpus-section8"
            >Форма на 8 описаний</router-link
          >
          <router-link to="/service/act-corpus-section9"
            >Форма на 9 описаний</router-link
          >
          <router-link to="/service/act-corpus-section10"
            >Форма на 10 описаний</router-link
          >
          <router-link to="/service/act-corpus-section11"
            >Форма на 11 описаний</router-link
          >
          <router-link to="/service/act-corpus-section12"
            >Форма на 12 описаний</router-link
          >
          <router-link to="/service/act-corpus-section13"
            >Форма на 13 описаний</router-link
          >
          <router-link to="/service/act-corpus-section14"
            >Форма на 14 описаний</router-link
          >

          <router-link to="/service/act-corpus-section16"
            >Форма на 16 описаний</router-link
          >
          <router-link to="/service/act-corpus-section17"
            >Форма на 17 описаний</router-link
          >
          <router-link to="/service/act-corpus-section18"
            >Форма на 18 описаний</router-link
          >
          <router-link to="/service/act-corpus-section19"
            >Форма на 19 описаний</router-link
          >
          <router-link to="/service/act-corpus-section20"
            >Форма на 20 описаний</router-link
          >
        </div>
      </div>
    </div>
    <div class="container-functions-docs-box">
      <form
        action="https://lawyerageeva.ru/php/word-act-corpus-section15.php"
        method="POST"
        enctype="multipart/form-data"
        class="form-docs"
        id="form"
      >
        <div class="text-field">
          <label class="text-field__label" for="num_section"
            >Введите секцию дома где составляется акт</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="num_section"
            id="num_section"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="num_corpus"
            >Введите корпус дома где составляется акт</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="num_corpus"
            id="num_corpus"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="num_build_corpus"
            >Введите строительный корпус дома где составляется акт</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="num_build_corpus"
            id="num_build_corpus"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="text-field">
          <label class="text-field__label" for="floor"
            >Введите этаж где составляется акт</label
          >
          <input
            class="text-field__input_times"
            type="number"
            name="floor"
            id="floor"
            min="-2"
            autocomplete="off"
            required
          />
          <div class="text-field__message"></div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem"
              id="description_problem"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="image"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file"
              id="image"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_a"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_a"
              id="description_problem_a"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_a"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_a"
              id="file_a"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_b"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_b"
              id="description_problem_b"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_b"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_b"
              id="file_b"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_c"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_c"
              id="description_problem_c"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_c"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_c"
              id="file_c"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_d"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_d"
              id="description_problem_d"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_d"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_d"
              id="file_d"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_e"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_e"
              id="description_problem_e"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_e"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_e"
              id="file_e"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_f"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_f"
              id="description_problem_f"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_f"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_f"
              id="file_f"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_g"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_g"
              id="description_problem_g"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_g"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_g"
              id="file_g"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_h"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_h"
              id="description_problem_h"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_h"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_h"
              id="file_h"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_i"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_i"
              id="description_problem_i"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_i"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_i"
              id="file_i"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_j"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_j"
              id="description_problem_j"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_j"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_j"
              id="file_j"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_k"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_k"
              id="description_problem_k"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_k"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_k"
              id="file_k"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_l"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_l"
              id="description_problem_l"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_l"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_l"
              id="file_l"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_m"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_m"
              id="description_problem_m"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_m"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_m"
              id="file_m"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
        </div>

        <div class="box-desc-img">
          <div class="text-field">
            <label class="text-field__label" for="description_problem_n"
              >Введите точное описание недостатка</label
            >
            <textarea
              class="text-field__input"
              type="textarea"
              name="description_problem_n"
              id="description_problem_n"
              autocomplete="off"
              required
            />
            <div class="text-field__message"></div>
          </div>

          <div class="text-field">
            <label class="text-field__label" for="file_n"
              >Прикрепите фотографию недостатка</label
            >
            <input
              class="text-field__input_file"
              type="file"
              name="file_n"
              id="file_n"
              accept=".jpg, .jpeg, .png, .gif"
              required
            />
            <div class="text-field__message"></div>
          </div>
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