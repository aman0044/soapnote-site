<?php 
 include('../lib/main-header.php');
?>
<head><title>SOAPnote Tags - SOAPnote.org</title></head>
<ul class="breadcrumb">
    <li><a href="/">Home</a></li>
    <li class="active">SOAPnote Tags</li>
</ul>

<div id="container" class="container-fluid">
	<div class="row">
		<div class="col-sm-3">
			<ul>
				<li><a href="#getstarted">Getting started making Soapnotes</a></li>
				<li><a href="#basic">Basic Soapnote Tags</a>
			<ul>
				<li><a href="#boilerplate">Boilerplate</a></li>
				<li><a href="#textbox">Text Boxes</a></li>
				<li><a href="#textarea">Text Areas</a></li>
				<li><a href="#date">Dates</a></li>
				<li><a href="#radiobutton">Radio Buttons</a></li>
				<li><a href="#checkbox">Check Boxes</a></li>
				<li><a href="#select">Drop Down (Select) Boxes</a></li>
				<li><a href="#comment">Comments</a></li>
				<li><a href="#link">Links</a></li>
				<li><a href="#html">HTML</a></li>
				<li><a href="#mark">Marks</a></li>
			</ul>
			</li>
				<li><a href="#parameters">Parameters</a>
			<ul>
				<li><a href="#namepar">Name</a></li>
				<li><a href="#sizepar">Size</a></li>
				<li><a href="#colspar">Cols</a></li>
				<li><a href="#rowspar">Rows</a></li>
				<li><a href="#defaultpar">Default</a></li>
				<li><a href="#ulrpar">URL</a></li>
				<li><a href="#markpar">Mark</a></li>
			</ul>
			</li>
				<li><a href="#advanced">Advanced Features</a>
			<ul>
				<li><a href="#variable">Using Variables</a></li>
				<li><a href="#condition">Adding Conditions</a>
			<ul>
				<li><a href="#operators">Using Operators</a></li>
			</ul>
			</li>
				<li><a href="#calculation">Making Calculations</a>
			<ul>
				<li><a href="#computation">Making Simple Computations</a></li>
				<li><a href="#interpretation">Interpreting Computations</a></li>
			</ul>
			</li>
			</ul>
			</li>
			</ul>			
		</div>
		<div class="col-sm-9">
			<h2><a name="getstarted"></a>Getting started making Soapnotes</h2>
		To save you time, there are a few suggestions that I have before you dive in.
		<ul>
			<li>Have a plan - making a Soapnote is like a reverse engineering process.  Start with good clinical documentation and work backwards.</li>
			<li>Start small - try a few small templates before you try to put together the grand unifying medical calculator.</li>
			<li>Save your work early and often.</li>
			<li>There probably is a sweet spot for the proportions of user input versus <a href="http://en.wikipedia.org/wiki/Boilerplate_(text)">boilerplate</a>.  One biased opinion is that there should be a lot more than 50% boilerplate and a lot less than 50% user input.</li>
			<li>You can post a simple boilerplate Soapnote in a matter of moments. You can always come back to it later and pepper it with Soapnote Tags to make it more interactive.</li>
		</ul>
		<h2><a name="basic"></a>Basic Soapnote Tags</h2>
		Soapnote Tags are the snippets in the brackets that turn boilerplate into an interactive form. The samples below might be a good launching-off point for developing your own templates, interactive forms, and calculators.  
		Aside from the ones below, there's a lot of other calculators and forms you can take a look at and shamelessly steal from, too.
		<h3><a name="boilerplate"></a>Boilerplate</h3>
		This is simply text entered into a form. Nothing interactive or customized here.
		Here is a sample of <a href="/sample/boilerplate/">boilerplate</a>.
		<h3><a name="textbox"></a>Text Box</h3>
		This displays a small text box for entry of a few words.
		Code for this is: [text]
		Optional parameters are <em>name, memo, default, and size</em>
		Example 1:
		[text name="text1" default="sample text"]
		Example 2:
		[text default="sample text 2" size=100]
		Example 3:
		[text memo="sample text 3" size=50]
		<h3><a name="textarea"></a>Text Areas</h3>
		This displays a larger text box for entry of a few words.
		Code for this is: [textarea]
		Optional parameters are <em>name, memo, cols, rows, and default</em>
		Example 1:
		[textarea name="textarea1" memo="sample text area" default="enter text here"]
		<h3><a name="date"></a>Dates</h3>
		This displays a box for entering dates. A calendar pops up when you click on it (you can also type in the date).
		Code for this is: [date]
		Optional parameters are <em>name, memo, and default</em>
		Example 1:
		[date name="date1"]
		<h3><a name="radiobutton"></a>Radio Buttons</h3>
		This displays buttons where only one item can be selected.
		Code for this is: [radio value="choice I|choice II|choice III"]
		Required parameter is <em>value</em>.
		Optional parameter is <em>name</em>.
		Example 1:
		Employment type: [radio value="Full Time|Part Time|Unemployed"]
		<h3><a name="checkbox"></a>Check Boxes</h3>
		This displays boxes where more than one item can be selected.
		Code for this is: [checkbox]
		Required parameter is <em>value</em>.
		Optional parameter is <em>name</em>.
		Example 1:
		[checkbox value="option A|option B|option C"]
		Example 2:
		[checkbox name="cb1" value="upper extremity|lower extremity|neck|back|knee"]
		<h3><a name="select"></a>Drop Down (Select) Box</h3>
		This displays a drop down box where only one item can be selected.
		Code for this is: [select]
		Required parameter is <em>value</em>.
		Optional parameter is <em>name and memo</em>.
		Example 1:
		[select value="choice A|choice B|choice C"]
		Also, numeric values (for calculations) can be set by using the 'equals sign' in the name parameter. Example 2:
		[select name="letters" value="choice A=1|choice B=2|choice C=3"]
		<h3><a name="comment"></a>Comments</h3>
		Comments do not show up in output but do display in the form.
		Code for this is: [comment]
		Required parameter is <em>memo</em>.
		Example 1:
		[comment memo="Text that will not show up in output"]
		<h3><a name="link"></a>Links</h3>
		Links can take you to other web pages or to locations within the current form.
		Code for this is: [link]
		Optional parameters are <em>url, mark, and memo</em>
		Example 1:
		[link url=”http://www.soapnote.org” memo=”Soapnote Home”]
		<h3><a name="html"></a>HTML</h3>
		If you have some formatted HTML that you'd like in the form, you can sandwich it between a [html] and a [/html].
		HTML is used to display links or other formatting. It does not display in the output.
		Any html may be placed between [html] and [/html]
		This is a little more powerful than the [link] and [comment] tags, but also a little more complicated.
		Code for this is: [html] and [/html]
		Example 1:
		This text goes into the output
		[text default="this does, too"][html]
		<em>This italic text does not go into output.</em>
		<strong>This bold text does not go into the output.</strong>
		<em><strong><mark>This italic, bold, highlighted text also does not go into the output.</mark></strong></em>
		<small>This small text does not go to output.</small>
		<del>Finally, this deleted text does go to output either.</del>[/html]
		<h3><a name="mark"></a>Marks</h3>
		A mark allows you to jump from one place in a form to another. A link is needed to send the user to a mark.
		Code for this is: [mark]
		The required parameter is <em>name</em>.
		Example 1:
		Example 1:
		[link memo="go to the mark" mark="mid-blah"]
		blah
		blah
		blah
		blah
		blah blah blah
		blah
		blah
		blah
		blah
		blah
		blah
		blah
		[mark name="mid-blah"]
		blah
		blah
		blah
		blah
		blah
		blah
		blah

		<h2><a name="parameters"></a>Parameters</h2>
		<h3><a name="namepar"></a>Name</h3>
		By assigning a name to a form element, you can retrieve it for later use in a form or for calculations.
		Form elements that utilize the name parameter are <a href="#textbox">Text Boxes</a>, <a href="#textarea">Text Areas</a>, <a href="#date">Dates</a>, <a href="#radiobutton">Radio Buttons</a>, <a href="#checkbox">Check Boxes</a>, <a href="#select">Drop Down (Select) Boxes</a>, and <a href="#mark">Marks</a>.
		<a href="#variable">More on variables</a> for information on retrieval of form input.
		<a href="#calculation">More on calculations</a> for information on using variables in calculators.
		<h3><a name="memopar"></a>Memo</h3>
		Using the memo attribute allows you to have text in the form that won't be displayed in output.
		Form elements that utilize the memo parameter are <a href="#textbox">Text Boxes</a>, <a href="#textarea">Text Areas</a>, <a href="#date">Dates</a>, <a href="#radiobutton">Radio Buttons</a>, <a href="#checkbox">Check Boxes</a>, <a href="#select">Drop Down (Select) Boxes</a>, <a href="#comment">Comments</a>, and <a href="#link">Links</a>
		<h3><a name="sizepar"></a>Size</h3>
		This parameter is used by <a href="#textbox">Text Boxes</a> to increase or decrease the size of the box.
		<h3><a name="colspar"></a>Cols</h3>
		This parameter is used by <a href="#textarea">Text Areas</a> to set the width of the box.
		<h3><a name="rowspar"></a>Rows</h3>
		This parameter is used by <a href="#textarea">Text Areas</a> to set the height of the box.
		<h3><a name="defaultpar"></a>Default</h3>
		Setting a default value in a form element can save the user time and can guide input.
		Form elements that utilize the default parameter are <a href="#textbox">Text Boxes</a>, <a href="#textarea">Text Areas</a>, <a href="#date">Dates</a>, and <a href="#select">Drop Down (Select) Boxes</a>.
		The default parameter can be used to customize forms for logged in users with a feature called Prepopulated Text. More on this <a href="#prepopulated">is here</a>
		<h3><a name="urlpar"></a>URL</h3>
		The URL parameter gives the <a href="#link">Link</a> form element a web location to jump to.
		<h3><a name="markpar"></a>Mark</h3>
		The Mark parameter gives the <a href="#link">Link</a> form element a location in the form to jump to.
		<h2><a name="advanced"></a>Advanced Features</h2>
		<h3><a name="variable"></a>Using Variables</h3>
		Variables can display named variables from other parts entered above in a form. It displays in the output, not in the form.
		Code for this is [var]
		Required parameter is name.
		Example 1:
		[var name=”xxx”]
		<h3><a name="condition"></a>Adding Conditions</h3>
		You can set conditions for display of form elements.
		Code for this is [conditional] and [/conditional]
		Example 1:
		[conditional field="xxx" condition="<em>condition to test</em>"] <em>any text to display if condition is true</em> [/conditional]
		<h4><a name="operators"></a>Using Operators</h4>
		These are operators within an <strong>individual comparison</strong>
		isLess
		isGreater
		isLessOrEqual
		isGreaterOrEqual
		is
		isNot

		These are operators for <strong>combining multiple comparisons</strong>
		&amp;&amp; is the "AND" operator
		|| is the "OR" operator

		See example for required syntax.
		Example 1:
		Employment type: [radio value="Full Time|Part Time|Unemployed"]
		[conditional field="job" condition="(job).is('Full Time')||(job).is('Part Time')"]Job title: [text name="job_title"][/conditional]

		Another good example is <a href="../sample/conditional-comparison/">at this page</a>.

		Please note that with these comparison operators, blank/empty fields would be considered as 0, so
		(field1).isLess(5) will always be true if "field1" is blank. (Because 0 is less than 5)
		<h3><a name="calculation"></a>Making Calculations</h3>
		You can perform calculations that manipulate variables.
		Parameters include <em>value</em>, <em>memo</em>, and <em>show</em>.
		This is a powerful feature of the site and can be used in two ways.
		<h4><a name="computation"></a>Raw Computations</h4>
		A sample with some simple computations is <a href="../sample/simple-computations/" target="_blank">here</a>.
		In the sample above, raw computations such as addition, subtraction, multiplication, and division is performed on numbers gathered with [text] input fields.
		Example 1:
		This calculator performs simple computations
		[text name="A"] <-- A (enter a number)
		[text name="B"] <-- B (enter a number)

		A + B --> [calc value="score1=(A)+(B)" memo="addition"]
		A - B --> [calc value="score2=(A)-(B)" memo="subtraction"]
		A x B --> [calc value="score3=(A)*(B)" memo="multiplication"]
		A / B --> [calc value="score4=(A)/(B)" memo="division"]
		A raised to the power of B --> [calc value="score5=Math.pow((A),(B))" memo="exponent"]

		The [calc] field from the sample is shown above. You can see it has a certain format to it.
		<em>value</em> contains the entire computation in double quotes.
		<em>score1</em> is a required name for the computation. In the sample, you see that <em>value</em> is set equal to <em>score1</em>, <em>score2</em>, <em>score3</em>, <em>score4</em>, and <em>score5</em>. A new name is needed for each computation, but it can be more descriptive than <em>score1</em>.
		<em>(A)</em> refers to the name of the first [text] input field.
		<em>(B)</em> refers to the name of the second [text] input field.
		In between <em>(A)</em> and <em>(B)</em> is the operator (+, -, *, and /).
		The result shows up in the result box after Submit is pressed.
		Here are more sample <a href="../sample/calculation/" target="_blank">calculators</a>.
		<h4><a name="interpretation"></a>Interpreted calculations</h4>
		A sample with an interpreted computation is <a href="../sample/interpreted-computation/" target="_blank">here</a>.
		This feature is valuable because it allows you to group ranges of results.
		<em>A + B –&gt; [calc value="score2=(A)+(B);score2&gt;1000?'Sum is greater than 1000':score2&gt;100?'Sum is greater than 100 and less than or equal to 1000':score2&gt;10?'Sum is greater than 10 and less than or equal to 100':score2&gt;0?'Sum is greater than 0 and less than or equal to 10':'sum is 0 or less'" memo="interpretation"]</em>
		As you can see above, it has most of the same elements as a simple calculation. The interpretation information follows the calculation after a semicolon.
		Since an interpretation is a separate calculation it must have a distinct name (<em>score2</em>).
		The computation follows (<em>(A)+(B)</em>).
		Semicolon separates the computation from the interpretation (<em>;</em>).
		Ranges are then interpreted from highest to lowest, each is separated by a colon (<em>:</em>).
		The highest value is <em>score2&gt;1000?</em>. The output follows this in single quotes. Then a colon.
		The next value is <em>score2&gt;100?</em>. The output follows this in single quotes. Then a colon.
		The next value is <em>score2&gt;10?</em>. The output follows this in single quotes. Then a colon.
		The lowest value is not specifically labeled like the others. The output alone is listed for everything lower than the range above it.
		This is definitely best understood by looking at the example <a href="../sample/interpreted-computation/" target="_blank">again it's right here</a>.
		</br>
		</br>
		Please go to the <a href="../help/">help page</a> if you have any questions!
		</br>
		</br>
		<em>Last Updated May 15, 2016</em>
		</div>
	</div>
</div>
<?php 
 include('../lib/main-footer.php');
?>