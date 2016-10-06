//<![CDATA[
                                    
                                
$(function() {

//for Next  and Previous button
    $('.btnNext').click(function(){
    $('.nav-pills > .active').next('li').find('a').trigger('click');
    });

    $('.btnPrevious').click(function(){
    $('.nav-pills > .active').prev('li').find('a').trigger('click');
    });

// Swiching between radios(mess,hostel,voice) in Staying tab for current users
    $('input[name=residence]').on('change', function () {
        if (!this.checked) return
            $('.collapse').not($('div.' + $(this).attr('class'))).slideUp();
        $('.collapse.' + $(this).attr('class')).slideDown();
    });

//....Hidding Roll,Course and Department in College tab for Passout users..
    $('select[name=period_to]').on('change',function () {
        var d = new Date();
        if( $(this).val() < d.getFullYear()){
            $('div[id^="cur_"]').hide();
            $('#status').val('passout').trigger('change');
        }
        else{

            $('div[id^="cur_"]').show();
            $('#status').val('current').trigger('change');
        }
    });

//Display form as per the status of the user in Staying tab
    $('select[id="status"]').on('change',function () {
        if( $(this).val() == "passout"){
            $('#current').hide();
            $('#passout').show();
        }
        else{
        $('#current').show();
        $('#passout').hide();
        }
    }); 
});
//]]>