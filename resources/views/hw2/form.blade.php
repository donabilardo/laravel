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

    </div>
</div>
