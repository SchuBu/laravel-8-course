@component('mail::message')
# Neue Blogbeitrag

Es ist ein neuer Blogbeitrag mit dem Titel

{{ $post->title }}

verfügbar. Wir wünschen dir viel Spaß beim Lesen.

@component('mail::button', ['url' => $post->path()])
Blogbeitrag anzeigen
@endcomponent

Viel Spaß<br>
{{ config('app.name') }}
@endcomponent
