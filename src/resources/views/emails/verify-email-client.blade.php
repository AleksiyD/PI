<div>
	<p>Здравствуйте, {{ $client->full_name }}</p>
	<p>Для завершения Вашей регистрации нам нужно немного больше информации, включая подтверждение вашего адреса электронной почты.
	<p>Нажмите на кнопку, расположенную ниже, либо перейдите по сследующей ссылке, чтобы подтвердить свой адрес электронной почты:</p>
	<p>
		<a href="{{ $url }}">{{ $url }}</a>
	</p>
</div>

<table border="0" cellpadding="0" cellspacing="0" style="background-color: #FDBE34; width: 100%; border-collapse: collapse;">
	<tbody>
		<tr>
			<td style="border-collapse: collapse; border-spacing: 0; font-family: ‘Trebuchet MS’, sans-serif; font-size: 18px; text-align: center; color: #FFFFFF; padding: 13px;">
				<a href="{{ $url }}" style="text-decoration: none; color: #FFFFFF;" target="_self">Подтвердить почту</a>
			</td>
		</tr>
	</tbody>
</table>