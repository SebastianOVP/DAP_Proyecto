function llenar_lista(){
     // console.log("Se ha llenado lista");
    preCarga(1000,4);
    $.ajax({
        url:"llenarLista.php",
        type:"POST",
        dateType:"html",
        data:{},
        success:function(respuesta){
            $("#lista").html(respuesta);
            $("#lista").slideDown("fast");
        },
        error:function(xhr,status){
            alert("no se muestra");
        }
    });	
}

function ver_alta(){
    preCarga(800,4);
    $("#lista").slideUp('low');
    $("#alta").slideDown('low');
    $("#nombre").focus();
}

function ver_lista(){
    $("#alta").slideUp('low');
    $("#lista").slideDown('low');
}

$('#btnLista').on('click',function(){
    llenar_lista();
    ver_lista();
});

$("#frmAlta").submit(function(e){
  
    var nombre    = $("#nombre").val();
    var paterno   = $("#paterno").val();
    var materno   = $("#materno").val();
    var direccion = $("#direccion").val();
    var sexo      = $("#sexo").val();
    var telefono  = $("#telefono").val();
    var fecha_nac = $("#fecha_nac").val();
    var correo    = $("#correo").val();
    var tipo      = $("#tipo").val();

        $.ajax({
            url:"guardar.php",
            type:"POST",
            dateType:"html",
            data:{
                    'nombre':nombre,
                    'paterno':paterno,
                    'materno':materno,
                    'direccion':direccion,
                    'sexo':sexo,
                    'telefono':telefono,
                    'fecha_nac':fecha_nac,
                    'correo':correo,
                    'tipo':tipo
                 },
            success:function(respuesta){
              
            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Se ha guardado el registro' );
            $("#frmAlta")[0].reset();
            $("#nombre").focus();
            // llenarLista();
            },
            error:function(xhr,status){
                alert(xhr);
            },
        });
        e.preventDefault();
        return false;
});

function abrirModalEditar(nombre,paterno,materno,direccion,telefono,fecha_nac,correo,tipo,sexo,ide){
   
    $("#frmActuliza")[0].reset();
    $("#nombreE").val(nombre);
    $("#paternoE").val(paterno);
    $("#maternoE").val(materno);
    $("#direccionE").val(direccion);
    $("#telefonoE").val(telefono);
    $("#fecha_nacE").val(fecha_nac);
    $("#correoE").val(correo);
    $("#tipoE").val(tipo);
    $("#sexoE").val(sexo);
    $("#idE").val(ide);

    $(".select2").select2();

    $("#modalEditar").modal("show");

     $('#modalEditar').on('shown.bs.modal', function () {
         $('#nombreE').focus();
     });   
}

$("#frmActuliza").submit(function(e){
  
    var nombre    = $("#nombreE").val();
    var paterno   = $("#paternoE").val();
    var materno   = $("#maternoE").val();
    var direccion = $("#direccionE").val();
    var sexo      = $("#sexoE").val();
    var telefono  = $("#telefonoE").val();
    var fecha_nac = $("#fecha_nacE").val();
    var correo    = $("#correoE").val();
    var tipo      = $("#tipoE").val();
    var ide       = $("#idE").val();

        $.ajax({
            url:"actualizar.php",
            type:"POST",
            dateType:"html",
            data:{
                    'nombre':nombre,
                    'paterno':paterno,
                    'materno':materno,
                    'direccion':direccion,
                    'sexo':sexo,
                    'telefono':telefono,
                    'fecha_nac':fecha_nac,
                    'correo':correo,
                    'tipo':tipo,
                    'ide':ide
                 },
            success:function(respuesta){

            alertify.set('notifier','position', 'bottom-right');
            alertify.success('Se ha actualizado el registro' );
            $("#frmActuliza")[0].reset();
            $("#modalEditar").modal("hide");
            llenar_lista();
            },
            error:function(xhr,status){
                alert(xhr);
            },
        });
        e.preventDefault();
        return false;
});

function status(concecutivo,id){
    var nomToggle = "#interruptor"+concecutivo;
    var nomBoton  = "#boton"+concecutivo;
    var numero    = "#tConsecutivo"+concecutivo;
    var persona   = "#tPersona"+concecutivo;
    var correo    = "#tCorreo"+concecutivo;
    var telefono  = "#tTelefono"+concecutivo;
    var sexo      = "#tSexo"+concecutivo;

    if( $(nomToggle).is(':checked') ) {
        // console.log("activado");
        var valor=0;
        alertify.success('Registro habilitado' );
        $(nomBoton).removeAttr("disabled");
        $(numero).removeClass("desabilita");
        $(persona).removeClass("desabilita");
        $(correo).removeClass("desabilita");
        $(telefono).removeClass("desabilita");
        $(sexo).removeClass("desabilita");
    }else{
        console.log("desactivado");
        var valor=1;
        alertify.error('Registro deshabilitado' );
        $(nomBoton).attr("disabled", "disabled");
        $(numero).addClass("desabilita");
        $(persona).addClass("desabilita");
        $(correo).addClass("desabilita");
        $(telefono).addClass("desabilita");
        $(sexo).addClass("desabilita");
    }
    // console.log(concecutivo+' | '+id);
    $.ajax({
        url:"status.php",
        type:"POST",
        dateType:"html",
        data:{
                'valor':valor,
                'id':id
             },
        success:function(respuesta){
            // console.log(respuesta);
        },
        error:function(xhr,status){
            alert(xhr);
        },
    });
}