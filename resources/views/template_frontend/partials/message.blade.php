<div class="pk-fixed-bottom pk-fixed-bottom-left flex-container fixed cp justify-content-left">
    <a class="pk-fixed-button pk-whatsapp" href="https://wa.me/{{ $setting->whatsapp }}" target="_blank"
        rel="noreferrer" tabindex="0" role="button" aria-label="Whatsapp Chat">
        <svg class="svgic">
            <use href="{{ asset('template/images/lib.svg#whatsapp') }}"></use>
        </svg>
    </a>
    <a class="pk-fixed-button pk-facebook-icon" href="{{ $setting->messenger }}" target="_blank" rel="noreferrer"
        tabindex="0" role="button" aria-label="Facebook Chat">
        <svg class="svgic">
            <use href="{{ asset('template/images/lib.svg#messenger') }}"></use>
        </svg>
    </a>
</div>
