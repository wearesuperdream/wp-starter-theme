<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Superdream Boilerplate</title>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,600,300' rel='stylesheet' type='text/css'>  
  <link rel="stylesheet" href="dist/css/min/style.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
  <header>
    <div class="wrapper--small">
      <h1>Superdream Boilerplate <small>version 1.0.0</small></h1>
      <hr>
    </div>
  </header>
  <div class="wrapper--small">
    <h1>Header 1</h1>
    <h2>Header 2</h2>
    <h3>Header 3</h3>
    <h4>Header 4</h4>
    <h5>Header 5</h5>
    <h6>Header 6</h6>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste illo perspiciatis qui voluptas ullam tempora vel blanditiis nemo natus minima deserunt quasi dolorem fugiat, minus, eum at laudantium dignissimos pariatur?</p>

    <h2>Buttons</h2>
    <hr>
    <h3>Different Sizes</h3>
    <a href="" class="button button--small">Small</a>
    <a href="" class="button">Default</a>
    <a href="" class="button button--large">Large</a>
    <a href="" class="button button--extra-large">Extra Large</a>
    <h3>Different Styles</h3>
    <a href="" class="button button--alert">Button</a>
    <a href="" class="button">Button</a>
    <a href="" class="button button--success">Button</a>
    <a href="" class="button button--neutral">Button</a>
    <a href="" class="button button--attention">Button</a>
    <a href="" class="button button--disabled">Button</a>
    <a href="" class="button button--bordered">Button</a>
    <a href="" class="button button--alert button--bordered button--smooth">Button</a>
    <a href="" class="button button--success button--bordered button--rounded">Button</a>
    <a href="" class="button button--neutral button--bordered">Button</a>
    <a href="" class="button button--attention button--bordered">Button</a>
    <a href="" class="button button--teal button--bordered">Button</a>
    <a href="" class="button button--neutral button--link">Button</a>
    <a href="" class="button button--neutral"><i class="fa fa-twitter"></i> Button</a>

    <div class="button--centered">
      <a href="" class="button">Button</a>
    </div>

    <h2>Button Grouping</h2>
    <hr>
    <div class="button-group">
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
    </div>

    <div class="button-group button-group--smooth">
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
    </div>

    <div class="button-group button-group--rounded">
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
    </div>

    <div class="button-group button-group--block button-group--stacked-on-small">
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
    </div>

    <div class="button-group button-group--stacked">
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
    </div>    

    <div class="button-group button-group--stacked-on-small">
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
      <a href="" class="button">Button</a>
    </div>

    <h2>Lists</h2>
    <hr>
    <ul>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item
        <ul>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
          <li>List Item</li>
        </ul> 
      </li>
      <li>List Item</li>
      <li>List Item</li>
    </ul>
    <ol>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
    </ol>
    
    <h3>Lists Object Styling</h3>
    <hr>
    <ul class="list--unstyled">
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
    </ul>
    <ol class="list--horizontal">
      <li><a href="">List Item</a></li>
      <li><a href="">List Item</a></li>
      <li><a href="">List Item</a></li>
      <li><a href="">List Item</a></li>
      <li><a href="">List Item</a></li>
    </ol>    

    <h3>Lists Components Styling</h3>
    <hr>
    <h4>List Divided</h4>
    <ul class="list--divided">
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
    </ul>
    <hr>
    <h4>List Celled</h4>
    <ul class="list--celled">
      <li class="list__title">List Item</li>
      <li><a href="">List Item</a></li>
      <li><a href="">List Item</a></li>
      <li><a href="">List Item</a></li>
      <li><a href="">List Item</a></li>
    </ul>    
    <hr>
    <h4>List Stripped</h4>
    <ul class="list--stripped">
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
      <li>List Item</li>
    </ul>
    <hr>
    <h4>List Horizontal Slashed</h4>
    <ul class="list--horizontal list--divided list--slashed">
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
    </ul>
    <hr>
    <h4>List Horizontal Piped</h4>
    <ul class="list--horizontal list--divided list--piped">
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
    </ul>
    <hr>
    <h4>List Horizontal Pointed</h4>
    <ul class="list--horizontal list--divided list--pointed">
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
      <li><a href="#">List Item</a></li>
    </ul>
    <h3>Forms</h3>
    <hr>
    <form action="">
      <label for="input-example">Input</label>
      <input type="text" id="input-example" placeholder="Example Input">
      <label for="input-number">Input Number</label>
      <input type="number" id="input-number">
      <label for="textarea-example">Textarea</label>
      <textarea name="textarea" id="textarea-example"></textarea>
      <fieldset>
        <legend>Checkbox Example</legend>
        <input type="checkbox" name="checkboxes" id="check-1">  
        <label for="check-1">Checkbox 1</label>
        <input type="checkbox" name="checkboxes" id="check-2">
        <label for="check-2">Checkbox 2</label>
        <input type="checkbox" name="checkboxes" id="check-3">
        <label for="check-3">Checkbox 3</label>
      </fieldset>
      <fieldset>
        <legend>Radio Example</legend>
        <input type="radio" name="radio-example" id="radio-1">
        <label for="radio-1">Radio 1</label>
        <input type="radio" name="radio-example" id="radio-2">
        <label for="radio-2">Radio 2</label>
        <input type="radio" name="radio-example" id="radio-3">
        <label for="radio-3">Radio 3</label>
      </fieldset>
      <fieldset class="form__checkbox">
        <legend>Checkbox Customised Example</legend>
        <input type="checkbox" name="custom-checkboxes" id="check-custom-inline-1"> 
        <label for="check-custom-inline-1">Checkbox 1</label>
        <input type="checkbox" name="custom-inline-checkboxes" id="check-custom-inline-2">
        <label for="check-custom-inline-2">Checkbox 2</label>
        <input type="checkbox" name="custom-inline-checkboxes" id="check-custom-inline-3">
        <label for="check-custom-inline-3">Checkbox 3</label>
      </fieldset>
      <fieldset class="form__checkbox form__checkbox--inline">
        <legend>Checkbox Customised Inline Example</legend>
        <input type="checkbox" name="custom-checkboxes" id="check-custom-1"> 
        <label for="check-custom-1">Checkbox 1</label>
        <input type="checkbox" name="custom-checkboxes" id="check-custom-2">
        <label for="check-custom-2">Checkbox 2</label>
        <input type="checkbox" name="custom-checkboxes" id="check-custom-3">
        <label for="check-custom-3">Checkbox 3</label>
      </fieldset>      
      <fieldset class="form__radio">
        <legend>Radio Customised Example</legend>
        <input type="radio" name="radio-custom-example" id="radio-custom-1">
        <label for="radio-custom-1">Radio 1</label>
        <input type="radio" name="radio-custom-example" id="radio-custom-2">
        <label for="radio-custom-2">Radio 2</label>
        <input type="radio" name="radio-custom-example" id="radio-custom-3">
        <label for="radio-custom-3">Radio 3</label>
      </fieldset>      
      <fieldset class="form__radio form__radio--inline">
        <legend>Radio Customised Inline Example</legend>
        <input type="radio" name="radio-custom-inline-example" id="radio-custom-inline-1">
        <label for="radio-custom-inline-1">Radio 1</label>
        <input type="radio" name="radio-custom-inline-example" id="radio-custom-inline-2">
        <label for="radio-custom-inline-2">Radio 2</label>
        <input type="radio" name="radio-custom-inline-example" id="radio-custom-inline-3">
        <label for="radio-custom-inline-3">Radio 3</label>
      </fieldset>
      <label for="select-example">Select</label>
      <select name="select" id="select-example">
        <option value="Test">Test</option>
        <option value="Test">Test</option>
        <option value="Test">Test</option>
        <option value="Test">Test</option>
      </select>
      <label for="file-upload">File Upload</label>
      <input type="file" id="file-upload" value="Upload File">
      <label for="">Submit button examples</label>
      <input type="submit" value="Submit">
      <button class="button button--neutral">Submit</button>
    </form>
    <h3>Form Layouts</h3>
    <hr>
    <form action="" class="form">
      <div class="form__validation-error">
        <h4>Test heading</h4>
        Hey, there is a problem with your form.
      </div>
      <div class="form__block--left-half">
        <label for="">Form Test</label>
        <input type="text">
      </div>
      <div class="form__block--right-half form__block--contains-required">
        <label for="">Form Test</label>
        <input type="text">
      </div>
      <div class="form__block--left-half form__block--contains-required form__block--has-error">
        <label for="">Username Form Test</label>
        <input type="text">
        <div class="form__validation-message">
          Hey you need to fill this in.
        </div>
      </div>
      <div class="form__block--clear">
        <label for="">Textarea</label>
        <textarea name=""></textarea>
      </div>
      <div class="form__block--one-third form__block--one-third-left">
        <label for="">Form Test</label>
        <input type="text">
      </div>
      <div class="form__block--one-third form__block--one-third-center">
        <label for="">Form Test</label>
        <input type="text">
      </div>
      <div class="form__block--one-third form__block--one-third-right">
        <label for="">Form Test</label>
        <input type="text">
      </div>
      <div class="form__block--two-thirds form__block--clear">
        <fieldset class="form__checkbox form__checkbox--inline">
          <legend>Checkbox Customised Inline Example</legend>
          <input type="checkbox" name="custom-checkboxes" id="check-custom-1"> 
          <label for="check-custom-1">Checkbox 1</label>
          <input type="checkbox" name="custom-checkboxes" id="check-custom-2">
          <label for="check-custom-2">Checkbox 2</label>
          <input type="checkbox" name="custom-checkboxes" id="check-custom-3">
          <label for="check-custom-3">Checkbox 3</label>
        </fieldset> 
      </div>
      <div class="form__block--left-half form__block--clear">
        <label for="">Form Test</label>
        <input type="text">
      </div>
    </form>
    <h3>Dropdown Menus</h3>
    <hr>
  </div>
  <div class="wrapper">
    <nav class="nav">
      <a class="nav-toggle" href="#">
        <span class="nav-toggle__label">Menu</span>
        <span class="nav-toggle__icon"></span>
      </a>
      <ul>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Menu Item</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li class="dropdown">
              <a href="">Sub Menu Item</a>
              <ul>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
              </ul>
            </li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
        <li><a href="">Menu Item</a></li>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Mega Menu</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
      </ul>
    </nav>
