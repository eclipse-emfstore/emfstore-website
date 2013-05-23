<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
/*******************************************************************************
 * Copyright (c) 2009 
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	$pageTitle 		= "EMF Store - Documentation";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>Documentation</h2>
<p>
We are always trying to keep the documentation up-to-date. If you find anything outdated, wrong or missing, please do not hesitate to <a href=communication.php">contact us</a>.
</p>
<p>
<h3>Framework User Documentation</h3>
<li><a href="http://eclipsesource.com/blogs/tutorials/getting-started-with-emfstore/" target="_blank">Getting started with EMFStore</a></li>
<li><a href="documentation/config.php">How to configure the EMF Store</a></li>
<li><a href="documentation/howToUseExamples.php">How to use the EMFStore code examples</a></li>
<li><a href="documentation/helloWorldExample.php">How write a custom "Hello World" client for the EMFStore</a></li>
<li><a href="documentation/mergingExample.php">How write a custom Merging Strategy for the EMFStore</a></li>
<li><a href="documentation/buildProduct.php">How build your own server product with EMFStore</a></li>
</p>
<h3>Framework Developer Documentation</h3>
We keep this information in our <a href="http://wiki.eclipse.org/EMFStoreDevelopers">developer wiki</a>.

 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>