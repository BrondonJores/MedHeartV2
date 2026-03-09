<script>
    window.addEventListener('DOMContentLoaded', () => {
        Swal.fire({
            toast: true,
            position: 'bottom',
            padding:0,
            html:' <div style="display: flex; align-items: center; !important; "> ' +
                ' <img src="{{ asset('storage/images/logo.png') }}" width="60px" style="margin-right: 15px;"> ' +
                '<div style="text-align: left;">  <h3 style="margin: 0; font-size: 15px " @class(['titreToast'])>{{ session("image_alert")["title"] }}</h3>  ' +
                '<p style="margin: 0; font-size: 12px;">{{ session("image_alert")["text"] }}.</p>  </div>  </div> ',
            showConfirmButton: false,
            timer: 4000,
            background: 'rgba(255, 251, 251, 0.832)',
            didClose: () => {
                @if(session("image_alert")["redirect"])
                    window.location.href = route('{{ session("image_alert")["redirect"] }}');
                @endif
            }
        });
    });
</script>
