/**
 * Google Map Javascript APIを扱う
 */
var url = window.location.href;
var arr = url.split('/');
var salon_id = arr[arr.length - 1];
var geocodes = {
    "1": {
        "lat": 35.0864055,
        "lng": 137.161215
    },
    "2": {
        "lat": 32.8605956,
        "lng": 130.7956567
    },
    "3": {
        "lat": 32.8006627,
        "lng": 130.7091828
    },
    "4": {
        "lat": 35.7142421,
        "lng": 139.7034428
    },
    "5": {
        "lat": 31.5829968,
        "lng": 130.5583827
    },
    "6": {
        "lat": 35.6178327,
        "lng": 139.6516856
    },
    "7": {
        "lat": 35.0400594,
        "lng": 138.9461474
    },
    "8": {
        "lat": 34.3373912,
        "lng": 134.048638
    },
    "9": {
        "lat": 35.7358263,
        "lng": 139.6735001
    },
    "10": {
        "lat": 34.7028409,
        "lng": 137.7302232
    },
    "11": {
        "lat": 35.286289,
        "lng": 136.9271808
    },
    "12": {
        "lat": 35.1662021,
        "lng": 136.9902657
    },
    "13": {
        "lat": 35.2368632,
        "lng": 136.9584631
    },
    "14": {
        "lat": 38.2564027,
        "lng": 140.8859936
    },
    "15": {
        "lat": 35.6082149,
        "lng": 140.1177209
    },
    "16": {
        "lat": 31.5466864,
        "lng": 130.5393187
    },
    "17": {
        "lat": 35.4697556,
        "lng": 139.4603246
    },
    "18": {
        "lat": 35.1730817,
        "lng": 137.0234152
    },
    "19": {
        "lat": 34.9881996,
        "lng": 135.7610107
    },
    "20": {
        "lat": 34.9776298,
        "lng": 135.7022418
    },
    "21": {
        "lat": 35.0104252,
        "lng": 135.7514114
    },
    "22": {
        "lat": 35.255704,
        "lng": 139.1599202
    },
    "23": {
        "lat": 38.3430635,
        "lng": 140.3693479
    },
    "24": {
        "lat": 37.3929876,
        "lng": 140.3629326
    },
    "25": {
        "lat": 34.9743565,
        "lng": 135.7619579
    },
    "26": {
        "lat": 34.6760209,
        "lng": 136.5227446
    },
    "27": {
        "lat": 34.7107376,
        "lng": 137.7450942
    },
    "28": {
        "lat": 35.6824315,
        "lng": 139.7023259
    },
    "29": {
        "lat": 35.6596489,
        "lng": 139.7041609
    },
    "30": {
        "lat": 35.7117553,
        "lng": 139.704121
    },
    "31": {
        "lat": 35.8616914,
        "lng": 139.7434151
    },
    "32": {
        "lat": 35.8387621,
        "lng": 139.3886014
    },
    "33": {
        "lat": 35.9558366,
        "lng": 139.3956051
    },
    "34": {
        "lat": 35.8750836,
        "lng": 139.5145378
    },
    "35": {
        "lat": 34.49609,
        "lng": 133.3536294
    },
    "36": {
        "lat": 35.2811212,
        "lng": 139.6695443
    },
    "37": {
        "lat": 41.7753817,
        "lng": 140.7327626
    },
    "38": {
        "lat": 35.5654617,
        "lng": 139.568877
    },
    "39": {
        "lat": 35.3283889,
        "lng": 139.3463019
    },
    "40": {
        "lat": 34.6387033,
        "lng": 133.9252045
    },
    "41": {
        "lat": 34.7426298,
        "lng": 137.37063
    },
    "42": {
        "lat": 35.1403607,
        "lng": 136.8997111
    },
    "43": {
        "lat": 35.7015531,
        "lng": 139.7453743
    },
    "44": {
        "lat": 35.7116896,
        "lng": 139.7959049
    },
    "45": {
        "lat": 35.8284755,
        "lng": 139.6890237
    },
    "46": {
        "lat": 26.3251825,
        "lng": 127.754187
    },
    "47": {
        "lat": 34.8085692,
        "lng": 134.6813867
    },
    "48": {
        "lat": 34.7190983,
        "lng": 137.8764469
    },
    "49": {
        "lat": 35.3021739,
        "lng": 136.8193751
    },
    "50": {
        "lat": 35.7933822,
        "lng": 139.7912304
    },
    "51": {
        "lat": 34.6986096,
        "lng": 137.6584406
    },
    "52": {
        "lat": 34.7577939,
        "lng": 135.4965202
    },
    "53": {
        "lat": 35.6477194,
        "lng": 139.7102648
    },
    "54": {
        "lat": 33.8759407,
        "lng": 130.8813539
    },
    "55": {
        "lat": 40.5997224,
        "lng": 140.4827797
    },
    "56": {
        "lat": 38.2602212,
        "lng": 140.869548
    },
    "57": {
        "lat": 33.59068,
        "lng": 130.4229082
    },
    "58": {
        "lat": 35.7125518,
        "lng": 139.7919447
    },
    "59": {
        "lat": 35.7319626,
        "lng": 139.7112024
    },
    "60": {
        "lat": 35.6439186,
        "lng": 139.713653
    },
    "61": {
        "lat": 35.6983155,
        "lng": 139.8146464
    },
    "62": {
        "lat": 35.6274209,
        "lng": 139.7230131
    },
    "63": {
        "lat": 35.6599468,
        "lng": 139.6989594
    },
    "64": {
        "lat": 35.6092187,
        "lng": 139.6696497
    },
    "65": {
        "lat": 35.6928508,
        "lng": 139.7006904
    },
    "66": {
        "lat": 35.6525558,
        "lng": 139.5450847
    },
    "67": {
        "lat": 35.7075465,
        "lng": 139.6653881
    },
    "68": {
        "lat": 35.671146,
        "lng": 139.7161659
    },
    "69": {
        "lat": 35.598729,
        "lng": 139.6094986
    },
    "70": {
        "lat": 35.3987351,
        "lng": 139.5361934
    },
    "71": {
        "lat": 35.464137,
        "lng": 139.6165023
    },
    "72": {
        "lat": 35.9089848,
        "lng": 139.4850403
    },
    "73": {
        "lat": 35.9739702,
        "lng": 139.5909149
    },
    "74": {
        "lat": 35.8210158,
        "lng": 139.5733344
    },
    "75": {
        "lat": 35.8748413,
        "lng": 139.7903315
    },
    "76": {
        "lat": 35.8046657,
        "lng": 139.719741
    },
    "77": {
        "lat": 35.6092149,
        "lng": 140.1178815
    },
    "78": {
        "lat": 35.8641144,
        "lng": 139.9731251
    },
    "79": {
        "lat": 36.5914997,
        "lng": 140.6582702
    },
    "80": {
        "lat": 36.3765979,
        "lng": 140.4683355
    },
    "81": {
        "lat": 35.4140382,
        "lng": 136.759506
    },
    "82": {
        "lat": 37.4500954,
        "lng": 138.8536296
    },
    "83": {
        "lat": 37.9170847,
        "lng": 139.0577409
    },
    "84": {
        "lat": 37.1421547,
        "lng": 138.2618499
    },
    "85": {
        "lat": 34.6746068,
        "lng": 135.5019844
    },
    "86": {
        "lat": 34.6941221,
        "lng": 135.1914063
    },
    "87": {
        "lat": 35.7326087,
        "lng": 139.7142938
    },
    "88": {
        "lat": 35.6352023,
        "lng": 139.7150925
    },
    "89": {
        "lat": 34.6818083,
        "lng": 135.824136
    },
    "90": {
        "lat": 34.9477292,
        "lng": 138.3537825
    },
    "91": {
        "lat": 35.4406287,
        "lng": 139.3648191
    },
    "92": {
        "lat": 35.4213013,
        "lng": 137.0496341
    },
    "93": {
        "lat": 39.7144258,
        "lng": 140.1160328
    },
    "94": {
        "lat": 34.9538285,
        "lng": 137.0913294
    },
    "95": {
        "lat": 34.9837169,
        "lng": 136.9947827
    },
    "96": {
        "lat": 35.194682,
        "lng": 137.0276468
    },
    "97": {
        "lat": 34.981458,
        "lng": 137.1391655
    },
    "98": {
        "lat": 33.5504829,
        "lng": 133.5520742
    },
    "99": {
        "lat": 34.7026813,
        "lng": 135.5055562
    },
    "100": {
        "lat": 38.3387874,
        "lng": 140.8782675
    },
    "101": {
        "lat": 38.5654096,
        "lng": 140.9759619
    },
    "102": {
        "lat": 35.5470795,
        "lng": 139.5167788
    },
    "103": {
        "lat": 36.0074156,
        "lng": 138.1328448
    },
    "104": {
        "lat": 35.0090925,
        "lng": 135.9351911
    },
    "105": {
        "lat": 35.2619561,
        "lng": 136.2411859
    },
    "106": {
        "lat": 35.1084412,
        "lng": 136.958787
    },
    "107": {
        "lat": 26.2204895,
        "lng": 127.6899943
    },
    "108": {
        "lat": 34.783077,
        "lng": 135.6306797
    },
    "109": {
        "lat": 35.6966693,
        "lng": 139.7610446
    },
    "110": {
        "lat": 43.052247,
        "lng": 141.3551768
    },
    "111": {
        "lat": 34.8446028,
        "lng": 138.2579979
    },
    "112": {
        "lat": 34.6930409,
        "lng": 135.1909949
    },
    "113": {
        "lat": 37.9093271,
        "lng": 139.0610974
    },
    "114": {
        "lat": 35.229438,
        "lng": 139.7028309
    },
    "115": {
        "lat": 35.7087881,
        "lng": 139.9575774
    },
    "116": {
        "lat": 35.6139272,
        "lng": 140.1111843
    },
    "117": {
        "lat": 35.6993393,
        "lng": 139.4799684
    },
    "118": {
        "lat": 35.7100737,
        "lng": 139.7729378
    },
    "119": {
        "lat": 35.7053193,
        "lng": 139.5786818
    },
    "120": {
        "lat": 35.6612356,
        "lng": 139.6985372
    },
    "121": {
        "lat": 35.7295091,
        "lng": 139.7155466
    },
    "122": {
        "lat": 35.5436425,
        "lng": 139.4475207
    },
    "123": {
        "lat": 35.6939095,
        "lng": 139.7026911
    },
    "124": {
        "lat": 35.6979616,
        "lng": 139.813785
    },
    "125": {
        "lat": 35.7530153,
        "lng": 139.7368358
    },
    "126": {
        "lat": 35.7170859,
        "lng": 139.8586661
    },
    "127": {
        "lat": 35.5625622,
        "lng": 139.7136152
    },
    "128": {
        "lat": 35.7005465,
        "lng": 139.4157734
    },
    "129": {
        "lat": 35.6567689,
        "lng": 139.3381261
    },
    "130": {
        "lat": 35.8600857,
        "lng": 139.9707594
    },
    "131": {
        "lat": 35.8540505,
        "lng": 139.9618576
    },
    "132": {
        "lat": 35.6102145,
        "lng": 140.1172119
    },
    "133": {
        "lat": 35.7856576,
        "lng": 139.9002683
    },
    "134": {
        "lat": 35.6930587,
        "lng": 140.0221841
    },
    "135": {
        "lat": 35.6102145,
        "lng": 140.1172119
    },
    "136": {
        "lat": 35.9058427,
        "lng": 139.6215738
    },
    "137": {
        "lat": 36.1397994,
        "lng": 139.3935667
    },
    "138": {
        "lat": 35.906301,
        "lng": 139.6216321
    },
    "139": {
        "lat": 35.4642331,
        "lng": 139.6160156
    },
    "140": {
        "lat": 35.4389685,
        "lng": 139.364347
    },
    "141": {
        "lat": 36.0799192,
        "lng": 140.204333
    },
    "142": {
        "lat": 36.3754435,
        "lng": 140.4724851
    },
    "143": {
        "lat": 36.2936082,
        "lng": 139.3778956
    },
    "144": {
        "lat": 37.394733,
        "lng": 140.3861565
    },
    "145": {
        "lat": 37.057152,
        "lng": 140.8911868
    },
    "146": {
        "lat": 35.168614,
        "lng": 136.8803533
    },
    "147": {
        "lat": 35.1725504,
        "lng": 136.9075397
    },
    "148": {
        "lat": 34.6695154,
        "lng": 135.5014075
    },
    "149": {
        "lat": 34.6716846,
        "lng": 135.4989271
    },
    "150": {
        "lat": 40.5081789,
        "lng": 141.4877655
    },
    "151": {
        "lat": 35.0082394,
        "lng": 135.7566221
    },
    "152": {
        "lat": 34.6666463,
        "lng": 135.5057267
    },
    "153": {
        "lat": 35.5349007,
        "lng": 139.4732808
    },
    "154": {
        "lat": 35.6609402,
        "lng": 139.6680122
    },
    "155": {
        "lat": 35.6495299,
        "lng": 139.6369679
    },
    "156": {
        "lat": 35.7030779,
        "lng": 139.5770931
    },
    "157": {
        "lat": 35.5631704,
        "lng": 139.7149956
    },
    "158": {
        "lat": 34.7182133,
        "lng": 135.4153612
    },
    "159": {
        "lat": 37.9239473,
        "lng": 139.0468115
    },
    "160": {
        "lat": 33.8340835,
        "lng": 132.7820126
    },
    "161": {
        "lat": 34.0690646,
        "lng": 134.5472362
    },
    "162": {
        "lat": 35.2971521,
        "lng": 139.1959689
    },
    "163": {
        "lat": 35.6005732,
        "lng": 139.6121676
    },
    "164": {
        "lat": 43.0381126,
        "lng": 141.3605939
    },
    "165": {
        "lat": 42.8246442,
        "lng": 141.6479102
    },
    "166": {
        "lat": 42.9080706,
        "lng": 143.2012754
    },
    "167": {
        "lat": 43.0489229,
        "lng": 141.3905353
    },
    "168": {
        "lat": 43.7595132,
        "lng": 142.3987276
    },
    "169": {
        "lat": 37.397805,
        "lng": 140.385687
    },
    "170": {
        "lat": 37.7544064,
        "lng": 140.4619211
    },
    "171": {
        "lat": 37.0560244,
        "lng": 140.8917089
    },
    "172": {
        "lat": 35.6719014,
        "lng": 139.7138966
    },
    "173": {
        "lat": 35.6941401,
        "lng": 139.7031022
    },
    "174": {
        "lat": 35.7330029,
        "lng": 139.7103914
    },
    "175": {
        "lat": 35.7477208,
        "lng": 139.8037585
    },
    "176": {
        "lat": 35.7795283,
        "lng": 139.7212667
    },
    "177": {
        "lat": 35.7665968,
        "lng": 139.8469726
    },
    "178": {
        "lat": 35.7301015,
        "lng": 139.8813104
    },
    "179": {
        "lat": 35.7648427,
        "lng": 139.6739964
    },
    "180": {
        "lat": 35.7773037,
        "lng": 139.6315104
    },
    "181": {
        "lat": 35.6961691,
        "lng": 139.4151152
    },
    "182": {
        "lat": 35.6539223,
        "lng": 139.5447512
    },
    "183": {
        "lat": 35.5462395,
        "lng": 139.4475373
    },
    "184": {
        "lat": 35.543587,
        "lng": 139.4474012
    },
    "185": {
        "lat": 35.6574105,
        "lng": 139.3379511
    },
    "186": {
        "lat": 35.745208,
        "lng": 139.3259348
    },
    "187": {
        "lat": 35.7781058,
        "lng": 139.7916771
    },
    "188": {
        "lat": 35.7309891,
        "lng": 139.7919575
    },
    "189": {
        "lat": 35.6943621,
        "lng": 139.8128684
    },
    "190": {
        "lat": 35.7067709,
        "lng": 139.665852
    },
    "191": {
        "lat": 35.667867,
        "lng": 139.7553236
    },
    "192": {
        "lat": 35.66128,
        "lng": 139.6978567
    },
    "193": {
        "lat": 35.6425398,
        "lng": 139.6713819
    },
    "194": {
        "lat": 36.0651283,
        "lng": 139.6764093
    },
    "195": {
        "lat": 35.9030626,
        "lng": 139.6238042
    },
    "196": {
        "lat": 35.8578881,
        "lng": 139.6551814
    },
    "197": {
        "lat": 35.9815338,
        "lng": 139.7511092
    },
    "198": {
        "lat": 35.8302142,
        "lng": 139.6951148
    },
    "199": {
        "lat": 35.8303622,
        "lng": 139.8061687
    },
    "200": {
        "lat": 35.875478,
        "lng": 139.787244
    },
    "201": {
        "lat": 35.8210075,
        "lng": 139.5740426
    },
    "202": {
        "lat": 35.9053785,
        "lng": 139.4820555
    },
    "203": {
        "lat": 35.4685225,
        "lng": 139.4623728
    },
    "204": {
        "lat": 35.5317779,
        "lng": 139.6929825
    },
    "205": {
        "lat": 35.5778875,
        "lng": 139.6603141
    },
    "206": {
        "lat": 35.4652375,
        "lng": 139.5022371
    },
    "207": {
        "lat": 35.4056792,
        "lng": 139.5949634
    },
    "208": {
        "lat": 35.4381075,
        "lng": 139.3642582
    },
    "209": {
        "lat": 35.5967249,
        "lng": 139.3431146
    },
    "210": {
        "lat": 35.6205085,
        "lng": 139.5687792
    },
    "211": {
        "lat": 35.6024673,
        "lng": 139.6174002
    },
    "212": {
        "lat": 35.8610634,
        "lng": 139.974209
    },
    "213": {
        "lat": 35.7022938,
        "lng": 139.9828928
    },
    "214": {
        "lat": 35.6375722,
        "lng": 140.0944152
    },
    "215": {
        "lat": 35.7867936,
        "lng": 139.900446
    },
    "216": {
        "lat": 36.5604256,
        "lng": 139.8821598
    },
    "217": {
        "lat": 36.3138524,
        "lng": 139.8057387
    },
    "218": {
        "lat": 36.3752185,
        "lng": 140.4729295
    },
    "219": {
        "lat": 36.0896603,
        "lng": 140.112234
    },
    "220": {
        "lat": 36.3358172,
        "lng": 139.0263469
    },
    "221": {
        "lat": 36.2954441,
        "lng": 139.3776455
    },
    "222": {
        "lat": 37.9149764,
        "lng": 139.0587167
    },
    "223": {
        "lat": 36.6470773,
        "lng": 138.1891494
    },
    "224": {
        "lat": 36.2289697,
        "lng": 137.9676072
    },
    "225": {
        "lat": 36.2848259,
        "lng": 138.4840987
    },
    "226": {
        "lat": 35.8500809,
        "lng": 137.9700086
    },
    "227": {
        "lat": 35.6626633,
        "lng": 138.5691208
    },
    "228": {
        "lat": 35.1440681,
        "lng": 136.9047741
    },
    "229": {
        "lat": 35.1672724,
        "lng": 136.878648
    },
    "230": {
        "lat": 35.1730411,
        "lng": 136.8779952
    },
    "231": {
        "lat": 35.4125913,
        "lng": 136.7578015
    },
    "232": {
        "lat": 35.3375964,
        "lng": 137.1215801
    },
    "233": {
        "lat": 35.3646061,
        "lng": 136.6184715
    },
    "234": {
        "lat": 34.594197,
        "lng": 136.5235731
    },
    "235": {
        "lat": 34.9737733,
        "lng": 138.38509
    },
    "236": {
        "lat": 34.704331,
        "lng": 135.5011177
    },
    "237": {
        "lat": 34.6983878,
        "lng": 135.5324597
    },
    "238": {
        "lat": 34.6453599,
        "lng": 135.5129572
    },
    "239": {
        "lat": 34.7194175,
        "lng": 135.4823999
    },
    "240": {
        "lat": 34.575359,
        "lng": 135.4817203
    },
    "241": {
        "lat": 34.7488473,
        "lng": 135.4748224
    },
    "242": {
        "lat": 34.8166261,
        "lng": 135.6515471
    },
    "243": {
        "lat": 34.8169775,
        "lng": 135.5779982
    },
    "244": {
        "lat": 34.7629543,
        "lng": 135.6207005
    },
    "245": {
        "lat": 34.7352595,
        "lng": 135.5646398
    },
    "246": {
        "lat": 34.6657865,
        "lng": 135.5658046
    },
    "247": {
        "lat": 34.59852,
        "lng": 135.617004
    },
    "248": {
        "lat": 34.7871596,
        "lng": 135.4608199
    },
    "249": {
        "lat": 34.6235681,
        "lng": 135.4901682
    },
    "250": {
        "lat": 34.4968112,
        "lng": 135.4272654
    },
    "251": {
        "lat": 35.0104252,
        "lng": 135.7514114
    },
    "252": {
        "lat": 35.0037863,
        "lng": 135.7311245
    },
    "253": {
        "lat": 34.6941547,
        "lng": 135.1922558
    },
    "254": {
        "lat": 34.7201937,
        "lng": 135.4138641
    },
    "255": {
        "lat": 34.7657661,
        "lng": 134.8375111
    },
    "256": {
        "lat": 34.8310139,
        "lng": 134.6942375
    },
    "257": {
        "lat": 34.6290519,
        "lng": 135.0550356
    },
    "258": {
        "lat": 34.5853523,
        "lng": 133.770312
    },
    "259": {
        "lat": 34.6392504,
        "lng": 133.9245462
    },
    "260": {
        "lat": 33.5923765,
        "lng": 130.396177
    },
    "261": {
        "lat": 33.3125343,
        "lng": 130.5200526
    },
    "262": {
        "lat": 33.5944013,
        "lng": 130.3956743
    },
    "263": {
        "lat": 33.8284881,
        "lng": 130.7427596
    },
    "264": {
        "lat": 32.8078139,
        "lng": 130.7122713
    },
    "265": {
        "lat": 31.587118,
        "lng": 130.5385672
    },
    "266": {
        "lat": 35.7907173,
        "lng": 139.4702935
    },
    "267": {
        "lat": 35.1702279,
        "lng": 136.8871888
    },
    "268": {
        "lat": 35.1702909,
        "lng": 136.9360649
    },
    "269": {
        "lat": 26.3150945,
        "lng": 127.759637
    },
    "270": {
        "lat": 40.6204805,
        "lng": 141.2237831
    },
    "271": {
        "lat": 34.9346957,
        "lng": 137.0014197
    },
    "272": {
        "lat": 35.8248807,
        "lng": 139.9200624
    },
    "273": {
        "lat": 35.6681184,
        "lng": 139.7106387
    },
    "274": {
        "lat": 35.652792,
        "lng": 139.5475455
    },
    "275": {
        "lat": 35.6697359,
        "lng": 139.6506106
    },
    "276": {
        "lat": 35.72712,
        "lng": 139.707428
    },
    "277": {
        "lat": 33.2405479,
        "lng": 130.299064
    },
    "278": {
        "lat": 34.6725845,
        "lng": 135.4991188
    },
    "279": {
        "lat": 38.2585913,
        "lng": 140.8801218
    },
    "280": {
        "lat": 35.7054171,
        "lng": 139.5973468
    },
    "281": {
        "lat": 34.6969268,
        "lng": 135.5311709
    },
    "282": {
        "lat": 35.1201286,
        "lng": 136.0945543
    },
    "283": {
        "lat": 35.443219,
        "lng": 139.6313816
    },
    "284": {
        "lat": 35.8595303,
        "lng": 139.9692179
    },
    "285": {
        "lat": 35.7958092,
        "lng": 139.7928431
    },
    "286": {
        "lat": 35.7026308,
        "lng": 139.5791402
    },
    "287": {
        "lat": 35.6639593,
        "lng": 139.872011
    },
    "288": {
        "lat": 35.7091461,
        "lng": 139.7736323
    },
    "289": {
        "lat": 35.7478148,
        "lng": 139.7020139
    },
    "290": {
        "lat": 35.1017559,
        "lng": 138.8608675
    },
    "291": {
        "lat": 36.3139802,
        "lng": 139.8057304
    },
    "292": {
        "lat": 35.7873183,
        "lng": 139.6103067
    },
    "293": {
        "lat": 35.6596963,
        "lng": 139.3362068
    },
    "294": {
        "lat": 35.6936974,
        "lng": 139.4361913
    },
    "295": {
        "lat": 34.9589585,
        "lng": 137.163569
    },
    "296": {
        "lat": 35.1696716,
        "lng": 136.937712
    },
    "297": {
        "lat": 35.1332104,
        "lng": 136.8919622
    },
    "298": {
        "lat": 35.1682587,
        "lng": 136.8875083
    },
    "299": {
        "lat": 35.7380899,
        "lng": 139.671928
    },
    "300": {
        "lat": 36.2415555,
        "lng": 137.9960867
    },
    "301": {
        "lat": 34.643549,
        "lng": 135.515607
    },
    "302": {
        "lat": 36.52897,
        "lng": 136.6100655
    },
    "303": {
        "lat": 36.7378289,
        "lng": 137.0296121
    },
    "304": {
        "lat": 36.5971424,
        "lng": 136.6308139
    },
    "305": {
        "lat": 36.7063814,
        "lng": 137.2295135
    },
    "306": {
        "lat": 35.0403871,
        "lng": 137.1364192
    },
    "307": {
        "lat": 43.057774,
        "lng": 141.352199
    },
    "308": {
        "lat": 43.066973,
        "lng": 141.3548593
    },
    "309": {
        "lat": 35.4498888,
        "lng": 133.3205056
    },
    "310": {
        "lat": 34.7130211,
        "lng": 137.8587211
    },
    "311": {
        "lat": 36.3431077,
        "lng": 139.0105089
    },
    "312": {
        "lat": 36.7563184,
        "lng": 137.0407242
    },
    "313": {
        "lat": 36.4151445,
        "lng": 139.0617743
    },
    "314": {
        "lat": 34.6640133,
        "lng": 135.488956
    },
    "315": {
        "lat": 36.3139802,
        "lng": 139.8057304
    },
    "316": {
        "lat": 43.0579434,
        "lng": 141.3508963
    },
    "317": {
        "lat": 33.5921877,
        "lng": 130.3956132
    },
    "318": {
        "lat": 35.6738463,
        "lng": 139.7376971
    },
    "319": {
        "lat": 35.6501464,
        "lng": 139.7370813
    },
    "320": {
        "lat": 35.5221241,
        "lng": 139.6733346
    },
    "321": {
        "lat": 36.6465357,
        "lng": 138.1882328
    },
    "322": {
        "lat": 35.5287394,
        "lng": 139.6988071
    },
    "323": {
        "lat": 35.7508017,
        "lng": 139.5442881
    },
    "324": {
        "lat": 33.3169786,
        "lng": 130.5300159
    },
    "325": {
        "lat": 35.5153833,
        "lng": 139.6752624
    },
    "326": {
        "lat": 38.2539501,
        "lng": 140.3391018
    },
    "327": {
        "lat": 38.2365735,
        "lng": 140.3157768
    },
    "328": {
        "lat": 39.7028747,
        "lng": 141.141335
    },
    "329": {
        "lat": 35.4433467,
        "lng": 139.634748
    },
    "330": {
        "lat": 35.4040127,
        "lng": 139.5946385
    },
    "331": {
        "lat": 35.530242,
        "lng": 139.7003069
    },
    "332": {
        "lat": 35.5639398,
        "lng": 139.7162482
    },
    "333": {
        "lat": 35.468942,
        "lng": 139.4658643
    },
    "334": {
        "lat": 35.3303858,
        "lng": 139.3455491
    },
    "335": {
        "lat": 35.3140413,
        "lng": 136.7218469
    },
    "336": {
        "lat": 33.83648,
        "lng": 132.7656224
    },
    "337": {
        "lat": 33.2089372,
        "lng": 131.5819195
    },
    "338": {
        "lat": 33.2229318,
        "lng": 131.6128913
    },
    "339": {
        "lat": 34.7963831,
        "lng": 135.4419183
    },
    "340": {
        "lat": 35.5780071,
        "lng": 139.5561358
    },
    "341": {
        "lat": 38.2800375,
        "lng": 140.9859217
    },
    "342": {
        "lat": 38.2907998,
        "lng": 140.8205728
    },
    "343": {
        "lat": 38.5725667,
        "lng": 140.9648904
    },
    "344": {
        "lat": 35.2536267,
        "lng": 136.9706679
    },
    "345": {
        "lat": 34.5541952,
        "lng": 135.5065237
    },
    "346": {
        "lat": 38.2275527,
        "lng": 140.8794228
    },
    "347": {
        "lat": 34.6813786,
        "lng": 135.5415788
    },
    "348": {
        "lat": 34.969408,
        "lng": 136.5904633
    },
    "349": {
        "lat": 36.0812008,
        "lng": 136.2095451
    },
    "350": {
        "lat": 36.6765407,
        "lng": 137.2105699
    },
    "351": {
        "lat": 34.4460174,
        "lng": 135.3554985
    },
    "352": {
        "lat": 36.7037788,
        "lng": 137.1860629
    },
    "353": {
        "lat": 41.8371307,
        "lng": 140.7343236
    },
    "354": {
        "lat": 34.622877,
        "lng": 135.5491462
    },
    "355": {
        "lat": 31.9441141,
        "lng": 131.432417
    },
    "356": {
        "lat": 36.1383271,
        "lng": 139.3874592
    },
    "357": {
        "lat": 38.2615184,
        "lng": 140.8647426
    },
    "358": {
        "lat": 34.973177,
        "lng": 136.580414
    },
    "359": {
        "lat": 35.647455,
        "lng": 139.6230524
    },
    "360": {
        "lat": 35.6324767,
        "lng": 139.6602721
    },
    "361": {
        "lat": 38.2397109,
        "lng": 140.9073171
    },
    "362": {
        "lat": 36.3100058,
        "lng": 139.808208
    },
    "363": {
        "lat": 35.3383343,
        "lng": 139.485528
    },
    "364": {
        "lat": 35.3416163,
        "lng": 139.6214529
    },
    "365": {
        "lat": 35.9879517,
        "lng": 140.1547866
    },
    "366": {
        "lat": 35.3325959,
        "lng": 139.4059052
    },
    "367": {
        "lat": 39.7107699,
        "lng": 141.0970693
    },
    "368": {
        "lat": 35.6941787,
        "lng": 139.8154404
    },
    "369": {
        "lat": 36.0806637,
        "lng": 139.4880231
    },
    "370": {
        "lat": 35.7487616,
        "lng": 139.5877685
    },
    "371": {
        "lat": 38.2522559,
        "lng": 140.3410544
    },
    "372": {
        "lat": 38.3203011,
        "lng": 140.8896865
    },
    "373": {
        "lat": 35.9095759,
        "lng": 139.797678
    },
    "374": {
        "lat": 38.3109763,
        "lng": 141.0104898
    },
    "375": {
        "lat": 35.7383782,
        "lng": 139.8476105
    },
    "376": {
        "lat": 35.6506885,
        "lng": 139.442615
    },
    "377": {
        "lat": 35.281094,
        "lng": 139.6695507
    },
    "378": {
        "lat": 35.8041803,
        "lng": 139.9790079
    },
    "379": {
        "lat": 35.6654778,
        "lng": 139.6385004
    },
    "380": {
        "lat": 36.5492565,
        "lng": 139.9281557
    },
    "381": {
        "lat": 35.1722422,
        "lng": 136.9091368
    },
    "382": {
        "lat": 34.3926551,
        "lng": 132.4599115
    },
    "383": {
        "lat": 35.2491033,
        "lng": 136.844063
    },
    "384": {
        "lat": 34.3925134,
        "lng": 132.458856
    },
    "385": {
        "lat": 35.5635676,
        "lng": 139.7185341
    },
    "386": {
        "lat": 35.5774606,
        "lng": 139.7346849
    },
    "387": {
        "lat": 37.1139442,
        "lng": 138.2451169
    },
    "388": {
        "lat": 35.6635197,
        "lng": 139.7333812
    },
    "389": {
        "lat": 35.6618679,
        "lng": 139.8734638
    },
    "390": {
        "lat": 34.6931215,
        "lng": 135.1914643
    },
    "391": {
        "lat": 35.177852,
        "lng": 138.6802444
    },
    "392": {
        "lat": 35.6939762,
        "lng": 139.7013913
    },
    "393": {
        "lat": 35.6432157,
        "lng": 140.0886935
    },
    "394": {
        "lat": 35.772468,
        "lng": 139.8721317
    },
    "395": {
        "lat": 35.4830671,
        "lng": 139.628903
    },
    "396": {
        "lat": 34.5225464,
        "lng": 135.7978948
    },
    "397": {
        "lat": 35.4644607,
        "lng": 139.5823111
    }
};

var lat = geocodes[salon_id].lat;
var lng = geocodes[salon_id].lng;
var map;

function initMap() {

    map = new google.maps.Map(document.getElementById('map'), {
        center: {
            lat: lat,
            lng: lng
        },
        zoom: 15
    });
    var image = 'http://hiyake1696.com/navi/favicon.ico';
    var contentString = document.getElementById('content_string').textContent.trim();
    var infowindow = new google.maps.InfoWindow({
        content: '<strong>' + contentString + '</strong>'
    });
    var marker = new google.maps.Marker({
        position: {
            lat: lat,
            lng: lng
        },
        map: map,
        icon: image
    });

    window.addEventListener('load', function() {
        infowindow.open(map, marker);
    });


}

$(function() {
    $('a.btn-map').attr('href', 'http://maps.google.com?q=' + lat + ',' + lng);
});