<!--     <nav class="nav nav--align-right nav--no-background">
      <a class="nav-toggle" href="#">
        <span class="nav-toggle__label">Menu</span>
        <span class="nav-toggle__icon"></span>
      </a>
      <ul>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Menu Item</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li class="dropdown">
              <a href="">Sub Menu Item</a>
              <ul>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
              </ul>
            </li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
        <li><a href="">Menu Item</a></li>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Mega Menu</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
      </ul>
    </nav>
    <nav class="nav nav--align-right">
      <a class="nav-toggle" href="#">
        <span class="nav-toggle__label">Menu</span>
        <span class="nav-toggle__icon"></span>
      </a>
      <ul>
        <span class="nav__text">This is a test</span>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Menu Item</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li class="dropdown">
              <a href="">Sub Menu Item</a>
              <ul>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
              </ul>
            </li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
        <li><a href="">Menu Item</a></li>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Mega Menu</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
      </ul>
    </nav>    
    <nav class="nav nav--links">
      <a class="nav-toggle" href="#">
        <span class="nav-toggle__label">Menu</span>
        <span class="nav-toggle__icon"></span>
      </a>
      <ul>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Menu Item</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li class="dropdown">
              <a href="">Sub Menu Item</a>
              <ul>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
                <li><a href="">Sub Menu Item</a></li>
              </ul>
            </li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
        <li><a href="">Menu Item</a></li>
        <li><a href="">Menu Item</a></li>
        <li class="dropdown">
          <a href="">Mega Menu</a>
          <ul>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
            <li><a href="">Sub Menu Item</a></li>
          </ul>
        </li>
      </ul>
    </nav> -->
    <h2>Patterns</h2>
    <hr>
    <h3>Two Column Pattern</h3>
    <div class="two-column">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Two Column Pattern - Tiled</h3>
    <div class="two-column tiled">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Two Column Pattern - Bunched</h3>
    <div class="two-column bunched">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Two Column Pattern - Tiled &amp; Bunched</h3>
    <div class="two-column bunched tiled">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Two Column Layout - Thirds</h3>
    <div class="two-column__layout--thirds">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>    
    <h3>Two Column Layout - Thirds - Bunched</h3>
    <div class="two-column__layout--thirds bunched">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>     
    <h3>Two Column Layout - Thirds - Reversed</h3>
    <div class="two-column__layout--thirds reversed">
      <div class="column">
        <span class="pattern-box">
          Left Column
        </span>
      </div>
      <div class="column">
        <span class="pattern-box">
          Right Column
        </span>
      </div>
    </div>  
    <h3>Two Column Layout - Quarters</h3>
    <div class="two-column__layout--quarters">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Two Column Layout - Quarters - Bunched</h3>
    <div class="two-column__layout--quarters bunched">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Two Column Layout - Quarters - Reversed</h3>
    <div class="two-column__layout--quarters reversed">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Two Column Layout - Fifths</h3>
    <div class="two-column__layout--fifths">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>    
    <h3>Two Column Layout - Fifths - Bunched</h3>
    <div class="two-column__layout--fifths bunched">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>    
    <h3>Two Column Layout - Fifths - Reversed</h3>
    <div class="two-column__layout--fifths reversed">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <hr>
    <h3>Three Column Pattern</h3>
    <div class="three-column">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Three Column Pattern - Tiled</h3>
    <div class="three-column tiled">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Three Column Pattern - Bunched</h3>
    <div class="three-column bunched">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Three Column Pattern - Tiled &amp; Bunched</h3>
    <div class="three-column bunched tiled">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div> 
    <hr>
    <h3>Four Column Pattern</h3>
    <div class="four-column">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Four Column Pattern - Tiled</h3>
    <div class="four-column tiled">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Four Column Pattern - Bunched</h3>
    <div class="four-column bunched">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>Four Column Pattern - Tiled &amp; Bunched</h3>
    <div class="four-column bunched tiled">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div> 
    <hr>
    <h3>One Column Pattern</h3>
    <div class="one-column">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>    
    <h3>One Column Pattern - Three Quarters</h3>
    <div class="one-column--three-quarters">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>One Column Pattern - Two Thirds</h3>
    <div class="one-column--two-thirds">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>One Column Pattern - Half</h3>
    <div class="one-column--half">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
    <h3>One Column Pattern - Third</h3>
    <div class="one-column--third">
      <div class="column">
        <span class="pattern-box"></span>
      </div>
    </div>
  </div>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="dist/scripts/min/scripts.min.js"></script>
</body>
</html>