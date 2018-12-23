<html>
    <head>
        <title>Time Grid</title>
        <link href="/css/grid.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="/js/jquery.min.js"></script>
        <script type="text/javascript" src="/js/grid.js"></script>
    </head>
    <body>
        <div id="container"></div>
        <div id="legend">
            <div class="box option_1"></div>112 - Sleep
            <br />
            <div class="box option_2"></div>Wake/Meditate
            <br />
            <div class="box option_3"></div>90 - Work
            <br />
            <div class="box option_7"></div>49 - Education
            <br />
            <div class="box option_8"></div>Food/Hygiene
            <br />
            <div class="box option_9"></div>42 - Fun
        </div>
        <div id="logging">
            <input type="button" value="Export" onclick="export_grid()" />
            <input type="button" value="Import" onclick="import_grid()" />
            <input type="button" value="Clear" onclick="clear_grid()" />
            <br />
            <textarea id="output">
{
    "items": [
        {
            "x": 1,
            "y": 1,
            "type": 7,
            "value": "test test something else"
        },
        {
            "x": 2,
            "y": 1,
            "type": 8,
            "value": "second info"
        }
    ]
}
</textarea>
        </div>
        <div id="options"></div>
    </body>
</html>