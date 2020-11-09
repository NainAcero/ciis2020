$(document).ready(function() {







    bee_get_ponencias();







    



    function bee_get_ponencias(event){







        var wrapper = $('.bee_wrapper_ponencias'),







            hook = 'bee_hook',







            action = 'load';







            $.ajax({







                url: '/2020/ajax/bee_wrapper_ponencias',







                type: 'post',







                dataType: 'json',







                cache: false,







                data: {







                    hook, action







                },







                beforeSend: function() {







                }







            }).done(function(res) {







                if(res.status === 201) {







                    bee_cargarData(res.data);







                }else{







                    console.log(res.data, '¡Upss!');







                }







            }).fail(function(err) {







                console.log('Hubo un error en la petición' , '¡Upss!');







            }).always(function() {







            })







    }











    function bee_cargarData(data){







        var wrapper = $('.bee_wrapper_ponencias');







        var html = "";















        data.forEach(element => {







            var fecha = new Date(element.p_fecha);







            var dias = ["Domingo", "Lunes", "Martes","Miercoles", "Jueves", "Viernes", "Sábado"];







            var mes = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];











            var fecha_mostrar = ' ' + dias[fecha.getDay() + 1] + ', ' + (fecha.getDate() + 1) + ' de ' + mes[fecha.getMonth()] + ' del ' + fecha.getFullYear() + ' GMT-0500 (hora estándar de Perú)';







            if(element.visualizar == 1){



                



                html += 



                `<div class="col-lg-12 col-md-12 col-12">` +







                    `<div class="single-course">` +







                        `<div class="course-body">` +







                            `<div class="row">` +







                            `<div class="col-lg-6 col-md-6 col-12 align-self-center">` +







                                `<div class="row">`+







                                    `<div class="col-lg-7 col-md-7 col-12 align-self-center">`+







                                        `<br>`+







                                        `<div class="course-head ">`+







                                            `<img src="${element.foto_pon}" alt="#">`+







                                        `</div>`+







                                        `<div class="course-body">` +







                                            `<div class="name-price">` +







                                                `<div class="teacher-info">` +







                                                    `<img src="${element.pais}" alt="#">` +







                                                `</div>` +







                                                `<span class="price" style="font-size:12px">${element.nom_pon} ${element.apell_pon}</span>` +







                                            `</div>` +







                                        `</div>` +







                                    `</div>`+







                                    







                                    `<div class="col-lg-5 col-md-5 col-12 mt-5 align-self-center mb-4">`+







                                        `<h4 style="color: #0056b2;" class="text-uppercase">${element.p_nom}</h4>`+







                                        `<br>`+







                                        `<p style="font-size:16px ;color:black;" ><b>Modalidad:</b> Virtual</p>`+







                                    `</div>`+







                                `</div>`+







                            `</div>` +







                            `<div class="col-lg-6 col-md-6 col-12 align-self-center">` +







                                `<br>`+







                                `<p style="font-size:17px;color:black;"><b>Fecha:</b> ${fecha_mostrar} </p>`+

                                `<br>`+

                                `<p style="font-size:17px;color:black;"><b>Hora:</b> ${element.p_ini} (GMT -5, Lima - Perú)</p>`+

                                `<br>`+

                                `<p style="font-size:17px;color:black;"><b>Ponente:</b> ${element.nom_pon} ${element.apell_pon}</p>`+

                                `<br>`+







                                `<div class="text-center mt-4">`+







                                    `<button type="button" onclick="obtenerPonencia(${element.id})" class="btn-btn black primary" data-toggle="modal" data-target="#exampleModalLong">Marcar asistencia</button>` +







                                `</div>` +







                            `</div>` +







                            `</div>` +







                        `</div>` +







                    `</div>` + 







                `</div>`;







            }



        });







        wrapper.html(html);







    }







});







var idPonencia = null;







function obtenerPonencia(id){



    idPonencia = id;







    if(sessionStorage.getItem("token") && sessionStorage.getItem("usuario")){







        var usuario = JSON.parse(sessionStorage.getItem("usuario"));







        var token = sessionStorage.getItem("token");







        var form = $('.bee_add_new_usuario'),



        hook = 'bee_hook',



        action = 'add',



        data = new FormData(form.get(0));







        data.append('hook', hook);



        data.append('action', action);



        data.append('usuario', usuario.id);



        data.append('token', token);



        data.append('ponencia', idPonencia);







        $.ajax({



            url: '/2020/ajax/bee_add_asistencia_usuario',



            type: 'post',



            dataType: 'json',



            contentType: false,



            processData: false,



            cache: false,



            data: data,







            beforeSend: function() {







            }







        }).done(function(res) {







            if(res.status === 200) {







                Swal.fire(



                    'Asistencia Registrada!',



                    'Usuario ' + usuario.nombre + ' ' + usuario.apellido,



                    'success'



                    );



            } else if(res.status === 201){

                

                Swal.fire(



                    'Asistencia ya marcada!',



                    'Usuario ' + usuario.nombre + ' ' + usuario.apellido,



                    'warning'



                    );

            }







        }).fail(function(err) {







            Swal.fire(



                'Error!',



                'Ocurrio un error en el sistema!',



                'error'



            );







        }).always(function() {







        })







    }else{







        window.location.replace("https://ciistacna.com/2020/login");



    }











}






