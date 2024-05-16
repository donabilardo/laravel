<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $connection = 'mysql'; // имя подключения
    public $timestamps = true; // включение или отключение временных меток создания и изменения записи
    protected $table = 'employees'; //имя таблицы с которой работает модель
    protected $primaryKey = 'id'; //айди
    public $incrementing = true; //если нужен инкермент тру если не нужен фолс
    protected $keyType = 'integer'; //тип данных для ключа
    protected $fillable = ['first_name', 'last_name', 'email', 'fulltext', 'age']; //в базу можно добавить только перечисленные данные
    protected $hidden = ['secret']; //перечисленные данные нельзя получить


}
