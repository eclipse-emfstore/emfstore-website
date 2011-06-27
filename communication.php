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

	$pageTitle 		= "EMFStore - Download";

	$html  = <<<EOHTML
<div id="midcolumn">
#summary How to get in contact with us or receive news about EMFStore

=== Mailinglists and Newsgroup ===

Since EMFStore is a Eclipse project, we have an [http://www.eclipse.org/forums/eclipse.emfstore EMFStore Eclipse newsgroup].

If you have feature requests, questions, bugs or if you want to discuss something, you can send us email to this mailinglist, where all EMFStore framework developers are subscribed to:

[mailto:eemfstore-dev@eclipse.org emfstore-dev@eclipse.org]

We also have a mailinglist to announce news about the EMFStore such as new releases. You can subscribe here:

[http://groups.google.com/group/emfstore http://groups.google.com/group/emfstore]

=== Bug Reports and Feature Requests ===

You can report bugs and feature requests in the [https://bugs.eclipse.org/bugs/enter_bug.cgi?product=EMFT.emf-store bugzilla of Eclipse].

Also you can report bugs and feature requests to the [mailto:emfstore-dev@eclipse.org developer mailinglist].

=== Twitter ===

We announce import news such as releases on Twitter:
http://twitter.com/emfstore
We always use the #emstore tag.

=== Blog ===

We write a blog were we announce news about the UNICASE project including the EMFStore and our experiences on technologies we use in EMFStore:
http://unicase.blogspot.com

=== Plain Email ===

Of course you can also send direct email to one of the project leads:

[http://www1.in.tum.de/MaximilianKoegel http://unicase.googlecode.com/files/img_3999_small.jpg]

[mailto:maximilian@emfstore.org Maximilian]

<img src="http://unicase.googlecode.com/files/jonas.jpg" height =210 />

</p>





</div>
EOHTML;
	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>