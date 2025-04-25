<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jspreadsheet@11/dist/index.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jspreadsheet@11/dist/jspreadsheet.min.css" type="text/css" />
    <script src="https://cdn.jsdelivr.net/npm/jsuites/dist/jsuites.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/jsuites/dist/jsuites.min.css" type="text/css" />
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>
</head>

<body>
    <div id="spreadsheet"></div>
</body>

<script>
    jspreadsheet.setLicense(
        'ZjE5ZGY1N2Q5MjllYjY4Njg0NWNjNmQ0MmUwMGU2YTMxZjY1NDE5MGFjMjY0NzJmN2FjNTk2MTUyZjc4ZmQxM2ZkZTUyNzVhYTJlZDFiOWM3YjQ2YjAwZjRmNjAyOTkxMDllZTA2MmExYWVhYWMxMDZmZjA0NDQwMjkxNzgyYmUsZXlKamJHbGxiblJKWkNJNkltVmlPR1ptT1dabFpUSmlOR0V3TVdWak1UWXlaVEJtT1RJM09XWXpOelkxTldVeE1XWXdObU1pTENKdVlXMWxJam9pVUdWa2NtOGlMQ0prWVhSbElqb3hOelE0TURReE1qQXdMQ0prYjIxaGFXNGlPbHNpZDJWaUlpd2liRzlqWVd4b2IzTjBJbDBzSW5Cc1lXNGlPak14TENKelkyOXdaU0k2V3lKMk55SXNJblk0SWl3aWRqa2lMQ0oyTVRBaUxDSjJNVEVpTENKbWIzSnRkV3hoSWl3aVptOXliWE1pTENKeVpXNWtaWElpTENKd1lYSnpaWElpTENKcGJYQnZjblJsY2lJc0luTmxZWEpqYUNJc0ltTnZiVzFsYm5Seklpd2lkbUZzYVdSaGRHbHZibk1pTENKamFHRnlkSE1pTENKd2NtbHVkQ0lzSW1KaGNpSXNJbk5vWldWMGN5SXNJbk5vWVhCbGN5SXNJbk5sY25abGNpSmRmUT09'
    )

    // jspreadsheet(document.getElementById('spreadsheet'), {
    //     worksheets: [{
    //         data: [
    //             ['Mazda', 2001, 2000],
    //             ['Peugeot', 2010, 5000],
    //             ['Honda Fit', 2009, 3000],
    //             ['Honda CRV', 2010, 6000],
    //         ],
    //         columns: [{
    //                 title: 'Model',
    //                 width: '300px'
    //             },
    //             {
    //                 title: 'Year',
    //                 width: '80px'
    //             },
    //             {
    //                 title: 'Price',
    //                 width: '100px'
    //             },
    //         ]
    //     }]
    // });

    let el = $("#spreadsheet")[0];
    console.log(el);

    $(document).ready(function() {
        jspreadsheet($("#spreadsheet")[0], {
            worksheets: [{
                data: [
                    ['Banana', 'Amarela'],
                    ['Maçã', 'Vermelha']
                ],
                columns: [{
                        type: 'text',
                        title: 'Fruta',
                        width: 150
                    },
                    {
                        type: 'text',
                        title: 'Cor',
                        width: 150
                    }
                ]
            }]
        })
    });
</script>

</html>
