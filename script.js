function showForm() {
    let formDiv = document.getElementById("FormaZapisi");
    let forma = document.getElementById("forma");
    let body = document.getElementById("body");
    let bodyStyle = body.style;
    let formDivStyles = formDiv.style;
    let formaStyles = forma.style;
    formDivStyles.visibility = "visible";
    formaStyles.visibility = "visible";
    bodyStyle.overflow = "hidden";
    formDivStyles.zIndex = 3;
}
function closeForm(){
    let formDiv = document.getElementById("FormaZapisi");
    let forma = document.getElementById("forma");
    let body = document.getElementById("body");
    let bodyStyle = body.style;
    let formDivStyles = formDiv.style;
    let formaStyles = forma.style;
    formDivStyles.visibility = "hidden";
    bodyStyle.overflow = "visible";
    formaStyles.visibility = "hidden";
    formDivStyles.zIndex = -1;
}
const wow = new WOW({
    boxClass: 'wow', /* класс, который необходим для работы wow.js */
    animateClass: 'WhyChooseDiv1', /* класс, который будет автоматически добавляться анимируемым элементам при прокрутке страницы */
    offset: 120, /* по-умолчанию установлено значение 0, то есть как только при прокрутке страницы, элемент достигает низа окна браузера проигрываться анимация, в данном случае анимация начнется на 30px выше от низа окна браузера */
    mobile: true, /* если true, то на мобильных тоже будет анимация, если false, то на мобильных анимация отключается */
    live: true /* если true, то анимация будет работать даже на динамически добавляемых элементах, если false, то только на тех элементах, которые были на странице при ее загрузке */
  })
  wow.init(); /* Инициализация плагина с установленными выше свойствами */
  