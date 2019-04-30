<h4>
    Code snippets, references, and generators to make laying out your forms easier. Because let's face it, it's never that easy.
</h4>
<h5>
    Contact us:
</h5>

<script id="form" type="text/html">
    <div class="row">
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label for="name" class="input-group-text">Name:</label>
                </div>
                <input id="name" class="form-control" type="text">
            </div>
        </div>
        <div class="col">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label for="e-mail" class="input-group-text">E-mail:</label>
                </div>
                <input id="e-mail" class="form-control" type="text">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <label for="feedback" class="col-form-label">Feedback:</label>
            <textarea style="min-height: 200px;" id="feedback" class="form-control"></textarea>
        </div>
    </div>
    <br />
    <button type="submit" class="btn btn-primary">Submit Feedback</button>
</script>

<div id="content"></div>

<br />

<script type="text/javascript" src="/assets/js/mustache.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
         var data = {

         };

         var template = $('#form').html();
         var output = Mustache.render(template, data);
         var form = $('<form></form>')
                 .attr('method', 'POST')
                 .attr('action', '/main/contact')
                 //.attr('enctype', 'multipart/form-data')
                 .html(output);
         $('#content').append(form);
     });   
</script>