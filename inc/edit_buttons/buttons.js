(function() {
    tinymce.create('tinymce.plugins.SpeertBtn', {
     init : function(ed, url) {
        ed.addButton('alert', {
            title : 'Alert',
            cmd : 'alert',
            image : url + '/alert.png'
        });

        ed.addButton('attention', {
            title : 'Attention',
            cmd : 'attention',
            image : url + '/attention.png'
        });

        ed.addButton('question', {
            title : 'Question',
            cmd : 'question',
            image : url + '/question.png'
        });

        ed.addCommand('alert', function() {
            var selected_text = ed.selection.getContent();
            var return_text = '<div class="accent alert"><div class="accent-title"><div class="accent-icon"></div>Alert</div><div class="accent-text">' + selected_text + '</div></div>';
            ed.execCommand('mceInsertContent', 0, return_text);
        });

        ed.addCommand('attention', function() {
            var selected_text = ed.selection.getContent();
            var return_text = '<div class="accent attention"><div class="accent-title"><div class="accent-icon"></div>Attention</div><div class="accent-text">' + selected_text + '</div></div>';
            ed.execCommand('mceInsertContent', 0, return_text);
        });

        ed.addCommand('question', function() {
            var selected_text = ed.selection.getContent();
            var return_text = '<div class="accent question"><div class="accent-title"><div class="accent-icon"></div>Question</div><div class="accent-text">' + selected_text + '</div></div>';
            ed.execCommand('mceInsertContent', 0, return_text);
        });
    },

    createControl : function(n, cm) {
        return null;
    },

    getInfo : function() {
        return {
            longname : 'Speert Themes Buttons',
            author : 'Trioll',
            authorurl : 'https://trioll.com',
            infourl : 'https://trioll.com',
            version : "0.1"
        };
    }
});

    tinymce.PluginManager.add( 'speert_btn', tinymce.plugins.SpeertBtn );
})();