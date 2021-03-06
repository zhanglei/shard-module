<?php ob_start()?>

<div class="jumbotron masthead">
  <div class="container">
    <h1>Shard Module</h1>
    <p>Shard integration for Zend Framework 2. Everything awesome from <a href="http://zoopcommerce.github.io/shard">shard</a> plus a json rest controller for your documents.</p>
    <p>
      <a href="./getting-started.html#download-shard-module" class="btn btn-primary btn-large">Install Shard Module</a>
    </p>
    <ul class="masthead-links">
      <li>
        <a href="http://github.com/zoopcommerce/shard-module">GitHub project</a>
      </li>
      <li>
        <a href="./getting-started.html#examples">Examples</a>
      </li>
      <li>
        Version 1.0
      </li>
    </ul>
  </div>
</div>

<div class="bs-docs-social">
  <div class="container">
    <ul class="bs-docs-social-buttons">
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=zoopcommerce&repo=shard-module&type=watch&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="100px" height="20px"></iframe>
      </li>
      <li>
        <iframe class="github-btn" src="http://ghbtns.com/github-btn.html?user=zoopcommerce&repo=shard-module&type=fork&count=true" allowtransparency="true" frameborder="0" scrolling="0" width="102px" height="20px"></iframe>
      </li>
    </ul>
  </div>
</div>
<br />
<div class="container">

  <div class="marketing">

    <div class="row-fluid">
      <div class="span12 hero-unit">
        <h3>Want to get a json list of documents?</h3>
        <div class="lead">http://myserver.com/rest/mydocuments</div>

        <h3>Want to give a document Soft Delete?</h3>
        <div class="lead">@Shard\SoftDelete</div>

        <h3>Want to add validators to a field?</h3>
        <div class="lead">@Shard\Validator\Email</div>

        <h3>Want to add Access Control to a document?</h3>
        <div class="lead"> @Shard\Permission\Basic(roles="admin", allow="*")</div>

        <h3>And lots more ...</h3>

        <h1>Shard Module</h1>
        <p class="marketing-byline">Smarter documents for zf2.</p>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span4">
        <h2>Built by <a href="http://zoopcommerce.com">Zoop</a></h2>
        <p>Built at Zoop by <a href="http://github.com/superdweebie">@superdweebie</a> and <a href="http://github.com/crimsonronin">@crimsonronin</a> on the shoulders of giants. The docs borrow heavily from <a href="http://twitter.github.io/bootstrap/">bootstrap</a>, with widgets from <a href="http://zoopcommerce.github.io/havok">havok</a>. Extension for <a href="http://github.com/doctrine/mongo-odm">Doctrine Mongo ODM</a>. Validators from <a href="http://zoopcommerce.github.io/mystique">Mystique</a>. Built for Php 5.4 and <a href="http://github.com/zendframework/zf2">zf2</a> with <a href="http://getcomposer.org">composer</a> dependency management. Source managed through <a href="http://github.com">GitHub</a>.</p>
      </div>
      <div class="span4">
        <h2>Packed with features</h2>
        <p>Over a dozen behaviourial extensions for documents, and a framework for building your own.</p>
      </div>
      <div class="span4">
        <h2>Great docs</h2>
        <p>We know that weather you are a newbie solo dev, or a busy professional business, great docs are what you want and need. Docs make good code great.</p>
      </div>
    </div>

    <div class="row-fluid">
      <div class="span12 hero-unit masthead">
          <a href="./getting-started.html" class="btn btn-primary btn-large">Lets get started ...</a>
      </div>
    </div>
</div>
</div>

<?php
$content = ob_get_clean();
include 'layout.php';
?>
