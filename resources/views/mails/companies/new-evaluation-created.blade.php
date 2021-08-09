@component('mail::message')
# Olá,

Nova avaliação para a Empresa.

@component('mail::button', ['url' => config('api.fontend-url')])
Clique e confira
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
