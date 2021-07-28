$('#box-chapters-2').hide();


function clktemp2(){
    $('#box-chapters-2').removeClass('animate__fadeOut');
    $('#box-chapters-1').addClass('animate__animated animate__fadeOut');
    $('#box-chapters-1').hide();
    $('#box-chapters-2').show();
    $('#box-chapters-2').addClass('animate__animated animate__fadeIn');
}

function clktemp1(){
    $('#box-chapters-1').removeClass('animate__fadeOut');
    $('#box-chapters-2').addClass('animate__animated animate__fadeOut');
    $('#box-chapters-2').hide();
    $('#box-chapters-1').show();
    $('#box-chapters-1').addClass('animate__animated animate__fadeIn');
}
