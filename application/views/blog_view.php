<script>
    $(window).load(function() {
        $(".acc-wizard").accwizard();
    });
</script>

<div class="container">
  <div class="row-fluid">
    <p class="lead well"> This page is both a demonstration of the accordion wizard and instructions for using it in your pages. Click the buttons and links to see the wizard in action, or view the source to see a complete implementation. Full details, including API documentation and full source code, are available on <a href="https://github.com/sathomas/acc-wizard">github</a>. </p>
  </div>
  <div class="row-fluid acc-wizard">
    <div class="span3" style="padding-left: 2em;">
      <p style="margin-bottom: 2em;"> Follow the steps below to add an accordion wizard to your web page. </p>
      <ol class="acc-wizard-sidebar">
        <li class="acc-wizard-todo"><a href="#prerequisites">Prerequisites</a></li>
        <li class="acc-wizard-todo"><a href="#addwizard">Add Wizard</a></li>
        <li class="acc-wizard-todo"><a href="#adjusthtml">Adjust HTML</a></li>
        <li class="acc-wizard-todo"><a href="#viewpage">Release</a></li>
      </ol>
    </div>
    <div class="span9">
      <div class="accordion" id="accordion-demo">
        <div class="accordion-group">
          <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-demo" href="#prerequisites"> Install Bootstrap and jQuery </a> </div>
          <div id="prerequisites" class="accordion-body collapse in">
            <div class="accordion-inner">
              <form id="form-prerequisites">
                <p> The accordion wizard depends on two other open source packages:
                <ul>
                  <li>The Bootstrap framework, available <a href="http://twitter.github.com/bootstrap/index.html">here</a>.
                  <li>The jQuery javascript library, available <a href="http://jquery.com">here</a>.
                </ul>
                Note that Bootstrap itself depends on jQuery for its interactive
                components, so if you're using Bootstrap you probably already have
                jQuery as well.
                </p>
                <p> You'll include the CSS styles for Bootstrap in the <code>&lt;head&gt;</code> of your HTML file, for example: </p>
                <pre><!--
                  -->&lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt;
<!--              -->&lt;link href="css/bootstrap-responsive.min.css" rel="stylesheet"&gt;<!--
                  --></pre>
                <p> and you'll include jQuery and Bootstrap javascript files at the
                  end of your <code>&lt;body&gt;</code> section, for example: </p>
                <pre><!--
                  -->&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"&gt;&lt;/script&gt;
<!--              -->&lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;<!--
                  --></pre>
              </form>
            </div>
            <!--/.accordion-inner --> 
          </div>
          <!-- /#prerequisites --> 
        </div>
        <!-- /.accordion-group -->
        
        <div class="accordion-group">
          <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-demo" href="#addwizard"> Add Accordion Wizard </a> </div>
          <div id="addwizard" class="accordion-body collapse in">
            <div class="accordion-inner">
              <form id="form-addwizard">
                <p> If you haven't already found it, the source code for the
                  accordion wizard is available on github <a href="https://github.com/sathomas/acc-wizard">here</a>.
                  There are two main folders, <code>/src</code> and <code>/release</code>. </p>
                <p> There are two different ways to add the accordion wizard to
                  your pages. The simplest approach is just to add the CSS and
                  javascript files from the <code>/release</code> folder
                  directly in your HTML without modifying them: </p>
                <pre><!--
                  -->&lt;link href="css/bootstrap.min.css" rel="stylesheet"&gt;
<!--              -->&lt;link href="css/bootstrap-responsive.min.css" rel="stylesheet"&gt;
<!--              -->&lt;link href="css/acc-wizard.min.css" rel="stylesheet"&gt;<!--
                  --></pre>
                <p> and </p>
                <pre><!--
                  -->&lt;script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.0/jquery.min.js" type="text/javascript"&gt;&lt;/script&gt;
