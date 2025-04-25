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



    {{-- <button id="get-data-btn">Mostrar Dados no Console</button>
    <button id="add-line">Adicionar Linha</button>
    <button id="remove-line">Remover primeira linha</button> --}}
</body>

<script>
    jspreadsheet.setLicense(
        'ZjE5ZGY1N2Q5MjllYjY4Njg0NWNjNmQ0MmUwMGU2YTMxZjY1NDE5MGFjMjY0NzJmN2FjNTk2MTUyZjc4ZmQxM2ZkZTUyNzVhYTJlZDFiOWM3YjQ2YjAwZjRmNjAyOTkxMDllZTA2MmExYWVhYWMxMDZmZjA0NDQwMjkxNzgyYmUsZXlKamJHbGxiblJKWkNJNkltVmlPR1ptT1dabFpUSmlOR0V3TVdWak1UWXlaVEJtT1RJM09XWXpOelkxTldVeE1XWXdObU1pTENKdVlXMWxJam9pVUdWa2NtOGlMQ0prWVhSbElqb3hOelE0TURReE1qQXdMQ0prYjIxaGFXNGlPbHNpZDJWaUlpd2liRzlqWVd4b2IzTjBJbDBzSW5Cc1lXNGlPak14TENKelkyOXdaU0k2V3lKMk55SXNJblk0SWl3aWRqa2lMQ0oyTVRBaUxDSjJNVEVpTENKbWIzSnRkV3hoSWl3aVptOXliWE1pTENKeVpXNWtaWElpTENKd1lYSnpaWElpTENKcGJYQnZjblJsY2lJc0luTmxZWEpqYUNJc0ltTnZiVzFsYm5Seklpd2lkbUZzYVdSaGRHbHZibk1pTENKamFHRnlkSE1pTENKd2NtbHVkQ0lzSW1KaGNpSXNJbk5vWldWMGN5SXNJbk5vWVhCbGN5SXNJbk5sY25abGNpSmRmUT09'
    )

    jspreadsheet(document.getElementById('spreadsheet'), {
        worksheets: [{
                data: [
                    ['banana', 20, 'R$ 2,00'],
                    ['maça', 30, 'R$ 3,00'],
                    ['laranja', 40, 'R$ 4,00'],
                ],
                columns: [{
                        title: 'Fruta',
                        width: 150
                    },
                    {
                        title: 'Quantidade',
                        width: 150
                    },
                    {
                        title: 'Preço',
                        width: 150
                    }
                ]
            },
            {
                data: [
                    ['Mazda', 2001, 2000],
                    ['Peugeot', 2010, 5000],
                    ['Honda Fit', 2009, 3000],
                    ['Honda CRV', 2010, 6000],
                ],
                columns: [{
                        title: 'Model',
                        width: '300px'
                    },
                    {
                        title: 'Year',
                        width: '80px'
                    },
                    {
                        title: 'Price',
                        width: '100px'
                    },
                ]
            }
        ],
    });

























    // const planilha = jspreadsheet(document.getElementById('spreadsheet'), {
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
    //             }
    //         ]
    //     }],
    //     oncreaterow: function(worksheet, rowNumber, tr) {
    //         console.log('nova linha criada:');
    //         console.log('numero da linha:', rowNumber);
    //         console.log('elemento da linha:', tr);
    //     }
    // });

    // document.getElementById('get-data-btn').addEventListener('click', function() {
    //     const dados = planilha[0].getData(); // pega os dados da planilha
    //     console.log('Dados da planilha:', dados);
    // });

    // método robusto
    // document.getElementById('add-line').addEventListener('click', function() {
    //     planilha[0].insertRow([{ data: ['Novo carro', 2025, 9999]}]);
    // } )

    // método simplificado
    // document.getElementById('add-line').onclick = () => planilha[0].insertRow([{
    //     data: ['Novo carro', 2025, 9999]
    // }]);

    // document.getElementById('remove-line').onclick = () => planilha[0].deleteRow(0);


    // let el = $("#spreadsheet")[0];
    // console.log(el);

    // $(document).ready(function() {
    //     jspreadsheet($("#spreadsheet")[0], {
    //         worksheets: [{
    //             data: [
    //                 ['Banana', 'Amarela'],
    //                 ['Maçã', 'Vermelha']
    //             ],
    //             columns: [{
    //                     type: 'text',
    //                     title: 'Fruta',
    //                     width: 150
    //                 },
    //                 {
    //                     type: 'text',
    //                     title: 'Cor',
    //                     width: 150
    //                 }
    //             ]
    //         }]
    //     })
    // });
</script>

</html>
