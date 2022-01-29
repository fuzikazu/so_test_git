$(function() {
    $("#serch_btn").click(function () {
        // 入力された値を取得
        
        // urlを設定
        var url = "https://zipcloud.ibsnet.co.jp/api/search";
        // 送るデータを成形する
        var param = { zipcode: zipcode };
        // サーバーと通信(Ajax)
        
        $.ajax({
            type: "GET",
            cache: false,
            data: param,
            url: url,
            dataType: "jsonp"
        })
        .done(function (res) {
            if (res.status != 200) {
                // 通信には成功。APIの結果がエラー
                // エラー内容を表示
                console.log("res")

                $('#zip_result').html(res.message);
            } else {
                //住所を表示
                var html = '';
                for (var i = 0; i < res.result.length; i++) {
                    var result = res.results[i];
                    console.log(res.results);
                    html1 += '<2>住所' + (i + 1) + '<h2>';
                    html1 += '<div>都道府県コード:' + result.prefcode + '</div';
                    html1 += '<div>都道府県:' + result.address1 + '</div';
                    html1 += '<div>市町村:' + result.address2 + '</div';
                    html1 += '<div>町域:' + result.address3 + '</div';
                    html1 += '<div>都道府県（カナ）:' + result.kana1 + '</div';
                    html1 += '<div>市町村（カナ）:' + result.kana1 + '</div';
                    html1 += '<div>町域（カナ）:' + result.kana1 + '</div';
                }
                $('#zip_result').html(html);
            }

        })
        .fail(function (error) {
            console.log(error);
            $('#zip_result').html("<p>通信エラーです。時間をおいてお試しください</p>");
        });
    });
});