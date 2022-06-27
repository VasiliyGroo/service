<template>
  <div class="app">
    <router-view />
  </div>
</template>

<style lang="scss">
:root {
  --primary: #b23bf5;
  --primary-alt: #b23bf5;
  --grey: #babec2;
  --dark: #191919;
  --dark-alt: #191919;
  --light: #e7eff6;
  --extra-light: #fff;
  --sidebar-width: 230px;
  --main-bg: #313443;
  --box-dark: #1b1b21;
}

*,
*::before,
*::after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Fira sans", sans-serif;
}
body {
  margin: 0;
  background: var(--main-bg);
}

h1 {
  font-size: 1.4rem;
  font-weight: 400;
  padding-bottom: 1rem;
  color: var(--light);
}

p {
  font-weight: 400;
  font-size: 0.875rem;
}
a,
a:hover,
a:focus,
a:active {
  text-decoration: none;
  font-weight: 700;
  font-size: 1rem;
}
a {
  color: var(--light);
}
a:hover,
a:focus,
a:active {
  color: var(--extra-light);
}
/* text field */
.text-field {
  margin-bottom: 1rem;
}
.text-field__label {
  font-size: 0.875rem;
  font-weight: 200;
  display: block;
  margin-bottom: 0.25rem;
}

.text-field__input {
  display: block;
  width: 100%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 200;
  line-height: 1.5;
  color: var(--extra-light);
  background-color: var(--main-bg);
  background-clip: padding-box;
  border: none;
  border-radius: 12px;
  transition: background-color 5000s ease-in-out 0s;
  -webkit-text-fill-color: white !important;
}
.text-field__input_times {
  display: block;
  width: 30%;
  height: calc(2.25rem + 2px);
  padding: 0.375rem 0.75rem;
  font-family: inherit;
  font-size: 1rem;
  font-weight: 200;
  line-height: 1.5;
  color: var(--lextra-light);
  background-color: var(--main-bg);
  background-clip: padding-box;
  border: none;
  border-radius: 12px;
  transition: background-color 5000s ease-in-out 0s;
  -webkit-text-fill-color: white !important;
}

.text-field__input::placeholder,
.text-field__input_times::placeholder {
  color: var(--light);
  opacity: 0.4;
}

.text-field__input:focus,
.text-field__input_times:focus {
  color: var(--extra-light);
  background-color: var(--main-bg);
  border: none;
  border-radius: 12px;
  outline: 0;
}

.text-field__input:disabled,
.text-field__input[readonly],
.text-field__input_times:disabled,
.text-field__input_times[readonly] {
  background: var(--main-bg);
  color: var(--extra-light);
  opacity: 1;
}

/* is invalid */
.text-field__input:invalid,
.text-field__input:valid,
.text-field__input_times:invalid,
.text-field__input_times:valid {
  border-color: #dc3545;
  padding-right: 2.25rem;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 12 12' width='12' height='12' fill='none' stroke='%23dc3545'%3e%3ccircle cx='6' cy='6' r='4.5'/%3e%3cpath stroke-linejoin='round' d='M5.8 3.6h.4L6 6.5z'/%3e%3ccircle cx='6' cy='8.2' r='.6' fill='%23dc3545' stroke='none'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.5625rem center;
  background-size: 1.125rem 1.125rem;
}

.text-field__input:valid,
.text-field__input_times:valid {
  border-color: #198754;
  background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 8 8'%3e%3cpath fill='%23198754' d='M2.3 6.73L.6 4.53c-.4-1.04.46-1.4 1.1-.8l1.1 1.4 3.4-3.8c.6-.63 1.6-.27 1.2.7l-4 4.6c-.43.5-.8.4-1.1.1z'/%3e%3c/svg%3e");
  background-repeat: no-repeat;
  background-position: right 0.5625rem center;
  background-size: 1.125rem 1.125rem;
}

.text-field__input:invalid:focus,
.text-field__input_times:invalid:focus {
  border-color: #dc3545;
  box-shadow: 0 0 0 0.25rem rgba(220, 53, 69, 0.25);
}

.text-field__input:valid:focus,
.text-field__input_times:valid:focus {
  border-color: #198754;
  box-shadow: 0 0 0 0.25rem rgb(25 135 84 / 25%);
}

.text-field__message {
  display: none;
  width: 100%;
  margin-top: 0.25rem;
  font-size: 0.875rem;
  color: #dc3545;
}

.text-field__input:valid ~ .text-field__message,
.text-field__input_times:valid ~ .text-field__message {
  color: #198754;
}

.text-field__input:invalid ~ .text-field__message,
.text-field__input:valid ~ .text-field__message,
.text-field__input_times:invalid ~ .text-field__message,
.text-field__input_times:valid ~ .text-field__message {
  display: block;
}

