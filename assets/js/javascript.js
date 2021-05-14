/* FULLPAGE SETUP
=========================== */
$(document).ready(function() {
    $('#tabs li a:not(:first)').addClass('inactive');
    $('.wrapper').hide();
    $('.wrapper:first').show();
    $('#tabs li a').click(function() {
        var t = $(this).attr('id');
        if ($(this).hasClass('inactive')) { //this is the start of our condition 
            $('#tabs li a').addClass('inactive');
            $(this).removeClass('inactive');

            $('.wrapper').hide();
            $('#' + t + 'C').fadeIn('slow');
        }
    });
});
var notifiche_active = false;
var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];



/* FULLPAGE SETUP
=========================== */
$("#redwolf").fullpage({
    scrollHorizontally: true,
    fadingEffect: true,
    fadingEffect: 'sections',
    responsiveHeight: 400,
    scrollingSpeed: 1000,
    navigation: true,
    navigationTooltips: ['Introduction', 'Biography', 'Photo Gallery', 'Musics', 'Videos', 'Memories', 'Contact us'],
    navigationPosition: 'left',
    normalScrollElements: '#playlist, #mplaylist, .biography_section aside, .memories-part aside ul',
    anchors: [
        "intro",
        "biography",
        "photos",
        "musics",
        "videos",
        "memories",
        "contact-us",
    ],

    onLeave: function(index, nextIndex, direction) {
        if (index == 1 && nextIndex == 2) {
            if (localStorage.getItem("wasthere") == null) {
                if (notifiche_active == false) {
                    modal.style.display = "block";
                }
                notifiche_active = true;
                localStorage.setItem("wasthere", "done");
            }
        }
    }
});

/* VIDEOS
=========================== */
$(function() {
    $("#playlist li").on("click", function() {
        $("#videoarea").attr({
            "src": $(this).attr("movieurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#videoarea").attr({
        "src": $("#playlist li").eq(0).attr("movieurl"),
        "poster": $("#playlist li").eq(0).attr("moviesposter")
    })
})

$(document).ready(function() {
    $("#playlist li").click(function() {
        $("#playlist li").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active");
    });
});

/* MUSIC
=========================== */
$(function() {
    $("#mplaylist li").on("click", function() {
        $("#audioarea").attr({
            "src": $(this).attr("musicurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#audioarea").attr({
        "src": $("#mplaylist li").eq(0).attr("musicurl"),
        "poster": $("#mplaylist li").eq(0).attr("musicposter")
    })
})

$(document).ready(function() {
    $("#mplaylist li").click(function() {
        $("#mplaylist li").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active");
    });
});

/* MUSIC SINGLE PAGE
=========================== */
$(function() {
    $("#mplaylist_single li").on("click", function() {
        $("#audioarea").attr({
            "src": $(this).attr("musicurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#audioarea").attr({
        "src": $("#mplaylist_single li").eq(0).attr("musicurl"),
        "poster": $("#mplaylist_single li").eq(0).attr("musicposter")
    })
})

$(document).ready(function() {
    $("#mplaylist_single li").click(function() {
        $("#mplaylist_single li").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active");
    });
});
////////////////////////////////////////////////////
$(function() {
    $("#mplaylist_single_2 li").on("click", function() {
        $("#audioarea").attr({
            "src": $(this).attr("musicurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#audioarea").attr({
        "src": $("#mplaylist_single_2 li").eq(0).attr("musicurl"),
        "poster": $("#mplaylist_single_2 li").eq(0).attr("musicposter")
    })
})

$(document).ready(function() {
    $("#mplaylist_single_2 li").click(function() {
        $("#mplaylist_single_2 li").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active");
    });
});


/* VIDEO SINGLE PAGE
=========================== */
$(function() {
    $("#playlist-singlepage li").on("click", function() {
        $("#videoarea").attr({
            "src": $(this).attr("movieurl"),
            "poster": "",
            "autoplay": "autoplay"
        })
    })
    $("#videoarea").attr({
        "src": $("#playlist-singlepage li").eq(0).attr("movieurl"),
        "poster": $("#playlist-singlepage li").eq(0).attr("moviesposter")
    })
})

$(document).ready(function() {
    $("#playlist-singlepage li").click(function() {
        $("#playlist-singlepage li").removeClass("active");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).addClass("active");
    });
});


/* OFF CANVAS
=========================== */
function openNav() {
    $("#myNav").toggleClass("addWidth");
}

function closeNav() {
    $("#myNav").toggleClass("addWidth");
    if ($("#about").hasClass("opened")) {}
}

/* MUSIC & VIDEO SEARCH BAR
=========================== */
$(document).ready(function() {
    $("#filter").keyup(function() {

        var filter = $(this).val(),
            count = 0;

        $("#mplaylist_single li").each(function() {
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).hide();

            } else {
                $(this).show();
                count++;
            }
        });
    });
});

$(document).ready(function() {
    $("#filter").keyup(function() {

        var filter = $(this).val(),
            count = 0;

        $("#playlist-singlepage li").each(function() {
            if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                $(this).hide();

            } else {
                $(this).show();
                count++;
            }
        });
    });
});

/* POP UP
=========================== */
$(document).on('keypress click resize', function() {
    if (localStorage.getItem("wasthere") == null) {
        if (notifiche_active == false) {
            modal.style.display = "block";
        }
        notifiche_active = true;
        localStorage.setItem("wasthere", "done");
    }

});


span.onclick = function() {
    modal.style.display = "none";
}
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

/* SLIDE
=========================== */
$(function() {
    $('.fadein img:gt(0)').hide();
    setInterval(function() {
            $('.fadein :first-child').fadeOut()
                .next('img').fadeIn()
                .end().appendTo('.fadein');
        },
        5000);
});

/* LOADING
=========================== */