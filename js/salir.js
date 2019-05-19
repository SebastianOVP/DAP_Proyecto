function salir(){
    //Formulario llenado al 100%
    alertify.confirm('Salir del Sistema','Estas apunto de salir del sistema \n ¿Estas seguro de realizar esta acción?' , function()
        { 
          alertify.alert()
            .setting({
              'title':'Felicidades !!',
              'label':'Salir',
              'message': 'Se ha enviado un correo al administrador del sistema SYSACAD , notificando que has registrado la información ,estos datos servirán para generar tu usuario al sistema académico. Una vez procesados los datos se enviaran las credenciales a tu correo intitucional '+correo ,
              'onok': function(){ alertify.message('Gracias !'); final();  verInicio(); preCarga(1000)}
            }).show();
        }, 
        function()
        { 
            alertify.warning('Se ha cancelado la acción')
        }
    );
}