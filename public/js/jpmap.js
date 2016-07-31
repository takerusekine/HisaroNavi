// japan map setting
$(function() {
    //地域を設定
    //{"code":[地域のコード], "name": [地域の名前], "color":[地域につける色], "hoverColor":[地域をマウスでホバーしたときの色], "prefectures":[地域に含まれる都道府県のコード]}
    var areas = [{
        "code": 1,
        "name": "北海道地方",
        "color": "#ca93ea",
        "hoverColor": "#ca93ea",
        "prefectures": [1]
    }, {
        "code": 2,
        "name": "東北地方",
        "color": "#a7a5ea",
        "hoverColor": "#a7a5ea",
        "prefectures": [2, 3, 4, 5, 6, 7]
    }, {
        "code": 3,
        "name": "関東地方",
        "color": "#52d49c",
        "hoverColor": "#52d49c",
        "prefectures": [8, 9, 10, 11, 12, 13, 14]
    }, {
        "code": 4,
        "name": "甲信越地方",
        "color": "#84b0f6",
        "hoverColor": "#84b0f6",
        "prefectures": [15, 19, 20]
    }, {
        "code": 5,
        "name": "北陸地方",
        "color": "#51d46a",
        "hoverColor": "#51d46a",
        "prefectures": [16, 17, 18]
    }, {
        "code": 6,
        "name": "東海地方",
        "color": "#aed450",
        "hoverColor": "#aed450",
        "prefectures": [21, 22, 23, 24]
    }, {
        "code": 7,
        "name": "関西地方",
        "color": "#f2db7b",
        "hoverColor": "#f2db7b",
        "prefectures": [25, 26, 27, 28, 29, 30]
    }, {
        "code": 8,
        "name": "中国地方",
        "color": "#f9ca6c",
        "hoverColor": "#f9ca6c",
        "prefectures": [31, 32, 33, 34, 35]
    }, {
        "code": 9,
        "name": "四国地方",
        "color": "#fbad8b",
        "hoverColor": "#fbad8b",
        "prefectures": [36, 37, 38, 39]
    }, {
        "code": 10,
        "name": "九州地方",
        "color": "#f7a6a6",
        "hoverColor": "#f7a6a6",
        "prefectures": [40, 41, 42, 43, 44, 45, 46, 47]
    }];

    $("#areamap").japanMap({
        areas: areas, //上で設定したエリアの情報
        selection: "area", //選ぶことができる範囲(県→prefecture、エリア→area)
        borderLineWidth: 0.25, //線の幅
        drawsBoxLine: false, //canvasを線で囲む場合はtrue
        movesIslands: true, //南西諸島を左上に移動させるときはtrue、移動させないときはfalse
        showsAreaName: false, //エリア名を表示しない場合はfalse
        backgroundColor: "#ffffff", //canvasの背景色
        font: "sans-serif", //地図に表示する文字のフォント
        fontSize: 12, //地図に表示する文字のサイズ
        fontColor: "#877c69", //地図に表示する文字の色。"areaColor"でエリアの色に合わせる
        areaNameType: "short",
        fontShadowColor: "white", //地図に表示する文字の影の色
        onSelect: function(data) {
            console.log(data.area.code);
        }
    });
});
