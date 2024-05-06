<div class="row">
    <div class="col-6">
        <form method="post" action="{{url('userform')}}">
            @csrf
            <div class="mb-3">
                <label for="user_name" class="form-label">Имя пользователя</label>
                <input type="text" class="form-control" id="user_name"  name="user_name">
            </div>
            <div class="mb-3">
                <label for="user_soname" class="form-label">Фамилия пользователя</label>
                <input type="text" class="form-control" id="user_soname" name="user_soname">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email пользователя</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="col-6">
<p style="display: flex; flex-direction: column; justify-content: center; height: 80%">
    В контроллере FormProcessor создайте метод store для обработки формы. Этот метод должен принимать поля формы и отправлять ответ в виде JSON-объекта, содержащего значения полей формы (имя, фамилия, email)
</p>
    </div>
</div>
