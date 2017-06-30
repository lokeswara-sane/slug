
$(document).ready(function () {

    $('#login_btn').click(function () {
        $('.ui.modal').modal({
            autofocus: false
        }).modal('show');
    });

    $('.sidebar-menu').click(function () {
        $('.ui.labeled.icon.sidebar').sidebar('toggle');
    });

    $('.ui.dropdown.settings-menu').dropdown();

    $('#create-issue').click(function () {
        $('.ui.modal.issue-creator').modal('setting', modelSetting).modal('show');
    });

    $('.ui.modal.issue-creator').focusout();

    $('.ui.dropdown').dropdown();

    CKEDITOR.replace('issue-description');

    var modelSetting = {
        autofocus: false,
        onVisible: function () {
            setTimeout(function () {
                $('.ui.modal textarea').focus();
                $('.ui.modal textarea').select();
            }, 10);
        }
    };
    $('.ui.modal').modal('setting', modelSetting);
    $('.ui.accordion')
            .accordion()
            ;

    $('#comments-section').click(function () {
        var index = $(this).data('index');
        $('.comment-section-' + index).transition('scale');
    });

    $('.pending-issue').popup({
        on: 'hover',
        position   : 'bottom left'
     });
      
     $('.activity-issue .item').tab();
   
            ;
});
 