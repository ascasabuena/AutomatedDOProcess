/*let today = new Date();
//YYYY-MM-DDThh:mm:ss.ms

var date = today.getFullYear()+'-'+('0' + (today.getMonth()+1)).slice(-2)+'-'+('0' + today.getDate()).slice(-2);
var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
var dateTimezoneTime = date + ' ' + time;

document.getElementById("today").value = dateTimezoneTime;*/

$( document ).ready(function() {
    
    
    $('#studin1').keypress(function(event){
        var keycode = (event.keyCode ? event.keyCode : event.which);
        if(keycode == '13'){
            var student_id = $("#studin1").val();
            $.ajax({
                url: "https://doapplication.000webhostapp.com/getStudent.php?id="+student_id,
                type: 'GET',
                dataType: 'json',
                success: function(res) {
                    console.log(res);
                    $("#studin2").val(res.fname);
                    $("#studin3").val(res.lname);
                    $("#studin4").val(res.course +" - " +res.section);
                    $("#studin5").val(res.email);
                }
            });
        }
    });
    
    
    
    
});




