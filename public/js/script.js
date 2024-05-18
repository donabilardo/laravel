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


const form_add_user = document.querySelector('.form_add_user');
const button_add_user = document.querySelector('.button_add_user');
const url_add_user = "add_user";
const inf = document.querySelector('.inf');
form_add_user.addEventListener('submit', function (ev) {
    ev.preventDefault();
});



button_add_user.addEventListener('click', function (ev) {
    ev.preventDefault();


    const formData = {
        _token: document.getElementsByName('_token')[0].value,
        first_name: document.querySelector("#first_name").value,
        last_name: document.querySelector("#last_name").value,
        email: document.querySelector("#email").value,
        age: document.querySelector("#age").value,
        fulltext: document.querySelector("#fulltext").value,
    }

    const data = JSON.stringify(formData);
    console.log(data);

    fetch(url_add_user, {
        method: 'POST',
        body: data,
        headers: {
            'Content-Type': 'application/json',
            'X-CSRF-TOKEN': document.getElementsByName('_token')[0].value
        }
    }).then(res => res.json())
        .then(data => console.log('Успешно:', data))
        .catch(error => console.error('Ошибка:', error));

    form_add_user.reset();

inf.innerHTML = '';

});


