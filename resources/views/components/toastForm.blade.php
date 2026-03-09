
<script>
    window.addEventListener('DOMContentLoaded', () => {
        const TIMER_DURATION = 7 * 60 * 1000;
        Swal.fire({
            toast: true,
            position: 'bottom-end',
            width:500,
            padding:0,
            timerProgressBar: true,
            animation: true,
            timer: TIMER_DURATION,
            html:' <div style="display: flex; align-items: center; !important; "> ' +

            '<div style="text-align: left;">  <h3 style="margin: 0; font-size: 15px " @class(['titreToast'])>Test</h3>  ' +
            '<x-formModelAjout></x-formModelAjout> +'</div></div> ',
            showConfirmButton: true,
            confirmButtonText: 'Terminer',
            background: 'rgba(255, 251, 251, 0.832)',
        });
    });
</script>
