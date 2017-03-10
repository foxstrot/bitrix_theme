    $(document).ready(function(){
        set_font_size();
        set_colors();
        width_menu = 0;
        for (var i=0;i<8;i++)
        {
                width_menu = width_menu+$('.top_menu_main #top_it'+i).width()+12;
                if (width_menu > 960)
                {
                        if($('.top_menu_main #top_it'+i).attr('class')=='tab-selected')
                        {
                                $('.top_menu_main #top_it'+i).addClass('bottom_it_sel');
                        }
                        else{
                                $('.top_menu_main #top_it'+i).addClass('bottom_it');
                        }
                }

        }
            $('.size1').click(function(){
                $('.size2').removeClass('size2_sel');
                $('.size3').removeClass('size3_sel');
                $('.size1').addClass('size1_sel');
                fontsize =  'small_size';
                $.cookie('blind-font-size', fontsize, {path: '/'});
                $('#page').removeClass('medium_size');
                 $('#page').addClass('small_size');
            })
            $('.size2').click(function(){
                $('.size1').removeClass('size1_sel');
                $('.size3').removeClass('size3_sel');
                $('.size2').addClass('size2_sel');
                fontsize =  'medium_size';
                $.cookie('blind-font-size', fontsize, {path: '/'});
                $('#page').removeClass('small_size');
                $('#page').addClass('medium_size');
            })
            $('.size3').click(function(){
                $('.size1').removeClass('size1_sel');
                $('.size2').removeClass('size2_sel');
                $('.size3').addClass('size3_sel');
                $('#page').removeClass('small_size');
                $('#page').removeClass('medium_size');
                 fontsize =  '';
                $.cookie('blind-font-size', fontsize, {path: '/'});
            })
            $('.color1').click(function(){
                $('.color2').removeClass('color2_sel');
                $('.color3').removeClass('color3_sel');
                $('.color1').addClass('color1_sel');
                colors= ''
                $.cookie('blind-colors', colors, {path: '/'});
                $('body').removeClass('color_black');
                $('body').removeClass('color_blue');
            })
            $('.color2').click(function(){
                $('.color1').removeClass('color1_sel');
                $('.color3').removeClass('color3_sel');
                $('.color2').addClass('color2_sel');
                 colors= 'color_black'
                $.cookie('blind-colors', colors, {path: '/'});
                $('body').removeClass('color_blue');
                $('body').addClass('color_black');
            })
            $('.color3').click(function(){
                $('.color1').removeClass('color1_sel');
                $('.color2').removeClass('color2_sel');
                $('.color3').addClass('color3_sel');
                colors= 'color_blue'
                $.cookie('blind-colors', colors, {path: '/'});
                $('body').removeClass('color_black');
                $('body').addClass('color_blue');

            })
});

  
function set_font_size() {
          $('#page').removeClass('small_size medium_size').addClass($.cookie('blind-font-size'));
          item_size = $.cookie('blind-font-size');
          if (item_size == 'small_size')
          {
                $('.size2').removeClass('size2_sel');
                $('.size3').removeClass('size3_sel');
                $('.size1').addClass('size1_sel');
          }
          else if (item_size == 'medium_size')
          {
                $('.size1').removeClass('size1_sel');
                $('.size3').removeClass('size3_sel');
                $('.size2').addClass('size2_sel');
          }
          else
          {
                $('.size1').removeClass('size1_sel');
                $('.size2').removeClass('size2_sel');
                $('.size3').addClass('size3_sel');
          }
        }
function set_colors() {
          $('body').removeClass('color_black color_blue').addClass($.cookie('blind-colors'));
          item_color = $.cookie('blind-colors');
          if (item_color == 'color_black')
          {
                $('.color1').removeClass('color1_sel');
                $('.color3').removeClass('color3_sel');
                $('.color2').addClass('color2_sel');
          }
          else if (item_color == 'color_blue')
          {
                $('.color1').removeClass('color1_sel');
                $('.color2').removeClass('color2_sel');
                $('.color3').addClass('color3_sel');
          }
          else
          {
                $('.color2').removeClass('color2_sel');
                $('.color3').removeClass('color3_sel');
                $('.color1').addClass('color1_sel');
          }
        }
