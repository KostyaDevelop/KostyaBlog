<hr/>


<label for="">Наименование</label>
<input type="text" class="form-control" name="title" placeholder="Заголовок категории"
       value="{{$articles->title ?? ""}}" required>

<br>

<label for="">Текст</label>
<input class="form-control" type="text" name="text" placeholder="Текст"
       value="{{$articles->text ?? ""}}" required>
<br>

<label for="">Slug</label>
<input class="form-control" type="text" name="slug" placeholder="Автоматическая генерация"
       value="{{$articles->slug ?? ""}}" readonly>
<br>

<label for="">Изображение</label>
<br>
<input  name="picture" type="file"
        value="" readonly>

<hr>

<input class="btn-primary" type="submit" value="Сохранить" >

