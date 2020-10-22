$(document).ready(function($){

    $('#formLogin').submit(function(e){
    	e.preventDefault();

    	var usuario = $('#usuario').val();
    	var password = $('#password').val();

    	if (usuario.length == ""  || password == "") {

            Swal.fire({

                type:'warning',
                title:'Llene Ambos Campos',
            });

            return false;
        }else{

        	$.ajax({

        		url:"controller/loginController.php",
        		type:"POST",
        		datatype:"json",
        		data: {usuario:usuario, password:password},
        		success:function(data){
        			if (data == 3){

        				Swal.fire({

        					type:'error',
        					title:'Credenciales Incorrectas.',

        				});

        			}

                    if (data == 1){

        				Swal.fire({

                           type:'success',
                           title:'Bienvenido Administrador!',
                           confirmButtonColor:'#3885d6',
                           confirmButtonText:'Continuar',

        				}).then((result)=> {

        					if (result.value) {
        						window.location.href = "vistas/adminPanel.php"
        					}
        				});

        			}
                        if (data == 2){

                        Swal.fire({

                           type:'success',
                           title:'Bienvenido Socio!',
                           confirmButtonColor:'#3885d6',
                           confirmButtonText:'Continuar',

                        }).then((result)=> {

                            if (result.value) {
                                window.location.href = "vistas/adminPanelSocio.php"
                            }
                        });

                    }
        		}


        	});

      }
    });

});
