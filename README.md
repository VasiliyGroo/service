# Прототип сервиса генерации юридических документов для моей жены

Данный сервис предназначен для клиентов юридических услуг и для юристов в области жилищного права. Главный функционал сервиса заключается в том, что пользователь вводя всю необходимую информацию указанную в форме, в конечном счете получает юридически грамотный документ, который можно отправлять в суд и иже с ним стоящие инстанции.
<br>
Для этого с помощью PHP библиотеки - PhpWord, написал функцию, которая обрабатывает теги в файле формата docx и подставляет значения из формы на сайте, далее после того как пользователь внесет всю необходимую информацию в форму, данная функция позволяет скачать документ с измененными тегами на значения пользователя.

## Прототип залит на GitHub Pages

- [Генератор документов](https://vasiliygroo.github.io/service/)

## Стек технологий

- Vite.js

- Vue.js (Router-link, router-view)

- PHP (библиотека PhpOffice/PhpWord)

- CSS
