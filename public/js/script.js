const form = document.querySelector('.del_user');
const del_user_link = document.querySelector('.del_user_link');
const del_user_input = document.querySelector('.del_user_input');

let data = null;


del_user_link.addEventListener('click', function (ev) {
    ev.preventDefault();


    if (del_user_input.value !== '') {
        data = del_user_input.value;


        fetch('del_user', {
            method: 'GET',
            headers: {'Content-Type': 'application/json'},
        })
            .then(res => res.json())
            .then(data => console.log('Успешно:', data))
            .catch(error => console.error('Ошибка:', error));




    } else {
        console.log("empty");
    }
    del_user_input.value = '';
});


