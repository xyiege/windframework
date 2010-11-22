<?php
/**
 * @author xiaoxia xu <x_824@sina.com> 2010-11-19
 * @link http://www.phpwind.com
 * @copyright Copyright &copy; 2003-2110 phpwind.com
 * @license 
 */
interface WindConfigImpl {
	const APP = 'app';
	const APPNAME = 'appName';
	const APPROOTPATH = 'appPath';
	const APPCONFIG = 'appConfig';
	
	const ISOPEN = 'isOpen';
	const DESCRIBE = 'describe';
	
	const FILTERS = 'filters';
	const FILTER = 'filter';
	const FILTERNAME = 'filterName';
	const FILTERPATH = 'filterPath';
	
	const TEMPLATE = 'template';
	const TEMPLATEDIR = 'templateDir';
	const COMPILERDIR = 'compileDir';
	const CACHEDIR = 'cacheDir';
	const TEMPLATEEXT = 'templateExt';
	const ENGINE = 'engine';
	
	const URLRULE = 'urlRule';
	const ROUTERPASE = 'routerPase';
	
	/**
	 * 用于设置需要合并的项,
	 * 默认都是以覆盖的方式，
	 */
	const MERMEARRAY = array(WindConfigImpl::FILTERS,);
}