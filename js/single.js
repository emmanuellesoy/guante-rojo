$(document).ready(function(){
    var punch = $.cookie("punch");
    if(punch == 'true'){
        var src = tp_url + '/img/IZQpunch_prem.png';
        $('.dale-punch-img').attr('src', src);
        src = tp_url + '/img/BTNConteoPunchActive.png';
        $('.redes-elemento-post-punch-img-objeto').attr('src', src);
        $('.dale-punch-caja').attr('data-premio', 'true');
        $('.dale-punch-caja-facebook a').css('display', 'block');
        $('.dale-punch-caja-twitter a').css('display', 'block');
    }
});

/* Funcion para premiar*/
function premialo(id){
    var v = $('.dale-punch-caja').attr('data-premio');
    if(v == 'false'){
        var json_to_send = {action : 'premialo', post_id : id};
        var uri = wp_url+'/wp-admin/admin-ajax.php';
        $.ajax({
            url : uri,
            type : 'POST',
            data : json_to_send,
            success : function(data){
                var src = tp_url + '/img/IZQpunch_prem.png';
                $('.dale-punch-img').attr('src', src);
                $('.dale-punch-img-texto').html(data);
                $('.redes-elemento-post-punch-contador').html('<p>' + data + '</p>');
                src = tp_url + '/img/BTNConteoPunchActive.png';
                $('.redes-elemento-post-punch-img-objeto').attr('src', src);
                $('.dale-punch-caja').attr('data-premio', 'true');
                $.cookie('punch', 'true', { expires: 30 });
                $('.dale-punch-caja-facebook a').css('display', 'block');
                $('.dale-punch-caja-twitter a').css('display', 'block');
            }
        });
    }
    
}
/* funcion para cambiar la imagen de primiado. */
function imagen_over(){
    var is_pr = $('.dale-punch-caja').attr('data-premio');
    if(is_pr == 'false'){
        var src = tp_url + '/img/IZQpunch_over.png';
        $('.dale-punch-img').attr('src', src);
    }
}
function imagen_out(){
    var is_pr = $('.dale-punch-caja').attr('data-premio');
    if(is_pr == 'false'){
        var src = tp_url + '/img/IZQpunch.png';
        $('.dale-punch-img').attr('src', src);
    }
}
function texto_img(){
    $('.single-post-img-box-texto').fadeOut().delay(5000).fadeIn();
    $('.single-post-img-box-texto-fondo').fadeOut().delay(5000).fadeIn();
}