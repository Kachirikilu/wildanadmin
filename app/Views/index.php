<!DOCTYPE html>
<html>

<head>
    <title>Untitled Document</title>
</head>

<body>
    <table align="center" border=1>

    </table>

    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            selesai();
        });

        function selesai() {
            setTimeout(function() {
                update();
                selesai();
            }, 200);
        }

        function update() {
            $.getJSON("data.php", function(data) {
                $("table").empty();
                var no = 1;
                $.each(data.result, function() {
                    $("table").append("<tr><td>" + (no++) + "</td><td>" + this['Judul'] + "</td><td>" + this['Kategori'] + "</td></tr>");
                });
            });
        }
    </script>

</body>

</html>