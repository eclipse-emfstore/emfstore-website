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
We are always trying to keep the documentation up-to-date. If you find anything outdated, wrong or missing, please do not hesitate to <a href=communication.php">contact us</a>.

<h3>Framework User Documentation</h3>
<li><a href="documentation/setup.php">How to set up and run the EMF Store</a></li>
<li><a href="documentation/config.php">How to configure the EMF Store</a></li>
<li><a href="documentation/helloWorldExample.php">How write a custom "Hello World" client for the EMFStore</a></li>
<li><a href="documentation/modelingGuidelines.php">Guidelines how to create your model to use it with EMFStore</a></li>
<li><a href="http://wiki.eclipse.org/How_to_create_a_release_of_EMFStore">How to create a release of EMFStore</a></li>
<li><a href="https://hudson.eclipse.org/hudson/job/emf-emfstore-integration/264/artifact/git/org.eclipse.emf.emfstore.core/org.eclipse.emf.emfstore.site/javadoc/index.html">EMFStore JavaDoc</a></li>


<h3>Framework Developer Documentation</h3>
We keep this information in our <a href="http://wiki.eclipse.org/EMFStoreDevelopers">developer wiki</a>.

 
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>