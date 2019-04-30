<style type="text/css">
    textarea {
        width:100%;
        height:300px;
    }
</style>

<script type="text/javascript" src="/assets/js/form_field_generator.js"></script>

<form action="javascript:generate()">
    <h4>Instructions:</h4>
    <code style="color:#118600">
        r &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<&nbsp;--- r = row
        <br />
        c || c7 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<&nbsp;--- c = column OR c with a number so as to set its width, aka c4
        <br />
        l || g || p  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<&nbsp;--- l = standard label OR g = group label OR p = placeholder
        <br />
        Input Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<&nbsp;--- label or placeholder(: trimmed), also id(: trimmed, spaces become underscores)
    </code>

<textarea id="input">
r
c4
g
First Name:
c8
p
Last Name:
r
c
l
Middle Name:
</textarea>

    <textarea id="output"></textarea>
    <button type="submit" class="btn btn-primary">Generate Form Fields</button>
    
</form>

<br />
<div id="rendered_output"></div>
<br />