.btn-docs:hover {
  color: #fff;
  background-color: var(--primary);
  border-color: var(--primary);
}
button {
  cursor: pointer;
  appearance: none;
  border: none;
  outline: none;
  background: none;
}
.app {
  display: flex;
  main {
    flex: 1 1 0;
    padding: 2rem;
    color: var(--light);
    @media (max-width: 1024px) {
      padding-left: 6rem;
    }
  }

  .btn-docs {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background: var(--light);
    border: none;
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    border-radius: 7px;
    transition: background-color 0.15s ease-in-out;
  }

  .btn-docs:hover {
    background: var(--grey);
  }
  .btn-docs-box {
    display: inline-block;
    font-weight: 400;
    line-height: 1.5;
    margin: 1rem;
    text-align: center;
    text-decoration: none;
    vertical-align: middle;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
    background: linear-gradient(to bottom right, #b23bf5, #fa7f53);
    border: none;
    padding: 0.375rem 0.75rem;
    font-size: 0.875rem;
    border-radius: 7px;
    transition: background-color 0.15s ease-in-out;
  }

  .btn-docs-box:hover {
    background: linear-gradient(to bottom right, #b23bf5, #fa7f53);
  }
  .container-functions {
    padding: 1rem;
    background: linear-gradient(to bottom, #1b1b21, #201f2a);
    border-radius: 12px;
    max-width: 35rem;
  }
  .container-functions-docs {
    display: flex;
    justify-content: space-between;
    align-items: baseline;
    margin-top: 2rem;
    padding: 1.2rem;
    background: linear-gradient(to bottom, #1b1b21, #201f2a);
    border-radius: 12px;
  }
  .container-functions-docs-box {
    padding: 1.5rem;
    background: linear-gradient(to bottom, #1b1b21, #201f2a);
    border-radius: 12px;
  }
  .box-desc-img {
    background: var(--dark-alt);
    border-radius: 13px;
    padding: 1rem;
    margin-bottom: 1rem;
  }
  .btn-hidder {
    color: var(--primary);
    font-size: 2rem;
    font-weight: 700;
  }
  .title-docs {
    font-weight: 400;
    font-size: 0.875rem;
    color: var(--extra-light);
  }
  .text-docs {
    font-weight: 200;
    font-size: 0.875rem;
    max-width: 70%;
    color: var(--grey);
  }
  .title-function {
    padding: 10px;
    font-size: 0.875rem;
    text-align: left;
    color: var(--extra-light);
  }
  .desc-function {
    padding: 10px;
    font-size: 0.875rem;
    font-weight: 200;
    text-align: left;
  }
  .btn-function {
    text-align: center;
  }
  .gradient-text {
    background: linear-gradient(to bottom right, #b23bf5, #fa7f53);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }
  .content {
    flex: 1 1 0;
    padding: 2rem;
  }
  .row-templates-container {
    display: grid;
    padding-top: 1rem;
  }
  .router-item {
    padding-bottom: 1rem;
  }
  .button-router {
    color: var(--grey);
    font-size: 0.875rem;
  }
  .button-router:hover {
    color: var(--extra-light);
    font-size: 1rem;
    transition: 0.4s ease;
  }
  .button-router:active {
    color: var(--extra-light);
    font-size: 1rem;
  }
  input {
    font-size: 0.7rem;
  }
  .content h1 {
    color: var(--extra-light);
    font-size: 1.5rem;
    margin-bottom: 1rem;
  }

  .content p {
    color: var(--grey);
  }
  .dropbtn {
    background: linear-gradient(to bottom right, #b23bf5, #fa7f53);
    color: white;
    padding: 0.5rem;
    font-size: 1rem;
    border-radius: 3px;
    border: none;
  }

  .dropdown {
    position: relative;
    display: inline-block;
  }

  .dropdown-content {
    display: none;
    position: absolute;
    max-height: 350px;
    overflow-y: scroll;
    background: var(--main-bg);
    min-width: 280px;
    border-radius: 3px;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.4);
    z-index: 1;
  }

  .dropdown-content a {
    color: var(--grey);
    padding: 1rem;
    font-size: 1rem;
    font-weight: 200;
    text-decoration: none;
    display: block;
  }
  .dropdown-content a:hover {
    color: var(--extra-light);
  }

  .dropdown-content a:hover {
    background: var(--box-dark);
  }

  .dropdown:hover .dropdown-content {
    display: block;
  }

  .dropdown:hover .dropbtn {
    background: linear-gradient(to bottom right, #9a33d5, #d86e47);
  }
  @media (max-width: 768px) {
  }
}
</style>
