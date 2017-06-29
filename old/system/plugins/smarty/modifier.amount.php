<?php
/**
 * Copy Right Anhuike.com
 * Each engineer has a duty to keep the code elegant
 * Author shzhrui<anhuike@gmail.com>
 * $Id: modifier.amount.php 9378 2015-03-27 02:07:36Z youyi $
 */

function smarty_modifier_amount($amount, $precision=2, $prefix='￥')
{
	$precision = (int)$precision;
	return $prefix.round($amount, $precision);
}