@extends('layouts.layout')

@section('title', 'Верификация почты')

@section('content')
<section class="probootstrap-section" style="padding-top: 120px; min-height: 60vh">
	<div class="container">
        <div class="verify-notice col-md-12 text-center section-heading probootstrap-animate" data-animate-effect="fadeIn">
            <h2>Верификация почтового адреса</h2>
            <p>
                <b>{{$client->full_name}}</b>, Ваш запрос успешно отправлен. На Ваш почтовый адрес ({{$client->email}}) отправлено письмо для подтверждения, ссылка в котором действительна 24 часа.
            </p>
            <div>
                <a class="btn btn-primary" href="/">На главную</a>
            </div>
        </div>
	</div>
</section>
@endsection