<x-app-layout>
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="card-body">
                <div class="collapse" id="form-element-6">
                    <div class="card"><kbd class="bg-dark">
                            <pre id="form-input" class="text-white"><code>
&#x3C;form&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputText1&#x22;&#x3E;Input Text &#x3C;/label&#x3E;
      &#x3C;input type=&#x22;text&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputText1&#x22; value=&#x22;&#x22;
         placeholder=&#x22;Enter Name&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputEmail2&#x22;&#x3E;Email Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;email&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputEmail2&#x22; value=&#x22;markTech@gmail.com&#x22;
         placeholder=&#x22;Enter Email&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputNumber3&#x22;&#x3E;Number Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;number&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputNumber3&#x22; value=&#x22;123456&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;div class=&#x22;form-group&#x22;&#x3E;
      &#x3C;label for=&#x22;exampleInputPassword4&#x22;&#x3E;Password Input&#x3C;/label&#x3E;
      &#x3C;input type=&#x22;password&#x22; class=&#x22;form-control&#x22; id=&#x22;exampleInputPassword4&#x22; value=&#x22;example123&#x22;
         placeholder=&#x22;Enter Password&#x22;&#x3E;
   &#x3C;/div&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn btn-primary&#x22;&#x3E;Submit&#x3C;/button&#x3E;
   &#x3C;button type=&#x22;submit&#x22; class=&#x22;btn bg-danger&#x22;&#x3E;Cancel&#x3C;/button&#x3E;
&#x3C;/form&#x3E;
</code></pre>
                        </kbd></div>
                </div>
                <div class="header-title">
                    <h4 class="card-title">Generar Link de Pago </h4>
                </div>
                <div class="mt-2">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="cedula" class="form-control-label">Nº Historía o Cedula</label>
                                <input type="text" class="form-control " id="cedula" name="cedula" value="" placeholder="Nº Historía o Cedula">
                            </div>
                        </div>
                        <div class="col-md-4 pt-4">
                            <button id="buscar" name="buscar" class="btn btn-primary mr-2">Buscar</button>
                            <img src="{{ asset('images/icon/loadin.gif') }}" width="50" height="50" id="cargar" name="cargar" style="display: none;">
                        </div>
                    </div>
                </div>
                <form style="margin-top: 5px;">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nombre" class="form-control-label">Nombre</label>
                                <input type="text" class="form-control " id="nombre" name="nombre" value="" placeholder="Nombre(s)" disabled>
                            </div>
                            <div class="form-group">
                                <label for="apellido" class="form-control-label">Apellido</label>
                                <input type="email" class="form-control" id="apellido" name="apellido" value="" placeholder="Apellido(s)" disabled>
                            </div>
                            <div class="form-group">
                                <label for="terapeuta" class="form-control-label">Nombre Terapeuta</label>
                                <input type="text" class="form-control " id="terapeuta" name="terapeuta" value="" placeholder="Nombre Terapeuta" disabled>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="fechaCita" class="form-control-label">Fecha Cita</label>
                                <input type="text" class="form-control " id="fechaCita" name="fechaCita" value="" placeholder="Fecha Cita" disabled>
                            </div>
                            <div class="form-group">
                                <label for="monto" class="form-control-label">Monto</label>
                                <input type="text" class="form-control" id="monto" name="monto" value="" placeholder="Monto">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="link" name="link" value="" style="display: none; background-color: transparent !important; border: 0; max-width: 260px; ">
                                <a id="copiar" name="copiar" class="btn" style="display: none;">
                                    <i class="fas fa-copy"></i>
                                </a>
                                <label id="labelURL" name="labelURL" class="text-red" style="display: none;">URL Copiada en el porta papeles</label>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="user_id" name="user_id" value="{{ Auth::user()->id }}" placeholder="" style="display: none;">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="cita_id" name="cita_id" value="" placeholder="" style="display: none;">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="persona_id" name="persona_id" value="" placeholder="" style="display: none;">
                            </div>
                        </div>
                    </div>
                </form>
                <button id="generar" name="generar" class="btn btn-primary mr-2">Generar Link de Pago</button>
                <img src="{{ asset('images/icon/loadin.gif') }}" width="50" height="50" id="cargar2" name="cargar2" style="display: none;">
                <button id="limpiar" name="limpiar" class="btn btn-primary mr-2">Limpiar campos</button>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
<script>
    //al pulsar el boton buscar realiza una busqueda con axios al endpoint de la api /api/cita/Valor del campo de busqueda
    $(document).on('click', '#buscar', function() {
        $('#cargar').css('display', 'inline');
        //limpiar y deshailitar el campo del link
        $('#link').val('');
        $('#link').css('display', 'none');
        $('#copiar').css('display', 'none');
        axios.get('/api/cita/' + $('#cedula').val()).then(function(response) {
            if (response.data.cita) {
                $('#nombre').val(response.data.persona.TX_PrimerNombre);
                $('#apellido').val(response.data.persona.TX_PrimerApellido);
                $('#terapeuta').val(response.data.profecional.TX_PrimerNombre + ' ' + response.data.profecional.TX_PrimerNombre);
                //cambiar el formato de la fecha a dd/mm/yyyy HH:mm
                $('#fechaCita').val(moment(response.data.cita.DT_FechaDesdeCita).format('DD/MM/YYYY HH:mm'));
                $('#monto').val(response.data.profecional.monto);
                $('#cita_id').val(response.data.cita.ID_Cita);
                $('#persona_id').val(response.data.persona.ID_Persona);
                $('#cargar').css('display', 'none');
                $('#generar').prop('disabled', false);

            } else {
                alert('Paciente no encontrado o no tiene una cita activa');
                $('#cargar').css('display', 'none');
            }
        })
    })
    $(document).on('click', '#generar', function() {
        //valida que nombre y monto tengan un valor
        if ($('#nombre').val() == '' || $('#monto').val() == '') {
            alert('Por favor realice una busqueda valida para poder generar el link');
            return;
        }
        $('#cargar2').css('display', 'inline');

        let data = JSON.stringify({
            'cita_id': $('#cita_id').val(),
            'user_id': $('#user_id').val(),
            'persona_id': $('#persona_id').val(),
            'monto': $('#monto').val()
        });

        let config = {
            method: 'post',
            maxBodyLength: Infinity,
            url: '/api/payment',
            headers: {
                'Content-Type': 'application/json'
            },
            data: data
        };

        axios.request(config)
            .then((response) => {
                console.log(JSON.stringify(response.data));
                $('#cargar2').css('display', 'none');
                $('#link').val('pagos.cevifa.com/pagos/' + $('#cita_id').val());
                $('#link').css('display', 'inline');
                $('#copiar').css('display', 'inline');
                //deshabilitar el boton generar 
                $('#generar').prop('disabled', true);

            })
            .catch((error) => {
                console.log('error:');
                console.log(error);
            });

    })
    //copiar el contenido del link
    $(document).on('click', '#copiar', function() {
        navigator.clipboard.writeText($('#link').val());
        $('#labelURL').css('display', 'block');
        //espera 2segundos y deshabilita el label
        setTimeout(function() {
            $('#labelURL').css('display', 'none');
        }, 2000);

    })

    //funcion para limpiar los campos
    $(document).on('click', '#limpiar', function() {
        limpiar();
    })

    function limpiar() {
        $('#cedula').val('');
        $('#nombre').val('');
        $('#apellido').val('');
        $('#terapeuta').val('');
        $('#fechaCita').val('');
        $('#monto').val('');
        $('#link').val('');
        $('#link').css('display', 'none');
        $('#copiar').css('display', 'none');
    }
</script>