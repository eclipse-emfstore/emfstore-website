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

	$pageTitle 		= "EMF Store - Download";

	$html  = <<<EOHTML
<div id="midcolumn">
<h2>$pageTitle</h2>
<p>All downloads are provided under the terms and conditions of the <a href="/legal/epl/notice.php">Eclipse Foundation Software User Agreement</a> unless otherwise specified.</p>
<p>To install the EMF Store, you need a running Eclipse. The easiest way to get started is to use <a href="http://eclipse.org/downloads/packages/eclipse-modeling-tools/indigor">the latest modeling edition.</a></p>

<h3>Milestone Builds</h3>
<p>EMF Store has moved to Eclipse. Currently we are preparing our first official Eclipse release. Although, EMF Store has been developed 3 years before it moved to Eclipse. You can get the the latest milestone build from this update site 
<ul>
<li><a href="http://download.eclipse.org/emf-store/089M905">0.8.9M905 (http://download.eclipse.org/emf-store/089M905)</a>.</li>
</ul>
To learn how to setup and run EMF Store read the tutorial <a href="http://www.eclipse.org/emfstore/documentation/setup.php">here</a>.

If you have any questions, please do not hesitate <a href="communication.php"> contact us.</a></p>




</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>