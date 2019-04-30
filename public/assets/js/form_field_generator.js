function generate() {
    var input = $('#input').val();
    var output = parse(input);
    $('#output').val(output);
    $('#rendered_output').html(output);
    // fire codemirror maybe...
}
function parse(input) {
    var lines = input.trim().split('\n');
    var output = '';

    var col_open = false;
    var col_width = 0;

    for (var i = 0; i < lines.length; i++) {
        var sym = lines[i];

        if (sym.length > 2) {
            col_width = sym[1] + sym[2];
        } else if (sym.length > 1) {
            col_width = sym[1];
        }

        if (sym == 'r') {
            output += '<div class="row">\n';
        } else if (sym[0] == 'c') {
            output += '    <div class="col';
            if (sym.length > 1) {
                output += '-' + col_width;
            }
            output += '">\n';

            col_open = true;
        } else if (sym == 'l' || sym == 'g' || sym == 'p') {
            var label = lines[i + 1];
            var id = label.split(' ').join('_')
            id = id.split(':').join('').toLowerCase();

            if (sym == 'l') {
                output += '        <label for="' + id + '" class="col-form-label">' + label + '</label>\n';
                output += '        <input id="' + id + '" class="form-control" type="text">\n';
            } else if (sym == 'g') {
                output += '        <div class="input-group">\n';
                output += '            <div class="input-group-prepend">\n'
                output += '                <label for="' + id + '" class="input-group-text">' + label + '</label>\n';
                output += '            </div>\n';
                output += '            <input id="' + id + '" class="form-control" type="text">\n';
                output += '        </div>\n';
            } else if (sym == 'p') {
                output += '        <input id="' + id + '" class="form-control" placeholder="' + label.split(':').join('') + '" type="text">\n';
            }

            if (col_open) {
                output += '    </div>\n'; // CLOSE COLUMN
                col_open = false;
            }

            i++;
        }

        if (lines[i + 1] == '') {
            i++;
        }

        if (lines[i + 1] == undefined || lines[i + 1] == 'r') {
            output += '</div>\n'; // CLOSE ROW
        }

    } // END PARSE LOOP
    return output.trim();
}