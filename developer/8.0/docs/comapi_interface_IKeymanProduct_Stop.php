<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::Stop"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">IKeymanProduct::Stop</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_Start.php">Prev</a> </td><th width="60%" align="center">IKeymanProduct Interface</th><td width="20%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_Uninstall.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h5 class="title" id="comapi_interface_IKeymanProduct_Stop"><a class="link" href="comapi_interface_IKeymanProduct.php" title="IKeymanProduct Interface">IKeymanProduct</a>::Stop</h5></div></div></div><p>
            Shuts down the product if it is currently running.  Most commonly this will be called from the controller user interface rather
            than from an external product, but there may be situations in which it makes sense to call this function.
          </p><h6><a name="id620613"></a>Declaration</h6><pre class="programlisting">Sub Stop</pre><h6><a name="id620619"></a>Parameters</h6><table id="id620622"><tr><th>No</th><th>Name</th><th>Type</th><th>Description</th></tr></table><h6><a name="id620634"></a>Example Code</h6><pre class="programlisting">
  ' Stop keyboard mapping
  dim Keyman, KeymanProduct
  set Keyman = CreateObject("kmcomapi.TavultesoftKeyman")
  set KeymanProduct = Keyman.Products.ItemsByProductID(KeymanProductID)
  KeymanProduct.Stop()
</pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="comapi_interface_IKeymanProduct_Start.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="comapi_interface_IKeymanProduct.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="comapi_interface_IKeymanProduct_Uninstall.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">IKeymanProduct::Start </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IKeymanProduct::Uninstall</td></tr></table></div>
