@component('mail::message')

<div style="text-align: center; margin-bottom: 25px;">
    <img src="https://hgarciardev.com/mj_glam_width.png" alt="MJ Glam " width="150" style="border-radius: 8px;">
</div>


    # Hola

@foreach ($introLines as $line)
{{ $line }}

@endforeach

@isset($actionText)
@component('mail::button', ['url' => $actionUrl])
{{ $actionText }}
@endcomponent
@endisset

@foreach ($outroLines as $line)
{{ $line }}
@endforeach


Saludos,<br>
**El equipo de MJ Glam **

@endcomponent
