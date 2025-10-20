<footer id="footer" class="relative js-footer">
    <div data-elementor-type="page" data-elementor-id="153010000"
        class="elementor elementor-153010000 elementor-bc-flex-widget" data-elementor-settings="[]">
        <div class="elementor-inner">
            <div class="elementor-section-wrap">
                <div class="elementor-element elementor-element-39af2202 elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="39af2202" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-3ae1f38a elementor-column elementor-col-25 elementor-top-column"
                                data-id="3ae1f38a" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-4deb9d2f elementor-widget elementor-widget-pknewsletter"
                                            data-id="4deb9d2f" data-element_type="widget"
                                            data-widget_type="pknewsletter.default">
                                            <div class="elementor-widget-container">
                                                <div class="pk-ce-widget-wrapper" dir="ltr">
                                                    <h2 class="module-title"><span>Manténgase actualizado</span></h2>
                                                    <div class="pk-ce-widget view_grid pk-grid">
                                                        <div class="newsletter-widget flex-container flex-column">
                                                            <form  id="newsletter-form-footer"
                                                                class="newsletter-form relative flex-container">
                                                                <div class="relative pknlinput-wrap">
                                                                    <input class="newsletter-input form-control"
                                                                        id="newsletter-input-footer" type="email"
                                                                        name="email_wdg"
                                                                        placeholder="Tu correo electrónico"
                                                                        required="required" value="">
                                                                    <label for="newsletter-input-footer"
                                                                        aria-label="Ingresa tu correo electrónico">
                                                                    </label>
                                                                    <button type="button" onclick="enviarFormularioContacto()" id="newsletter-submit" class="submit-widget-newsletter"
                                                                        aria-label="Submit subscription">
                                                                        <svg class="svgic">
                                                                            <use
                                                                                href="{{ asset('template/images/lib.svg#right-arrow-thin') }}">
                                                                            </use>
                                                                        </svg>
                                                                    </button>
                                                                </div>
                                                            </form>
                                                            <input type="hidden" class="agree-gdpr"
                                                                value="You have to agree with our GDPR Policy">
                                                            <input type="hidden" class="email-title"
                                                                value="Email subscription">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3ae1f38a elementor-column elementor-col-25 elementor-top-column"
                                data-id="3ae1f38a" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-36f3dc9b elementor-align-left elementor-widget elementor-widget-pklinks"
                                            data-id="36f3dc9b" data-element_type="widget"
                                            data-widget_type="pklinks.default">
                                            <div class="elementor-widget-container">
                                                <div class="pk-ce-widget-wrapper" dir="ltr">
                                                    <h2 class="module-title"><span>Información</span></h2>
                                                    <div class="pk-ce-widget view_grid pk-grid">
                                                        <ul class="widget-pklinks w-100">
                                                            <li>
                                                                <a href="{{ url('nosotros')}}">Nosotros</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{ url('categories')}}">Categorías</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('featured_products')}}">Productos Destacados</a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('new_products')}}">Productos Nuevos</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-3ae1f38a elementor-column elementor-col-25 elementor-top-column"
                                data-id="697fa661" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-4c0fc551 elementor-widget elementor-widget-pktitle"
                                            data-id="4c0fc551" data-element_type="widget"
                                            data-widget_type="pktitle.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="module-title"><span>Contáctanos</span></h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-57319cbf elementor-widget elementor-widget-text-editor"
                                            data-id="57319cbf" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <div class="text-block-wrap">
                                                        <div class="tb-sect">
                                                            <div class="tb-sect-icon"><img
                                                                    src="{{asset('template_admin/images/phone-white_lOXpAwZdE.svg')}}"
                                                                    alt="telephone_1" width="17" height="17"
                                                                    loading="lazy" /></div>
                                                            <div class="tb-sect-text">{{$setting->celular}}</div>
                                                        </div>
                                                        <div class="tb-sect">
                                                            <div class="tb-sect-icon"><img
                                                                    src="{{asset('template_admin/images/mail_white_kT87jOSLP.svg')}}"
                                                                    alt="envelope.png" width="17" height="17"
                                                                    loading="lazy" /></div>
                                                            <div class="tb-sect-text">{{$setting->email}}</div>
                                                        </div>
                                                        <div class="tb-sect">
                                                            <div class="tb-sect-icon"><img
                                                                    src="{{asset('template_admin/images/whatsapp_white_btvMM83jI.svg')}}"
                                                                    alt="whatsapp.png" width="17" height="17"
                                                                    loading="lazy" /></div>
                                                            <div class="tb-sect-text">{{$setting->whatsapp}}</div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-7f30ec6f elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-section elementor-top-section"
                    data-id="7f30ec6f" data-element_type="section"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-row">
                            <div class="elementor-element elementor-element-818fbaa elementor-column elementor-col-50 elementor-top-column"
                                data-id="818fbaa" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-78b89b4a elementor-widget elementor-widget-text-editor"
                                            data-id="78b89b4a" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-text-editor elementor-clearfix">
                                                    <p style="margin: 0;"><span style="color: #d4d4d4;">Pago seguro y
                                                            confiable</span></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-21a1392c elementor-column elementor-col-50 elementor-top-column"
                                data-id="21a1392c" data-element_type="column">
                                <div class="elementor-column-wrap elementor-element-populated">
                                    <div class="elementor-widget-wrap">
                                        <div class="elementor-element elementor-element-2ed926b0 elementor-shape-square elementor-widget__width-auto elementor-widget-mobile__width-inherit elementor-widget elementor-widget-social-icons"
                                            data-id="2ed926b0" data-element_type="widget" id="socialnetworks"
                                            data-widget_type="social-icons.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-social-icons-wrapper">
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook"
                                                        href="{{$setting->facebook}}" target="_blank">
                                                        <span class="elementor-screen-only">Facebook</span>
                                                        <i class="fa fa-facebook"></i>
                                                    </a>
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter"
                                                        href="{{$setting->twitter}}" target="_blank">
                                                        <span class="elementor-screen-only">Twitter</span>
                                                        <i class="fa fa-twitter"></i>
                                                    </a>
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram"
                                                        href="{{$setting->instagram}}" target="_blank">
                                                        <span class="elementor-screen-only">Instagram</span>
                                                        <i class="fa fa-instagram"></i>
                                                    </a>
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-pinterest"
                                                        href="{{$setting->pinterest}}" target="_blank">
                                                        <span class="elementor-screen-only">Pinterest</span>
                                                        <i class="fa fa-pinterest"></i>
                                                    </a>
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube"
                                                        href="{{$setting->youtube}}" target="_blank">
                                                        <span class="elementor-screen-only">Youtube</span>
                                                        <i class="fa fa-youtube"></i>
                                                    </a>
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-vimeo"
                                                        href="{{$setting->vimeo}}" target="_blank">
                                                        <span class="elementor-screen-only">Vimeo</span>
                                                        <i class="fa fa-vimeo"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>

<script>
    function enviarFormularioContacto() {
        event.preventDefault();
        let email = document.getElementById("newsletter-input-footer").value;
        let regex = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!regex.test(email)) {
            swal.fire("Error", "El correo electrónico no es válido", "error");
            return;
        }

        let data = {
            email: email
        };

        fetch('{{ route('frontend.suscriptores') }}', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                body: JSON.stringify(data)
        })
        .then(response => response.json())
        .then(data => {
            if (data.status == 'success') {
                swal.fire("Éxito", `${data.message}`, "success");
                document.getElementById('newsletter-input-footer').value = '';
            } else {
                swal.fire("Error", `${data.message}`, "error");
            }
        })
        .catch(error => {
            swal.fire("Error", "Ha ocurrido un error al suscribirte", "error");
        });
            
    }

    document.getElementById('newsletter-input-footer').addEventListener('keypress', function (e) {
        if (e.key === 'Enter') {
            enviarFormularioContacto();
        }
    });
</script>