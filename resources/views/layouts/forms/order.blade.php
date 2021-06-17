<form action="{{ route('send.order') }}" class="form__order" id="form__order" method="post">
    @csrf
    <div class="close__box" title="Закрыть форму">
        <div class="close"></div>
    </div>
    <div class="single__block">
        <div class="title">
            Бронирование
        </div>
    </div>
    <div class="single__block">
        @if(count($works))
            <select name="excursion" id="excursion__name">
                <option value="" disabled selected>Выберите этаж</option>
            @foreach($works as $work)
                <option value="{{ $work->name }}">{{ $work->name }}</option>
            @endforeach
            </select>
        @endif
    </div>
    <div class="single__block">
        <input type="text" name="fio" placeholder="ФИО*" autocomplete="off" required="">
    </div>
    <div class="single__block with-dates">
        <input type="text" name="date_in" placeholder="Дата заезда*" autocomplete="off" required="">
        <input type="text" name="date_out" placeholder="Дата выезда*" autocomplete="off" required="">
    </div>
    <div class="single__block">
        <select name="count_adults">
            <option value="" disabled selected>Количество гостей</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
        </select>
    </div>
    <div class="single__block">
        <input type="email" name="email" placeholder="Email*" autocomplete="off" required="">
    </div>
    <div class="single__block">
        <input type="text" name="phone" placeholder="Телефон*" autocomplete="off" class="phone__mask" required="">
    </div>
    <div class="single__block">
        <textarea name="message" placeholder="Введите текст сообщения"></textarea>
    </div>
    <div class="single__block i__agree">
        <input type="checkbox" name="agree" id="i_agree{{ $unique ?? '' }}" value="1" checked="checked">
        <label for="i_agree{{ $unique ?? '' }}">Оставляя заявку, Вы соглашаетесь на обработку персональных данных</label>
        <p class="error">Согласитесь на обработку персональных данных</p>
    </div>
    <div class="single__block center submit">
        <button type="submit" class="btn">Отправить</button>
    </div>
</form>
