$(document).ready(function () {

  $('.nav-item a').click(function (e) {
    e.preventDefault();
    $(this).tab('show');
  });
  if (!Cookies.get('hisaronavi_area')) {
    $('#areamodal').modal('show');
  } else {
    $('input[name=area_flash]').attr('value', Cookies.get('hisaronavi_area'));
    $('#areaname').attr('value', Cookies.get('hisaronavi_area'));
  }

  $('[data-toggle="tooltip"]').tooltip();

  toggleRegion();
  mapListChange();
  sliderClick();
  countHit();

  // #で始まるアンカーをクリックした場合に処理
  if (Cookies.get('refineprice') == 0) {
    $("#range-slider").attr("disabled", 'true');
    $('.noUi-tooltip').text('-円');
  }

  menuOpen();
});


$('button[name="areabtn"]').on('click', function () {
  var areaname = $(this).children('span').text()
  Cookies.set('hisaronavi_area', areaname);
  $('#areaname').text(areaname);
})

$('#gobacktop').click(function () {
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

$('#regionBtn').on('click', function () {
  $('#areamodal').modal('show');
});

// 以下function定義
function toggleRegion() {
  areaselect();
  //    imgratio();
}



// keyvisual img ratio check
function imgratio() {
  var w = $('#kvimg').outerWidth();
  var h = w * 1068 / 1600;
  $('#kvimg').css('height', h + 'px');
}

// initial area selection transport the data
function areaselect() {
  $.each($('#areamap button'), function () {
    $(this).on('click', function () {
      $('#areamodal').modal('hide');
      var txt = $(this).text();
      txt = $.trim(txt);
      $('#areaname').val(txt);
      $('input[name=area_flash]').attr('value', txt);
      $('#areaname').attr('value', txt);
    });
  });
}

//topnav innerheight


function mapListChange() {
  $('#btn-map').on('click', function () {
    $('#regionList').css('display', 'none');
    $('#regionMap').css('display', 'block');
    $('#btn-list').removeClass('btn-warning');
    $('#btn-list').addClass('btn-secondary');
    $(this).removeClass('btn-secondary');
    $(this).addClass('btn-warning');
  });

  $('#btn-list').on('click', function () {
    $('#regionMap').css('display', 'none');
    $('#regionList').css('display', 'block');
    $('#btn-map').removeClass('btn-warning');
    $('#btn-map').addClass('btn-secondary');
    $(this).removeClass('btn-secondary');
    $(this).addClass('btn-warning');
  });
}

function sliderClick() {
  $('.sliderIndex li').on('click', function () {
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

$('.refine-btns button').on('click', function () {
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

$('.refine-fix li').on('click', function () {
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

function getScrollBottom() {
  var body = window.document.body;
  var html = window.document.documentElement;
  var scrollTop = body.scrollTop || html.scrollTop;
  return html.scrollHeight - html.clientHeight - scrollTop;
}

$(window).scroll(function () {
  if ($('#menuindex').hasClass('active')) {
    if (getScrollBottom() < 1500) {
      $('.refine-fix-wrapper').fadeOut(200);
    } else {
      $('.refine-fix-wrapper').fadeIn(200);
    }
  }
});

if ($('.bottom-fix').length) {
  $(window).scroll(function () {
    if (getScrollBottom() < 1500) {
      $('.bottom-fix').fadeOut(200);
    } else {
      $('.bottom-fix').fadeIn(200);
    }
  });
}

$('.parent-td label').on('change', function () {
  var num = $(this).children('input').attr('data-num');
  if ($(this).children('input[name="parent-check"]').prop('checked')) {
    $('input[data-num="' + num + '"]').prop('checked', true);
  } else {
    $('input[data-num="' + num + '"]').prop('checked', false);
  }
});

if ($('#slider-check').length) {
  var slider = document.getElementById('range-slider');

  if (Cookies.get('lowerPrice')) {

    noUiSlider.create(slider, {
      start: [Cookies.get('lowerPrice'), Cookies.get('upperPrice')],
      connect: true,
      step: 500,
      margin: 1000,
      tooltips: [true,
        wNumb({
          postfix: '円',
          decimals: 0,
          thousand: ','
        })
      ],
      range: {
        'min': 0,
        'max': 3500
      },
      format: wNumb({
        decimals: 0,
        thousand: ',',
        postfix: '円',
      })
    });
  } else {
    noUiSlider.create(slider, {
      start: [0, 3500],
      connect: true,
      step: 500,
      margin: 1000,
      tooltips: [true,
        wNumb({
          postfix: '円',
          decimals: 0,
          thousand: ','
        })
      ],
      range: {
        'min': 0,
        'max': 3500
      },
      format: wNumb({
        decimals: 0,
        thousand: ',',
        postfix: '円',
      })
    });
  }
  $('#slider-check').on('change', function () {
    var input = $(this).children('input[name="pricerefine"]');
    if (input.prop('checked') === true) {
      input.val('1');
      $('#range-slider').removeAttr('disabled');
      var valarr = document.getElementById('range-slider').noUiSlider.get();
      $('.noUi-handle-lower').children('.noUi-tooltip').text(valarr[0]);
      $('.noUi-handle-upper').children('.noUi-tooltip').text(valarr[1]);
    } else {
      input.val('0');
      $("#range-slider").attr("disabled", 'true');
      $('.noUi-tooltip').text('-円');
    }
  });

  slider.noUiSlider.on('update', function (value, handle, unencoded) {
    var lowerPrice = document.getElementById('lowerPrice'),
      upperPrice = document.getElementById('upperPrice');
    lowerPrice.value = unencoded[0];
    upperPrice.value = unencoded[1];
  });
}

$('#tab-btn button').on('click', function () {
  $('#tab-btn button').removeClass('active-btn');
  $(this).addClass('active-btn');
  var index = $(this).parent('li').index();
  $('#menutab li:eq(' + index + ') a').tab('show');
  $('body, html').animate({
    scrollTop: 0
  }, 400)
});

$('#menutab li a').on('click', function () {
  var i = $(this).parent('li').index();
  $('#tab-btn li button').removeClass('active-btn');
  $('#tab-btn li:eq(' + i + ') button').addClass('active-btn');
})

if ($('input[name="pricerefine"]').length) {
  $('button[type="submit"]').on('click', function () {
    var refinePrice = $('input[name="pricerefine"]').val();
    var lowerPrice = $('input[name="lower-price"]').val();
    var upperPrice = $('input[name="upper-price"]').val();
    Cookies.set('refineprice', refinePrice);
    Cookies.set('lowerPrice', lowerPrice);
    Cookies.set('upperPrice', upperPrice);
  });
}

$('button[name="continue-btn"]').on('click', function () {
  $('.sgi-wrap').slideToggle('400', function () {
    if ($('.sgi-wrap').css('display') == 'none') {
      $('button[name="continue-btn"]').children('i').text('playlist_add');
      $('button[name="continue-btn"]').children('span').text('続きを見る');
    } else {
      $('button[name="continue-btn"]').children('i').text('close');
      $('button[name="continue-btn"]').children('span').text('閉じる');
    }
  });
})

function menuOpen() {
  var flg = false;
  var body = $('body');
  var sPos;
  $('#hamburger').on('click', function () {
    if (flg === false) {
      sPos = $(window).scrollTop();
      body.addClass('menu-open').css({
        'top': -1 * sPos
      });
      flg = true;
    } else {
      body.removeClass('menu-open').css({
        'top': 0
      });
      window.scrollTo(0, sPos);
      flg = false;
    }
  });
}