<?php 

namespace Library\TailTarget;

class Settings {

	public $version;
	public $slug;
	public $owner;
	public $ownerSite;
	public $baseUrl;
	public $directory;
	public $path;
	public $i18nPath;
	public $siteSingUp;
	public $siteInfo;

	function __construct(){	
		$this->version 		= 1.4;
		$this->slug 		= 'tailtarget';
		$this->owner 		= 'Tail DMP & Big Data Analytics';
		$this->ownerSite 	= 'http://www.tailtarget.com';
		$this->baseUrl 		= 'd.tailtarget.com/base.js';
		$this->directory 	= plugins_url() . '/tailtarget';
		$this->path 		= WP_PLUGIN_DIR . '/tailtarget';
		$this->i18nPath 	= WP_PLUGIN_DIR . '/tailtarget/languages/';
		$this->siteSingUp 	= 'https://dashboard.tailtarget.com/dmp/#/signup';
		$this->siteInfo 	= 'https://www.tail.digital/';
	}

	function getSettings(){
		return $this;
	}
}