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
	<p>To install the EMF Store, you need a running Eclipse. The easiest way to get started is to use <a href="http://www.eclipse.org/downloads/packages/eclipse-modeling-tools/junosr2">the latest modeling edition.</a></p>

	<h3>Milestone Builds</h3>
	<p>Milestone builds reflect the most current development and are not as stable as release builds. You can get the the latest milestone build from this update site or download as zip file:</p>
	<h6>1.0.0.RC5</h6>
	<ul>
		<li><a href="http://download.eclipse.org/emf-store/milestones/100RC5">http://download.eclipse.org/emf-store/milestones/100RC5</a></li>
		<li><a href="http://download.eclipse.org/emf-store/milestones/100RC5/site.p2.zip">http://download.eclipse.org/emf-store/milestones/100RC5/site.p2.zip</a></li>
	</ul>
	<h6>1.0.0.RC4</h6>
	<ul>
		<li><a href="http://download.eclipse.org/emf-store/milestones/100RC4">http://download.eclipse.org/emf-store/milestones/100RC4</a></li>
		<li><a href="http://download.eclipse.org/emf-store/milestones/100RC4/site.p2.zip">http://download.eclipse.org/emf-store/milestones/100RC4/site.p2.zip</a></li>
	</ul>
	<h6>1.0.0.RC3</h6>
	<ul>
		<li><a href="http://download.eclipse.org/emf-store/milestones/100RC3">http://download.eclipse.org/emf-store/milestones/100RC3</a></li>
		<li><a href="http://download.eclipse.org/emf-store/milestones/100RC3/site.p2.zip">http://download.eclipse.org/emf-store/milestones/100RC3/site.p2.zip</a></li>
	</ul>
</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>