$(function () {
    $('#datetimepicker').datetimepicker();
    $('#datetimepicker').data("DateTimePicker").format('L');
});

$('section .subtitle-2').on('click', function(){
   var element = $(this).parents("section").children("#persons")
   if(element.is(":visible")){
       element.hide(500);        
   }
   else{
       element.show(500);  
   }
})

$('.radio label #option-Si').on('click', function(){
    var element = $(this).parents(".form-horizontal");
    element.children('.old-visitor').show(500);
    element.children('.new-visitor').hide(500);
});

$('.radio label #option-No').on('click', function(){
    var element = $(this).parents(".form-horizontal");
    element.children('.old-visitor').hide(500);
    element.children('.new-visitor').show(500);
});