<style type="text/css">
    textarea {
        width:100%;
        height:300px;
    }
</style>

<form action="javascript:generate()">
    Instructions:
    <br />
    <code>
        r
        <br />
        c || c7 
        <br />
        l || gl || p
        <br />
        Input Name:
    </code>

    <textarea id="input">
r
c
l
First Name:
c
l
Last Name:</textarea>

    <textarea id="output"></textarea>
    <button type="submit">Generate</button>
</form>

<script type="text/javascript">

    function generate() {
        var input = $('#input').val();
        $('#output').val(parse(input));
        // fire codemirror maybe...
    }
    function parse(input) {
        var lines = input.trim().split('\n');
        var output = '';

        var row_open = false;
        var col_open = false;
        var input_printed = false;

        for (var i = 0; i < lines.length; i++) {
            // split and check the #
            var sym = lines[i];

            //debug
            //output += sym + '  --  \n';

            if (sym == 'r') {
                output += '<div class="row">\n';
                row_open = true;
            } else if (sym == 'c') {
                output += '    <div class="col">\n';
                col_open = true;
            } else if (sym == 'l') {
                var label = lines[i + 1];
                var id = label.split(' ').join('_')
                id = id.split(':').join('').toLowerCase();
                output += '        <label for="' + id + '" class="col-form-label">' + label + '</label>\n';
                output += '        <input id="' + id + '" class="form-control" type="text">\n';

                if (col_open) {
                    output += '    </div>\n'; // close column
                    col_open = false;
                }


//                input_printed = true;
                i++;
            }


            //IF THE ROW IS OPEN AND THE COLUMN IS CLOSED AND THE INPUT HAS BEEN PRINTED AND THE NEXT LINE ISN'T A NEW COLUMN
            if (row_open && input_printed) {
                //output += '\nrow open=' + lines[i + 1] + '\n';
            }

            if (row_open && col_open == false && input_printed < 1 && lines[i + 1] != 'c')
            {
                output += '</div>'; // close row
            }

            //for(var line in lines){
            //output += lines[i] + ' - parsed\n';
            //remove :
            // spaces turn to _
        }
        return output;
    }

</script>