<!--              -->&lt;script src="js/bootstrap.min.js"&gt;&lt;/script&gt;
<!--              -->&lt;script src="js/acc-wizard.min.js"&gt;&lt;/script&gt;<!--
                  --></pre>
                <p> The release styles for the accordion wizard are based on
                  Bootstrap's default styles. If you've tweaked the Bootstrap
                  styles (e.g. by changing the link color), you'll want to
                  make corresponding tweaks to <code>acc-wizard.min.css</code>. </p>
                <p> Alternatively, if you're building custom CSS and javascript,
                  then you might want to start with the files in the <code>/src</code> folder and adapt them to your source code. The <code>/src</code> folder contains a LESS file and uncompressed (and commented)
                  javascript. Note that the <code>acc-wizard.less</code> file
                  depends on variables defined in Bootstrap's <code>variables.less</code> file.
              </form>
            </div>
            <!--/.accordion-inner --> 
          </div>
          <!-- /#addwizard --> 
        </div>
        <!-- /.accordion-group -->
        
        <div class="accordion-group">
          <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-demo" href="#adjusthtml"> Adjust Your HTML Markup </a> </div>
          <div id="adjusthtml" class="accordion-body collapse in">
            <div class="accordion-inner">
              <form id="form-adjusthtml">
                <p> Now you can modify your HTML markup to activate the accordion
                  wizard. There are two parts to the markup&mdash;the collapsible
                  accordion itself and the task list. I prefer putting both in
                  the same <code>.row</code> with the task list taking up a <code>.span3</code> and the accordion panels in a <code>.span9</code>,
                  but that's not a requirement. </p>
                <p> The accordion panel can be exactly as documented in the <a href="http://twitter.github.com/bootstrap/javascript.html#collapse">Bootstrap example</a>,
                  but I think there's a problem with the Bootstrap implementation.
                  Specifically, the Bootstrap example only adds the class <code>.in</code> to one of the accordion panels. That class
                  marks the panel as visible by default. The problem with only
                  having one panel visible by default is that users without
                  javascript will <strong>never</strong> be able to see the other
                  panels. Sure, that's a minority of users, but why make your
                  pages unworkable even for a small minority. Instead, I suggest
                  adding <code>.in</code> to all your <code>.collapse</code> elements and have javascript code select only one to make
                  visible when it runs. The accordion wizard javascript will handle
                  that for you if you choose to use that approach. </p>
                <p> The sidebar task list is nothing but a standard HTML ordered
                  list. The only required additions are adding the <code>.acc-wizard-sidebar</code> class to the <code>&lt;ol&gt;</code> element and <code>.acc-wizard-todo</code> to the individual list
                  items. If you want to indicate that some steps are already
                  complete, you can instead add the <code>.acc-wizard-completed</code> class to the corresponding <code>&lt;li&gt;</code> elements. </p>
                <pre><!--
                  -->&lt;ol class="acc-wizard-sidebar"&gt;
<!--              -->  &lt;li class="acc-wizard-todo"&gt;&lt;a href="#prerequisites">Install Bootstrap and jQuery&lt;/a&gt;&lt;/li&gt;
<!--              -->  &lt;li class="acc-wizard-todo"&gt;&lt;a href="#addwizard">Add Accordion Wizard&lt;/a&gt;&lt;/li&gt;
<!--              -->  &lt;li class="acc-wizard-todo"&gt;&lt;a href="#adjusthtml">Adjust Your HTML Markup&lt;/a&gt;&lt;/li&gt;
<!--              -->  &lt;li class="acc-wizard-todo"&gt;&lt;a href="#viewpage">Test Your Page&lt;/a&gt;&lt;/li&gt;
<!--              -->&lt;/ol><!--
                  --></pre>
                <p> Finally, you'll want to active the wizard in your javascript.
                  That's nothing more than simply calling the plugin on an
                  appropriate selection. </p>
                <pre><!--
                  -->&lt;script&gt;
<!--              -->    $(window).load(function() {
<!--              -->        $(".acc-wizard").accwizard();
<!--              -->    });
<!--              -->&lt;/script&gt;<!--
                 --></pre>
                <p> The default options are probably fine for most uses, but
                  there are many customizations you can use when you activate
                  the wizard. Check out the documentation on <a href="https://github.com/sathomas/acc-wizard">github</a> for the details. </p>
              </form>
            </div>
            <!--/.accordion-inner --> 
          </div>
          <!-- /#adjusthtml --> 
        </div>
        <!-- /.accordion-group -->
        
        <div class="accordion-group">
          <div class="accordion-heading"> <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion-demo" href="#viewpage"> Test Your Page </a> </div>
          <div id="viewpage" class="accordion-body collapse in">
            <div class="accordion-inner">
              <form id="viewpage">
                <p> Naturally, the last thing you'll want to do is test your
                  page with the accordion wizard. Once you've confirmed that
                  it's working as expected, release it on the world. Your
                  users will definitely appreciate the feedback and guidance
                  it gives to multi-step and complex tasks on your web site. </p>
                  
                  <<textarea name="" cols="" rows="" id="elm1"></textarea>
              </form>
            </div>
            <!--/.accordion-inner --> 
          </div>
          <!-- /#viewpage --> 
        </div>
        <!-- /.accordion-group --> 
        
      </div>
    </div>
  </div>
</div>
