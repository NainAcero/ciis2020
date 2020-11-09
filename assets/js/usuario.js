$(document).ready(function() {







    if(sessionStorage.getItem("token") && sessionStorage.getItem("usuario")){







        var usuario = JSON.parse(sessionStorage.getItem("usuario"));



        var token = sessionStorage.getItem("token");



        $('#usuarioName').text("USUARIO - " + usuario.nombre + ' ' + usuario.apellido);



        $('#nombre').val(usuario.nombre);



        $('#apellido').val(usuario.apellido);



        $('#numero_doc').val(usuario.numero_doc);



        $('#celular').val(usuario.celular);



        $('#email').val(usuario.email);



        $('#institucion').val(usuario.institucion);



        $('#profesion').val(usuario.profesion);



        $('#pais').val(usuario.pais);



        $('#ciudad').val(usuario.ciudad);







        var html = '';







        



        if(usuario.cargo == 'ESTUDIANTE'){



            html += `<option value="ESTUDIANTE" selected>ESTUDIANTE</option>`;



        }else{



            html += `<option value="ESTUDIANTE">ESTUDIANTE</option>`;



        }







        if(usuario.cargo == 'PROFESIONAL'){



            html += `<option value="PROFESIONAL" selected>PROFESIONAL</option>`;



        }else{



            html += `<option value="PROFESIONAL">PROFESIONAL</option>`;



        }



        



        var wrapper = $('.bee_add_cargos');



        wrapper.html(html);







    }else{







        window.location.replace("http://157.245.136.158/login");



    }







    







    $('.bee_update_new_usuario').on('submit' , bee_update_new_usuario);







    function bee_update_new_usuario(event){







        event.preventDefault();







        var form = $('.bee_update_new_usuario'),







            hook = 'bee_hook',







            action = 'add',







            data = new FormData(form.get(0)), // obtenemos los valores del formulario todos los inputs







            nombre = $('#nombre').val(),







            apellido = $('#apellido').val();







            cargo = $('#cargo').val();







            email = $('#email').val();







            numero_doc = $('#numero_doc').val();







            pais = $('#pais').val();







            celular = $('#celular').val();







            ciudad = $('#ciudad').val();







            data.append('hook', hook);







            data.append('action', action);







            data.append('id', usuario.id);







            data.append('token', token);















        // validar que este seleccionada una opcion type







        if(cargo === 'none'){







            console.logr('Selecciona un cargo válido' , '¡Upss!');







            return;







        }







        // validar nombre







        if(nombre === '' || nombre.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',







                'Ingrese un nombre válido',







                'warning'







              )







            return;







        }







        // validar apellido







        if(apellido === '' || apellido.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',







                'Ingrese un apellido válido',







                'warning'







              )







            return;







        }







        // validar email







        if(email === '' || email.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',







                'Ingrese un email válido',







                'warning'







              )



            return;







        }







        // validar numero_doc







        if(numero_doc === '' || numero_doc.length < 2) {







            Swal.fire(



                'Ingrese todos los campos!',



                'Ingrese un número de documento válido',



                'warning'







              )







            return;







        }







        // validar pais







        if(pais === '' || pais.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',







                'Ingrese un país válido',







                'warning'







              )







            return;







        }







        // validar pais







        if(celular === '' || celular.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',







                'Ingrese un celular válido',







                'warning'







              )







            return;







        }







        // validar ciudad







        if(ciudad === '' || ciudad.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',







                'Ingrese una Ciudad válida',







                'warning'







              )







            return;







        }







        $.ajax({







            url: 'usuario/update',







            type: 'post',







            dataType: 'json',







            contentType: false,







            processData: false,







            cache: false,







            data: data,







            beforeSend: function() {







            }



        }).done(function(res) {







             if(res.status === 200){







                Swal.fire(



                    'Datos Actualizados!',



                    'Usuario : ' + nombre + ' ' + apellido,



                    'success'



                  )



                



                sessionStorage.setItem('usuario', JSON.stringify(res.data.usuario));



                sessionStorage.setItem('token', res.data.token);







            }else if(res.status === 201){



                Swal.fire(



                    'Usuario ya Registrado con este correo o documento!',



                    'Verifique: sus datos!',



                    'warning'



                  )



            }







        }).fail(function(err) {







            event.preventDefault();







            sessionStorage.removeItem('usuario');







            sessionStorage.removeItem('token');







            window.location.replace("http://157.245.136.158/login");







            console.log(err);







        }).always(function() {







        })







    }







});