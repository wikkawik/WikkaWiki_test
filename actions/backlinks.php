<?php
/**
 * Display the pages linking to the current page.
 * 
 * If there is at least one other page in the wiki, which links to 
 * the current page, the name(s) are shown as a simple list, 
 * ordered alphabetically.
 * 
 * @package		Actions
 * @name		Backlinks
 * @version		$Id$
 * 
 * @output	a list of the pages linking to the page
 * @uses	wakka::Link()
 * @uses	wakka::LoadPagesLinkingTo()
 */

if ($pages = $this->LoadPagesLinkingTo($this->getPageTag())) {
	foreach ($pages as $page) {
		$links[] = $this->Link($page["tag"]);
	}
	print(implode("<br />\n", $links));
}

?>