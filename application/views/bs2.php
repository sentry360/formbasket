<form>
    <fieldset>
        <legend>Legend</legend>

        Delete everything after [TAB]
        Insert at the beginning of the line.
        Insert at the end of the line.

        btn 	Standard gray button with gradient
        btn btn-primary 	Provides extra visual weight and identifies the primary action in a set of buttons
        btn btn-info 	Used as an alternative to the default styles
        btn btn-success 	Indicates a successful or positive action
        btn btn-warning 	Indicates caution should be taken with this action
        btn btn-danger 	Indicates a dangerous or potentially negative action
        btn btn-inverse 	Alternate dark gray button, not tied to a semantic action or use
        btn btn-link

        <label for="first">First Name</label>
        <input id="first" type="text" />

        <hr />

        <label for="first2">First Name</label>
        <input id="first2" type="text" />
        <input id="first2" type="text" class="input-medium" />
        <br />
        <input id="first2" type="text" class="input-medium" />
        <input id="first2" type="text" class="search-query" />
        <input id="first2" type="text" class="input-medium search-query" />

        <hr />

        <input id="last" type="text" />
        <label for="last">Last Name</label>

        <hr />
        
        <!--### Simple name form-->
        <label>
            First Name
            <input type="text" />
        </label>

        <label>
            <input type="text" />
            Last Name
        </label>
        <!--###end-->

        <input type="text" class="input-medium search-query">
        <button type="submit" class="btn">Search</button>

        <label>Label name</label>
        <input type="text" placeholder="Type something…">

        <span class="help-block">Example block-level help text here.</span>
        <label class="checkbox">
            <input type="checkbox"> Check me out
        </label>
        <button type="submit" class="btn">Submit</button>

        <label class="checkbox">
            <input type="checkbox" value="">
            Option one is this and that—be sure to include why it's great
        </label>

        <input type="checkbox" value="Option one is this and that—be sure to include why it's great">

        <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
            Option one is this and that—be sure to include why it's great
        </label>
        <label class="radio">
            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
            Option two can be something else and selecting it will deselect option one
        </label>
        
        <!--###end-->

        <input type="text" />
        <input type="text" />

        <div class="input-prepend">
            <input type="text" />
            <span class="add-on">@</span>
            <input class="span2" id="prependedInput" type="text" placeholder="Username">
            <input type="text" />
        </div>
        
        <!--###end-->

        <div class="input-append">
            <input class="span2" id="appendedInput" type="text">
            <span class="add-on">.00</span>
        </div>

        <div class="input-append">
            <input class="span2" id="appendedInputButtons" type="text">
            <button class="btn" type="button">Search</button>
            <button class="btn btn-primary" type="button">Options</button>
            <button class="btn btn-info" type="button">Search</button>
        </div>
        
        <!--###end-->

    </fieldset>
</form>

<div class="row-fluid marketing">
    <div class="span6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>

    </div>

    <div class="span6">
        <h4>Subheading</h4>
        <p>Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum.</p>

        <h4>Subheading</h4>
        <p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Cras mattis consectetur purus sit amet fermentum.</p>
    </div>
</div>