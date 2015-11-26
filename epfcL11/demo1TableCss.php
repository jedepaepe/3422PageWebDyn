<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>demo 1 css table</title>
        <style>
            .cinTable {
                border: 1px solid black;
                border-collapse: collapse;
                margin: 40px auto;
            }
            .cinTable td, .cinTable th {
                border: 1px solid black;
                padding: 4px 8px;
            }
            .cinTable tbody tr:nth-child(2n+1) {
                background-color: #C0C0C0;
            }
            .cinTable tbody tr:nth-child(2n) {
                background-color: bisque;
            }
            .cinTable thead tr {
                background-color: oldlace;
            }
        </style>
    </head>
    <body>
        <table class="cinTable">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>année</th>
                </tr>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>année</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Fifi brin d'acier</td>
                    <td>1955</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Lucky Luke</td>
                    <td>1988</td>
                </tr>
                <tr>
                    <td>3 </td>
                    <td>La grande bouffe</td>
                    <td>1975</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Ivan peintre d'icônes</td>
                    <td>1960</td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
