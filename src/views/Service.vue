<template>
  <main class="content">
    <h1>Создать документ</h1>

    <p>Выберите нужный документ:</p>
    <div class="menu-container">
      <div class="container-functions-docs">
        <div class="text-docs">
          <div class="title-docs">Акт фисации строительных недостатков</div>
          <br />
          Акт для фиксации строительных недостатков (недоделок) жителями МКД
        </div>
        <div class="btn-function">
          <router-link to="/service/act-corpus-section"
            ><button type="button" class="btn-docs">
              <div class="gradient-text">Создать</div>
            </button>
          </router-link>
        </div>
      </div>

      <div class="container-functions-docs">
        <div class="text-docs">
          <div class="title-docs">Дератизация и дезинсекция</div>
          <br />
          Дератизация - комплексные меры по уничтожению грызунов (крыс, мышей,
          полёвок и др.)
        </div>
        <div class="btn-function">
          <router-link to="/service/deratization"
            ><button type="button" class="btn-docs">
              <div class="gradient-text">Создать</div>
            </button>
          </router-link>
        </div>
      </div>
      <div class="container-functions-docs">
        <div class="text-docs">
          <div class="title-docs">Акт фиксации</div>
          <br />Cоставление акта оказания жилищных услуг ненадлежащего качества
        </div>
        <div class="btn-function">
          <router-link to="/service/act-of-fixing"
            ><button type="button" class="btn-docs">
              <div class="gradient-text">Создать</div>
            </button>
          </router-link>
        </div>
      </div>
      <div class="container-functions-docs">
        <div class="text-docs">
          <div class="title-docs">Информационные доски</div>
          <br />По жилищному законодательству управляющие компании обязаны
          предоставлять жильцам дома актуальную информацию
        </div>
        <div class="btn-function">
          <router-link to="/service/information-boards"
            ><button type="button" class="btn-docs">
              <div class="gradient-text">Создать</div>
            </button>
          </router-link>
        </div>
      </div>
      <div class="container-functions-docs">
        <div class="text-docs">
          <div class="title-docs">Приглашение на составление акта</div>
          <br />Приглашение генерального директора управляющей компании на
          составление и подписание акта приёмки выполненных работ
        </div>
        <div class="btn-function">
          <router-link to="/service/invitation-to-draw-up-an-act"
            ><button type="button" class="btn-docs">
              <div class="gradient-text">Создать</div>
            </button>
          </router-link>
        </div>
      </div>
    </div>
  </main>
</template>
