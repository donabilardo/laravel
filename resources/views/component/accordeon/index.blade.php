<div class="accordion" id="accordionExample">
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                    aria-expanded="false" aria-controls="collapseOne">
                Урок 1. Введение, установка и первичная настройка
            </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Установите PHP на компьютер. Для этого вы можете скачать PHP с
                        официального сайта или развернуть образ Docker с PHP. Наиболее простой способ, рекомендуемый для
                        выполнения этого задания, — воспользоваться сборкой XAMMP. Скачать сборку для вашей платформы
                        можно на сайте Apache Friends.
                    </li>
                    <li class="list-group-item">Откройте утилиту командной строки в своей операционной системе.</li>
                    <li class="list-group-item">Выполните команду php -v и убедитесь, что PHP работает.</li>
                    <li class="list-group-item">Установите Composer. Выполните необходимые команды, описанные на
                        официальном сайте.
                    </li>
                    <li class="list-group-item">Установите Laravel с помощью Composer. Выполните команду composer
                        create-project laravel/laravel
                        <имя проекта>, где имя проекта — это имя вашего проекта. Этому имени будет соответствовать имя
                            папки, куда будет помещён проект.
                    </li>
                    <li class="list-group-item">Перейдите в папку, соответствующую имени проекта.</li>
                    <li class="list-group-item">Убедитесь, что папка не пустая, и выполните команду php artisan serve
                        --port=8080. Эта команда запустит встроенный веб-сервер Laravel
                    </li>
                    <li class="list-group-item">Откройте браузер и перейдите по адресу http://localhost:8080. Если всё
                        работает правильно, вы увидите страницу с информацией о фреймворке Laravel.
                    </li>
                    <li class="list-group-item">Сделайте скриншот.</li>
                </ol>
                <h2>Решение</h2>
                <p><a href="/offers">Вывод из MySQL</a></p>


                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/1.png" class="d-block w-100" alt="{{$title}}">
                        </div>
                        <div class="carousel-item">
                            <img src="images/2.png" class="d-block w-100" alt="{{$title}}">
                        </div>
                        <div class="carousel-item">
                            <img src="images/3.png" class="d-block w-100" alt="{{$title}}">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>


            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                Урок 2. Контроллеры, экшены и роутинг
            </button>
        </h2>
        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Установите Laravel с помощью composer, выполнив команду composer
                        create-project laravel/laravel
                        <имя проекта>. В поле
                            <имя проекта> впишите имя вашего проекта. Этому имени будет соответствовать имя папки, в
                                которую вы поместите проект.
                    </li>
                    <li class="list-group-item">Создайте контроллер для вывода формы на страницу и её обработки. В
                        командную строку введите команду php artisan make:controller FormProcessor.
                    </li>
                    <li class="list-group-item">После выполнения команды убедитесь, что контроллер создан, —
                        соответствующий файл должен появиться в папке app/Http/Controllers.
                    </li>
                    <li class="list-group-item">Внутри контроллера опишите метод index: он должен выводить в браузер
                        форму для заполнения.
                        <ul>
                            <li>Опишите форму в виде шаблона blade.</li>
                            <li>Внутри формы должны быть поля для ввода имени, фамилии и email пользователя.</li>
                            <li>Форма отправляется методом POST.</li>
                            <li>Параметр action пока оставьте пустым.</li>
                            <li>Не забудьте про CSRF.</li>
                        </ul>
                    </li>
                    <li class="list-group-item"> Внутри файла /routes/web.php опишите новый роут (метод GET), который
                        будет вызывать метод index контроллера FormProcessor по url /userform.
                    </li>
                    <li class="list-group-item">Запустите встроенный сервер Laravel командой php artisan serve
                        --port=8080 и убедитесь, что форма выводится по адресу http://localhost:8080/userform.
                    </li>
                    <li class="list-group-item">В контроллере FormProcessor создайте метод store для обработки формы.
                        Этот метод должен принимать поля формы и отправлять ответ в виде JSON-объекта, содержащего
                        значения полей формы (имя, фамилия, email).
                    </li>
                    <li class="list-group-item">Внутри файла /routes/web.php опишите новый роут (метод POST), который
                        будет вызывать метод store контроллера FormProcessor по url /store_form.
                    </li>
                    <li class="list-group-item">Отредактируйте поле action формы в шаблоне и укажите адрес
                        /store_form.
                    </li>
                    <li class="list-group-item">Откройте форму в браузере по адресу http://localhost:8080/userform,
                        заполните её и попробуйте отправить на сервер, нажав кнопку Submit. Если всё сделано правильно,
                        вы увидите в браузере объект JSON.
                    </li>
                    <li class="list-group-item">Создайте новый шаблон blade для приветствия пользователя (например:
                        «Привет,
                        <имя>!»).
                    </li>
                    <li class="list-group-item">Измените метод store контроллера FormProcessor таким образом, чтобы
                        вместо JSON он возвращал шаблон, заполненный данными пользователя.
                    </li>
                    <li class="list-group-item">Сделайте коммит своих изменений с помощью git и отправьте push в
                        репозиторий.
                    </li>
                </ol>
                <h2>Решение</h2>
                <p><a href="/userform">Форма для добавления пользователей</a></p>
                <p><a href="/book">Каталог книг</a></p>
                <p><a href="/file">Загрузка файлов на сервер</a></p>
                <p><a href="/get-json">Вывод JSON</a></p>

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Урок 3. Работа с базами данных. ORM-система Eloquent
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item">Создайте базу данных, в ней — новую таблицу. Заполните поля, после чего
                        сделайте выборку данных по указанным полям:
                        1. Для создания, просмотра и редактирования баз данных MySQL установите программу PhpMyAdmin по
                        [инструкции](http://). Если у вас на компьютере установлен WAMP или XAMPP, то PhpMyAdmin тоже
                        должен быть установлен
                    </li>
                    <li class="list-group-item">2. Создайте базу данных с любым именем в PhpMyAdmin. Больше в нём ничего
                        делать не нужно, остальное выполните в коде проекта.<br>
                        <img src="/images/111.png" alt="" height="70%">
                    </li>
                    <li class="list-group-item">3. В папке проекта настройте файл конфигурации для базы данных. Пример:
                        <pre>
<code>
    'mysql' => [
    'read' => [
    'host' => '192.168.1.1',
    ],
    'write' => [
    'host' => '196.168.1.2'
    ],
    'driver' => 'mysql',
    'database' => 'database',
    'username' => 'root',
    'password' => '',
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
    ]
</code>
                    </pre>
                    </li>
                    <li class="list-group-item">4. Создайте проект Laravel с помощью composer, выполнив команду composer
                        create-project laravel/laravel
                        <имя проекта>.
                    </li>
                    <li class="list-group-item">5. В корне проекта создайте файл .env и укажите параметры подключения к
                        базе данных. После редактирования файла .env выполните команду php artisan config:clear.
                    </li>
                    <li class="list-group-item">6. В папке проекта через командную строку создайте новую модель
                        Employee. Одновременно с этим создайте файл миграции. Для этого в команде создания модели можно
                        использовать флаг -m: php artisan make:model Employee -mfsc. Флаг -mfsc создаст модель,
                        наполнитель, контроллер и файл миграции.
                    </li>
                    <li class="list-group-item">7. С помощью команды php artisan migrate выполните миграции.</li>
                    <li class="list-group-item">8. В файле routes/web.php создайте новый эндпоинт, например
                        test_database
                        <pre>
    Route::get('/test_database', function () {
    //Код внутри колбэка
    });
                    </pre>
                    </li>
                    <li class="list-group-item">9. Внутри функции-колбэка напишите код, который создаст новый экземпляр модели Employee, и сохраните его в базу данных с помощью метода save().</li>
                    <li class="list-group-item">10. Запустите локальный сервер Laravel с помощью команды php artisan serve.</li>
                    <li class="list-group-item">11. Перейдите по ссылке <адрес вашего локального сервера>/test_database (по умолчанию http://localhost:8000/test_database).</li>
                    <li class="list-group-item">12. Используйте phpMyAdmin, чтобы убедиться, что в вашей базе данных создались таблицы employees и migrations, а в таблице employees создалась новая строка, соответствующая экземпляру модели Employee.</li>
                    <li class="list-group-item">13. Сделайте коммит своих изменений с помощью Git и отправьте push в репозиторий.</li>
                </ol>
                <h2>Решение</h2>
                <p><a href="/testmodel" target="_blank">Форма для добавления пользователей</a></p>

            </div>
        </div>
    </div>
    <div class="accordion-item">
        <h2 class="accordion-header">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Accordion Item #3
            </button>
        </h2>
        <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
            <div class="accordion-body">
                <ol class="list-group list-group-numbered">
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                    <li class="list-group-item"></li>
                </ol>
            </div>
        </div>
    </div>
</div>
