--TEST--
Games_Chess->_parseMove() invalid piece move #4
--SKIPIF--
--FILE--
<?php
require_once dirname(__FILE__) . '/setup.php.inc';
$ret = $board->_parseMove('Kaxh4');
$phpunit->assertErrors(array(
    array('package' => 'PEAR_Error', 'message' => '"Kaxh4" is not a valid algebraic move')
), 'invalid error message');
echo 'tests done';
?>
--EXPECT--
tests done