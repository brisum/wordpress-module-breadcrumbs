<?php

namespace Brisum\Wordpress\Breadcrumbs;

interface BreadcrumbsInterface {
	function registerPostType($postType, CrumbsInterface $crumbs);
}
