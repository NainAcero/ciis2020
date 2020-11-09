$(document).ready(function() {
    
    $('.logout').on('click' , logout);

    function logout(event){

        event.preventDefault();

        sessionStorage.removeItem('usuario');

        sessionStorage.removeItem('token');

        window.location.replace("https://ciistacna.com/2020/login");

    }

    if(sessionStorage.getItem("token") && sessionStorage.getItem("usuario")){

        var usuario = JSON.parse(sessionStorage.getItem("usuario"));

        $('.textNombre').text(usuario.nombre);
    }else{

        window.location.replace("https://ciistacna.com/2020/login");
    }

});








