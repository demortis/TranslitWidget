/**
 * Created by eugene on 19.04.16.
 */
(function($){
    $.fn.translit = function(options){
        var translitParams = {
            '\u0430' : 'a', '\u0431' : 'b', '\u0432' : 'v', '\u0433' : 'g', '\u0434' : 'd', '\u0435' : 'e', '\u0451' : 'yo', '\u0436' : 'zh',
            '\u0437' : 'z', '\u0438' : 'i', '\u0439' : 'y', '\u043a' : 'k', '\u043b' : 'l', '\u043c' : 'm', '\u043d' : 'n', '\u043e' : 'o',
            '\u043f' : 'p', '\u0440' : 'r', '\u0441' : 's', '\u0442' : 't', '\u0443' : 'u', '\u0444' : 'f', '\u0445' : 'h', '\u0446' : 'c',
            '\u0447' : 'ch', '\u0448' : 'sh', '\u0449' : 'shch', /* '\u044a' : '',*/ '\u044b' : 'i', /* '\u044c' : '', */'\u044d' : 'e',
            '\u044e' : 'yu', '\u044f' : 'ya', ' ' : '-', '-' : '-',
            0 : 0, 1 : 1, 2 : 2, 3 : 3, 4 : 4, 5 : 5, 6 : 6, 7 : 7, 8 : 8, 9 : 9,
            'a' : 'a', 'b' : 'b', 'c' : 'c', 'd' : 'd', 'e' : 'e', 'f' : 'f', 'g' : 'g', 'h' : 'h', 'i' : 'i', 'j' : 'j', 'k' : 'k', 'l' : 'l',
            'm' : 'm', 'n' : 'n', 'o' : 'o', 'p' : 'p', 'q' : 'q', 'r' : 'r', 's' : 's', 't' : 't', 'u' : 'u', 'v' : 'v', 'w' : 'w', 'x' : 'x',
            'y' : 'y', 'z' : 'z'
        };

        var params = $.extend({
            'targetClass' : 'translit-target',
            'translitParams' : translitParams
        }, options);

        this.on('keyup change', function(){
            var text = $(this).val(),
                translitText = '', letter;

            for(var i = 0; i < text.length; i++)
            {
                letter = text[i].toLowerCase();
                if(params.translitParams[letter] !== undefined)
                {
                    letter = params.translitParams[letter];
                    translitText += letter;
                }
            }

            $('.'+params.targetClass).val(translitText);
        });

        return this;
    };
})(jQuery);
