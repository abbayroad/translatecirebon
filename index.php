<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Translate Bahasa Cirebon</title>

    <style>
        body {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }

        .block {
            display: flex;
            justify-content: space-between;
            font-size: 18pt;
            padding: 0px 20px 20px 20px;
        }

        .item {
            width: 100%;
        }

        .translate {
            padding-left: 20px;
        }

        .item div#terjemahan {
            background-color: #eee;
            height: 200px;
            padding: 20px;
        }

        .item textarea {
            height: 200px;
            font-size: 18pt;
            width: 96%;
            margin-right: 10px;
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class='block'>
        <div class="item">
            <h2>Bahasa Indonesia</h2>
        </div>
        <div class="item">
            <h2>Bahasa Cirebon</h2>
        </div>
    </div>
    <div class='block'>
        <div class="item">
            <textarea type='text' onKeyUp="TranslateKeBahasaCirebon(this.value)"></textarea>
        </div>
        <div class="item translate">
            <div id='terjemahan'></div>
        </div>
    </div>
    <script src="./jquery-3.6.0.min.js"></script>
    <script>
        function TranslateKeBahasaCirebon(data) {
            $.ajax({
                url: "http://127.0.0.1:8000/translate.php?txt=" + data,
                success: function(hasil) {
                    document.getElementById('terjemahan').innerHTML = hasil;
                }
            });
        }
    </script>

</body>

</html>