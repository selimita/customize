;(function ($) {
wp.customize('cust_services_heading', function (value) {
    value.bind(function (newvalue) {
        $("#service-heading").html(newvalue);
    });
});
    wp.customize('settings_color', function (value) {
        value.bind(function (newvalue) {
            $(".service i").css("color", newvalue);
        });
    });
    // Title
    wp.customize('services_settings',function(value){
        value.bind(function(newvalue){
            $(".title").html(newvalue);
        });
    });
    // SubTitle
    wp.customize('services_settings_textarea',function(value){
        value.bind(function(newvalue){
            $(".subtitle").html(newvalue);
        });
    });
    // Link
    wp.customize('services_settings_link',function(value){
        value.bind(function(newvalue){
            $(".subtitle").attr(newvalue);
        });
    });
    // About Heading Color
    wp.customize('setting_about_page', function (value) {
        value.bind(function (newvalue) {
            $(".heading").css("color", newvalue);
        });
    });
    wp.customize('settings_about_title', function (value) {
        value.bind(function (newvalue) {
            $(".heading").html(newvalue);
        });
    });
    wp.customize('settings_about_description', function (value) {
        value.bind(function (newvalue) {
            $("#about-description").html(newvalue);
        });
    });

// FOR KIRKI
wp.customize('customize_setting', function (value) {
    value.bind(function (newvalue) {
        $(".c-text").html(newvalue);
    });
});
/* wp.customize('repeater_setting', function (value) {
    value.bind(function (newvalue) {
        $(".customize-control-kirki").html(newvalue);
    });
});
wp.customize('sortable_setting', function (value) {
    value.bind(function (newvalue) {
        $(".sort").html( newvalue);
    });
});
wp.customize('sortable_setting', function (value) {
    value.bind(function (newvalue) {
        $(".stable").html( newvalue);
    });
}); */

// CODESTAR Setting 'transport'=>'postMessage'
wp.customize('_cs_customize_options[about_heading]',function(value){
    value.bind(function(newvalue){
        $("#service-heading").html(newvalue);
    });
});

})(jQuery);



