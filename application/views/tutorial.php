<!--Step 1: Create an index.html page.
<br /><br />
Step 2: Add an opening &lt;html&gt; tag and a closing &lt;/html&gt; tag. Normally this looks like - <> with html inside the two brackets.
<br /><br />
Step 3: Insert an opening and closing header tag into the document. Do this by placing the word header in the <> tag's  
<br /><br />
Step 4: Add an opening title tag and a closing title tag. This has the same formatting as the html tags except replace html with title inside the <>'s
<br /><br />
Step 5: Add a opening and closing body tag. The format is the same as above.
<br /><br />
Step 6: Include a CSS link that joins bootstrap together with your html page. To accomplish this use the following format, link href="http://v4-alpha.getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet".
Make sure to place your link inside an opening &lt; &gt; and closing &lt;/ &gt; tag.
<br /><br />
Step 7: Create a basic form that allows a clear and concise layout for your web content. This is outlined in the following steps:
<br /><br />-->

Before we begin, download bootstrap from <a href="http://getbootstrap.com/getting-started/">getbootstrap.com/getting-started/</a> 
<br><br>

<ol>
    
    <li>Open a new project and create a page named index.html.</li>
   
    <li>Add an opening and a closing &lt;html&gt; tag. (Closing tags will have a "/" between the less than symbol and tag name)</li>

    <li>Insert an opening and a closing &lt;header&gt; tag between the &lt;html&gt; tags.</li>
    
    <li>Add an opening and closing &lt;title&gt; tag between the &lt;header&gt; tag. Type the title of your web page between the &lt;title&gt; tags.</li>
    
    <li>Insert &lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt; between the &lt;header&gt; tags. This is linking Bootstrap's built-in CSS to your page.</li>

    <li>Create opening and closing &lt;form&gt; tags outside of your header.</li>
   
    <li>Add an opening &lt;input&gt; tag between the &lt;form&gt; tags. This will allow users to create headers for their posts.</li>

    <li>Create an opening &lt;textarea&gt; tag also between the &lt;form&gt; tags. This will create a field for users to type content for their posts.</li>
    
    <li>An opening &lt;input&gt; tag with <b>type</b> "submit" is needed within the form so the server can collect form information. Assign a <b>name</b> to the submit button so the server knows which submit button is pushed.</li>

    <li>A reset button will make clearing form fields easier for the end user. The format is identical as the submit button except you switch the <b>type</b> and <b>value</b> to "reset". </li>

    <h3>Example finished form:</h3>
    
    
    <html>
        <header>
            <title> Tutorial </title>
            <link href="css/bootstrap.min.css" rel="stylesheet">
        </header>
        
        <form>
            
            <input placeholder="Header">
            
            <br><br>

            <textarea placeholder="Content"></textarea>
            
            <br><br>
            
            <input type="submit" value="Submit">
            <input type="reset" value="Reset">
            
        </form>
    </html>
    
    

    
        <!--end of basic tutorial
            <li>Define a fieldset property for your form. This is done with the keywords "class=fieldSet" within the opening/closing tags.</li>
            <li>This will act as the title for your form and is accomplished by using an opening < legend > and closing < / legend > tag.</li>
            <li> For example: <br>< p >Name:< input type="text" name="Name:" /> <br>
                        < p >Name:< input type="text" name="Name:" /> <br>
                        < p >Name:< input type="text" name="Name:" /> <br> 
                Will give you three form fields that you can enter information into.</li>
        -->
</ol>

<div id="posts"></div>


