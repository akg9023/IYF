//<![CDATA[
                                    

// // Handling Ajax request for loading cotents on particular menu clicked
// function load_content(url){

//     $('#content').load(url);

// }

//implement validation by adding another div after each field and making it display:none
// and display through js as reequired..(also to be used in hinting what is to be filled!)


//Also add center when a inmate devotee chooses a voice.

function select_option(s,val)
{
    $('select#'+s+' option').removeAttr("selected");
    $('select#'+s+' option[value=\"'+val+'\"]').attr('selected','selected');
}


$(function() {

//for pincodes

// function select_option(s,val)
// {
//     $(s +'option[value='+val+']').attr('selected','selected');
// }



$(this).delay(800).queue(function() {

     // your Code | Function here

    // $("input[id*='_pincode']").load(function( event ) {

    //     var prefix = /(per_|cur_|mess_|office_)/.exec(this.id);

        // $("input[id='"+prefix[0]+"_pincode']").trigger('blur');

        $("input[id*='_pincode']").trigger('blur');

        // $("select").each(function(){
        //     $(this).trigger('focus');
        // })

    // });
     $(this).dequeue();

  });

$(this).delay(2000).queue(function() {

     // your Code | Function here

    // $("input[id*='_pincode']").load(function( event ) {

    //     var prefix = /(per_|cur_|mess_|office_)/.exec(this.id);

        // $("input[id='"+prefix[0]+"_pincode']").trigger('blur');

        // $("input[id*='_pincode']").trigger('blur');

        $("select").each(function(){
            $(this).trigger('focus');
        })

    // });
     $(this).dequeue();

  });

$("input[id*='_pincode']").blur(function( event ) {

    //see regular Expressions in js for more understanding...
    var prefix = /(per_|cur_|mess_|office_|c_)/.exec(this.id);  //prefix[0]


    var postoff = document.getElementById(prefix[0]+"postoffice");
    var dist = document.getElementById(prefix[0]+"district");
    var state = document.getElementById(prefix[0]+"state");
    var pin = this;

    if($(this).val().length==6){

        // event.preventDefault();


        var post_value=$(postoff).val(); //used later (see below inside if)
        $(postoff).empty();
        $(dist).val(null);
        $(state).val(null);
        $(postoff).append('<option value=" " disabled hidden selected>Select Post Office</option>');

        $(postoff).focus();

        $.getJSON('https://data.gov.in/api/datastore/resource.json?resource_id=0a076478-3fd3-4e2c-b2d2-581876f56d77&api-key=1313a67fc68c64c9b449ae7771d5f4cb&filters[pincode]='+$( pin ).val(),
            function(res){ 
        
                if(res['success']){

                    var n=res['count'];
                    for(var i=0;i<n; ++i){
                        postoff[postoff.length] = new Option(res['records'][i].officename,res['records'][i].officename);
                    }
                    // if after selecting user again clicks on pincode and then clicks somewhere else
                    $(postoff).find("option[value='"+post_value+"']").attr("selected",true);

                    dist.value = res['records'][0].Districtname;
                    state.value = res['records'][0].statename;
                }
                else{

                    alert("Pincode: "+$(pin).val()+" does not exist! Please enter a valid pincode!");
                    $(pin).val(null);
                    $(pin).focus();
                    
                }

                //officename
            }
        );
    }
    else{
        
        $(postoff).empty();
        $(dist).val(null);
        $(state).val(null);

        $(postoff).append('<option value=" " disabled hidden selected>Select Post Office</option>');

    }
});



//for Next  and Previous button
    $('.btnNext').click(function(){
    $('.nav-pills > .active').next('li').find('a').trigger('click');
    });

    $('.btnPrevious').click(function(){
    $('.nav-pills > .active').prev('li').find('a').trigger('click');
    });

//for CONNECTING DEVOTEES
    $('input[name=gen]').on('change', function () {
        if (!this.checked) return
            $('.collapse').not($('li.' + $(this).attr('class'))).slideUp();
        $('.collapse.' + $(this).attr('class')).slideDown();
    });

// Swiching between radios(mess,hostel,voice) in Staying tab for current users and hiding/showing Counsellor Name field
    $('input[name=staying_at]').on('change', function () {
        
        if (!this.checked) return
            $('.collapse').not($('div.' + $(this).attr('class'))).slideUp();
        $('.collapse.' + $(this).attr('class')).slideDown();

        // Hidding/Showing Counsellor Name field
        if(this.checked)
            if($(this).attr('class')=='voice')
                $('#counsellor_div').show();
            else
                $('#counsellor_div').hide();

    });

//....Hidding Course and Department in College tab for Passout users..
    $('select[name=period_to]').on('change',function () {
        var d = new Date();
        if( $(this).val() < d.getFullYear()){
            // $('div[id^="cur_"]').hide();
            $('#current_status').val('working').trigger('change');
        }
        else{

            // $('div[id^="cur_"]').show();
            $('#current_status').val('studying').trigger('change');
        }
    });

//Display form as per the studying status of the user in Staying tab
    $('select[id="current_status"]').on('change',function () {
        var date = new Date();

        if( $(this).val() == "working"){
            $('#studying').hide();
            $('#passout').show();
        
            $('#counsellor_div').show(); // Showing Counsellor Name field for Passout

            // Implementation of case when user selects a status conflicting with the passout year is left
        }
        else{
            $('#studying').show();
            $('#passout').hide();
            
            $('#counsellor_div').hide(); //Hidding Counsellor Name field as default for Studying devotees
            
            // Implementation of case when user selects a status conflicting with the passout year is left
        }
    }); 
});
//]]>