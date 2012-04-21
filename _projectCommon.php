<?php

/*******************************************************************************
 * Copyright (c) 2009 Eclipse Foundation and others.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    
 *******************************************************************************/

	# Set the theme for your project's web pages.
	# See http://eclipse.org/phoenix/
	$theme = "Nova";
	

	# Define your project-wide Navigation here
	# This appears on the left of the page if you define a left nav
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	
	# If you want to override the eclipse.org navigation, uncomment below.
	$Nav->setLinkList(array());
	
	# Break the navigation into sections
	$Nav->addNavSeparator("EMFStore", 	"/default");
	$Nav->addCustomNav("Home", "/emfstore", "_self", 3);
	$Nav->addCustomNav("Download", "/emfstore/download.php", "_self", 3);
	$Nav->addCustomNav("Communication", "/emfstore/communication.php", "_blank", 3);
	$Nav->addCustomNav("Getting started", "/emfstore/gettingstarted.php", "_blank", 3);
	$Nav->addCustomNav("Documentation", "/emfstore/documentation.php", "_self");
	$Nav->addCustomNav("Getting involved", "/emfstore/gettinginvolved.php", "_blank", 3);
	$Nav->addCustomNav("Support", "/emfstore/support.php", "_blank", 3);
	$Nav->addCustomNav("About", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.emft.emf-store", "_blank", 3);

	# Define keywords, author and title here, or in each PHP page specifically
	$pageKeywords	= "EMFStore, EMF, modeling, Eclipse, Model, Repository, CDO";
	$pageAuthor		= "Jonas";
	# $pageTitle 		= "EMFStore";


	# top navigation bar
	# To override and replace the navigation with your own, uncomment the line below.
	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/emfstore", "_self");
	$Menu->addMenuItem("Download", "/emfstore/download.php", "_self");
	$Menu->addMenuItem("Communication", "/emfstore/communication.php", "_self");
	$Menu->addMenuItem("Getting started", "/emfstore/gettingstarted.php", "_self");
	$Menu->addMenuItem("Documentation", "/emfstore/documentation.php", "_self");
	# $Menu->addMenuItem("Getting involved", "/emfstore/gettinginvolved.php", "_self");
	$Menu->addMenuItem("Support", "/emfstore/support.php", "_self");
	$Menu->addMenuItem("About", "http://www.eclipse.org/projects/project_summary.php?projectid=modeling.emft.emf-store", "_self");
	# $Menu->addMenuItem("Documentation", "/emfstore/documentation.php", "_self");
	# $Menu->addMenuItem("Support", "/emfstore/support.php", "_self");
	# $Menu->addMenuItem("Developers", "/emfstore/developers", "_self");
	
	# To define additional CSS or other pre-body headers
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>');
	
	# To enable occasional Eclipse Foundation Promotion banners on your pages (EclipseCon, etc)
	$App->Promotion = TRUE;
	
	# If you have Google Analytics code, use it here
	$App->SetGoogleAnalyticsTrackingCode("UA-31076657-1");
?>