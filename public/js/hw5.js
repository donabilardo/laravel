const form = document.querySelector('.form');
const send_btn = document.querySelector('.send_btn');
const alert = document.querySelector('.alert');
const info = document.querySelector('.info');


let _token = document.getElementsByName('_token')[0].value
// console.log(_token);


form.addEventListener('submit', function (e) {
    e.preventDefault();
});

send_btn.addEventListener('click', function (e) {
    e.preventDefault();
    const first_name = document.querySelector('.first_name').value;
    const last_name = document.querySelector('.last_name').value;
    const user_age = document.querySelector('.user_age').value;
    const user_email = document.querySelector('.user_email').value;
    const user_data = document.querySelector('.user_data').value;


    const form_data = {
        first_name: first_name,
        last_name: last_name,
        user_age: user_age,
        user_email: user_email,
        user_data: user_data,
        _token: _token
    }

    data = JSON.stringify(form_data);

    fetch('/add_user', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json',
            'Accept': 'application/json',
            'X-CSRF-TOKEN': _token
        },
        body: data

    }).then(r => r.json()).then(data => {
        info.innerHTML = "<div class='alert alert-success mt-1  container' role='alert' style='display:flex; justify-content: space-between; width: 100 %';>\n" +
            "\n" + "Пользователь " +  data.name +    " добавлен"  +  "\n"  +
            "<button type='button' class='btn-close' aria-label='Close'></button>\n" +
            "</div>"
        const btn_close = document.querySelector('.btn-close');
        btn_close.addEventListener('click', function (e) {
            this.parentElement.remove();
        });
        form.reset();
        console.log(data);
    });

})


//
//
// <div class='alert alert-success mt-1  container' role='alert' style='display:flex justify-content: space-between; width: 100 %';>
//
// <button type='button' class='btn-close' aria-label='Close'></button>
// </div>
