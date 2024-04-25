//Функция для хобби
const clickedHobby = (hobby) => {

    inp = hobby.previousElementSibling;

    if (hobby.hasAttribute('selected')){
        hobby.removeAttribute('selected')
        inp.setAttribute('name', 'no')
    }
    else{
        hobby.setAttribute('selected', true)
        inp.setAttribute('name', 'hobbiesArray[]')
    }
}

//Функция для сохранения куки, что пользоват соглашение принято
const acceptTU = () =>{
    document.cookie = 'tu=true';
}

//Включить подсказки
const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))