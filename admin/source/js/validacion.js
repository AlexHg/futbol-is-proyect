        $.validate({

            modules : 'location, date, security, file, toggleDisabled',
            disabledFormFilter : 'form.toggle-disabled'
        });

        // Restrict presentation length
        $('#presentation').restrictLength( $('#pres-max-length') );

        function soloLetras(e) {
            key = e.keyCode || e.which;
            tecla = String.fromCharCode(key).toLowerCase();
            letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
            especiales = [8, 37, 39, 46];

            tecla_especial = false
            for(var i in especiales) {
                if(key == especiales[i]) {
                    tecla_especial = true;
                    break;
                 }
            }

            if(letras.indexOf(tecla) == -1 && !tecla_especial)
            return false;
        } 

        function soloNumeros(e) {
            var charCode = (e.which) ? e.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;
 
             return true;
        } 

