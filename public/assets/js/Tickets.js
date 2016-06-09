$(function () {
    $('#datetimepicker').datetimepicker();
    $('#datetimepicker').data("DateTimePicker").format('L');
});

$('#selection-days .less').on('click', function(){
    var number = $("#selection-days #numbers").val();
    if (number>1){
        number--;
        $("#selection-days #numbers").val(number);
        $(".days").css("width",((number*10)/2).toString()+"%");
          
    }
});

$('#selection-days .more').on('click', function(){
    var number = $("#selection-days #numbers").val();
    if (number<10){
        number++;
        $("#selection-days #numbers").val(number);        
        $(".days").css("width",((number*10)/2).toString()+"%");
    }
});

$('#selection-tickets #children .less').on('click', function(){
    var number = $(this).parents(".counter").children("#numbers").val();
    if (number>0){
        number--;
        $(this).parents(".counter").children("#numbers").val(number);   
    }
});

$('#selection-tickets #children .more').on('click', function(){
    var number = $(this).parents(".counter").children("#numbers").val();
    if (number<10){
        number++;
        $(this).parents(".counter").children("#numbers").val(number); 
    }
});

$('#selection-tickets #adult .less').on('click', function(){
    var number = $(this).parents(".counter").children("#numbers").val();
    if (number>1){
        number--;
        $(this).parents(".counter").children("#numbers").val(number);   
    }
});

$('#selection-tickets #adult .more').on('click', function(){
    var number = $(this).parents(".counter").children("#numbers").val();
    if (number<10){
        number++;
        $(this).parents(".counter").children("#numbers").val(number); 
    }
});