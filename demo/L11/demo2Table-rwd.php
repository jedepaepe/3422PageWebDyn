<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>Demo 2 rwd</title>
        <style>
            @import "http://fonts.googleapis.com/css?family=Montserrat:300,400,700";
            .rwd-table {
                margin: 1em 0;
                min-width: 300px;
            }
            .rwd-table tr {
                border-top: 1px solid #ddd;
                border-bottom: 1px solid #ddd;
            }
            .rwd-table th {
                display: none;
            }
            .rwd-table td {
                display: block;
            }
            .rwd-table td:first-child {
                padding-top: .5em;
            }
            .rwd-table td:last-child {
                padding-bottom: .5em;
            }
            .rwd-table td:before {
                content: attr(data-th) ": ";
                font-weight: bold;
                width: 6.5em;
                display: inline-block;
            }
            @media (min-width: 480px) {
                .rwd-table td:before {
                    display: none;
                }
            }
            .rwd-table th, .rwd-table td {
                text-align: left;
            }
            @media (min-width: 480px) {
                .rwd-table th, .rwd-table td {
                    display: table-cell;
                    padding: .25em .5em;
                }
                .rwd-table th:first-child, .rwd-table td:first-child {
                    padding-left: 0;
                }
                .rwd-table th:last-child, .rwd-table td:last-child {
                    padding-right: 0;
                }
            }
            
            body {
                padding: 0 2em;
                font-family: Montserrat, sans-serif;
                -webkit-font-smoothing: antialiased;
                text-rendering: optimizeLegibility;
                color: #444;
                background: #eee;
            }

            h1 {
                font-weight: normal;
                letter-spacing: -1px;
                color: #34495E;
            }

            .rwd-table {
                background: #34495E;
                color: #fff;
                border-radius: .4em;
                overflow: hidden;
            }
            .rwd-table tr {
                border-color: #46637f;
            }
            .rwd-table th, .rwd-table td {
                margin: .5em 1em;
            }
            @media (min-width: 480px) {
                .rwd-table th, .rwd-table td {
                    padding: 1em !important;
                }
            }
            .rwd-table th, .rwd-table td:before {
                color: #dd5;
            }
        </style>
    </head>
    <body>
        <h1>Introduction</h1>
        <a href='http://codepen.io/geoffyuen/pen/FCBEg'>Code de référence</a>
        <h1>Démo</h1>
        <table class="rwd-table">
            <thead>
                <tr>
                    <th>id</th>
                    <th>titre</th>
                    <th>année</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td data-th='id'>1</td>
                    <td data-th='titre'>Fifi brin d'acier</td>
                    <td data-th='année'>1955</td>
                </tr>
                <tr>
                    <td data-th='id'>2</td>
                    <td data-th='titre'>Lucky Luke</td>
                    <td data-th='année'>1988</td>
                </tr>
                <tr>
                    <td data-th='id'>3 </td>
                    <td data-th='titre'>La grande bouffe</td>
                    <td data-th='année'>1975</td>
                </tr>
                <tr>
                    <td data-th='id'>4</td>
                    <td data-th='titre'>Ivan peintre d'icônes</td>
                    <td data-th='année'>1960</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>
