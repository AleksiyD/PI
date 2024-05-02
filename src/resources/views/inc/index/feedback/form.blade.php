<form id="feedback-form" action="{{ route('feedback') }}" method="POST" class="probootstrap-form">
	@csrf
	@component('layouts.utils.inputs.input', [
		'name' => 'full_name',
		'required' => true,
	])
		ФИО
	@endcomponent
	@component('layouts.utils.inputs.input', [
		'name' => 'email',
		'required' => true,
		'type' => 'email'
	])
		Адрес электронной почты
	@endcomponent
	@component('layouts.utils.inputs.input', [
		'name' => 'address',
		'required' => true,
	])
		Ваш адрес
	@endcomponent
	@component('layouts.utils.inputs.input', [
		'name' => 'phone',
		'type' => 'tel'
	])
		Номер телефона
	@endcomponent
	@component('layouts.utils.inputs.textarea', [
		'name' => 'request',
		'required' => true,
	])
		Запрос
	@endcomponent
	@component('layouts.utils.inputs.textarea', [
		'name' => 'comment'
	])
		Комментарии
	@endcomponent
	@component('layouts.utils.inputs.textarea', [
		'name' => 'wish'
	])
		Пожелания
	@endcomponent
</form>