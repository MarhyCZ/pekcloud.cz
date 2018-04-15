    //Aktualní měsíc - změna wallpaperu
    var date = new Date();
    var month = new Array();
        month[0] = "january.jpg";
        month[1] = "february.jpg";
        month[2] = "march.jpg";
        month[3] = "april.jpg";
        month[4] = "may.jpg";
        month[5] = "june.jpg";
        month[6] = "july.jpg";
        month[7] = "august.jpg";
        month[8] = "september.jpg";
        month[9] = "october.jpg";
        month[10] = "november.jpg";
        month[11] = "december.jpg";
    var bgurl = month[date.getMonth()];
    var url = "url(/images/backgrounds/" + bgurl + ")";
    //var url = "linear-gradient(rgba(238, 238, 238, 0.7),rgba(238, 238, 238, 0.7)),url(../img/backgrounds/" + bgurl + ")";

    jQuery(document).ready(function (jQuery) {
        // Initialize collapse button
        jQuery(".sidenav").sidenav();
        
        // Initialize collapsible
        jQuery('.collapsible').collapsible();
        
        // the "href" attribute of .modal-trigger must specify the modal ID that wants to be triggered
        jQuery('#hlavnimodal').modal();
        
        // Background dynamic change
        jQuery('.background').css('background-image', url);
        
        //iOS Web App opens in another windows hack
        if (("standalone" in window.navigator) && window.navigator.standalone) {
            // For iOS Apps
            jQuery('a').on('click', function (e) {
                e.preventDefault();
                var new_location = $(this).attr('href');
                if (new_location != undefined && new_location.substr(0, 1) != '#' && $(this).attr('data-method') == undefined) {
                    window.location = new_location;
                }
            });
        }

    });