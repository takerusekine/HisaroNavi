$(document).ready(function() {
    topnavheight();

    $('.nav-item a').click(function(e) {
        e.preventDefault();
        $(this).tab('show');
    });
    $('#areamodal').modal('show');
    $('[data-toggle="tooltip"]').tooltip();

    toggleRegion();



    mapListChange();
    sliderClick();
    //autoSlider();
    //

    areaRefineAjax();
    kodawariRefine();
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
            var val = $(this).attr('id').replace("area-", "");
            $('#areaname').val(txt);
            $('input[name=area_flash]').attr('value', txt);
            $('#areaname').attr('value', txt);
            $('#areaname').attr('data-area', val);
            $.cookie('hisaronavi_area', txt);
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




function areaRefineAjax() {
    var dataAreaArr = [];
    $('input[name=area]').on('click', function() {
        dataAreaArr = [];
        $('#ajax-counter').hide();
        $('#loading').show();
        var lgArea = $('input[name=lg-region]').val();
        $('input[name=area]:checked').each(function() {
            dataAreaArr.push($(this).val());
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        })
        $.ajax({
                type: 'GET',
                url: 'result',
                data: {
                    ajaxData: dataAreaArr,
                    ajaxLgArea: lgArea
                },
                timeout: 10000
            })
            .done(function(data) {
                $('#regionSelect').html(data);
                $('#ajax-counter').text($('#count').text());
                $('#loading').hide();
                $('#ajax-counter').show();
            })
            .fail(function(data) {
                alert('おや、何かがおかしいようです。再度選択しなおしてください。');
            })

    });

}

function kodawariRefine() {
    var kodawariArr = [];
    var lgArea = $('input[name=lg-region]').val();
    var lower_price = 0;
    var upper_price = 0;
    $('select[name=lower_price]').on('change', function() {
        lower_price = $(this).val();
        console.log($(this).val());
    });

    $('select[name=upper_price]').on('change', function() {
        upper_price = $(this).val();
        console.log($(this).val());
    });

    $('input[name=kodawari], select[name=upper_price], select[name=lower_price]').on('change', function() {
        kodawariArr = [];
        $('#ajax-counter').hide();
        $('#loading').show();
        $('input[name=kodawari]:checked').each(function() {
            kodawariArr.push($(this).val());
        });
        console.log(kodawariArr);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
                type: 'GET',
                url: 'search/result',
                data: {
                    ajaxData: kodawariArr,
                    ajaxLgArea: lgArea,
                    ajaxLP: lower_price,
                    ajaxUP: upper_price
                },
                timeout: 10000
            })
            .done(function(data) {
                $('#ajaxReplace').html(data);
                $('#ajax-counter').text($('#count').text());
                $('#loading').hide();
                $('#ajax-counter').show();
            })
            .fail(function(data) {
                alert('おや、何かがおかしいようです。');
            })
    });
}
