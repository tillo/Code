<?php
namespace Un1c0rn\Web\Frontend;
class Stats extends WebModule {
	function get() {
		$this->cache304('stats',120);
		$this->setData('view','views/stats.tpl');
		$_hostDb = new \Un1c0rn\ElasticDb('pwn','hosts');
		$this->setData('page_title','Global leak statistics');
		$this->setData('statsByTags',$_hostDb->getFacets('tags'));
		$this->setData('statsByPorts',$_hostDb->getFacets('ports'));
		$this->render();
	}
}
