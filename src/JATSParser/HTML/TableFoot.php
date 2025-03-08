<?php namespace JATSParser\HTML;

use JATSParser\Body\Table as JATSTable;

class TableFoot extends \DOMElement { // Class added by UNLa

	public function __construct() {

		parent::__construct("table-foot");

	}

	public function setContent(JATSTable $jatsTable) {

		/* Set table notes 
        * @var $jatsTable JATSPar
        */
		if (count($jatsTable->getFoot()) > 0) {
			foreach ($jatsTable->getFoot() as $footContent) {
				$par = new Par("p");
				$this->appendChild($par);
				$par->setAttribute("class", "notes");
				$par->setContent($footContent);
			}
		}
		
	}
}