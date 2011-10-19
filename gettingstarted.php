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

	$pageTitle 		= "EMFStore - Getting started";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>How to get started with the EMFStore</h2>

<h3>Step 1: Install the EMFStore Framework</h3>
<p>
The following video describes how to install the EMFStore framework. As a prerequisite you need an <a href="http://www.eclipse.org/downloads/packages/eclipse-modeling-tools/indigor"> Eclipse Modeling Edition</a>.
The EMFStore framework can be installed from <a href="download.php">here</a>.
</br>
</p>
<div id="screencast">

<p>
<object height="344" width="425"><param name="movie" value="http://www.youtube.com/v/i5o0eW0nZSc?hl=de&fs=1">
</param>
<param name="allowFullScreen" value="true">
</param>
<param name="allowscriptaccess" value="always">
</param>
<embed src="http://www.youtube.com/v/mEvOsH2DSGE?hl=de&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>
</div>
</p>

<h3>Step 2: Run the EMFStore Framework</h3>

<p>The following video describes how to run the EMFStore framework. As a prerequisite you need a EMF model. This can be your own model. If you do not have a model, please use this example model.
<a href="exampleModel.zip">here</a>. If you need help to create your own EMF model, please have a look at <a href="http://eclipsesource.com/blogs/2011/03/22/what-every-eclipse-developer-should-know-about-emf-part-1/"> this tutorial</a>.
</p>
<p>
<div id="screencast">


<object height="344" width="425"><param name="movie" value="http://www.youtube.com/v/i5o0eW0nZSc?hl=de&fs=1">
</param>
<param name="allowFullScreen" value="true">
</param>
<param name="allowscriptaccess" value="always">
</param>
<embed src="http://www.youtube.com/v/3oFk2E4PECI?hl=de&fs=1" type="application/x-shockwave-flash" allowscriptaccess="always" allowfullscreen="true" width="425" height="344"></embed></object>
</div>
</p>
<h3>More Documentation</h3>
<p>Please note that we are currently moving the documentation to the Eclipse website. Currently, you can find it <a href="http://code.google.com/p/unicase/wiki/EMFStoreDocumentation">here</a>. 
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>