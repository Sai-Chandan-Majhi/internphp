var form_has_error=false;
$(document).ready(
    function (){
        $('#1stnm').change(
            function (){
                if($('#1stnm').val().length<3)
                {
                    $('#1stnmerr').text('First name must be greater than 3 characters!');
                    form_has_error=true;
                }
                else
                {    
                    $('#1stnmerr').text('');
                    form_has_error=false;
                }
            }
        )
        $('#submitbtn').click(
            function(event){
                if(form_has_error==true)
                {
                    alert('There are errors in the form!');
                    event.preventDefault();
                }    
            }
        )
    }       
);
