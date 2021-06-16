<p>Этаж: {{ $data['excursion'] }}</p>
<p>ФИО: {{ $data['fio'] }}</p>
<p>Дата заезда: {{ $data['date_in'] }}</p>
<p>Дата выезда: {{ $data['date_out'] }}</p>
<p>Количество: {{ $data['count_adults'] }}</p>
<p>Телефон: {{ $data['phone'] }}</p>
@if($data['message'])
    <p>Дополнительная информация: {{ $data['message'] }}</p>
@endif