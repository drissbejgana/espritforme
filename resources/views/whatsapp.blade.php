<div class="whatsapp_chat_support wcs_fixed_left " id="example_2">
            <div class="wcs_button wcs_button_circle">
                <span class="fa fa-whatsapp"></span>
            </div>	
            <div style="color:white" class="wcs_button_label">
                Des questions?
             </div>	
    
            <div class="wcs_popup">
                <div class="wcs_popup_close">
                    <span class="fa fa-close"></span>
                </div>
                <div class="wcs_popup_header">
                    <span class="fa fa-whatsapp"></span>
                    <strong>Service client</strong>
                    
                    <div class="wcs_popup_header_description">Besoin d'aide? Discutez avec nous sur Whatsapp</div>
                </div>	
                <div class="wcs_popup_input" data-number="+212 6 61 90 61 36">
                    <input type="text" />
                    <i class="fa fa-play"></i>
                </div>
                <div class="wcs_popup_avatar">
                    <img src="{{asset('images/esplogo.png')}}" alt="">
                </div>
            </div>
        </div>	
        <script src="{{asset('plugin/components/jQuery/jquery-1.11.3.min.js')}}"></script> 
    
        <!-- Plugin JS file -->
        
         <script src="{{asset('plugin/components/moment/moment.min.js')}}"></script>
        <script src="{{asset('plugin/components/moment/moment-timezone-with-data.min.js')}}"></script>
        <script src="{{asset('plugin/whatsapp-chat-support.js')}}"></script> 
    
        <script>
            $('#example_1').whatsappChatSupport({
                debug: true,
            });
    
            $('#example_2').whatsappChatSupport({
                defaultMsg: '',
            });
    
            $('#example_3').whatsappChatSupport();
        </script>