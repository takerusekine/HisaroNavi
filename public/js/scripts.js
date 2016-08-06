$(document).ready(function() {
    topnavheight();

    $('.nav-item a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    if (!$.cookie('hisaronavi_area')) {

        $('#areamodal').modal('show');
    } else {
        $('input[name=area_flash]').attr('value', $.cookie('hisaronavi_area'));
        $('#areaname').attr('value', $.cookie('hisaronavi_area'));
    }

    $('[data-toggle="tooltip"]').tooltip();

    toggleRegion();
    mapListChange();
    sliderClick();
    countHit();

    // #で始まるアンカーをクリックした場合に処理
    $('#gobacktop').click(function() {
        // スクロールの速度
        var speed = 400; // ミリ秒
        // アンカーの値取得
        var href = $(this).attr("href");
        // 移動先を取得
        var target = $(href == "#" || href == "" ? 'html' : href);
        // 移動先を数値で取得
        var position = target.offset().top;
        // スムーススクロール
        $('body,html').animate({
            scrollTop: position
        }, speed, 'swing');
        return false;
    });

});

$('#regionBtn').on('click', function() {
    $('#areamodal').modal('show');
});

// 以下function定義
function toggleRegion() {
    areaselect();
    imgratio();
}



// keyvisual img ratio check
function imgratio() {
    var w = $('#kvimg').outerWidth();
    var h = w * 1068 / 1600;
    $('#kvimg').css('height', h + 'px');
}

// initial area selection transport the data
function areaselect() {
    $.each($('#areamap button'), function() {
        $(this).on('click', function() {
            $('#areamodal').modal('hide');
            var txt = $(this).text();
            txt = $.trim(txt);
            $('#areaname').val(txt);
            $('input[name=area_flash]').attr('value', txt);
            $('#areaname').attr('value', txt);
            var date = new Date();
            var minutes = 120;
            date.setTime(date.getTime() + (minutes * 60 * 1000));
            $.cookie('hisaronavi_area', txt, {
                expires: date
            });
        });
    });
}

//topnav innerheight

function topnavheight() {
    var h = $('#topnav').height();
    $('#logo').css('height', h + "px");
}

function mapListChange() {
    $('#btn-map').on('click', function() {
        $('#regionList').css('display', 'none');
        $('#regionMap').css('display', 'block');
        $('#btn-list').removeClass('btn-warning');
        $('#btn-list').addClass('btn-secondary');
        $(this).removeClass('btn-secondary');
        $(this).addClass('btn-warning');
    });

    $('#btn-list').on('click', function() {
        $('#regionMap').css('display', 'none');
        $('#regionList').css('display', 'block');
        $('#btn-map').removeClass('btn-warning');
        $('#btn-map').addClass('btn-secondary');
        $(this).removeClass('btn-secondary');
        $(this).addClass('btn-warning');
    });
}

function sliderClick() {
    $('.sliderIndex li').on('click', function() {
        var index = $(this).index();
        $('.sliderIndex li').removeClass('active');
        $(this).addClass('active');
        $('.slider li').removeClass('showimg');
        $('.slider li').css('display', 'none');
        $('.slider li').eq(index).fadeIn().addClass('showimg');

    });
}

function countHit() {
    var cnt = $('#count').text();
    $('#ajax-counter').text(cnt);
}


//絞り込み

$('.refine-btns button').on('click', function() {
    var dr = $(this).attr('data-refine');
    $('.menulist dl').removeClass('vis last-bd');
    $('.refine-btns button').removeClass('refine-btn-active');
    $('.refine-fix li').removeClass('refine-active');
    $('.menulist').children('dl').fadeOut();
    $('p.alertmsg').fadeOut();
    $(this).addClass('refine-btn-active');
    if (dr === 'all') {
        $('.menulist').children('dl').addClass('vis');
        $('.refine-fix li[data-refine=all]').addClass('refine-active');
        $('.menulist').children('dl').fadeIn();
        $('.vis').last().addClass('last-bd');
    } else {
        $('.menulist').children('dl[data-grade=' + dr + ']').addClass('vis');
        $('.refine-fix li').eq(dr).addClass('refine-active');
        $('.menulist').children('dl[data-grade=5]').addClass('vis');
        $('.vis').last().addClass('last-bd');
        $('.menulist').children('dl[data-grade=' + dr + ']').fadeIn();
        $('.menulist').children('dl[data-grade=5]').fadeIn();
        if ($('.vis').length === 0) {
            $('.menulist').after('<p class="alertmsg">' + $(this).text() + 'のマシーンメニュー情報はありません</p>')
        }
    }
})

$('.refine-fix li').on('click', function() {
    var dr = $(this).attr('data-refine');
    $('.menulist dl').removeClass('vis last-bd');
    $('.refine-btns button').removeClass('refine-btn-active');
    $('.refine-fix li').removeClass('refine-active');
    $('.menulist').children('dl').fadeOut();
    $('p.alertmsg').fadeOut();
    $('.refine-btns button[data-refine=' +
        dr + ']').addClass('refine-btn-active');

    if (dr === 'all') {
        $('.menulist').children('dl').addClass('vis');
        $('.refine-fix li[data-refine=all]').addClass('refine-active');
        $('.menulist').children('dl').fadeIn();
        $('.vis').last().addClass('last-bd');
    } else {
        $('.menulist').children('dl[data-grade=' + dr + ']').addClass('vis');
        $('.refine-fix li').eq(dr).addClass('refine-active');
        $('.menulist').children('dl[data-grade=5]').addClass('vis');
        $('.vis').last().addClass('last-bd');
        $('.menulist').children('dl[data-grade=' + dr + ']').fadeIn();
        $('.menulist').children('dl[data-grade=5]').fadeIn();
        if ($('.vis').length === 0) {
            $('.menulist').after('<p class="alertmsg">' + $(this).text() + 'のマシーンメニュー情報はありません</p>')
        }
    }
})

$(window).scroll(function() {
    if ($('#menuindex').hasClass('active')) {
        function getScrollBottom() {
            var body = window.document.body;
            var html = window.document.documentElement;
            var scrollTop = body.scrollTop || html.scrollTop;
            return html.scrollHeight - html.clientHeight - scrollTop;
        }
        if (getScrollBottom() < 200) {
            $('.refine-fix-wrapper').fadeOut(200);
        } else {
            $('.refine-fix-wrapper').fadeIn(200);
        }
    }
});

$('.parent-td label').on('change', function() {
    var num = $(this).children('input').attr('data-num');
    if ($(this).children('input[name="parent-check"]').prop('checked')) {
        $('input[data-num="' + num + '"]').prop('checked', true);
    } else {
        $('input[data-num="' + num + '"]').prop('checked', false);
    }
});

$('#feature').find('.list-group-item').on('click', function() {
    var feature_cookie = $.trim($(this).children('span').text());
    var date = new Date();
    var minutes = 120;
    date.setTime(date.getTime() + (minutes * 60 * 1000));
    $.cookie('feature_title', feature_cookie, {
        expires: date
    });
});

$('#selection').find('.list-group-item').on('click', function() {
    var selection_cookie = $.trim($(this).find('h3').text());
    var date = new Date();
    var minutes = 120;
    date.setTime(date.getTime() + (minutes * 60 * 1000));
    $.cookie('selection_title', selection_cookie, {
        expires: date
    });
});
