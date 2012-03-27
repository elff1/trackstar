<?php
class IssueTest extends CTestCase {
	public function testGetTypes() {
		$options = Issue::model()->typeOptions;
		$this->assertTrue(is_array($options));
	}
}