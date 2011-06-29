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

	$pageTitle 		= "EMFStore - Support";

	$html  = <<<EOHTML
<ul>
<li><b><a href="gettingstarted.php"
		title="Getting Started">Getting Started</a></b> - first steps with EMFStore</li>
	<li><b><a href="documentation.php"
		title="Documentation">Documentation</a></b> - read about
	the details</li>
	<li><b><a
		href="http://www.eclipse.org/forums/index.php/f/19/"
		title="http://www.eclipse.org/forums/index.php/f/19/"
		rel="nofollow">EMFT Newsgroup</a></b> - get an answer to your questions</li>
	<li><b><a
		href="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT.emf-store"
		title="https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT.emf-store"
		rel="nofollow">File a bug</a></b> - file bugs and feature requests</li>
</ul>

<h3>Professional Support</h3>
<p>Open-source software is free of license costs. Furthermore, it is easy to adapt and enhance by new features. Although, like in closed-source software, not everybody not everybody is an expert for any framework. It might take significantly longer for somebody new to the project to extend a certain feature than for the person who introduced it at the first place. Furthermore, software has to be maintained. Even if this can be done literally by everybody for open-source software, there has to be somebody who does it.
EclipseSource employs several EMFStore committers and <a href="http://eclipsesource.com/en/eclipse/eclipse-emf/">offers professional support</a>.</p>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>