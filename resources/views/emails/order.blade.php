<p>Тур: {{ $data['excursion'] }}</p>
<p>ФИО: {{ $data['fio'] }}</p>
<p>Телефон: {{ $data['phone'] }}</p>
@if($data['message'])
    <p>Дополнительная информация: {{ $data['message'] }}</p>
@endif