<?php
echo "ok";
echo phpinfo();
public function getAllUpdateList($versionCode,$plateform) {
	$select->where(new \Zend\Db\Sql\Predicate\Expression("t1.version_code>$versionCode"));
	$this->_versioncode = $tokenResponse['versioncode'];
?>