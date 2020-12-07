var diretorio = uri_object.theme_directory_uri;
alert(diretorio);

$(document).ready(function() {
 
$(".logo")
        .mouseover(function(){
            $(this).attr("src","<?php echo get_template_directory_uri().'/logo/logoativa.svg'?>");
            alert(diretorio);
    })
        .mouseout(function(){
            $(this).attr("src","<?php echo get_template_directory_uri().'/logo/logo.svg'?>")
        })
    
})