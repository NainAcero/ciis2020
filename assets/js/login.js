$(document).ready(function() {





    if(sessionStorage.getItem("token") && sessionStorage.getItem("usuario")){







        window.location.replace("http://157.245.136.158/dashboard");



    }



    



    $('.bee_add_login_user').on('submit' , bee_add_login_user);







    function bee_add_login_user(event){







        event.preventDefault();







        var form = $('.bee_add_login_user'),







            hook = 'bee_hook',







            action = 'add',







            data = new FormData(form.get(0)), // obtenemos los valores del formulario todos los inputs







            email = $('#email').val();







            password = $('#password').val();







            data.append('hook', hook);







            data.append('action', action);







        // validar email







        if(email === '' || email.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',



                'Ingrese un email válido',



                'warning'







              )



            return;







        }







        



        if(password === '' || password.length < 2) {







            Swal.fire(







                'Ingrese todos los campos!',



                'Ingrese un password válido',



                'warning'







              )



            return;







        }







        $.ajax({







            url: 'login/comparar',







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



                    'Sesión Iniciada!',



                    'Bienvenido: ' + res.data.usuario.nombre,



                    'success'







                  )







                sessionStorage.setItem('usuario', JSON.stringify(res.data.usuario));



                sessionStorage.setItem('token', res.data.token);







                



                setTimeout(function(){ window.location.replace("dashboard"); }, 1000);







            }







        }).fail(function(err) {







            Swal.fire(







                'Error!',



                'Credenciales Incorrectas!',



                'error'







              )







        }).always(function() {











        })







    }







});



































